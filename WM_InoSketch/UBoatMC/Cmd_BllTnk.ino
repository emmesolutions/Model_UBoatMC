/*
Arduino Sketch Cmd_BllTnk
 
 Ballast Tank Command
 
 Copyright (C) Martinelli Michele 2012 <michele@webemme.net>
 
 This is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Cmd_BllTnk (){

  // Variable
  int BlTSpd_Clc = 0;           // Speed Calculation (Parameter Mode)
  bool BlT_Move = false;
  bool BlT_Stop = false;

  /* */

  // Set BllTnk Speed to Min.
  BlTSpd = BlTSpd_Min;


  // 10 Dynamic Emersion
  if (OpCmd_Rd1 [10]){         // Execution OpCmd
    BlTSpd_Clc = Fnc_BllTnk_SpdClc (10);
  }  
  if (OpCmd_Rd0 [10] && OpCmd_Wt0[10]){  // Execution OpCmd
    D_Final = Ins_Depth - D_Stp;
    if (D_Final < 0){
      D_Final = 0.00;
    }
    OpCmd_Rd0 [10] = false;
    OpCmd_Rd1 [10] = true;
    OpCmd_Rd1 [11] = false;
    OpCmd_Rd1 [12] = false;
    OpCmd_Rd1 [13] = false;
    OpCmd_Rd1 [14] = false;
    OpCmd_Wt0 [10] = false;
    OpMem [10] = true;  	   // Operations Memory
    OpCmd_Rd0 [9] = true;   // Engine Run
    PrCmd_Rd0 [9] = 6;      // Engine Parameter
  }

  // 11 Dynamic Diving
  if (OpCmd_Rd1 [11]){         // Execution OpCmd
    BlTSpd_Clc = Fnc_BllTnk_SpdClc (11);
  }
  if (OpCmd_Rd0 [11] && OpCmd_Wt0[11]){  // Execution OpCmd
    D_Final = Ins_Depth + D_Stp;
    if (D_Final > MAX_Depth){
      D_Final = MAX_Depth;
    }
    OpCmd_Rd0 [11] = false;
    OpCmd_Rd1 [10] = false;
    OpCmd_Rd1 [11] = true;
    OpCmd_Rd1 [12] = false;
    OpCmd_Rd1 [13] = false;
    OpCmd_Rd1 [14] = false;
    OpCmd_Wt0 [11] = false;
    OpMem [11] = true;      // Operations Memory
    OpCmd_Rd0 [9] = true;   // Engine Run
    PrCmd_Rd0 [9] = 6;      // Engine Parameter
  }

  // 12 Static Emersion
  if (OpCmd_Rd1 [12]){         // Execution OpCmd
    BlTSpd_Clc = Fnc_BllTnk_SpdClc (12);
  }  
  if (OpCmd_Rd0 [12] && OpCmd_Wt0[12]){ 	// Execution OpCmd
    D_Final = Ins_Depth - D_Stp;
    if (D_Final < 0){
      D_Final = 0.00;
    }
    OpCmd_Rd0 [12] = false;
    OpCmd_Rd1 [10] = false;
    OpCmd_Rd1 [11] = false;
    OpCmd_Rd1 [12] = true;
    OpCmd_Rd1 [13] = false;
    OpCmd_Rd1 [14] = false;
    OpCmd_Wt0 [12] = false;
    OpMem [12] = true;  	// Operations Memory
  }

  // 13 Static Diving
  if (OpCmd_Rd1 [13]){         // Execution OpCmd
    BlTSpd_Clc = Fnc_BllTnk_SpdClc (13);
  }
  if (OpCmd_Rd0 [13] && OpCmd_Wt0[13]){ 	// Execution OpCmd
    D_Final = Ins_Depth + D_Stp;
    if (D_Final > MAX_Depth){
      D_Final = MAX_Depth;
    }
    OpCmd_Rd0 [13] = false;
    OpCmd_Rd1 [10] = false;
    OpCmd_Rd1 [11] = false;
    OpCmd_Rd1 [12] = false;
    OpCmd_Rd1 [13] = true;
    OpCmd_Rd1 [14] = false;
    OpCmd_Wt0 [13] = false;
    OpMem [13] = true;  	// Operations Memory
  }

  // 14 Rudders Emersion


  // 15 Rudders Diving


  // Ballast Tank Emersion
  if (Ins_Depth > D_Final){
    BlTDir = false;
    BlTSpd = BlTSpd_Clc;
    BlT_Move = true;
  }

  // Ballast Tank Dive
  if (Ins_Depth < D_Final){
    BlTDir = true;
    BlTSpd = BlTSpd_Clc;
    BlT_Move = true;
  }

  // Hysteresis Stop Depth Calculation
  if (abs(Ins_Depth - D_Final) < Hst_00){
    BlT_Stop = true;
  }
  else{
    BlT_Stop = false;
  }

  // Ballast Tank Stop
  if (BlT_Stop){
    BlTDir = false;
    BlT_Move = true;
    BlTSpd = 0;
    BlT_Stop = false;
    if (OpCmd_Rd1 [10] || OpCmd_Rd1 [11]) OpCmd_Rd0 [0] = true; 	// Engine Stop ;
    OpCmd_Rd1 [10] = false;
    OpCmd_Rd1 [11] = false;
    OpCmd_Rd1 [12] = false;
    OpCmd_Rd1 [13] = false;
    OpCmd_Rd1 [14] = false;
    OpMem [10] = false;   // Operations Memory    
    OpMem [11] = false;  	// Operations Memory
    OpMem [12] = false;  	// Operations Memory
    OpMem [13] = false;  	// Operations Memory
    OpMem [14] = false;  	// Operations Memory
  }

  // Command Ballast Tank Motor
  if (BlT_Move){
    // Ballast Tank Full  (BlTFll)
    if (!BlTFll && BlTDir ){
      BlTSpd = 0;
      BlTDir = false;
    }
    // Ballast Tank Empty (BlTEpt)
    if (!BlTEpt && !BlTDir){
      BlTSpd = 0;
      BlTDir = true;
    }

    // Check Collision Sensors Bottom
    if (BlTDir && CllSrB){
      // BlTSpd = 0;
    } 

    // Set Motor Direction (ON = Filling, OFF = Emptying)
    digitalWrite(BlTDir_Pin, BlTDir);

    // Set Motor Speed
    analogWrite(BlTSpd_Pin, BlTSpd);
    BlT_Move = false;
  }

}

