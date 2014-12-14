/*
Arduino Sketch Fnc_Debug
 
 Serial Print Debug
 
 Copyright (C) Martinelli Michele 2014 <michele@webemme.net>
 
 Fnc_Debug is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Fnc_Debug()
{

  Serial.println("U-Boat Module Control");
  Serial.println("Arduino Hardware Control + RaspberryPi Web Interface");
  Serial.print("Version "); 
  Serial.println(Ino_Vers);
  Serial.println("-----------------------------------------------------------------------------");

  Serial.print("TimeUp: ");
  Serial.println(TimeSec);
  Serial.println();

  Serial.print("GPS Date: ");
  Serial.print(static_cast<int>(GPS_DateM));
  Serial.print("/");
  Serial.print(static_cast<int>(GPS_DateD));
  Serial.print("/");
  Serial.print(GPS_DateY);
  Serial.print(" GPS Time: ");
  Serial.print(static_cast<int>(GPS_TimeH));
  Serial.print(":");
  Serial.print(static_cast<int>(GPS_TimeM));
  Serial.println();
  Serial.println();

  // Op. Command
  Serial.print("OprCmd   = ");   Serial.print(OprCmd);
  Serial.print(" - ");
  // Cmd Parameter
  Serial.print("PrmCmd   = ");   Serial.print(PrmCmd);
  Serial.println();
  // Msg. Alarm
  Serial.print("MsgAlm   = ");
  Serial.println(MsgAlm);
  // Cmd. Status
  Serial.print("CmdSts   = ");
  Serial.print(CmdSts); Serial.print(" - "); Serial.println(CmdSts, BIN);
  // Inp. Status
  Serial.print("InpSts   = ");
  Serial.print(InpSts); Serial.print(" - "); Serial.print(InpSts, BIN);
   // Out. Status
  Serial.print("  ");
  Serial.print("OutSts   = ");
  Serial.print(OutSts); Serial.print(" - "); Serial.print(OutSts, BIN);
  Serial.println();

  // Web TimeOut
  Serial.print("WebTmO   = ");
  Serial.println(Web_TimeMax);
  Serial.println();

  // Hardware Battery Voltage Value
  Serial.print("Hdw = ");
  Serial.print(Ins_HdwBtV);  
  Serial.println(" V ");
  // Engine Battery Voltage Value
  Serial.print("BtV = ");
  Serial.print(Ins_EngBtV);  
  Serial.println(" V ");
  // Engine Battery Current Value
  Serial.print("BtI = ");
  Serial.print(Ins_EngBtI);
  Serial.println(" A ");
  // RaspberryPi Supply Value
  Serial.print("RPi = ");
  Serial.print(Ins_RPiBtV);  
  Serial.println(" V ");
  Serial.println();
  // LiPo Battery Autonomy
  Serial.print("BtAtmy = ");
  Serial.print(Ins_BtAtmy);
  Serial.println(" Sec. ");
  Serial.println();
  
  // GPS Data
  Serial.println("GPS Data:");
  Serial.print("Lat/Long(10^-5 deg): ");
  Serial.print(Ins_GPSLat);
  Serial.print(", ");
  Serial.print(Ins_GPSLng);
  Serial.println();

  Serial.print("Speed(10^-2 knots): ");
  Serial.println(GPS_Speed);

  Serial.print("Characters: ");
  Serial.print(GPS_Chars);
  Serial.print(" Sentences: ");
  Serial.print(GPS_Sentences);
  Serial.print(" Failed Checksum: ");
  Serial.println(GPS_Failed);
  Serial.println();

  // Compass Data
  Serial.println("Compass Data:");

  Serial.print("Heading: ");
  Serial.print(Ins_CmpsHng);
  Serial.print("Dg. ");
  Serial.print(" Pitch: ");
  Serial.print(Val_CmpsPch);
  Serial.print("Dg. ");  
  Serial.print(" Roll: ");
  Serial.print(Val_CmpsRll);
  Serial.print("Dg. ");
  
  Serial.print(" Cardinals: ");
  Serial.print(Cardinals);
  Serial.print(" Quadrant: ");
  Serial.println(Quadrant);
  Serial.println();

  // Sensors  Data
  // Depth
  Serial.print("Depth:");
  Serial.print(Ins_Depth);
  Serial.print("  ");
  if  (!BlTFll) Serial.println("B.Tank = Filling");
  if  (!BlTEpt) Serial.println("B.Tank = Empty");
  if  (BlTEpt && BlTFll) Serial.println("B.Tank = -----");
  Serial.println();
  // Collision Radar
  Serial.print("SonarF:");
  Serial.println(Ins_SonarF); 
  Serial.print("SonarB:");
  Serial.println(Ins_SonarB);
  Serial.print("CllSnr:");
  Serial.println( Ins_CllSnr);
  Serial.println();

  // Internal Temperature
  Serial.print("Internal Temperature = ");
  Serial.print(Ins_TmpInt);
  Serial.print("dg.C ");
  // Internal Humidity
  Serial.print("Humidity = ");
  Serial.print(Ins_HmdInt);
  Serial.print("%RH ");
  Serial.println();
  // External Temperature
  Serial.print("External Temperature = ");
  Serial.print(Ins_TmpExt);
  Serial.print("dg.C ");
  Serial.println();
  // H2O Temperature
  Serial.print("Water Temperature = ");
  Serial.print(Ins_TmpH2O);
  Serial.print("dg.C ");
  Serial.println();

  Serial.println("-----------------------------------------------------------------------------");

}









