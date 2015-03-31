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

	// Enable Cross-Origin Resource Sharing (CORS)
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
        
	        <style>
		  body {
			color: #999999;
			background: #333333;
			}
		</style>

  <?php
  
	echo '<meta http-equiv="refresh" content="0;url=http://' . "rpinowi.webemme.net/index.php?" ;
	
	// Operator Command+Parameter
	$uri= $_SERVER['REQUEST_URI'];
	// echo $uri;
	// echo '</br>';
	$CmdPrm = substr($uri,16);
	// echo $CmdPrm; 
	// $Cmd = substr($CmdPrm,1,1);
	
		switch ($CmdPrm{1}) {
		    case '': $Cmd = '31'; break;
		    case '0': $Cmd = '0'; break;
		    case '1': $Cmd = '1'; break;
		    case '2': $Cmd = '2'; break;
		    case '3': $Cmd = '3'; break;
		    case '4': $Cmd = '4'; break;
		    case '5': $Cmd = '5'; break;
		    case '6': $Cmd = '6'; break;
		    case '7': $Cmd = '7'; break;
    		    case '8': $Cmd = '8'; break;
		    case '9': $Cmd = '9'; break;
		    case 'A': $Cmd = '10'; break;
    		    case 'B': $Cmd = '11'; break;	
    		    case 'C': $Cmd = '12'; break;	
    		    case 'D': $Cmd = '13'; break;	
    		    case 'E': $Cmd = '14'; break;	
    		    case 'F': $Cmd = '15'; break;
    		    /**/
    		    case 'N': $Cmd = '21'; break;
    		    case 'O': $Cmd = '22'; break;
    		    case 'P': $Cmd = '23'; break;	
    		    /**/
    		    case 'R': $Cmd = '25'; break;
    		    case 'S': $Cmd = '26'; break;
    		    case 'T': $Cmd = '27'; break;		        		        		    		
		}
	
	$Prm = substr($CmdPrm,3,1);
	// echo '</br>';
	// echo 'Comando: '. $Cmd.$Prm;	
	// echo '</br>';

        // TimeSc=xxx
        $Ino_TimeSc = rand(11,1000);
        echo 'TimeSc=';
        echo $Ino_TimeSc;
        echo '&';
 
        // DateD=xxx DateM=xxx DateY=xxx
        $Ino_DataD = date("d");
        $Ino_DataM = date("m");
        $Ino_DataY = date("Y");
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
        $Ino_TimeH = date("h");
        $Ino_TimeM = date("i");     
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
        $Ino_CmpsHng= rand(0,180);
        echo "CmpsH=";
        echo $Ino_CmpsHng;
        echo '&';
        // CmpsP=xxx
        $Ino_CmpsPch= rand(0,30);        
        echo "CmpsP=";
        echo $Ino_CmpsPch;
        echo '&';
        // CmpsR=xxx
        $Ino_CmpsRll= rand(0,30);        
        echo "CmpsR=";
        echo $Ino_CmpsRll;
        echo '&';         
        // Speed=xxx
        $Ino_Speed= rand(0,50);          
        echo "Speed=";
        echo $Ino_Speed;
        echo '&';
        // Depth=xxx
        $Ino_Depth= rand(0,50);         
        echo "Depth=";
        echo $Ino_Depth;
        echo '&';

        // TmpExt=xxx
        $Ino_TmpExt= rand(10,40); 
        echo "TmpExt=";
        echo $Ino_TmpExt;
        echo '&';
        // TmpInt=xxx HmdInt=xxx
        $Ino_TmpInt= rand(10,50); 
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
        $Ino_HdwBtV= rand(5,8);          
        echo "HdwBtV=";
        echo $Ino_HdwBtV;
        echo '&';
        // EngBtV=xxx
        $Ino_EngBtV= rand(9,13);
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
		$Ino_OprCmd = '0'; } else { 
		$Ino_OprCmd = $Cmd; } 
 	if($Prm == '') { 
		$Ino_PrmCmd = '0'; } else { 
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
        $Ino_MsgAlm= rand(0,15); 
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