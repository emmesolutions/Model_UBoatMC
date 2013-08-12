#U-Boat Module Control
**Arduino Hardware Control + RaspberryPi Web Interface**

**Project divided into two parts:**

* [WM_InoSketch](WM_InoSketch/) Arduino Sketch for U-Boat Hardware Control 
* [WM_RPinoWI](WM_RPinoWI/)  Operator Command Web Interface for RaspberryPi Web Server
    	 

**-**

     Copyright (C) 2013 Martinelli Michele

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
  * Motor Shiled (Main Engine + Ballast Tank)
  * Current Sensor ACS714
  * GPS Module EM406A
  * Compass Module CMPS10
  * Servo Controller (Rudders 1/2)
  * Pressure Sensor SSCDRNN015PAAA5 Honeywell
  * Temperature Sensor DS18B20 Maxim
  * Sonar Sensor MB7078 XL-MaxSonar-WRCA 

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
  * Pin 2  - Main Engine Direction (OFF = Ahead, ON = Astern)
  * Pin 3  - Main Engine Speed
  * Pin 4  -
  * Pin 5  - Rudder Direction
  * Pin 6  - Rudder Immersion
  * Pin 7  - Temperature and Humidity Sensor DHT22
  * Pin 8  - Ballast Tank Direction (OFF = Filling, ON = Emptying)
  * Pin 9  - Ballast Tank Speed
  * Pin 10 - (Ethernet Shield)
  * Pin 11 - (Ethernet Shield)
  * Pin 12 - (Ethernet Shield)
  * Pin 13 - Link LED Web Client Connect

**Communication:**
  * Pin 18 - EM406A GPS Module (Serial1 - TX)
  * Pin 19 - EM406A CPS Module (Serial1 - RX)
  * Pin 20 - CMPS10 Compass Module (SDA)
  * Pin 21 - CMPS10 Compass Module (SCL)

**Digital Out**
  * Pin 43 - Horn Signaling
  * Pin 45 - Auxiliary Light
  * Pin 47 - Flashing
  * Pin 49 - Buzzer Signaling

**Analog In:**

  * Pin 5  - Main Engine Motor Temperature
  * Pin 6  - Ballast Tank Motor Temperature
  * Pin 7  -
  * Pin 8  -
  * Pin 9  - Engine Battery Current
  * Pin 10 - RaspberryPi Supply (3,3V)
  * Pin 11 - Pressure Sensor (SSCDRNN015P)
  * Pin 12 - Hardware Battery Voltage
  * Pin 13 - Engine Battery Voltage
  * Pin 14 - Front Sonar Sensor (MB7078 Vcc/1024 for Cm)
  * Pin 15 - Bottom Sonar Sensor (MB7078 Vcc/1024 for Cm)

**Digital In:**
  * Pin 23 - Temperature Sensors (DS18B20 OneWire Protocol)
  * Pin 25 - Ballast Tank Full
  * Pin 27 - Ballast Tank Empty
  * Pin 29 - Flooding Sensor
  * Pin 31 - Collision Sensor Front
  * Pin 33 - Collision Sensor Bottom
  * Pin 35 - Collision Sensor Left
  * Pin 37 - Collision Sensor Right
  * Pin 41 - RaspberryPi 
 

##System Structure:

**ARDUINO**
Main U-Boat controller
- Function...
- Web Comunication Function
     Send Data via GET method:   
  	http://..../index.php?TimeSc=...&DateD=...&DateM=...

**Data List:**
	
	
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
     	
     	HdwBtV HdwBtV Hardware Battery Voltage
     	EngBtV Engine Battery Voltage
     	EngBtI Engine Battery Current
     	RPiBtV RPi Battery Voltage
     	
     	SonarF Sonar Front
     	SonarB Sonar Back
     	CllSnr Collision Sensors
     	
     	OprCmd Operator Command
     	PrmCmd Parameter Command
     	MsgAlm Message Allarm
     	CmdSts Command Status
     	     	

- 	Read Data via GET method
- 	'$' Read OpCmd (Operator Command)
- 	'@' Read PrCmd (Parameter Command)
- 	OpCmd_Rd0 Op.Command Care On
- 	OpCmd_Wt0 Waiting Care On
- 	PrCmd_Rd0 Calculation
- 	OpCmd_Rd0 + OpCmd_Wt0 = OpCmd_Rd1 Op.Command Execution


**RASPBERRY PI**
Web Server for Operator Command Web Interface
-  Read Data via GET method
-  Send Operator Command via GET method:
	http://..../index.php?$[OpCmd]@[OpCmd Parameter]

**OpCmd List:**
	
	
           00  "Engine Stop"
           01  "Straight Direction"
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

--
