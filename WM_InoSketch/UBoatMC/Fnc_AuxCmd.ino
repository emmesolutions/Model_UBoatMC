/*
Arduino Sketch Fnc_AuxCmd
 
 Auxiliary Command
 
 Copyright (C) Martinelli Michele 2012 <michele@webemme.net>
 
 This is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Fnc_AuxCmd () {

  // Settings
  int BzFrq_00 = 400;
  int BzDrt_00 = 100;
  int HrFrq_00 = 2400;
  int HrFrq_01 = 1500;
  int HrFrq_02 = 1000;
  int HrFrq_03 = 800;
  int HrDrt_00 = 250;
  int HrDrt_01 = 500;
  int HrDrt_02 = 1000;
  int HrDrt_03 = 1500;
  // Variable


  // Flashing Cycle Time
  if (Clock_10){
    digitalWrite(SgFlsh_Pin, HIGH);
  }
  else{
    digitalWrite(SgFlsh_Pin, LOW);
  }
  // Flashing RPi Link
  if (!RPiGIO && Clock_11){
    digitalWrite(LinkLED_Pin, HIGH);
  }
  else{
    digitalWrite(LinkLED_Pin, LOW);
  }

  // Operator Command Read Bip
  if (OpCmd_Rd){
    tone(Buzzer_Pin, BzFrq_00, BzDrt_00); // Buzzer Command
    digitalWrite(SgFlsh_Pin,HIGH);		      // Flash Signal
    OpCmd_Rd = false;      
  }

  // Main Op.Cmd Auxiliary
  // Horn Signaling Command
  // 09 Engine Ahead
  if (OpCmd_Rd0[9] && !OpCmd_Wt0[9] && !OpCmd_Rd1[9]){
    noTone(Buzzer_Pin);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_01);      // Signal Horn
    delay(HrDrt_01+500);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_01);      // Signal Horn
    delay(HrDrt_01+500);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_02);      // Signal Horn
    delay(HrDrt_02+500);
    OpCmd_Wt0[9] = true ;
  }

  // 08 Engine Astern
  if (OpCmd_Rd0 [8] && !OpCmd_Wt0[8]){
    noTone(Buzzer_Pin);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_02);      // Signal Horn
    delay(HrDrt_02+500);
    OpCmd_Wt0[8] = true ;
  }
  // 10 Dynamic Emersion
  if (OpCmd_Rd0 [10] && !OpCmd_Wt0[10]){
    // tone(SgHorn_Pin, HrFrq_02, HrDrt_00);
    OpCmd_Wt0[10] = true ;
  }
  // 11 Dynamic Diving
  if (OpCmd_Rd0 [11] && !OpCmd_Wt0[11]){
    noTone(Buzzer_Pin);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_01);      // Signal Horn
    delay(HrDrt_01+500);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_02);      // Signal Horn
    delay(HrDrt_02+500);
    OpCmd_Wt0[11] = true ;
  }
  // 12 Static Emersion
  if (OpCmd_Rd0 [12] && !OpCmd_Wt0[12]){
    // tone(SgHorn_Pin, HrFrq_02, HrDrt_00);
    OpCmd_Wt0[12] = true ;
  }
  // 13 Static Dive
  if (OpCmd_Rd0 [13] && !OpCmd_Wt0[13]){
    noTone(Buzzer_Pin);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_01);      // Signal Horn
    delay(HrDrt_01+500);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_02);      // Signal Horn
    delay(HrDrt_02+500);
    OpCmd_Wt0[13] = true ;
  }


  // Op.Cmd Auxiliary
  // Light
  // C1 Operator Command (21)
  // ON
  if (OpCmd_Rd0 [21] && !AuxLgt){
    digitalWrite(AuxLgt_Pin ,HIGH);           // Auxiliary Light
    AuxLgt = true; 
    OpCmd_Rd0 [21] = false;      
  }
  // OFF
  if (OpCmd_Rd0 [21] && AuxLgt){
    digitalWrite(AuxLgt_Pin ,LOW);            // Auxiliary Light
    AuxLgt = false; 
    OpCmd_Rd0 [21] = false;      
  }
  // Horn
  // C4 Operator Command (24)
  if (OpCmd_Rd1 [24]){
    noTone(Buzzer_Pin);
    tone(SgHorn_Pin, HrFrq_00, HrDrt_01);      // Signal Horn
    if (TimeSec > Wait00+3) OpCmd_Rd1 [24] = false;
  }  
  if (OpCmd_Rd0 [24]){
    Wait00 = TimeSec;
    OpCmd_Rd1 [24] = true;
    OpCmd_Rd0 [24] = false;      
  }  

}











