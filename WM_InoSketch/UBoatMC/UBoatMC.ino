/*

 Arduino Sketch UBoatM.C.
 
 U-Boat Module Control: Arduino Remote Control with RaspberryPi Web Interface
 
 14/12/2014
 Version 0.660
 
 ------------------------------------------------------------------------------
Copyright (C) 2014 Martinelli Michele 
 
 Type212M1 is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program.  If not, see <http://www.gnu.org/licenses/>.
 ------------------------------------------------------------------------------
 
 Hardware:
 ARDUINO Mega 2560 (Hardware Control)
 RaspberryPi (Web Server Operator Command)
 Shield Ethernet
 Shield Monster Moto (Main Engine + Ballast Tank)
 Current Sensor ACS714 (Engine Battery)
 GPS Module EM406A
 Compass Module CMPS10
 Servo Controller (Rudders Direction/Immersion)
 Pressure Sensor SSCDRNN015PAAA5 Honeywell 
 Temperature Sensor DS18B20 Maxim (External,Water)
 Temperature Sensor LM35 (Motors)
 Temperature and Humidity Sensor DHT22 (Internal)
 Sonar Sensor MB7078 XL-MaxSonar-WRCA (Vcc/1024 Cm)
 
 Software:
 Library SPI
 Library Ethernet
 Library Servo
 Library Wire
 Library TinyGPS
 Library OneWire
 Library DHT22
 Library CMPS10
 
 - Reading DS18B20 Sensors
 - Reading DHT22 Sensors
 - Compass Module CMPS10
 - GPS Module EM406A
 - Data Calculations
 - Web Communication
 - Main Engine Command
 - Rudders Command
 - Ballast Tank Command
 - Auxiliary Command
 - Serial Print Debug
 
 */


#include <SPI.h>
#include <Ethernet.h>      	// Web Server
#include <Servo.h>        	// Servo Rudders
#include <Wire.h>          	// Compass Module CMPS10 (I2C)
#include <CMPS10.h>        // Compass Module CMPS10 (I2C)
#include <TinyGPS.h>       	// GPS Module EM406A (Serial1)
#include <OneWire.h>       	// Temperature Sensor DS18B20 (One Wire)
#include <DHT22.h>        	// Temperature and Humidity Sensor DHT22

// Web Server
byte mac[] = {
  0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };    	// MAC Address
EthernetServer server(80);                 	// Server Port

// GPS Functions (EM406A)
TinyGPS GPS;
static bool GPS_Feed();
 
 // Cmps Functions (CMPS10)
 CMPS10 CmpMod ;
 
// I/O for Develop Shields 0.3x

// PWM Output
#define MEnAhd_Pin 2    	// Main Engine Direction Ahead
#define MEnAst_Pin 3    	// Main Engine Direction Astern
#define MEnSpd_Pin 4  	// Main Engine Speed
#define Rddr13_Pin 5 	// Rudder 01
#define Rddr24_Pin 6 	// Rudder 02
#define BlTDvn_Pin 7  	// Ballast Tank Direction Diving
#define BlTEmr_Pin 8  	// Ballast Tank Direction Emersion
#define BlTSpd_Pin 9  	// Ballast Tank Speed

// General I/O
#define SgLink_Pin 13   	// Link Client Connect Signaling
#define TmpSns_Pin 22   	// Temperature Sensors (DS18B20 OneWire Protocol)

// Analog Input
#define Rd1Trm_Pin 2 	// Rudders 1-3 Position Trim
#define Rd2Trm_Pin 3 	// Rudders 2-4 Position Trim
#define BlTTrm_Pin 4 	// Ballast Tank Proportional Trim
#define MEnTmp_Pin 5 	// Main Engine Motor Temperature
#define BlTTmp_Pin 6 	// Ballast Tank Motor Temperature
#define MEnSnI_Pin 7 	// Main Engine Motor Current Sense
#define BlTSnI_Pin 8 	// Ballast Tank Motor Current Sense
#define EngBtI_Pin 9 	// Engine Battery Current
#define RPiBtV_Pin 10 	// RaspberryPi Supply (3,3V)
#define PrsVal_Pin 11 	// Pressure Sensor (SSCDRNN015P)
#define HdwBtV_Pin 12 	// Hardware Battery Voltage
#define EngBtV_Pin 13 	// Engine Battery Voltage
#define SonarF_Pin 14 	// Front Sonar Sensor (MB7078 Vcc/1024 for Cm)
#define SonarB_Pin 15 	// Bottom Sonar Sensor (MB7078 Vcc/1024 for Cm)

