/*

 Arduino Sketch UBoatM.C.
 
 U-Boat Module Control: Arduino Remote Control with RaspberryPi Web Interface
 
 11/08/2013
 Version 0.51
 
 ------------------------------------------------------------------------------
 Copyright (C) Martinelli Michele 2012 <michele@webemme.net>
 
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
 Shield Ardumoto (Main Engine + Ballast Tank)
 GPS Module CMPS10
 Compass Module HMC6352
 Servo Controller (Rudders 1/2)
 Pressure Sensor SSCDRNN015PAAA5 Honeywell
 Temperature Sensor DS18B20 Maxim
 Temperature and Humidity Sensor DHT22
 Sonar Sensor MB7078 XL-MaxSonar-WRCA (Vcc/1024 Cm)
 
 Software:
 Library SPI
 Library Ethernet
 Library Servo
 Library Wire
 Library TinyGPS
 Library OneWire
 Library DHT22
 
 - Reading DS18B20 Sensors
 - Reading DHT22 Sensors
 - Compass Module HMC6352
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
#include <Wire.h>          	// Compass Module HMC6352 (I2C)
#include <TinyGPS.h>       	// GPS Module EM406A (Serial1)
#include <OneWire.h>       	// Temperature Sensor DS18B20 (One Wire)
#include <DHT22.h>        	// Temperature and Humidity Sensor DHT22

// Web Server
byte mac[] = {
  0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };    	// MAC Address
EthernetServer server(80);                 	// Server Port

// GPS Functions
TinyGPS GPS;
static bool GPS_Feed();
static void GPS_dump(TinyGPS &gps);

// PWM Output
#define MEnDir_Pin 2  	// Main Engine Direction (OFF = Ahead, ON = Astern)
#define MEnSpd_Pin 3  	// Main Engine Speed
// Pin 4 Avaliable
#define Ruddr1_Pin 5  	// Rudder 1
#define Ruddr2_Pin 6  	// Rudder 2
#define DHTSns_Pin 7  	// Temperature and Humidity Sensor DHT22
#define BlTDir_Pin 8  	// Ballast Tank Direction (ON = Diving, OFF = Emersion)
#define BlTSpd_Pin 9  	// Ballast Tank Speed

// General I/O
#define LinkLED_Pin 13 	// Link LED Client Connect
#define TmpSns_Pin 23   // Temperature Sensors (DS18B20 OneWire Protocol)

// Analog Input
#define MEnTmp_Pin 5  	// Main Engine Motor Temperature
#define BlTTmp_Pin 6  	// Ballast Tank Motor Temperature
// Pin 7 Avaliable
// Pin 8 Avaliable
#define EngBtI_Pin 9  	// Engine Battery Ampere
#define RPiBtV_Pin 10  	// RaspberryPi Supply (3,3V)
#define PrsVal_Pin 11  	// Pressure Sensor (SSCDRNN015P)
#define HdwBtV_Pin 12   // Hardware Battery Voltage
#define EngBtV_Pin 13   // Engine Battery Voltage
#define SonarF_Pin 14  	// Front Sonar Sensor (MB7078 Vcc/1024 for Cm)
#define SonarB_Pin 15  	// Bottom Sonar Sensor (MB7078 Vcc/1024 for Cm)

// Digital Input
#define BlTFll_Pin 25 	// Ballast Tank Full (N.C.)
#define BlTEpt_Pin 27 	// Ballast Tank Empty (N.C.)
#define FloodS_Pin 29 	// Flooding Sensor
#define CllSrF_Pin 31 	// Collision Sensor Bow
#define CllSrB_Pin 33 	// Collision Sensor Stern
#define CllSrL_Pin 35 	// Collision Sensor Port
#define CllSrR_Pin 37 	// Collision Sensor Starboard
#define RPiGIO_Pin 41 	// RaspberryPi GPIO

// Digital Output
#define SgHorn_Pin 43  	// Horn Signaling
#define AuxLgt_Pin 45  	// Auxiliary Light
#define SgFlsh_Pin 47 	 // Flashing
#define Buzzer_Pin 49  	// Buzzer Signaling

/* UBoatM.C. Settings */
String Ino_Vers = "0.51";    		// Arduino Sketch Version
String RPi_IPAd = "192.168.0.110"; 	// RaspberryPi IP Address 
String RPi_Path = "/WM_RPinoWI";   	// RaspberryPi WI Path 
int Set_TimeHrdw = 10;             	// Time Hardware Ok
bool Set_Debug = true;             	// Enable Debug
unsigned long Web_TimeOut = 60;		// Web Comunication TimeOut
// Rudders Settings
int Rudder_Rst = 90;     // Straight-Reset Rudders
int Ang_RxD = 20;         // Reversing Angle (Default Mode)
int Ang_9xD = 15;        // 90° Turn Angle (Default Mode)
int Ang_QxD = 10;       // Quadrant Turn Angle (Default Mode)
int Ang_Max = 30;        // Rudders MAX Angle (Parameter Mode)
int Ang_Min = 5;            // Rudders Min Angle (Parameter Mode)
// Main Engine Settings
int MEnSpd_01 = 30;		            // Speed 01 - Astern (Default Mode)
int MEnSpd_02 = 50;		            // Speed 02 - Ahead   (Default Mode)
int MEnSpd_Max = 90; 	           // Speed Max (Parameter Mode)
int MEnSpd_Min = 30;             // Speed Min  (Parameter Mode)
// Ballast Tank Settings
int BlTSpd_01 = 20;              // Speed 01 - Emersion (Default Mode)
int BlTSpd_02 = 30;              // Speed 02 - Diving (Default Mode)
int BlTSpd_Max = 80;             // Speed Max (Parameter Mode)
int BlTSpd_Min = 30;             // Speed Min (Parameter Mode)
float  D_Stp = 5.50;      		 // Depth Step Value
float  Hst_00 = 2.20;     		 // Hysteresis Value
float  MAX_Depth = 51.00; 		 // MAX Depth
  
  
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
unsigned long Wait11;	      // Wait 11 Cycle Time
unsigned long Web_TimeMax = 0;
bool Clock_00 = false;	      // Clock 1sec
bool Clock_01 = false;        // Clock 5sec
bool Clock_02 = false;        // Clock 10sec
bool Clock_10 = false;        // Clock Cycle Time
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
bool MEnRev;		// Main Engine Motor Reverse
int MEnSpd;		// Main Engine Motor Speed

