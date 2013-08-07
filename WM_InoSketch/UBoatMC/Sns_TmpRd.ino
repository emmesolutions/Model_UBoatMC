/*
Arduino Sketch Sns_TmpRd
 
 Temperature Sensor DS18B20 Read
 
 Ext.Temp. ROM = 28 C8 88 49 3 0 0 42
 H2O.Temp. ROM = 28 3C A9 60 3 0 0 3A
 
 Copyright (C) Martinelli Michele 2012 <michele@webemme.net>
 
 Fnc_TmpRd is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Sns_TmpRd () {

  // Variable
  byte i;
  byte present = 0;
  byte type_s;
  byte data[12];
  byte addr[8];
  float Tmp_Cls;

  if ( !DSSns.search(addr)){
    DSSns.reset_search();
    delay(50);
    return;
  }

  // CRC Check
  if ( OneWire::crc8( addr, 7) != addr[7]) {
    MsgAlm_00 [2] = true;  // Temperature Read Fault
    return;
  }

  MsgAlm_00 [2] = false;  // Temperature Read Fault

  DSSns.reset();
  DSSns.select(addr);
  DSSns.write(0x44,1);

  delay(50);

  present = DSSns.reset();
  DSSns.select(addr);
  DSSns.write(0xBE);

  for ( i = 0; i < 9; i++){  
    data[i] = DSSns.read();
  }

  // Convert Data
  unsigned int raw = (data[1] << 8) | data[0];

  if (type_s){
    raw = raw << 3; 
    if (data[7] == 0x10){
      raw = (raw & 0xFFF0) + 12 - data[6];
    }
  }
  else{
    byte cfg = (data[4] & 0x60);
    if (cfg == 0x00) raw = raw << 3;      	// 9 bit resolution, 93.75 ms
    else if (cfg == 0x20) raw = raw << 2; 	// 10 bit resolution, 187.5 ms
    else if (cfg == 0x40) raw = raw << 1; 	// 11 bit resolution, 375 ms
  }

  // Internal Temperature ROM = 28 3C A9 60 3 0 0 3A
  if (addr[1] == 0x3C) Ins_TmpH2O = (float)raw / 16.0;

  // External Temperature ROM = 28 C8 88 49 3 0 0 42
  if (addr[1] == 0xC8) Ins_TmpExt = (float)raw / 16.0;

}





