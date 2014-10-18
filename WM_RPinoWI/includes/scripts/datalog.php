<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script DataLogger */

	/* Write DataLogger */
	if (isset($WM_ReadGET[INO_TIMES])) {
	
		$Logger = "'".$WM_ReadGET[INO_TIMES]."'".",".
		"'".$WM_ReadGET[INO_DATED].$WM_ReadGET[INO_DATEM].$WM_ReadGET[INO_DATEY]."'".",".
		"'".$WM_ReadGET[INO_TIMEH].$WM_ReadGET[INO_TIMEM]."'".",".
		"'".$WM_ReadGET[INO_GPSLT]."'".","."'".$WM_ReadGET[INO_GPSLG]."'".",".
		"'".$WM_ReadGET[INO_CMPSH]."'".","."'".$WM_ReadGET[INO_CMPSP]."'".",".
		"'".$WM_ReadGET[INO_CMPSR]."'".","."'".$WM_ReadGET[INO_SPEED]."'".",".
		"'".$WM_ReadGET[INO_DEPTH]."'".","."'".$WM_ReadGET[INO_TMPIN]."'".",".
		"'".$WM_ReadGET[INO_HMDIN]."'".","."'".$WM_ReadGET[INO_TMPEX]."'".",".
		"'".$WM_ReadGET[INO_TMPH2]."'".",".
		"'".$WM_ReadGET[INO_TMPME]."'".","."'".$WM_ReadGET[INO_TMPBT]."'".",".
		"'".$WM_ReadGET[INO_HDWBV]."'".",".
		"'".$WM_ReadGET[INO_ENGBV]."'".","."'".$WM_ReadGET[INO_ENGBI]."'".",".
		"'".$WM_ReadGET[INO_RPIBV]."'".","."'".$WM_ReadGET[INO_BTAMY]."'".",".
		"'".$WM_ReadGET[INO_MENGI]."'".","."'".$WM_ReadGET[INO_BTNKI]."'".",".
		"'".$WM_ReadGET[INO_RD1TM]."'".","."'".$WM_ReadGET[INO_RD2TM]."'".",".
		"'".$WM_ReadGET[INO_SONRF]."'".","."'".$WM_ReadGET[INO_SONRB]."'".",".
		"'".$WM_ReadGET[INO_CLLSR]."'".",".
		"'".$WM_ReadGET[INO_OPCMD]."'".","."'".$WM_ReadGET[INO_PRCMD]."'".",".
		"'".$WM_ReadGET[INO_MGALM]."'".","."'".$WM_ReadGET[INO_CMDST]."'".",".
		"'".$WM_ReadGET[INO_INPST]."'".","."'".$WM_ReadGET[INO_OUTST]."'" ;
		
		// Check if Data
		if( $Ino_TimeSc > 10 ) { WM_DBLog_Write($Logger); }	
	}

?>