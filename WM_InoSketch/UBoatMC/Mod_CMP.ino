/*
Arduino Sketch Mod_CMP
 
 Compass Module CMPS10 Read
 
 Copyright (C) Martinelli Michele 2012 <michele@webemme.net>
 
 Mod_CMP is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
*/

void Mod_CMP () {

  byte highByte, lowByte, fine;              // highByte and lowByte store high and low bytes of the bearing and fine stores decimal place of bearing
  int CmpBng;                               
  char CmpPch;
  char CmpRll;
  
  Wire.beginTransmission(CMPS_Address);      // Starts communication with CMPS10
  Wire.write(2);                             // Sends the register we wish to start reading from
  Wire.endTransmission();

  Wire.requestFrom(CMPS_Address, 4);         // Request 4 bytes from CMPS10
  while(Wire.available() < 4);               // Wait for bytes to become available
  highByte = Wire.read();           
  lowByte = Wire.read();            

  CmpPch = Wire.read();              
  CmpRll = Wire.read();               

  CmpBng = ((highByte<<8)+lowByte)/10;      // Calculate Bearing

  // Compass Calculation
  Val_Compass = int (CmpBng);
  Val_CmpsPch = int (CmpPch);
  Val_CmpsRll = int (CmpRll);
  
}


