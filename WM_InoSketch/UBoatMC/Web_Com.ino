/*
Arduino Sketch Web_Com
 
 Web Comunication to RaspberryPi
 
 Copyright (C) Martinelli Michele 2014 <michele@webemme.net>
 
 Web_Com is free software: you can redistribute it and/or modify it
 under the terms of the GNU General Public License as published by the
 Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 
 You should have received a copy of the GNU General Public License along
 with this program. If not, see <http://www.gnu.org/licenses/>.
 
 */

void Web_Com () {

  EthernetClient client = server.available();

  // Check TimeOut (Web_TimeOut)
  if (Web_TimeMax < 1) {  
    Web_TimeMax = TimeSec +Web_TimeOut;
  }
  if (TimeSec > Web_TimeMax) {  
    OpCmd_Rd0 [0] = true;            // Engine Stop
    MsgAlm_00 [10] = true;              // Web TimeOut
  }

  if (client) {

    // Link LED
    digitalWrite(SgLink_Pin, HIGH);

    Web_TimeMax = 0;

    // Check Allarm Msg.
    // Check if No Allarms
    MsgAlm_00 [0]=true ;
    for (int x=1; x<=31; x++) {
      if (MsgAlm_00 [x]) MsgAlm_00 [0]=false ;
    }
    // Select Allarm to Read  
    IdxAlm++  ;
    while(!MsgAlm_00 [IdxAlm]){
      // Inc. Alarm Index
      if (IdxAlm < 31) {
        IdxAlm++  ;
      } 
      else {
        IdxAlm = 0 ;
      }
    }
    MsgAlm = IdxAlm ;
    // Reset Web TimeOut Allarm
    if (IdxAlm = 10) MsgAlm_00 [10] = false;  // Web TimeOut

    // An HTTP request ends with a blank line
    bool currentLineIsBlank = true;
    bool sentHeader = false;

    while (client.connected()) {
      if (client.available()) {

        if(!sentHeader){
          // Send Standard HTTP Response Header
          client.println("HTTP/1.1 200 OK");
          client.println("Content-Type: text/html");
          client.println();
          sentHeader = true;
        }

        char c = client.read();

        if(OpCmd_Read && c == ' ') {
          OpCmd_Read = false;
        }
        if(PrCmd_Read && c == ' ') {
          PrCmd_Read = false;
        }

        if(c == '$') {
          OpCmd_Read = true;
          PrCmd_Read = false;
        }
        if(c == '@') {
          OpCmd_Read = false;
          PrCmd_Read = true;
        }

        // Reading OprCmd
        if(OpCmd_Read){

          for (int i=0; i <= 31; i++) {
            if ( c == WebCmd_Chr [i]) {
              if ( LastCmd != i ) {
                OpCmd_Rd0 [i] = true;
                LastCmd = i;
                OprCmd=i;
                OpCmd_Rd = true;
              }
            }
          }

        }
        // End Reading OprCmd

        // Reading PrmCmd
        if(PrCmd_Read){

          for (int i=0; i <= 31; i++) {
            if ( c == WebCmd_Chr [i]) {
              PrmCmd = i;
              PrCmd_Rd0 [OprCmd] = i;
            }
          }

        }
        // End Reading PrmCmd

        // OpCmd 00-15 Status Calculation
        CmdSts = 0;
        int OpCmd_Inc = 1;
        for (int i=1; i <= 15; i++) {
          OpCmd_Inc = OpCmd_Inc*2;
          if (OpCmd_Rd1 [i] | OpCmd_Rd0 [i]) CmdSts = CmdSts + OpCmd_Inc;
        }


        if (c == '\n' && currentLineIsBlank) {

          // Page Initialize
          client.println("<html>");
          client.println("<head>");

          client.println("<title>");
          //
          client.println("</title>");

          // Stylesheet
          client.println("<style type='text/css'>");
          client.println("body{background: #495154; color:#333333; text-align:center;}");
          client.println("</style>");

          client.println("<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' >");

          // RaspberryPi Arduino Web Interface
          // <meta http-equiv='refresh' content='1;url=http://www.xxx'>
          client.println("<meta http-equiv='refresh' content='0;url=");
          // client.print("http://RPi_IPAd/RPi_Path/index.php?");
          client.print("http://"); 
          client.print(RPi_IPAd); 
          client.print(RPi_Path); 
          client.print("/index.php?");

          // TimeSc=xxx
          client.print("TimeSc=");
          client.print(TimeSec);
          client.print("&");

          // DateD=xxx DateM=xxx DateY=xxx
          client.print("DateD=");
          client.print(GPS_DateD);
          client.print("&");
          client.print("DateM=");
          client.print(GPS_DateM);
          client.print("&");
          client.print("DateY=");
          client.print(GPS_DateY);
          client.print("&");
          // TimeH=xxx TimeM=xxx
          client.print("TimeH=");
          client.print(GPS_TimeH);
          client.print("&");
          client.print("TimeM=");
          client.print(GPS_TimeM);
          client.print("&");

          // GPSLat=xxx GPSLng=xxx
          client.print("GPSLat=");
          client.print(Ins_GPSLat);
          client.print("&");
          client.print("GPSLng=");
          client.print(Ins_GPSLng);
          client.print("&");
          // CmpsH=xxx
          client.print("CmpsH=");
          client.print(Ins_CmpsHng);
          client.print("&");
          // CmpsP=xxx
          client.print("CmpsP=");
          client.print(Val_CmpsPch);
          client.print("&");
          // CmpsR=xxx
          client.print("CmpsR=");
          client.print(Val_CmpsRll);
          client.print("&");          
          // Speed=xxx
          client.print("Speed=");
          client.print(Ins_Speed);
          client.print("&");
          // Depth=xxx
          client.print("Depth=");
          client.print(Ins_Depth);
          client.print("&");

          // TmpExt=xxx
          client.print("TmpExt=");
          client.print(Ins_TmpExt);
          client.print("&");
          // TmpInt=xxx HmdInt=xxx
          client.print("TmpInt=");
          client.print(Ins_TmpInt);
          client.print("&");
          client.print("HmdInt=");
          client.print(Ins_HmdInt);
          client.print("&");
          // TmpH2O=xxx
          client.print("TmpH2O=");
          client.print(Ins_TmpH2O);
          client.print("&");
          // MEnTmp=xxx
          client.print("MEnTmp=");
          client.print(Ins_MEnTmp);
          client.print("&");
          // BlTTmp=xxx
          client.print("BlTTmp=");
          client.print(Ins_BlTTmp);
          client.print("&");
          
          // HdwBtV=xxx
          client.print("HdwBtV=");
          client.print(Ins_HdwBtV);
          client.print("&");
          // EngBtV=xxx
          client.print("EngBtV=");
          client.print(Ins_EngBtV);
          client.print("&");     
          // EngBtI=xxx
          client.print("EngBtI=");
          client.print(Ins_EngBtI);
          client.print("&");            
          // RPiBtV=xxx
          client.print("RPiBtV=");
          client.print(Ins_RPiBtV);
          client.print("&");
          // BtAtmy=xxx
          client.print("BtAtmy=");
          client.print(Ins_BtAtmy);
          client.print("&");
          // MEnSnI=xxx
          client.print("MEnSnI=");
          client.print(Ins_MEnSnI);
          client.print("&");
          // BlTSnI=xxx
          client.print("BlTSnI=");
          client.print(Ins_BlTSnI);
          client.print("&");
          // Rd1Trm=xxx
          client.print("Rd1Trm=");
          client.print(Ins_Rd1Trm);
          client.print("&");
          // Rd2Trm=xxx
          client.print("Rd2Trm=");
          client.print(Ins_Rd2Trm);
          client.print("&");
          
          // SonarF=xxx
          client.print("SonarF=");
          client.print(Ins_SonarF);
          client.print("&");
          // SonarB=xxx
          client.print("SonarB=");
          client.print(Ins_SonarB);
          client.print("&");          
          // CllSnr=xxx
          client.print("CllSnr=");
          client.print(Ins_CllSnr);
          client.print("&");

          // OprCmd=xxx
          client.print("OprCmd=");
          client.print(OprCmd);
          client.print("&");
          // PrmCmd=xxx
          client.print("PrmCmd=");
          client.print(PrmCmd);
          client.print("&");
          // MsgAlm=xxx
          client.print("MsgAlm=");
          client.print(MsgAlm);
          client.print("&");
          // CmdSts=xxx
          client.print("CmdSts=");
          client.print(CmdSts);
          client.print("&");
          // InpSts=xxx
          client.print("InpSts=");
          client.print(InpSts);
          client.print("&");          
          // OutSts=xxx
          client.print("OutSts=");
          client.print(OutSts);

          // End
          client.println("'>");

          client.println("</head>");

          // Body
          client.println("<body>");

          /* */

          // Close Body
          client.println("</body></html>");

          break;
        }
        if (c == '\n') {
          currentLineIsBlank = true;
        }
        else if (c != '\r') {
          currentLineIsBlank = false;
        }
      }
    }
    delay(3);
    client.stop(); // Close Connection:

    // Link LED
    digitalWrite(SgLink_Pin, LOW);

  }

}


















