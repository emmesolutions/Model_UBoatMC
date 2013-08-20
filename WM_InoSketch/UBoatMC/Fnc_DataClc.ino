/*
Arduino Sketch Fnc_DataClc
 
 Data Calculations
 
 Copyright (C) Martinelli Michele 2012 <michele@webemme.net>
 
 This is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Fnc_DataClc () {

  // Settings
  int Thr01_SonarF = 80;  // Front Sonar Threshold 01
  int Thr02_SonarF = 20;  // Front Sonar Threshold 02
  int Thr01_SonarB = 80;  // Bottom Sonar Threshold 01
  int Thr02_SonarB = 20;  // Bottom Sonar Threshold 02
  // Variable
  float Clc_Depth;
  float Clc_Speed;
  int Clc_SonarF;
  int Clc_SonarB;
  int Clc_Qnt;
  int Avg_CmpVal;
  int Avg_SpVal;
  float Avg_BtIVal;
  bool Thr01_SF = false;
  bool Thr02_SF = false;
  bool Thr01_SB = false;
  bool Thr02_SB = false;

  // Digital Input Status Calculation
  InpSts = 0;
  if (BlTFll) InpSts = InpSts + 2;
  if (BlTEpt) InpSts = InpSts + 4;
  if (FloodS) InpSts = InpSts + 8;
  if (CllSrF) InpSts = InpSts + 16;
  if (CllSrB) InpSts = InpSts + 32;
  if (CllSrL) InpSts = InpSts + 64;
  if (CllSrR) InpSts = InpSts + 128;
  if (RPiGIO) InpSts = InpSts + 256;

  // Digital Output Status Calculation
  OutSts = 0;    
  if (AuxLgt) OutSts = OutSts + 4;

  // GPS Calculation
  Ins_GPSLat = GPS_Lat;
  Ins_GPSLng = GPS_Lng;

  // Compass Calculation

  // Average Calculation
  if (Avg_Cmp [0] > 3){
    Avg_CmpVal = int ( (Avg_Cmp [1] + Avg_Cmp [2] + Avg_Cmp [3] )/3);
    Ins_CmpsHng = Val_CmpsHng;

    // Quadrant Calculation (12 da +15dg -15dg)
    Clc_Qnt = Ins_CmpsHng+15;
    if (Ins_CmpsHng>344){
      Clc_Qnt = 359-Ins_CmpsHng+15;
    }
    // Quadrant
    Quadrant=int(Clc_Qnt/30);

    // Cardinals Calculation
    switch(Quadrant){
    case 0 :
      Cardinals="N";
      break;
    case 1 :
      Cardinals="-";
      break;
    case 2 :
      Cardinals="-";
      break;
    case 3 :
      Cardinals="E";
      break;
    case 4 :
      Cardinals="-";
      break;
    case 5 :
      Cardinals="-";
      break;
    case 6 :
      Cardinals="S";
      break;
    case 7 :
      Cardinals="-";
      break;
    case 8 :
      Cardinals="-";
      break;
    case 9 :
      Cardinals="W";
      break;
    case 10:
      Cardinals="-";
      break;
    case 11:
      Cardinals="-";
      break;
    }
    Avg_Cmp [0] = 0;
  }
  else {
    Avg_Cmp [0] = Avg_Cmp [0] + 1;
    Avg_Cmp [Avg_Cmp [0]] = Val_CmpsHng;
  }

  // Speed Calculation

  // Average Calculation
  if (Avg_Speed [0] > 3){
    Avg_SpVal = float ( (Avg_Speed [1] + Avg_Speed [2] + Avg_Speed [3] )/3);
    // Speed
    Ins_Speed = Avg_SpVal * 0.75;
    Avg_Speed [0] = 0;
  }
  else {
    Avg_Speed [0] = Avg_Speed [0] + 1;
    Avg_Speed [Avg_Speed [0]] = GPS_Speed;
  }

  // Motors Temperature Calculation
  Ins_MEnTmp =  (5.0 * MEnTmp * 100.0) / 1024;
  Ins_BlTTmp =  (5.0 * BlTTmp * 100.0) / 1024;

  // Battery Voltage/Current Calculation

  // Engine Battery Current
  Ins_EngBtI = (EngBtI-512) * 0.06;
  
  // LiPo Battery Autonomy Calculation
  if (Clock_00) ){
    Clc_EngBtI = Clc_EngBtI + Ins_EngBtI;
    Wait60 = Wait60 + 1;
  } 
  if (Wait60 == 60){
	 Avg_EngBtI = (int (Tot_EngBtI / 60) * 1000);
	 Clc_EngBtI = 0;
  Wait60 = 0;

  LiPo_Atmy = (LiPo_BtPw / Avg_EngBtI) * 60;
  Ins_BtAtmy = LiPo_Atmy - TimeSec;
  } 
  
  
  // Hardware Battery Voltage
  Ins_HdwBtV = HdwBtV / 102.50;
  // Engine Battery Voltage
  Ins_EngBtV = EngBtV / 65.15;
  // RaspberryPi Supply
  Ins_RPiBtV = RPiBtV / 153.00;

  // Sonar Sensor (MB7078 XL-MaxSonar-WRCA)
  // About 5mV-Cm (Vcc/1024)
  // Front
  Clc_SonarF = SonarF * 1;
  Ins_SonarF = Clc_SonarF;
  if (Ins_SonarF < Thr01_SonarF) Thr01_SF = true;
  if (Ins_SonarF < Thr02_SonarF) Thr02_SF = true;
  // Bottom
  Clc_SonarB = SonarB * 1;
  Ins_SonarB = Clc_SonarB;
  if (Ins_SonarB < Thr01_SonarB) Thr01_SB = true;
  if (Ins_SonarB < Thr02_SonarB) Thr02_SB = true;

  // Collision Sensors (xxxx)
  // 1xxx - Front
  //  1xx - Bottom
  //   1x - Left
  //    1 - Right
  Ins_CllSnr = 0;
  if (CllSrF) Ins_CllSnr = Ins_CllSnr + 1000;
  if (CllSrB) Ins_CllSnr = Ins_CllSnr + 100;
  if (CllSrL) Ins_CllSnr = Ins_CllSnr + 10;
  if (CllSrR) Ins_CllSnr = Ins_CllSnr + 1;

}




