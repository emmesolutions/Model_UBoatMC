/*
Arduino Sketch Cmd_Rudders
 
 Rudders Command
 
 Copyright (C) Martinelli Michele 2013 <michele@webemme.net>
 
 Cmd_Rudders is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Cmd_Rudders (){

  // Variable
  int Rudder_RLD;
  int Rudder_9LD;
  int Rudder_QLD;
  int Rudder_RRD;
  int Rudder_9RD;
  int Rudder_QRD;
  int Ang_Clc;              // Rudders Angle Calculation (Parameter Mode)
  bool Ruddr_Move = false;


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
      RuddrD_Pos = Rudder_Rst - Ang_Clc;
      Ruddr_Move = true;
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
      RuddrD_Pos = Rudder_Rst - Ang_Clc;
      Ruddr_Move = true;
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
      RuddrD_Pos = Rudder_Rst - Ang_Clc;
      Ruddr_Move = true;
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

  // 01 Fixed/Straight Direction/Immersion Rudders
  // Parameter:
  // 01 Rudder Direction Port Max Angle
  // 02 Rudder Direction Port Calculation Angle
  // 03 Rudder Direction Port Calculation Angle
  // 04 Rudder Direction Port Min Angle
  // 05 Rudder Immersion Dive 1/3 Angle
  // 06 Rudder Immersion Dive 2/3 Angle
  // 07 Rudder Immersion Dive 3/3 Angle
  // 08 Rudders Reset Default Value
  // 09 Rudder Direction Starboard Max Angle
  // 10 Rudder Direction Starboard Calculation Angle
  // 11 Rudder Direction Starboard Calculation Angle
  // 12 Rudder Direction Starboard Min Angle
  // 13 Rudder Immersion Emersion 1/3 Angle
  // 14 Rudder Immersion Emersion 2/3 Angle
  // 15 Rudder Immersion Emersion 3/3 Angle
  if (OpCmd_Rd1 [1]){		// Execution OpCmd
 // Rudder Direction
	if (PrCmd_Rd0 [1] >=1 | PrCmd_Rd0 [1] <=4) {
    RuddrD_Pos = Rudder_Rst + Ang_Clc;
	}
	if (PrCmd_Rd0 [1] >=9 | PrCmd_Rd0 [1] <=12) {
    RuddrD_Pos = Rudder_Rst + Ang_Clc;
	}
	// Rudder Immersion
	if (PrCmd_Rd0 [1] >=5 | PrCmd_Rd0 [1] <=7) {
    RuddrI_Pos = Rudder_Rst + Ang_Clc;
	}
	if (PrCmd_Rd0 [1] >=13 | PrCmd_Rd0 [1] <=15) {
    RuddrI_Pos = Rudder_Rst + Ang_Clc;
	}
    Ruddr_Move = true;
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
    OpCmd_Rd1 [1] = true;
    OpCmd_Rd1 [2] = false;
    OpCmd_Rd1 [3] = false;
    OpCmd_Rd1 [4] = false;
    OpCmd_Rd1 [5] = false;
    OpCmd_Rd1 [6] = false;
    OpCmd_Rd1 [7] = false;
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
      RuddrD_Pos = Rudder_Rst + Ang_Clc;
      Ruddr_Move = true;
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
      RuddrD_Pos = Rudder_Rst + Ang_Clc;
      Ruddr_Move = true;
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
      RuddrD_Pos = Rudder_Rst + Ang_Clc;
      Ruddr_Move = true;
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

  // Command Rudders Direction/Immersion Servo
  if (Ruddr_Move){
    RuddrD_Servo.write(RuddrD_Pos);
    RuddrI_Servo.write(RuddrI_Pos);
    Ruddr_Move = false;
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
 08 [OPCmd01 Straight/Reset] Default Value
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