/*
Function BllTnk Parameter Speed Calculation
 Prameter:
 01 Speed Max
 02 Speed Calculation (5/6 Max-Min)
 03 Speed Calculation (4/6 Max-Min)
 04 Speed Calculation (3/6 Max-Min)
 05 Speed Calculation (2/6 Max-Min)
 06 Speed Calculation (1/6 Max-Min)
 07 Speed Min
 08 Speed Default
 09 -
 10 -
 11 Depth D_Stp x 1
 12 Depth D_Stp x 2
 13 Depth D_Stp x 3
 14 Depth D_Stp x 4
 15 Depth D_Stp x 5
 16 Depth D_Stp x 6
 17 Depth D_Stp x 7
 18 Depth D_Stp x 8
 19 Depth D_Stp x 9
 20 Depth MAX_Depth
 Use:
 BlTSpd_Clc = Fnc_BllTnk_SpdClc (Val)
 */

static int Fnc_BllTnk_SpdClc (int Val) {

  int Clc = 0;

  if (PrCmd_Rd0 [Val] == 8) { // PrCmd 8 - Default
    switch (Val) {
    case 10:           // Dynamic Emersion
      Clc = BlTSpd_02;
      break;
    case 11:           // Dynamic Diving
      Clc = BlTSpd_01;
      break;
    case 12:           // Static Emersion
      Clc = BlTSpd_01;
      break;
    case 13:           // Static Diving
      Clc = BlTSpd_01;
      break;
    case 14:           // Surface
      Clc = BlTSpd_02;
      break;      
    }
  }
  else {
    if (PrCmd_Rd0 [Val] < 8) { // PrCmd < 8 Speed
      if (PrCmd_Rd0 [Val] == 7) Clc = BlTSpd_Min;
      if (PrCmd_Rd0 [Val] == 6) Clc = (int((BlTSpd_Max-BlTSpd_Min)/6)*1)+BlTSpd_Min;
      if (PrCmd_Rd0 [Val] == 5) Clc = (int((BlTSpd_Max-BlTSpd_Min)/6)*2)+BlTSpd_Min;
      if (PrCmd_Rd0 [Val] == 4) Clc = (int((BlTSpd_Max-BlTSpd_Min)/6)*3)+BlTSpd_Min;
      if (PrCmd_Rd0 [Val] == 3) Clc = (int((BlTSpd_Max-BlTSpd_Min)/6)*4)+BlTSpd_Min;
      if (PrCmd_Rd0 [Val] == 2) Clc = (int((BlTSpd_Max-BlTSpd_Min)/6)*5)+BlTSpd_Min;
      if (PrCmd_Rd0 [Val] == 1) Clc = BlTSpd_Max;
      Clc = Clc;
    }
   if (PrCmd_Rd0 [Val] > 10) { // PrCmd > 10 Depth
      if (PrCmd_Rd0 [Val] == 11) D_Final = D_Stp*1;
      if (PrCmd_Rd0 [Val] == 12) D_Final = D_Stp*2;
      if (PrCmd_Rd0 [Val] == 13) D_Final = D_Stp*3;
      if (PrCmd_Rd0 [Val] == 14) D_Final = D_Stp*4;
      if (PrCmd_Rd0 [Val] == 15) D_Final = D_Stp*5;
      if (PrCmd_Rd0 [Val] == 16) D_Final = D_Stp*6;
      if (PrCmd_Rd0 [Val] == 17) D_Final = D_Stp*7;
      if (PrCmd_Rd0 [Val] == 18) D_Final = D_Stp*8;
      if (PrCmd_Rd0 [Val] == 19) D_Final = D_Stp*9;
      if (PrCmd_Rd0 [Val] == 20) D_Final = MAX_Depth;
      Clc = BlTSpd_01;
    }
  }
  return Clc;
}