// Digital Input
#define BlTFll_Pin 24 	// Ballast Tank Full (N.C.)
#define BlTEpt_Pin 26 	// Ballast Tank Empty (N.C.)
#define FloodS_Pin 29 	// Flooding Sensor
#define CllSrW_Pin 31   	// Collision Sensor Bow
#define CllSrN_Pin 33   	// Collision Sensor Stern
#define CllSrT_Pin 35   	// Collision Sensor Port
#define CllSrD_Pin 37   	// Collision Sensor Starboard
#define DHTSns_Pin 39   	// Temperature and Humidity Sensor DHT22
#define RPiGIO_Pin 42 	// RaspberryPi GPIO

// Digital Output
#define IOAux1_Pin 23 	// Auxiliary IO
#define IOAux2_Pin 25 	// Auxiliary IO
#define IOAux3_Pin 27 	// Auxiliary IO
#define SgFlsh_Pin 40 	// Flashing Signaling
#define IOAux4_Pin 41 	// Auxiliary IO
#define SgHorn_Pin 43  	// Horn Signaling
#define NavLgt_Pin 44   	// Navigation Lights
#define AuxLgt_Pin 45   	// Auxiliary Light
#define SgBuzz_Pin 47   	// Buzzer Signaling


/* UBoatM.C. Settings */
String Ino_Vers = "0.651";          // Arduino Sketch Version
String RPi_IPAd = "192.168.0.110"; // RaspberryPi IP Address 
String RPi_Path = "/WM_RPinoWI";   // RaspberryPi WI Path 
int LiPo_BtPw = 2200;              // LiPo Battery Power (A/h)
int Set_TimeHrdw = 10;             // Time Hardware Ok
bool Set_Debug = true;             // Enable Debug
unsigned long Web_TimeOut = 60;	   // Web Comunication TimeOut
// Rudders Settings
int Rddr13_Rst = 90;     // Reset Value Rudder Direction
int Rddr24_Rst = 90;     // Reset Value Rudder Depth
int Ang_RxD = 10;        // Reversing Angle (Default Mode)
int Ang_9xD = 15;        // 90° Turn Angle (Default Mode)
int Ang_QxD = 5;         // Quadrant Turn Angle (Default Mode)
int Ang_Max = 15;        // Rudders MAX Angle (Parameter Mode)
int Ang_Min = 5;         // Rudders Min Angle (Parameter Mode)
int Ang_CpP = 5;         // Rudders Compesation Value (Port Direction)
int Ang_CpS = 0;         // Rudders Compesation Value (Starboard Direction)
// Main Engine Settings
int MEnSpd_01 = 30;	         // Speed 01 - Astern (Default Mode)
int MEnSpd_02 = 50;	         // Speed 02 - Ahead   (Default Mode)
int MEnSpd_Max = 90; 	         // Speed Max (Parameter Mode)
int MEnSpd_Min = 30;             // Speed Min  (Parameter Mode)
// Ballast Tank Settings
int BlTSpd_01 = 10;              // Speed 01 - Emersion (Default Mode)
int BlTSpd_02 = 20;              // Speed 02 - Diving (Default Mode)
int BlTSpd_Max = 50;             // Speed Max (Parameter Mode)
int BlTSpd_Min = 10;             // Speed Min (Parameter Mode)
float  D_Stp = 5.50;    	 // Depth Step Value
float  Hst_00 = 2.20;   	 // Hysteresis Value
float  MAX_Depth = 51.00;        // MAX Depth


/* Arduino Variable */

