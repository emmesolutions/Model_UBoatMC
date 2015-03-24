/*
Arduino Sketch Cmd_MainEg
 
 Main Engine Command
 
 ------------------------------------------------------------------------------
 Copyright (C) 2015 Martinelli Michele 
 
 UBoatM.C. is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program.  If not, see <http://www.gnu.org/licenses/>.
 ------------------------------------------------------------------------------
 
 */

void Cmd_MainEg (){

  // Variable
  int MEnSpd_Clc = 0;         // Speed Calculation (Parameter Mode)
  bool MEn_Move = false;

  // 08 Engine Astern Direction
  if (OpCmd_Rd1 [8]){		// Execution OpCmd
    MEnSpd_Clc = Fnc_MainEg_SpdClc (8);
    MEnSpd = MEnSpd_Clc;
    MEnAst = true;
    MEnAhd = false;
    MEn_Move = true;
    OpMem [8] = true;  	// Operations Memory
  }
  if (OpCmd_Rd0 [8] && OpCmd_Wt0[8]){		// Care On OpCmd
    OpCmd_Rd0 [8] = false;
    OpCmd_Rd1 [8] = true;
    OpCmd_Rd1 [9] = false;
    OpCmd_Wt0 [8] = false;
  }

  // 09 Engine Ahead Direction
  if (OpCmd_Rd1 [9]){		// Execution OpCmd
    MEnSpd_Clc = Fnc_MainEg_SpdClc (9);
    MEnSpd = MEnSpd_Clc;
    MEnAst = false;
    MEnAhd = true;
    MEn_Move = true;
    OpMem [9] = true;  	// Operations Memory
  }
  if (OpCmd_Rd0 [9] && OpCmd_Wt0[9]){		// Care On OpCmd
    OpCmd_Rd0 [9] = false;
    OpCmd_Rd1 [9] = true;
    OpCmd_Rd1 [8] = false;
    OpCmd_Wt0 [9] = false;
  }

  // 00 Main Engine Stop + Reset Rudders
  /*Prameter:
    00 Engine Stop + Reset Rudders Position
    01 Engine Stop
   */
  if (OpCmd_Rd0 [0]){		// Execution OpCmd
    MEnAst = false;
    MEnAhd = false;
    MEn_Move = true;
    MEnSpd = 0;
    if (PrCmd_Rd0[0] == 0) {
      PrCmd_Rd0 [1] = 8 ;         // Rudders Parameter
      OpCmd_Rd0 [1] = true;	  // Rudders Reset
      OpCmd_Rd1 [2] = false;
      OpCmd_Rd1 [3] = false;
      OpCmd_Rd1 [4] = false;
      OpCmd_Rd1 [5] = false;
      OpCmd_Rd1 [6] = false;
      OpCmd_Rd1 [7] = false;
    }
    if (PrCmd_Rd0[0] == 1) {
      OpCmd_Rd1 [1] = false;
    }
    OpCmd_Rd0 [0] = false;
    OpCmd_Rd0 [8] = false;
    OpCmd_Rd1 [8] = false;
    OpCmd_Rd0 [9] = false;
    OpCmd_Rd1 [9] = false;
    OpMem [8] = false;     	// Operations Memory
    OpMem [9] = false;    	// Operations Memory
  }

 
  // Command Main Engine Motor
  if (MEn_Move){

    // Check Collision Sensors Front
    if (!MEnAst && CllSrW){
      // MEnSpd = 0; Temporarily Disabled
    } 

    // Set Motor Direction
    digitalWrite(MEnAhd_Pin, MEnAhd);
    digitalWrite(MEnAst_Pin, MEnAst);

    // Set Motor Speed
    analogWrite(MEnSpd_Pin, MEnSpd);
    MEn_Move = false;
  }

}

/*
Function MainEg Parameter Speed Calculation
 Prameter:
 01 Speed Max
 02 Speed Calculation (5/6 Max-Min)
 03 Speed Calculation (4/6 Max-Min)
 04 Speed Calculation (3/6 Max-Min)
 05 Speed Calculation (2/6 Max-Min)
 06 Speed Calculation (1/6 Max-Min)
 07 Speed Min
 08 Speed Default
 Use:
 MEnSpd_Clc = Fnc_MainEg_SpdClc (Val)
 */

static int Fnc_MainEg_SpdClc (int Val) {

  int Clc = 0;

  if (PrCmd_Rd0 [Val] == 8) { // PrCmd 8 - Default
    switch (Val) {
    case 9:            // Engine Ahead Direction
      Clc = MEnSpd_02;
      break;
    case 8:            // Engine Astern Direction
      Clc = MEnSpd_01;
      break;
    }
  }
  else {
    if (PrCmd_Rd0 [Val] < 8) { // PrCmd < 8 
      if (PrCmd_Rd0 [Val] == 7) Clc = MEnSpd_Min;
      if (PrCmd_Rd0 [Val] == 6) Clc = (int((MEnSpd_Max-MEnSpd_Min)/6)*1)+MEnSpd_Min;
      if (PrCmd_Rd0 [Val] == 5) Clc = (int((MEnSpd_Max-MEnSpd_Min)/6)*2)+MEnSpd_Min;
      if (PrCmd_Rd0 [Val] == 4) Clc = (int((MEnSpd_Max-MEnSpd_Min)/6)*3)+MEnSpd_Min;
      if (PrCmd_Rd0 [Val] == 3) Clc = (int((MEnSpd_Max-MEnSpd_Min)/6)*4)+MEnSpd_Min;
      if (PrCmd_Rd0 [Val] == 2) Clc = (int((MEnSpd_Max-MEnSpd_Min)/6)*5)+MEnSpd_Min;
      if (PrCmd_Rd0 [Val] == 1) Clc = MEnSpd_Max;
    }

  }
  return Clc;
}

