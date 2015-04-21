/*
Arduino Sketch Mod_CMP
 
 Compass Module CMPS10 Read
 
Copyright (C) 2015 Martinelli Michele 
 
 This is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Mod_CMP () {

  // Variable
  byte highByte, lowByte, fine;              
  float CmpBng;                               
  float CmpPch;
  float CmpRll;
  
/*   */
  
  // Compass Calculation
  Val_CmpsHng = int(CmpMod.bearing());
  Val_CmpsPch = int(CmpMod.pitch());
  Val_CmpsRll = int(CmpMod.roll());

}