// General
unsigned long TimeSec;        // Time Run Program
unsigned long Time00 = 1;     // Time Clock 1sec
unsigned long Time01 = 5;     // Time Clock 5sec
unsigned long Time02 = 10;    // Time Clock 10sec
unsigned long Wait00;         // Wait 00
unsigned long Wait01;         // Wait 01
unsigned long Wait02;         // Wait 02
unsigned long Wait03;         // Wait 03
unsigned long Wait10;         // Wait 10 Cycle Time
unsigned long Wait11;	        // Wait 11 RPi Link
unsigned long Wait60;         // Wait Battery Calculation
unsigned long LiPo_Atmy;      // LiPo Battery Autonomy (min)
unsigned long Web_TimeMax = 0;
bool Clock_00 = false;	       // Clock 1sec
bool Clock_01 = false;        // Clock 5sec
bool Clock_02 = false;        // Clock 10sec
bool Clock_10 = false;        // Clock Cycle Time
bool Clock_11 = false;        // Clock RPi Link
bool Flag_HdwOK = false;      // Hardware OK
bool OpCmd_Read = false;      // Web Interface Read Command
bool PrCmd_Read = false;      // Web Interface Read Command Parameter
bool OpMem [32];              // Operations Memory
bool OpCmd_Rd;                // Operator Command Read
unsigned int CmdSts;          // Command Status (00-15)
unsigned int InpSts;          // Digital Input Status
unsigned int OutSts;          // Digital Output Status
int Rst_PrsVal ;              // Reset Pressure Value

// Main Engine
bool MEnAhd;		// Main Engine Ahead
bool MEnAst;		// Main Engine Astern
int MEnSpd;		// Main Engine Motor Speed

// Ballast Tank
bool BlTDvn;		// Ballast Tank Motor Diving
bool BlTEmr;		// Ballast Tank Motor Emersion
int BlTSpd;		// Ballast Tank Motor Speed
int D_Initial;		// Depth Value Initial
int D_Final;		// Depth Value Final
int D_Stop;		// Depth Value Stop

// Rudders
Servo Rddr13_Servo;	// Set Library
Servo Rddr24_Servo;	// Set Library
int Rddr13_Pos = 90;	// Rudder 01 Position
int Rddr24_Pos = 90;	// Rudder 02 Position
int Q_Initial;		// Quadrant Value Initial
int Q_Final;		// Quadrant Value Final
int Q_Stop;		// Quadrant Value Stop

// GPS Data Variable
int GPS_DateY;		// GPS Date Year
byte GPS_DateM;		// GPS Date Month
byte GPS_DateD;		// GPS Date Day
byte GPS_TimeH;		// GPS Time  Hours
byte GPS_TimeM;		// GPS Time Minutes
byte GPS_TimeS;		// GPS Time Seconds
byte GPS_HdThs;		// GPS Hundredths
unsigned long GPS_DateUTC;	// GPS Date UTC
unsigned long GPS_TimeUTC;	// GPS Time UTC
unsigned long GPS_Age;	// GPS Age
unsigned long GPS_Chars;	// GPS Chars
unsigned short GPS_Sentences; // GPS Sentences
unsigned short GPS_Failed;	// GPS Failed
long GPS_Lat;		// GPS Latitude
long GPS_Lng;		// GPS Longitude
float GPS_LatFloat;		// GPS Latitude Float
float GPS_LongFloat;	// GPS Longitude Float
float GPS_Speed;		// GPS Speed

// Compass Module Variable (CMPS10)
int Val_CmpsHng;			// Compass Heading
int Val_CmpsPch;                        // Compass Pitch
int Val_CmpsRll;                        // Compass Roll
int Quadrant;				// Compass Quadrant
String Cardinals;			// Compass Cardinals

//Temperature Chip I/O
OneWire DSSns(TmpSns_Pin);	// Set Library
int TmpExt;		// Temperature External
int TmpH2O;		// Temperature Water

// Temperature & Humidity Sensor
DHT22 DHTSns(DHTSns_Pin);	// Set Library
int TmpInt;		                        // Temperature Internal
int HmdInt;		                        // Humidity Internal

// Average Variables
int Avg_Speed [5]; 		// Speed Average
int Avg_Depth [5]; 		// Depth Average
int Avg_Cmp [5];   		// Compass Average
int Avg_BtI [5];   		// Battery Current Average
int Clc_EngBtI = 0;		// LiPo Battery Calculation
int Avg_EngBtI = 0; 	// LiPo Battery Calculation

