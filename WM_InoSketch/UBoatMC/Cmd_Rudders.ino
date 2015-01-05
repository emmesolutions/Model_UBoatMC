/*
Arduino Sketch Cmd_Rudders
 
 Rudders Command
 
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

void Cmd_Rudders (){

  // Variable
  int Rddr13_RLD;
  int Rddr13_9LD;
  int Rddr13_QLD;
  int Rddr13_RRD;
  int Rddr13_9RD;
  int Rddr13_QRD;
  int Ang_Clc;              // Rudders Angle Calculation (Parameter Mode)
  bool Rddrs_Move = false;

  // Each Turn Corresponds to a Quadrant (da 0 a 11)

  // 06 Reversing Port Direction
  if (OpCmd_Rd1 [6]){ 	// Execution OpCmd
    if (Q_Final == Quadrant){	// Check Execution OpCmd
      OpCmd_Rd1 [6] = false;
      OpCmd_Rd0 [1] = true; 	// Reset Rudders
      OpCmd_Rd0 [0] = true; 	// Engine Stop
      PrCmd_Rd0 [1] = 8 ;    // Reset Parameter
    }
    else{			// Setting Execution OpCmd
      Ang_Clc = Fnc_Rudders_AngClc (6);
      Rddr13_Pos = Rddr13_Rst - (Ang_Clc+Ang_CpP);
      Rddr24_Pos = Rddr24_Rst + (Ang_Clc+Ang_CpP);
      Rddrs_Move = true;
    }
  }
  if (OpCmd_Rd0 [6]){		// Care On OpCmd
    OpCmd_Rd0 [6] = false;
    OpCmd_Rd1 [1] = false;
    OpCmd_Rd1 [2] = false;
    OpCmd_Rd1 [3] = false;
    OpCmd_Rd1 [4] = false;
    OpCmd_Rd1 [5] = false;
    OpCmd_Rd1 [6] = true;
    OpCmd_Rd1 [7] = false;
    OpCmd_Rd0 [9] = true;  	 // Engine Run
    PrCmd_Rd0 [9] = 8 ;      // Engine Parameter
    Q_Initial = Quadrant;
    if (Quadrant < 6){		// Final Quadrant Calculation
      Q_Final = 12 - abs(Quadrant-6);
    }
    else{
      Q_Final = Quadrant-6;
    }
  }

  // 04 90° Turn Port Direction
  if (OpCmd_Rd1 [4]){		// Execution OpCmd
    if (Q_Final == Quadrant){	// Check Execution OpCmd
      OpCmd_Rd1 [4] = false;
      OpCmd_Rd0 [1] = true; 	// Reset Rudders
      OpCmd_Rd0 [0] = true; 	// Engine Stop
      PrCmd_Rd0 [1] = 8 ;    // Reset Parameter
    }
    else{			// Setting Execution OpCmd
      Ang_Clc = Fnc_Rudders_AngClc (4);
      Rddr13_Pos = Rddr13_Rst - (Ang_Clc+Ang_CpP);
      Rddr24_Pos = Rddr24_Rst + (Ang_Clc+Ang_CpP);
      Rddrs_Move = true;
    }
  }
  if (OpCmd_Rd0 [4]){		// Care On OpCmd
    OpCmd_Rd0 [4] = false;
    OpCmd_Rd1 [1] = false;
    OpCmd_Rd1 [2] = false;
    OpCmd_Rd1 [3] = false;
    OpCmd_Rd1 [4] = true;
    OpCmd_Rd1 [5] = false;
    OpCmd_Rd1 [6] = false;
    OpCmd_Rd1 [7] = false;
    OpCmd_Rd0 [9] = true;  	 // Engine Run
    PrCmd_Rd0 [9] = 8;       // Engine Parameter
    Q_Initial = Quadrant;
    if (Quadrant < 3){		// Final Quadrant Calculation
      Q_Final = 12-abs(Quadrant-3);
    }
    else{
      Q_Final = Quadrant-3;
    }
  }

  // 02 Quadrant Turn Port Direction
  if (OpCmd_Rd1 [2]){		// Execution OpCmd
    if (Q_Final == Quadrant){	// Check Execution OpCmd
      OpCmd_Rd1 [2] = false;
      OpCmd_Rd0 [1] = true; 	// Reset Rudders
      OpCmd_Rd0 [0] = true; 	// Engine Stop
      PrCmd_Rd0 [1] = 8 ;    // Reset Parameter
    }
    else{			// Setting Execution OpCmd
      Ang_Clc = Fnc_Rudders_AngClc (2);
      Rddr13_Pos = Rddr13_Rst - (Ang_Clc+Ang_CpP);
      Rddr24_Pos = Rddr24_Rst + (Ang_Clc+Ang_CpP);
      Rddrs_Move = true;
    }
  }
  if (OpCmd_Rd0 [2]){		// Care On OpCmd
    OpCmd_Rd0 [2] = false;
    OpCmd_Rd1 [1] = false;
    OpCmd_Rd1 [2] = true;
    OpCmd_Rd1 [3] = false;
    OpCmd_Rd1 [4] = false;
    OpCmd_Rd1 [5] = false;
    OpCmd_Rd1 [6] = false;
    OpCmd_Rd1 [7] = false;
    OpCmd_Rd0 [9] = true;  	 // Engine Run
    PrCmd_Rd0 [9] = 8 ;      // Engine Parameter
    Q_Initial = Quadrant;
    if (Q_Initial == 0){	// Final Quadrant Calculation
      Q_Final = 11;
    }
    else{
      Q_Final = Quadrant-1;
    }
  }

  // 01 Fixed/Reset Rudders Direction
  if (OpCmd_Rd1 [1]){		// Execution OpCmd
    Ang_Clc = Fnc_Rudders_AngClc (1);
    Rddr13_Pos = Rddr13_Rst + Ang_Clc;
    Rddr24_Pos = Rddr24_Rst - Ang_Clc;
    Rddrs_Move = true;
    if (PrCmd_Rd0 [1] == 8) OpCmd_Rd1 [1] = false; // Reset 
  }
  if (OpCmd_Rd0 [1]){		// Care On OpCmd
    OpCmd_Rd0 [1] = false;
    OpCmd_Rd0 [2] = false;
    OpCmd_Rd0 [3] = false;
    OpCmd_Rd0 [4] = false;
    OpCmd_Rd0 [5] = false;
    OpCmd_Rd0 [6] = false;
    OpCmd_Rd0 [7] = false;
    OpCmd_Rd0 [15] = false;
    OpCmd_Rd1 [1] = true;
    OpCmd_Rd1 [2] = false;
    OpCmd_Rd1 [3] = false;
    OpCmd_Rd1 [4] = false;
    OpCmd_Rd1 [5] = false;
    OpCmd_Rd1 [6] = false;
    OpCmd_Rd1 [7] = false;
    OpCmd_Rd1 [15] = false;
  }

  // 03 Quadrant Turn Starboard Direction
  if (OpCmd_Rd1 [3]){		// Execution OpCmd
    if (Q_Final == Quadrant){	// Check Execution OpCmd
      OpCmd_Rd1 [3] = false;
      OpCmd_Rd0 [1] = true; 	// Reset Rudders
      OpCmd_Rd0 [0] = true; 	// Engine Stop
      PrCmd_Rd0 [1] = 8 ;    // Reset Parameter
    }
    else{			// Setting Execution OpCmd
      Ang_Clc = Fnc_Rudders_AngClc (3);
      Rddr13_Pos = Rddr13_Rst + (Ang_Clc+Ang_CpS);
      Rddr24_Pos = Rddr24_Rst - (Ang_Clc+Ang_CpS);
      Rddrs_Move = true;
    }
  }
  if (OpCmd_Rd0 [3]){		// Care On OpCmd
    OpCmd_Rd0 [3] = false;
    OpCmd_Rd1 [1] = false;
    OpCmd_Rd1 [2] = false;
    OpCmd_Rd1 [3] = true;
    OpCmd_Rd1 [4] = false;
    OpCmd_Rd1 [5] = false;
    OpCmd_Rd1 [6] = false;
    OpCmd_Rd1 [7] = false;
    OpCmd_Rd0 [9] = true;  	 // Engine Run
    PrCmd_Rd0 [9] = 8 ;      // Engine Parameter
    Q_Initial = Quadrant;
    if (Q_Initial == 11){	// Final Quadrant Calculation
      Q_Final = 0;
    }
    else{
      Q_Final = Quadrant+1;
    }
  }

  // 05 90° Turn Starboard Direction
  if (OpCmd_Rd1 [5]){		// Execution OpCmd
    if (Q_Final == Quadrant){	// Check Execution OpCmd
      OpCmd_Rd1 [5] = false;
      OpCmd_Rd0 [1] = true; 	// Reset Rudders
      OpCmd_Rd0 [0] = true; 	// Engine Stop
      PrCmd_Rd0 [1] = 8 ;    // Reset Parameter
    }
    else{			// Setting Execution OpCmd
      Ang_Clc = Fnc_Rudders_AngClc (5);
      Rddr13_Pos = Rddr13_Rst + (Ang_Clc+Ang_CpS);
      Rddr24_Pos = Rddr24_Rst - (Ang_Clc+Ang_CpS);
      Rddrs_Move = true;
    }
  }
  if (OpCmd_Rd0 [5]){		// Care On OpCmd
    OpCmd_Rd0 [5] = false;
    OpCmd_Rd1 [1] = false;
    OpCmd_Rd1 [2] = false;
    OpCmd_Rd1 [3] = false;
    OpCmd_Rd1 [4] = false;
    OpCmd_Rd1 [5] = true;
    OpCmd_Rd1 [6] = false;
    OpCmd_Rd1 [7] = false;
    OpCmd_Rd0 [9] = true;  	 // Engine Run
    PrCmd_Rd0 [9] = 8 ;      // Engine Parameter
    Q_Initial = Quadrant;
    if (Quadrant > 8){		// Final Quadrant Calculation
      Q_Final = abs(9-Quadrant);
    }
    else{
      Q_Final = Quadrant+3;
    }
  }

  // 07 Reversing Starboard Direction
  if (OpCmd_Rd1 [7]){		// Execution OpCmd
    if (Q_Final == Quadrant){	// Check Execution OpCmd
      OpCmd_Rd1 [7] = false;
      OpCmd_Rd0 [1] = true; 	// Reset Rudders
      OpCmd_Rd0 [0] = true; 	// Engine Stop
      PrCmd_Rd0 [1] = 8 ;    // Reset Parameter
    }
    else{			// Setting Execution OpCmd
      Ang_Clc = Fnc_Rudders_AngClc (7);
      Rddr13_Pos = Rddr13_Rst + (Ang_Clc+Ang_CpS);
      Rddr24_Pos = Rddr24_Rst - (Ang_Clc+Ang_CpS);
      Rddrs_Move = true;
    }
  }
  if (OpCmd_Rd0 [7]){		// Care On OpCmd
    OpCmd_Rd0 [7] = false;
    OpCmd_Rd1 [1] = false;
    OpCmd_Rd1 [2] = false;
    OpCmd_Rd1 [3] = false;
    OpCmd_Rd1 [4] = false;
    OpCmd_Rd1 [5] = false;
    OpCmd_Rd1 [6] = false;
    OpCmd_Rd1 [7] = true;
    OpCmd_Rd0 [9] = true;  	 // Engine Run
    PrCmd_Rd0 [9] = 8;       // Engine Parameter
    Q_Initial = Quadrant;
    if (Quadrant > 5){		// Final Quadrant Calculation
      Q_Final = abs(6-Quadrant);
    }
    else{
      Q_Final = Quadrant+6;
    }
  }


  // 15 Fixed/Reset Rudders Depth
  if (OpCmd_Rd1 [15]){		// Execution OpCmd
    Ang_Clc = Fnc_Rudders_AngClc (15);
    Rddr13_Pos = Rddr13_Rst + Ang_Clc;
    Rddr24_Pos = Rddr24_Rst + Ang_Clc;
    Rddrs_Move = true;
    if (PrCmd_Rd0 [15] == 8) OpCmd_Rd1 [15] = false; // Reset 
  }
  if (OpCmd_Rd0 [15]){		// Care On OpCmd
    OpCmd_Rd1 [15] = true;
  }


  // Command Rudders Servo
  if (Rddrs_Move){    
    Rddr13_Servo.write(Rddr13_Pos);
    Rddr24_Servo.write(Rddr24_Pos);
    Rddrs_Move = false;
  }

}


/*
Function Rudders Parameter Angle Calculation
 Parameter:
 01 [OPCmd01 Port] Max Angle
 02 [OPCmd01 Port] Calculation Angle 
 03 [OPCmd01 Port] Calculation Angle
 04 [OPCmd01 Port] Calculation Angle
 05 [OPCmd01 Port] Calculation Angle
 06 [OPCmd01 Port] Calculation Angle
 07 [OPCmd01 Port] Min Angle
 08 [OPCmd01 Reset] Default Value
 09 [OPCmd01 Starboard] Min Angle
 10 [OPCmd01 Starboard] Calculation Angle
 11 [OPCmd01 Starboard] Calculation Angle
 12 [OPCmd01 Starboard] Calculation Angle
 13 [OPCmd01 Starboard] Calculation Angle
 14 [OPCmd01 Starboard] Calculation Angle
 15 [OPCmd01 Starboard] Max Angle
 Use:
 Ang_Clc = Fnc_Rudders_AngClc (Val)
 */

