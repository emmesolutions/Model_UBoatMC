/*
Arduino Sketch Sns_PrsVal
 
 Pressure Sensor SSCDRNN015PAAA5 Read
 
Copyright (C) 2015 Martinelli Michele 
 
 This is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */
 
void Sns_PrsVal () {
 
  // Variable
  float Clc_Depth;
  int Avg_PrsVal;
  
  // Reset Depth Value (First 3sec)
  if (TimeSec < 10){
    Rst_PrsVal = PrsVal;
  }
 
  // Depth Calculation
  // Average Calculation
  if (Avg_Depth [0] > 3){
    Avg_PrsVal = int ( (Avg_Depth [1] + Avg_Depth [2] + Avg_Depth [3] )/3);
    Clc_Depth = (Avg_PrsVal - Rst_PrsVal);
    if (Clc_Depth < 0) Clc_Depth = 0;
    // Depth
    Ins_Depth = Clc_Depth * 1.40;
    Avg_Depth [0] = 0;
  }
  else{
    Avg_Depth [0] = Avg_Depth [0] + 1;
    Avg_Depth [Avg_Depth [0]] = PrsVal;
  }
 
}