// Instruments Variable
float Ins_MEnTmp; // Main Engine Motor Temperature
float Ins_BlTTmp; // Ballast Tank Motor Temperature
float Ins_MEnSnI; // Main Engine Motor Current
float Ins_BlTSnI; // Ballast Tank Motor Current
float Ins_HdwBtV; // Hardware Battery Voltage
float Ins_EngBtI; // Engine Battery Current
float Ins_EngBtV; // Engine Battery Voltage
float Ins_RPiBtV; // RaspberriPi Battery Voltage
float Ins_TmpExt; // External Temperature
float Ins_TmpH2O; // Water Temperature
float Ins_TmpInt; // Internal Temperature
float Ins_HmdInt; // Internal Humidity
float Ins_Rd1Trm; // Rudders 1-3 Position
float Ins_Rd2Trm; // Rudders 2-4 Position
float Ins_Speed;  // Speed
float Ins_Depth;  // Depth
long Ins_GPSLat;  // GPS Latitude
long Ins_GPSLng;  // GPS Longitude
int Ins_CmpsHng;  // Compass Angle
int Ins_SonarF;   // Front Sonar
int Ins_SonarB;   // Bottom Sonar
int Ins_CllSnr;   // Collision Sensors
int Ins_BtAtmy;   // Battery Autonomy

// Analog Input Variable
int Rd1Trm;
int Rd2Trm;
int BlTTrm;
int MEnTmp;
int BlTTmp;
int MEnSnI;
int BlTSnI;
int EngBtI;
int RPiBtV;
int PrsVal;
int HdwBtV;
int EngBtV;
int SonarF;
int SonarB;

// Digital Input Variable
bool BlTFll;
bool BlTEpt;
bool FloodS;
bool CllSrW;
bool CllSrN;
bool CllSrT;
bool CllSrD;
bool RPiGIO;

// Digital Output Variable
bool SgHorn = false;
bool NavLgt = false;
bool AuxLgt = false;
bool IOAux1 = false;
bool IOAux2 = false;
bool IOAux3 = false;
bool IOAux4 = false;

/*  Operator Command:
 00  "Engine Stop"
 01  "Fixed/Reset Rudders Direction"
 02  "Quadrant Turn Port Direction"
 03  "Quadrant Turn Starboard Direction"
 04  "90° Turn Port Direction"
 05  "90° Turn Starboard Direction"
 06  "Reversing Port Direction"
 07  "Reversing Starboard Direction"
 08  "Engine Astern"
 09  "Engine Ahead"
 10  "Dynamic Emersion"
 11  "Dynamic Diving"
 12  "Static Emersion"
 13  "Static Diving"
 14  "Surface"
 15  "Fixed/Reset Rudders Depth" 
 21   C1
 22   C2
 23   C3
 24   C4 
 */


// Commands Variable
int LastCmd;
char WebCmd_Chr [32] = { 
  "0123456789ABCDEFGHILMNOPQRSTUVZ" };
bool OpCmd_Rd0 [32];    // Operator Command Care On
bool OpCmd_Rd1 [32];    // Operator Command Execution
bool OpCmd_Wt0 [32];    // Operator Command Waiting Care On
int PrCmd_Rd0 [32];     // Command Parameter 

/*  Allarm Code:
 00  "None"
 01  "Temperature and Humidity Sensor Read Fault"
 02  "Temperature Sensor DS18B20 Read Fault"
 03  "Pressure Sensor Read Fault"
 04  "Compass Read Fault"
 05  "GPS Read Fault"
 06  "Rudders Position Error"
 07  
 08  "Battery Voltage Low"
 09
 10  "Web TimeOut"
 11  "Wait Hardware"
 */

// System Allarm Variable
bool ChkAlm = false;
bool MsgAlm_00 [32];
int IdxAlm = 0;
// System Variable
int OprCmd=31;
int PrmCmd=0;
int MsgAlm=31;


/* Arduino Setup */

