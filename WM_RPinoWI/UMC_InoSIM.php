<?php
/*
	[UMC_InoSIM]
	U-boat Module Control Web Interface - Arduino HTTP SIM

    	Copyright (C) 2014 Martinelli Michele

   	This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

header('Access-Control-Allow-Origin: *');

/* Arduino Data Calculation */
	/* GET Values */
	global $Ino_TimeSc;

	global $Ino_DataY;
	global $Ino_DataM;
	global $Ino_DataD;
	global $Ino_TimeH;
	global $Ino_TimeM;

	global $Ino_GPSLat;
	global $Ino_GPSLng;
	global $Ino_CmpssH;
	global $Ino_CmpssP;
	global $Ino_CmpssR;
	global $Ino_Speed;
	global $Ino_Depth;

	global $Ino_TmpExt;
	global $Ino_TmpInt;
	global $Ino_HmdInt;
	global $Ino_TmpH2O;	
	global $Ino_MEnTmp;
	global $Ino_BlTTmp;

	global $Ino_HdwBtV;
	global $Ino_EngBtV;
	global $Ino_EngBtI;	
	global $Ino_RPiBtV;
	global $Ino_BtAtmy;	
	global $Ino_MEnSnI;
	global $Ino_BlTSnI;
	global $Ino_Rd1Trm;
	global $Ino_Rd2Trm;
		
	global $Ino_SonarF;
	global $Ino_SonarB;
	global $Ino_CllSnr;

	global $Ino_OprCmd;
	global $Ino_PrmCmd;
	global $Ino_MsgAlm;
	global $Ino_CmdSts;
	global $Ino_InpSts;
	global $Ino_OutSts;
	/*  */
	global $Ino_CmdSBIN;
 	global $Ino_CmdSLen;
	global $Ino_CmdSSTR;

	global $Ino_InpSBIN;
 	global $Ino_InpSLen;
	global $Ino_InpSSTR;

	global $Ino_TON_Sec;
	global $Ino_TON_Min;
	global $Ino_TON_Hor;
	global $Ino_CMP_Lat;
	global $Ino_CMP_Lng;
	global $Ino_CMP_Crd;
 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

        <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' >

  <?php
  
	echo '<meta http-equiv="refresh" content="0;url=http://' . "rpinowi.webemme.net/index.php?" ;
	
	// Operator Command+Parameter
	$uri= $_SERVER['REQUEST_URI'];
	// echo $uri;
	// echo '</br>';
	$CmdPrm = substr($uri,27);
	$Cmd = substr($CmdPrm,1,1);
	$Prm = substr($CmdPrm,3,1);
	// echo 'Comando: '. $Cmd.$Prm;	
	// echo '</br>';

        // TimeSc=xxx
        $Ino_TimeSc = rand(1,1000);
        echo 'TimeSc=';
        echo $Ino_TimeSc;
        echo '&';
 
        // DateD=xxx DateM=xxx DateY=xxx
        $Ino_DataD = rand(1,31);
        $Ino_DataM = rand(1,12);
        $Ino_DataY = rand(2000,2014);
        echo 'DateD=';
        echo $Ino_DataD;
        echo '&';
        echo 'DateM=';
        echo $Ino_DataM;
        echo '&';
        echo 'DateY=';
        echo $Ino_DataY;
        echo '&';
        // TimeH=xxx TimeM=xxx
        $Ino_TimeH = rand(0,23);
        $Ino_TimeM = rand(0,59);        
        echo 'TimeH=';
        echo $Ino_TimeH;
        echo '&';
        echo 'TimeM=';
        echo $Ino_TimeM;
        echo '&';
  
        // GPSLat=xxx GPSLng=xxx
        $Ino_GPSLat= rand(10100,99100);
        $Ino_GPSLng= rand(10100,99100);         
        echo "GPSLat=";
        echo $Ino_GPSLat;
        echo '&';
        echo "GPSLng=";
        echo $Ino_GPSLng;
        echo '&';
        // CmpsH=xxx
        $Ino_CmpsHng= rand(0,90);
        echo "CmpsH=";
        echo $Ino_CmpsHng;
        echo '&';
        // CmpsP=xxx
        $Ino_CmpsPch= rand(0,45);        
        echo "CmpsP=";
        echo $Ino_CmpsPch;
        echo '&';
        // CmpsR=xxx
        $Ino_CmpsRll= rand(0,45);        
        echo "CmpsR=";
        echo $Ino_CmpsRll;
        echo '&';         
        // Speed=xxx
        $Ino_Speed= rand(0,100);          
        echo "Speed=";
        echo $Ino_Speed;
        echo '&';
        // Depth=xxx
        $Ino_Depth= rand(0,100);         
        echo "Depth=";
        echo $Ino_Depth;
        echo '&';

        // TmpExt=xxx
        $Ino_TmpExt= rand(10,40); 
        echo "TmpExt=";
        echo $Ino_TmpExt;
        echo '&';
        // TmpInt=xxx HmdInt=xxx
        $Ino_TmpInt= rand(10,40); 
        $Ino_HmdInt= rand(30,80);                 
        echo "TmpInt=";
        echo $Ino_TmpInt;
        echo '&';
        echo "HmdInt=";
        echo $Ino_HmdInt;
        echo '&';
        // TmpH2O=xxx
        $Ino_TmpH2O= rand(10,40);         
        echo "TmpH2O=";
        echo $Ino_TmpH2O;
        echo '&';
        // MEnTmp=xxx
        $Ino_MEnTmp= rand(20,40);         
        echo "MEnTmp=";
        echo $Ino_MEnTmp;
        echo '&';
        // BlTTmp=xxx
        $Ino_BlTTmp= rand(20,40);         
        echo "BlTTmp=";
        echo $Ino_BlTTmp;
        echo '&';
      
        // HdwBtV=xxx
        $Ino_HdwBtV= rand(10,13);          
        echo "HdwBtV=";
        echo $Ino_HdwBtV;
        echo '&';
        // EngBtV=xxx
        $Ino_EngBtV= rand(10,12);
        echo "EngBtV=";
        echo $Ino_EngBtV;
        echo '&';     
        // EngBtI=xxx
        $Ino_EngBtI= rand(1,5);
        echo "EngBtI=";
        echo $Ino_EngBtI;
        echo '&';            
        // RPiBtV=xxx
        $Ino_RPiBtV= rand(2,4);
        echo "RPiBtV=";
        echo $Ino_RPiBtV;
        echo '&';
        // BtAtmy=xxx
        $Ino_BtAtmy= rand(1,3);        
        echo "BtAtmy=";
        echo $Ino_BtAtmy;
        echo '&';
        // MEnSnI=xxx
        $Ino_MEnSnI= rand(0,8);
        echo "MEnSnI=";
        echo $Ino_MEnSnI;
        echo '&';
        // BlTSnI=xxx
        $Ino_BlTSnI= rand(0,8);
        echo "BlTSnI=";
        echo $Ino_BlTSnI;
        echo '&';
        // Rd1Trm=xxx
        $Ino_Rd1Trm= rand(0,100);
        echo "Rd1Trm=";
        echo $Ino_Rd1Trm;
        echo '&';
        // Rd2Trm=xxx
        $Ino_Rd2Trm= rand(0,100);
        echo "Rd2Trm=";
        echo $Ino_Rd2Trm;
        echo '&';
          
        // SonarF=xxx
        $Ino_SonarF= rand(0,100);
        echo "SonarF=";
        echo $Ino_SonarF;
        echo '&';
        // SonarB=xxx
        $Ino_SonarB= rand(0,100);
        echo "SonarB=";
        echo $Ino_SonarB;
        echo '&';          
        // CllSnr=xxx
        $Ino_CllSnr= rand(0,100);
        echo "CllSnr=";
        echo $Ino_CllSnr;
        echo '&';

	// Operator Command+Parameter
	// Check if Command is Send 
	if($Cmd == '') { 
		$Ino_OprCmd = rand(0,31); } else { 
		$Ino_OprCmd = $Cmd; } 
 	if($Prm == '') { 
		$Ino_PrmCmd = rand(0,7); } else { 
		$Ino_PrmCmd = $Prm; }
        // OprCmd=xxx
        // $Ino_OprCmd= rand(0,31);        
        echo "OprCmd=";
        echo $Ino_OprCmd;
        echo '&';
        // PrmCmd=xxx
        // $Ino_PrmCmd= rand(0,7); 
        echo "PrmCmd=";
        echo $Ino_PrmCmd;
        echo '&';

        // MsgAlm=xxx
        $Ino_MsgAlm= rand(0,31); 
        echo "MsgAlm=";
        echo $Ino_MsgAlm;
        echo '&';
        // CmdSts=xxx
        $Ino_CmdSts= rand(0,31); 
        echo "CmdSts=";
        echo $Ino_CmdSts;
        echo '&';
        // InpSts=xxx
        $Ino_InpSts= rand(0,31);
        echo "InpSts=";
        echo $Ino_InpSts;
        echo '&';          
        // OutSts=xxx
        $Ino_OutSts= rand(0,31);
        echo "OutSts=";
        echo $Ino_OutSts;

        // End
        echo '">';

  ?>

		<title> "U-boat Module Control Web Interface - Arduino HTTP SIM" </title>	
	
		<meta <?php echo 'name="description" content= ""' ?> />
		<meta <?php echo 'name="author" content= ""' ?> />

		<meta name="viewport" content="width=device-width, 
					initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		
		
		</head>

	<body>
	
<?php

?>	

	
	</body>

</html>	
