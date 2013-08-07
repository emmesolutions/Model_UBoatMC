**U-Boat Module Control (Arduino Hardware Controll + RaspberryPi Server Web)**


     	Copyright (C) 2012 Martinelli Michele

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
     
 

 * Reading OneWire Temperature Sensors
 * Data Calculations
 * Command Web Interface Page
 * Operator Commands
 * Compass Module CMPS10
 * GPS Module EM406A
 * Main Engine Command
 * Rudders Command
 * Ballast Tank Command
 * Auxiliary Command
 * Serial Print Debug

Hardware:

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

Library:

  * SPI
  * Ethernet
  * Servo
  * Wire
  * TinyGPS
  * OneWire

Wiring:

PWM Out:

  * Pin 2  - Main Engine Direction Ardumoto (OFF = Forward, ON = Backward)
  * Pin 3  - Main Engine Speed Ardumoto
  * Pin 4  - Rudder 1
  * Pin 5  - Rudder 2
  * Pin 6  - Temperature Sensors (OneWire Protocol)
  * Pin 7  - 
  * Pin 8  - Ballast Tank Direction Ardumoto (OFF = Filling, ON = Emptying)
  * Pin 9  - Ballast Tank Speed Ardumoto
  * Pin 10 - (Ethernet Shield)
  * Pin 11 - (Ethernet Shield)
  * Pin 12 - (Ethernet Shield)
  * Pin 13 - Link LED Client Connect

Communication:

  * Pin 18 - EM406A GPS Module (Serial1 - TX)
  * Pin 19 - EM406A CPS Module (Serial1 - RX)
  * Pin 20 - HMC6352 Compass Module (SDA)
  * Pin 21 - HMC6352 Compass Module (SCL)

Digital Out:

  * Pin 22 - Flashing
  * Pin 23 - Horn Signaling
  * Pin 24 - Beep Signaling
  * Pin 25 - Auxiliary Light

Analog In:

  * Pin 9  - Engine Battery Amper
  * Pin 10 - Ballast Tank Level
  * Pin 11 - Pressure Sensor
  * Pin 12 - Hardware Battery Voltage
  * Pin 13 - Motors Battery Voltage
  * Pin 14 - Sonar Sensor Front
  * Pin 15 - Sonar Sensor Back

Digital In:

  * Pin 40 - Ballast Tank Full
  * Pin 41 - Ballast Tank Empty
  * Pin 42 - Flooding Sensor
  * Pin 43 - Collision Sensor Front
  * Pin 44 - Collision Sensor Back
  * Pin 45 - Collision Sensor Left
  * Pin 46 - Collision Sensor Right