void setup()
{

  // Setup Ethernet Server
  Ethernet.begin(mac);
  server.begin();

  // Setup Serial Debug
  Serial.begin(115200);

  // Setup Serial GPS Module EM406A
  Serial1.begin(4800);

  // Setup Compass Module
  Wire.begin();

  // Link LED
  pinMode(SgLink_Pin, OUTPUT);

  // Digital Input
  pinMode(BlTFll_Pin, INPUT);
  pinMode(BlTEpt_Pin, INPUT);
  pinMode(FloodS_Pin, INPUT);
  pinMode(CllSrW_Pin, INPUT);
  pinMode(CllSrN_Pin, INPUT);
  pinMode(CllSrT_Pin, INPUT);
  pinMode(CllSrD_Pin, INPUT);
  pinMode(RPiGIO_Pin, INPUT);

  // Digital Output
  pinMode(SgHorn_Pin, OUTPUT);
  pinMode(NavLgt_Pin, OUTPUT);
  pinMode(AuxLgt_Pin, OUTPUT);
  pinMode(SgFlsh_Pin, OUTPUT);
  pinMode(SgBuzz_Pin, OUTPUT);

  // Rudders Servo
  Rddr13_Servo.attach(Rddr13_Pin);
  Rddr24_Servo.attach(Rddr24_Pin);

  // Main Engine and Ballast Tank
  pinMode(MEnAhd_Pin, OUTPUT);
  pinMode(MEnAst_Pin, OUTPUT);
  pinMode(MEnSpd_Pin, OUTPUT);
  pinMode(BlTDvn_Pin, OUTPUT);
  pinMode(BlTEmr_Pin, OUTPUT);
  pinMode(BlTSpd_Pin, OUTPUT);

}

/* Arduino Main Loop */

void loop()
{

  // Function Loop
  Fnc_Loop ();

  // Read Analog Input
  Rd1Trm = analogRead(Rd1Trm_Pin);
  Rd2Trm = analogRead(Rd2Trm_Pin);
  BlTTrm = analogRead(BlTTrm_Pin);
  MEnTmp = analogRead(MEnTmp_Pin);
  BlTTmp = analogRead(BlTTmp_Pin);
  MEnSnI = analogRead(MEnSnI_Pin);
  BlTSnI = analogRead(BlTSnI_Pin);
  EngBtI = analogRead(EngBtI_Pin);
  RPiBtV = analogRead(RPiBtV_Pin);
  PrsVal = analogRead(PrsVal_Pin);
  HdwBtV = analogRead(HdwBtV_Pin);
  EngBtV = analogRead(EngBtV_Pin);
  SonarF = analogRead(SonarF_Pin);
  SonarB = analogRead(SonarB_Pin);

  // Read Digital Input
  BlTFll = digitalRead(BlTFll_Pin);
  BlTEpt = digitalRead(BlTEpt_Pin);
  FloodS = digitalRead(FloodS_Pin);
  CllSrW = digitalRead(CllSrW_Pin);
  CllSrN = digitalRead(CllSrN_Pin);
  CllSrT = digitalRead(CllSrT_Pin);
  CllSrD = digitalRead(CllSrD_Pin);
  RPiGIO = digitalRead(RPiGIO_Pin);

  // Reading Temperature and Humidity Sensor DHT22
  if (Clock_01) Sns_DHTRd ();

  // Reading Temperature Sensors DS18B20
  if (Clock_01) Sns_TmpRd ();

  // Pressure Sensor Read
  Sns_PrsVal ();

  // Compass Module HMC6352
  Mod_CMP ();

  // GPS Module EM406A
  Mod_GPS ();

  // Data Calculations
  Fnc_DataClc ();

  // Web Comunication
  Web_Com ();

  // Main Engine Command
  if (Flag_HdwOK) Cmd_MainEg ();

  // Rudders Command
  if (Flag_HdwOK) Cmd_Rudders ();

  // Ballast Tank Command
  if (Flag_HdwOK) Cmd_BllTnk ();

  // Sound Command
  Fnc_AuxCmd ();

  // Serial Print Debug
  if (Clock_00){
    if (Set_Debug) Fnc_Debug ();
  }

}