// Ballast Tank
bool BlTDir;		// Ballast Tank Motor Direction
int BlTSpd;		// Ballast Tank Motor Speed
int D_Initial;		// Depth Value Initial
int D_Final;		// Depth Value Final
int D_Stop;		// Depth Value Stop

// Rudders
Servo Ruddr1_Servo;		// Set Library
Servo Ruddr2_Servo;		// Set Library
int Ruddr1_Pos = 90;	// Rudder Position
int Ruddr2_Pos = 90;	// Rudder Position
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
int CMPS_Address = 0x60;	// Compass Address
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
int TmpInt;		// Temperature Internal
int HmdInt;		// Humidity Internal

// Average Variables
int Avg_Speed [5]; 		// Speed Average
int Avg_Depth [5]; 		// Depth Average
int Avg_Cmp [5];   		// Compass Average
int Avg_BtI [5];   		// Battery Current Average

// Instruments Variable
float Ins_MEnTmp;               // Main Engine Motor Temperature
float Ins_BlTTmp;               // Ballast Tank Motor Temperature
float Ins_HdwBtV;  		// Hardware Battery Voltage
float Ins_EngBtI;               // Engine Battery Current
float Ins_EngBtV;  		// Engine Battery Voltage
float Ins_RPiBtV;  		// RaspberriPi Battery Voltage
float Ins_TmpExt;  		// External Temperature
float Ins_TmpH2O;  		// Water Temperature
float Ins_TmpInt;  		// Internal Temperature
float Ins_HmdInt;  		// Internal Humidity
float Ins_Speed;   		// Speed
float Ins_Depth;   		// Depth
long Ins_GPSLat;   		// GPS Latitude
long Ins_GPSLng;   		// GPS Longitude
int Ins_CmpsHng;   		// Compass Angle
int Ins_SonarF;    		// Front Sonar
int Ins_SonarB;    		// Bottom Sonar
int Ins_CllSnr;               // Collision Sensors

// Analog Input Variable
int MEnTmp;
int BlTTmp;
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
bool CllSrF;
bool CllSrB;
bool CllSrL;
bool CllSrR;
bool RPiGIO;

// Digital Output Variable
bool SgHorn = false;
bool AuxLgt = false;

/*  Operator Command:
 00  "Engine Stop"
 01  "Fixed/Straight Direction"
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
 14  "Rudders Emersion"
 15  "Rudders Diving"   
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
 06  
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
  pinMode(LinkLED_Pin, OUTPUT);

  // Digital Input
  pinMode(BlTFll_Pin, INPUT);
  pinMode(BlTEpt_Pin, INPUT);
  pinMode(FloodS_Pin, INPUT);
  pinMode(CllSrF_Pin, INPUT);
  pinMode(CllSrB_Pin, INPUT);
  pinMode(CllSrL_Pin, INPUT);
  pinMode(CllSrR_Pin, INPUT);
  pinMode(RPiGIO_Pin, INPUT);

  // Digital Output
  pinMode(SgHorn_Pin, OUTPUT);
  pinMode(AuxLgt_Pin, OUTPUT);
  pinMode(SgFlsh_Pin, OUTPUT);
  pinMode(Buzzer_Pin, OUTPUT);

  // Rudders Servo
  Ruddr1_Servo.attach(Ruddr1_Pin);
  Ruddr2_Servo.attach(Ruddr2_Pin);

  // Main Engine and Ballast Tank
  pinMode(MEnDir_Pin, OUTPUT);
  pinMode(MEnSpd_Pin, OUTPUT);
  pinMode(BlTDir_Pin, OUTPUT);
  pinMode(BlTSpd_Pin, OUTPUT);

}

/* Arduino Main Loop */

void loop()
{

  // Function Loop
  Fnc_Loop ();

  // Read Analog Input
  MEnTmp = analogRead(MEnTmp_Pin);
  BlTTmp = analogRead(BlTTmp_Pin);
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
  CllSrF = digitalRead(CllSrF_Pin);
  CllSrB = digitalRead(CllSrB_Pin);
  CllSrL = digitalRead(CllSrL_Pin);
  CllSrR = digitalRead(CllSrR_Pin);
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








