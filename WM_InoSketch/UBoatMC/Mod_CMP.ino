/*
Arduino Sketch Mod_CMP
 
 Compass Module CMPS10 Read
 
 Copyright (C) Martinelli Michele 2014 <michele@webemme.net>
 
 Mod_CMP is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Mod_CMP () {

  // Variable
  byte highByte, lowByte, fine;              
  int CmpBng;                               
  char CmpPch;
  char CmpRll;

  // Starts Communication 
  Wire.beginTransmission(CMPS_Address);      
  Wire.write(2);                             
  Wire.endTransmission();

  // Request 4 Bytes
  Wire.requestFrom(CMPS_Address, 4);         
  while(Wire.available() < 4);               
  highByte = Wire.read();           
  lowByte = Wire.read();            

  CmpPch = Wire.read();              
  CmpRll = Wire.read();               

  CmpBng = ((highByte<<8)+lowByte)/10;      // Calculate Bearing

  // Compass Calculation
  Val_CmpsHng = int (CmpBng);
  Val_CmpsPch = int (CmpPch);
  Val_CmpsRll = int (CmpRll);

}




