/*
Arduino Sketch Mod_GPS
 
 GPS Module EM406A Read
 
Copyright (C) 2015 Martinelli Michele 
 
 Mod_GPS is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Mod_GPS () {

  // Variable


  GPS_Feed(); 
  // Read Latitude + Longitude Long Format
  GPS.get_position(&GPS_Lat, &GPS_Lng, &GPS_Age);

  GPS_Feed(); 
  // Read Latitude + Longitude LongFloat Format
  GPS.f_get_position(&GPS_LatFloat, &GPS_LongFloat, &GPS_Age);

  // Read DateUTC + TimeUTC
  GPS_Feed();
  GPS.get_datetime(&GPS_DateUTC, &GPS_TimeUTC, &GPS_Age);
  GPS_Feed();
  GPS.crack_datetime(&GPS_DateY, &GPS_DateM, &GPS_DateD, &GPS_TimeH, &GPS_TimeM, &GPS_TimeS, &GPS_HdThs, &GPS_Age);

  // Read Speed Knots
  GPS_Feed();
  GPS_Speed = GPS.f_speed_knots();

  // Check
  GPS_Feed();
  GPS.stats(&GPS_Chars, &GPS_Sentences, &GPS_Failed);

  // Check Reading Errors
  if (GPS_Sentences == 0) {
    MsgAlm_00 [5] = true;    // GPS Fault
  } else {
    MsgAlm_00 [5] = false;
  } 


}

// Function GPS Read Data
// static void GPS_Dump(TinyGPS &GPS) {

// }

// Function GPS Feed
static bool GPS_Feed() {

  while (Serial1.available()){
    if (GPS.encode(Serial1.read())){ 
      return true;
    }
  }

  return false;

}


