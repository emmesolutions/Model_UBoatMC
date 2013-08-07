/*
Arduino Sketch Fnc_Loop
 
 Function Loop
 
 Copyright (C) Martinelli Michele 2012 <michele@webemme.net>
 
 This is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Fnc_Loop () {

  // Time Run Program (Sec)
  TimeSec = int(millis()/1000);

  // Wait Hardware
  if (TimeSec > Set_TimeHrdw){
    Flag_HdwOK = true;
    MsgAlm_00 [11] = false;   // Allarm Wait Hardware
  } 
  else {
    MsgAlm_00 [11] = true;    // Allarm Wait Hardware
  }

  // Clock 00
  if (Time00 < TimeSec){
    Time00 = TimeSec + 1;
    Clock_00 = true;
  }
  else{
    Clock_00 = false;
  }
  // Clock 01
  if (Time01 < TimeSec){
    Time01 = TimeSec + 5;
    Clock_01 = true;
  }
  else{
    Clock_01 = false;
  }
  // Clock 02
  if (Time02 < TimeSec){
    Time02 = TimeSec + 10;
    Clock_02 = true;
  }
  else{
    Clock_02 = false;
  }

  // Clock 10 - CycleTime
  Wait10 = Wait10 + 1;
  if (Clock_10 && Wait10 == 20){
    Clock_10 = false;
    Wait10 = 0;
  } 
 if (!Clock_10 && Wait10 == 100){
    Clock_10 = true;
    Wait10 = 0;
  }

}



