<?php 
    // No Direct Access
	defined('_WMEX') or die("Access Denied!");
 
 
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
 
	/* Conversion Value */
	
	// Arduino Time On
	if (isset($WM_ReadGET[INO_TIMES])) {$Ino_TimeSc = intval($WM_ReadGET[INO_TIMES]);} 

	// Conversion in Binary $Ino_CmdSts
	if (isset($WM_ReadGET[INO_CMDST])) {
	$Ino_CmdSBIN = decbin( intval($WM_ReadGET[INO_CMDST]) );
	// Lenght
	$Ino_CmdSLen = strlen( $Ino_CmdSBIN )-1;
	// Check Lenght
	if ($Ino_CmdSLen < 15) {
		for ($i = 1; $i <= 14-$Ino_CmdSLen; $i++) {
    		$Ino_CmdSBIN = "0".$Ino_CmdSBIN;
		}
    	}
	// Read Each BIT - $CmdSts(0-15) = "1" / "0"
	$Ino_CmdSts = array();
	$Ino_CmdSts = str_split(strrev($Ino_CmdSBIN));
	}
	 
	// Conversion in Binary $Ino_InpSts
	if (isset($WM_ReadGET[INO_INPST])) {
	$Ino_InpSBIN = decbin( intval($WM_ReadGET[INO_INPST]) );
	// Lenght
	$Ino_InpSLen = strlen( $Ino_InpSBIN )-1;
	// Check Lenght
	if ($Ino_InpSLen < 15) {
		for ($i = 1; $i <= 14-$Ino_InpSLen; $i++) {
    		$Ino_InpSBIN = "0".$Ino_InpSBIN;
		}
    	}
	// Read Each BIT - $InpSts(0-15) = "1" / "0"
	$Ino_InpSts = array();
	$Ino_InpSts = str_split(strrev($Ino_InpSBIN));	 
	}
	 
	if (isset($WM_ReadGET[INO_DATEY])) {$Ino_DataY = intval($WM_ReadGET[INO_DATEY]);}	// Data Year
	if (isset($WM_ReadGET[INO_DATEM])) {$Ino_DataM = intval($WM_ReadGET[INO_DATEM]);}	// Data Month
	if (isset($WM_ReadGET[INO_DATED])) {$Ino_DataD = intval($WM_ReadGET[INO_DATED]);}	// Data Day
	if (isset($WM_ReadGET[INO_TIMEH])) {$Ino_TimeH = intval($WM_ReadGET[INO_TIMEH]);}	// Time Hours
	if (isset($WM_ReadGET[INO_TIMEM])) {$Ino_TimeM = intval($WM_ReadGET[INO_TIMEM]);}	// Time Minuts
	
	if (isset($WM_ReadGET[INO_HDWBV])) {$Ino_HdwBtV = floatval($WM_ReadGET[INO_HDWBV]);}	// Hardware Battery Volts
		else { $Ino_HdwBtV = 0.00; }
	if (isset($WM_ReadGET[INO_ENGBV])) {$Ino_EngBtV = floatval($WM_ReadGET[INO_ENGBV]);}	// Engine Battery Volts
		else { $Ino_EngBtV = 0.00; }
	if (isset($WM_ReadGET[INO_ENGBI])) {$Ino_EngBtI = floatval($WM_ReadGET[INO_ENGBI]);}	// Engine Battery Current
			else { $Ino_EngBtI = 0.00; }
	if (isset($WM_ReadGET[INO_RPIBV])) {$Ino_RPiBtV = floatval($WM_ReadGET[INO_RPIBV]);}	// RPi Battery Volts
		else { $Ino_RPiBtV = 0.00; }
 	if (isset($WM_ReadGET[INO_BTAMY])) {$Ino_BtAtmy = floatval($WM_ReadGET[INO_BTAMY]);}	// Battery Autonomy
 		else { $Ino_BtAtmy = 0.00; }
	if (isset($WM_ReadGET[INO_MENGI])) {$Ino_MEnSnI = floatval($WM_ReadGET[INO_MENGI]);}	// Main Engine Motor Current
		else { $Ino_MEnSnI = 0.00; }
	if (isset($WM_ReadGET[INO_BTNKI])) {$Ino_BlTSnI = floatval($WM_ReadGET[INO_BTNKI]);}	// Ballast Tank Motor Current
		else { $Ino_BlTSnI = 0.00; }
 	
	if (isset($WM_ReadGET[INO_TMPEX])) {$Ino_TmpExt = floatval($WM_ReadGET[INO_TMPEX]);}	// Temperature External
		else { $Ino_TmpExt = 0.00; }
	if (isset($WM_ReadGET[INO_TMPIN])) {$Ino_TmpInt = floatval($WM_ReadGET[INO_TMPIN]);}	// Temperature Internal
		else { $Ino_TmpInt = 0.00; }
	if (isset($WM_ReadGET[INO_HMDIN])) {$Ino_HmdInt = floatval($WM_ReadGET[INO_HMDIN]);}	// Humidity Internal
		else { $Ino_HmdInt = 0.00; }
	if (isset($WM_ReadGET[INO_TMPH2])) {$Ino_TmpH2O = floatval($WM_ReadGET[INO_TMPH2]);}	// Temperature Water
		else { $Ino_TmpH2O = 0.00; }
	if (isset($WM_ReadGET[INO_TMPME])) {$Ino_MEnTmp = floatval($WM_ReadGET[INO_TMPME]);}	// Main Engine Motor Temperature
		else { $Ino_MEnTmp = 0.00; }
	if (isset($WM_ReadGET[INO_TMPBT])) {$Ino_BlTTmp = floatval($WM_ReadGET[INO_TMPBT]);}	// Ballast Tank Motor Temperature
		else { $Ino_BlTTmp = 0.00; }
 
	if (isset($WM_ReadGET[INO_GPSLT])) {$Ino_GPSLat = floatval($WM_ReadGET[INO_GPSLT]);}	// GPS Latitude
		else { $Ino_GPSLat =0.00; }
	if (isset($WM_ReadGET[INO_GPSLG])) {$Ino_GPSLng = floatval($WM_ReadGET[INO_GPSLG]);}	// GPS Longitude
		else { $Ino_GPSLng =0.00; }
	if (isset($WM_ReadGET[INO_CMPSH])) {$Ino_CmpssH = floatval($WM_ReadGET[INO_CMPSH]);}	// Compass Heading
		else { $Ino_CmpssH =0.00; }
	if (isset($WM_ReadGET[INO_CMPSP])) {$Ino_CmpssP = floatval($WM_ReadGET[INO_CMPSP]);}	// Compass Pitch
		else { $Ino_CmpssP =0.00; }
	if (isset($WM_ReadGET[INO_CMPSR])) {$Ino_CmpssR = floatval($WM_ReadGET[INO_CMPSR]);}	// Compass Roll
		else { $Ino_CmpssR =0.00; }

	if (isset($WM_ReadGET[INO_SPEED])) {$Ino_Speed = floatval($WM_ReadGET[INO_SPEED]);}	// Speed
	if (isset($WM_ReadGET[INO_DEPTH])) {$Ino_Depth = floatval($WM_ReadGET[INO_DEPTH]);}	// Depth	

	if (isset($WM_ReadGET[INO_OPCMD])) {$Ino_OprCmd = intval($WM_ReadGET[INO_OPCMD]);}	// OperatorCommand
	if (isset($WM_ReadGET[INO_PRCMD])) {$Ino_PrmCmd = intval($WM_ReadGET[INO_PRCMD]);}	// Parameter Command
	if (isset($WM_ReadGET[INO_MGALM])) {$Ino_MsgAlm = intval($WM_ReadGET[INO_MGALM]);}	// Message Allarm
	
	if (isset($WM_ReadGET[INO_SONRF])) {$Ino_SonarF = intval($WM_ReadGET[INO_SONRF]);}	// Front Sonar
	if (isset($WM_ReadGET[INO_SONRB])) {$Ino_SonarB = intval($WM_ReadGET[INO_SONRB]);}	// Bottom Sonar
	if (isset($WM_ReadGET[INO_CLLSR])) {$Ino_CllSnr = intval($WM_ReadGET[INO_CLLSR]);}	// Collision Sensors	
	
	
	/* Time On Calculation */
	
	$Ino_TON_Sec = $Ino_TimeSc;
	$Ino_TON_Min = round($Ino_TimeSc / 60);
	$Ino_TON_Hor = round($Ino_TimeSc / 3600);
	
	
	/* Compass Calculation */
	
	// Quadrant Calculation (12 da +15dg -15dg)
	    $Clc_Qnt = $Ino_CmpssH+ 15;
	    if ($Ino_CmpssH > 344){
	      $Clc_Qnt = 359 - $Ino_CmpssH + 15;
	    }
    	// Quadrant
    	$Qnt = round($Clc_Qnt / 30);
	// Cardinals Calculation
	    switch($Qnt){
	    case 0 :
	      $Ino_CMP_Crd="N";
	      break;
	    case 1 :
	      $Ino_CMP_Crd="-";
	      break;
	    case 2 :
	      $Ino_CMP_Crd="-";
	      break;
	    case 3 :
	      $Ino_CMP_Crd="E";
	      break;
	    case 4 :
	      $Ino_CMP_Crd="-";
	      break;
	    case 5 :
	      $Ino_CMP_Crd="-";
	      break;
	    case 6 :
	      $Ino_CMP_Crd="S";
	      break;
	    case 7 :
	      $Ino_CMP_Crd="-";
	      break;
	    case 8 :
	      $Ino_CMP_Crd="-";
	      break;
	    case 9 :
	      $Ino_CMP_Crd="W";
	      break;
	    case 10:
	      $Ino_CMP_Crd="-";
	      break;
	    case 11:
	      $Ino_CMP_Crd="-";
	      break;
	    }

?>