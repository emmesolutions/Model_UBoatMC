#U-Boat Module Control
**Arduino Hardware Control + RaspberryPi Web Interface**

**Project divided into three parts:**

* [WM_InoSketch](WM_InoSketch/) Arduino Sketch for U-Boat Hardware Control 
* [WM_RPinoWI](WM_RPinoWI/)  Operator Command Web Interface for RaspberryPi Web Server
* [WM_Shield](WM_Shield/) Arduino Shield for U-Boat Hardware Control

**-**

     Copyright (C) 2015 Martinelli Michele

     This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
     

##Description:

**Hardware:**
  * ARDUINO Mega 2560
  * RaspberryPi
  * Ethernet Shield
  * Monster Moto Shiled (Main Engine + Ballast Tank)
  * Current Sensor ACS714
  * GPS Module EM406A
  * Compass Module CMPS10
  * Servo Controller (Rudders Direction/Depth)
  * Pressure Sensor SSCDRNN015PAAA5 Honeywell
  * Temperature Sensor DS18B20 Maxim
  * Temperature Sensor LM35 (Motors)
  * Sonar Sensor MB7078 XL-MaxSonar-WRCA 

  * Arduino U.M.C. Shield (UMC_SHD1310_033)
  
**Library:**
  * SPI
  * Ethernet
  * Servo
  * Wire
  * TinyGPS
  * OneWire
  * DHT22

**Arduino:**
 * Reading DS18B20 Sensors
 * Reading DHT22 Sensors
 * Compass Module CMPS10
 * GPS Module EM406A
 * Data Calculations
 * Web Communication
 * Main Engine Command
 * Rudders Command
 * Ballast Tank Command
 * Auxiliary Command
 * Serial Print Debug

**RaspberryPi:**
 * LAMP Web Server
 * OP.Cmd Web Interface
 * MySQL Datalogger

##Wiring:

**PWM Out:**
  * Pin 2  - Main Engine Direction Ahead
  * Pin 3  - Main Engine Direction Astern
  * Pin 4  - Main Engine Speed
  * Pin 5  - Rudder 01
  * Pin 6  - Rudder 02
  * Pin 7  - Ballast Tank Direction Diving
  * Pin 8  - Ballast Tank Direction Emersion
  * Pin 9  - Ballast Tank Speed
  * Pin 10 - (Ethernet Shield)
  * Pin 11 - (Ethernet Shield)
  * Pin 12 - (Ethernet Shield)

**General I/O:**
  * Pin 13 - Link Client Connect Signaling
  * Pin 22 - Temperature Sensors (DS18B20 OneWire Protocol)

**Communication:**
  * Pin 18 - EM406A GPS Module (Serial1 - TX)
  * Pin 19 - EM406A CPS Module (Serial1 - RX)
  * Pin 20 - CMPS10 Compass Module (SDA)
  * Pin 21 - CMPS10 Compass Module (SCL)

**Analog In:***
  * Pin 2  - Rudders 1-3 Position Trim
  * Pin 3  - Rudders 2-4 Position Trim
  * Pin 4  - Ballast Tank Proportional Trim
  * Pin 5  - Main Engine Motor Temperature 
  * Pin 6  - Ballast Tank Motor Temperature 
  * Pin 7  - Main Engine Motor Current Sense
  * Pin 8  - Ballast Tank Motor Current Sense
  * Pin 9  - Engine Battery Current
  * Pin 10 - RaspberryPi Supply (3,3V)
  * Pin 11 - Pressure (Sensor SSCDRNN015P)
  * Pin 12 - Hardware Battery Voltage
  * Pin 13 - Engine Battery Voltage
  * Pin 14 - Front Sonar Sensor(Sensor MB7078 Vcc/1024 for Cm)
  * Pin 15 - Bottom Sonar Sensor(Sensor MB7078 Vcc/1024 for Cm)

**Digital In:**
  * Pin 24 - Ballast Tank Full
  * Pin 26 - Ballast Tank Empty
  * Pin 29 - Flooding Sensor
  * Pin 31 - Collision Sensor Bow
  * Pin 33 - Collision Sensor Stern
  * Pin 35 - Collision Sensor Port
  * Pin 37 - Collision Sensor Starboard
  * Pin 39 - Temperature and Humidity Sensor DHT22
  * Pin 41 - RaspberryPi GPIO

**Digital Out**
  * Pin 23 - Auxiliary IO
  * Pin 25 - Auxiliary IO
  * Pin 27 - Auxiliary IO
  * Pin 40 - Flashing Signaling
  * Pin 41 - Auxiliary IO
  * Pin 43 - Horn Signaling 
  * Pin 44 - Navigation Lights
  * Pin 45 - Auxiliary Light
  * Pin 47 - Buzzer Signaling 

##System Structure:

**ARDUINO**
Main U-Boat controller
- Function...
- Web Comunication Function
     Send Satus Data via GET method:
  	http://..../index.php?TimeSc=...&DateD=...&DateM=...

**Status Data:**
	
       	TimeSc Time On
       	       	
     	DateD  Day
     	DateM  Month
     	DateY  Year
     	TimeH  Hour
     	TimeM  Minute
     	
     	GPSLat GPS Latitude
     	GPSLng GPS Longitude
     	CmpsH  Compass Heading
	CmpsP  Compass Pitch
	CmpsR  Compass Roll
     	Speed  Speed
     	Depth  Depth
     	     	   	
     	TmpExt Temperature External
     	TmpInt Temperature Internal
     	HmdInt Humidity Internal
     	TmpH2O Temperature Water
     	MEnTmp Main Engine Motor Temperature
     	BlTTmp Ballast Tank Motor Temperature
     	
     	HdwBtV HdwBtV Hardware Battery Voltage
     	EngBtV Engine Battery Voltage
     	EngBtI Engine Battery Current
     	RPiBtV RPi Battery Voltage
     	BtAtmy Battery Autonomy
     	MEnSnI Main Engine Motor Current
     	BlTSnI Ballast Tank Motor Current
     	
     	SonarF Sonar Front
     	SonarB Sonar Back
     	CllSnr Collision Sensors
     	
     	OprCmd Operator Command
     	PrmCmd Parameter Command
     	MsgAlm Message Allarm
     	CmdSts Command Status
     	InpSts Digital Input Status
     	OutSts Digital Output Status
     	   

**Arduino Read Instruction Data via GET method:**
-	Instruction Data = OpCmd (Operator Command) + PrCmd (Parameter Command)
- 	'$' Read OpCmd (Operator Command)
- 	'@' Read PrCmd (Parameter Command)
- 	OpCmd_Rd0 Op.Command Care On
- 	OpCmd_Wt0 Waiting Care On
- 	PrCmd_Rd0 Calculation Parameter
- 	OpCmd_Rd0 + OpCmd_Wt0 = OpCmd_Rd1 Op.Command Execution


**RASPBERRY PI**
Web Server for Operator Command Web Interface
-  RaspberryPi Read Instruction Data via GET method:
-  Instruction Data = OpCmd (Operator Command) + PrCmd (Parameter Command)
-  Send Instruction Data via GET method
	http://..../index.php?$[OpCmd]@[OpCmd Parameter]

**OpCmd List:**
	
	
           00  "Engine Stop"
           01  "Fixed/Reset Rudder Direction"
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
           15  "Fixed/Reset Rudder Depth"
           21   C1
           22   C2
           23   C3
           24   C4
           25   F1
           26   F2
           27   F3
           28   F4

--

