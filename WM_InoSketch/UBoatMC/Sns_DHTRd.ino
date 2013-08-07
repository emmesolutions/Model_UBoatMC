/*
Arduino Sketch Sns_DHTRd
 
 Temperature and Humidity Sensor DHT22 Read
 
 Copyright (C) Martinelli Michele 2012 <michele@webemme.net>
 
 Ext_AuxCmd is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Sns_DHTRd () {

  // Variable

  DHT22_ERROR_t errorCode;

  errorCode = DHTSns.readData();
  switch(errorCode)
  {
  case DHT_ERROR_NONE:
    Ins_TmpInt = DHTSns.getTemperatureC();
    Ins_HmdInt = DHTSns.getHumidity();
    MsgAlm_00 [1] = false;    // Temperature and Humidity Read Fault
    break;
  case DHT_ERROR_CHECKSUM:
    MsgAlm_00 [1] = true;    // Temperature and Humidity Read Fault
    break;
  case DHT_BUS_HUNG:
    MsgAlm_00 [1] = true;    // Temperature and Humidity Read Fault
    break;
  case DHT_ERROR_NOT_PRESENT:
    MsgAlm_00 [1] = true;    // Temperature and Humidity Read Fault
    break;
  case DHT_ERROR_ACK_TOO_LONG:
    MsgAlm_00 [1] = true;    // Temperature and Humidity Read Fault
    break;
  case DHT_ERROR_SYNC_TIMEOUT:
    MsgAlm_00 [1] = true;    // Temperature and Humidity Read Fault
    break;
  case DHT_ERROR_DATA_TIMEOUT:
    MsgAlm_00 [1] = true;    // Temperature and Humidity Read Fault
    break;
  case DHT_ERROR_TOOQUICK:
    MsgAlm_00 [1] = true;    // Temperature and Humidity Read Fault
    break;
  }

}