static int Fnc_Rudders_AngClc (int Val) {

  int Clc = 0;

  if (PrCmd_Rd0 [Val] == 8) { 
    // PrCmd 8 - Default
    switch (Val) {
    case 1:    // Fixed/Straight Direction
      Clc = 0;
      break;
    case 2:    // Quadrant Turn Port Direction
      Clc = Ang_QxD;
      break;
    case 3:    // Quadrant Turn Starboard Direction
      Clc = Ang_QxD;
      break;
    case 4:    // 90° Turn Port Direction
      Clc = Ang_9xD;
      break;
    case 5:    // 90° Turn Starboard Direction
      Clc = Ang_9xD;
      break;
    case 6:    // Reversing Port Direction
      Clc = Ang_RxD;
      break;
    case 7:    // Reversing Starboard Direction
      Clc = Ang_RxD;
      break;
    }
  }
  else {
    // PrCmd 1/7 - 9/15
    if (PrCmd_Rd0 [Val] < 8) { // PrCmd < 8 [OPCmd01 Port]
      if (PrCmd_Rd0 [Val] == 7) Clc = Ang_Min;
      if (PrCmd_Rd0 [Val] == 6) Clc = (int((Ang_Max-Ang_Min)/6)*1)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 5) Clc = (int((Ang_Max-Ang_Min)/6)*2)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 4) Clc = (int((Ang_Max-Ang_Min)/6)*3)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 3) Clc = (int((Ang_Max-Ang_Min)/6)*4)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 2) Clc = (int((Ang_Max-Ang_Min)/6)*5)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 1) Clc = Ang_Max;
      if (OpCmd_Rd1 [1]) Clc = -Clc;
    }
    if (PrCmd_Rd0 [Val] > 8) { // PrCmd > 8 [OPCmd01 Starboard]
      if (PrCmd_Rd0 [Val] == 9) Clc = Ang_Min;
      if (PrCmd_Rd0 [Val] == 10) Clc = (int((Ang_Max-Ang_Min)/6)*1)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 11) Clc = (int((Ang_Max-Ang_Min)/6)*2)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 12) Clc = (int((Ang_Max-Ang_Min)/6)*3)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 13) Clc = (int((Ang_Max-Ang_Min)/6)*4)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 14) Clc = (int((Ang_Max-Ang_Min)/6)*5)+Ang_Min;
      if (PrCmd_Rd0 [Val] == 15) Clc = Ang_Max;
    }
  }
  return Clc;
}


