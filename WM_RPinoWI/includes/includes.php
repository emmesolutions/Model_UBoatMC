<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Includes Script */

	require (WM_INC . '/functions/system.php');
	require (WM_INC . '/functions/settings.php');
	require (WM_INC . '/functions/administration.php');
	require (WM_INC . '/functions/arduino.php');

	/* Check POST Data */
	WM_ReadPST();

	/* Check GET Data */
        	WM_ReadGET();

	/* Load Default Settings */
	WM_DBSetAll_Read(WM_SET_NAME);

	/* Check Session */
	require (WM_INC . '/scripts/session.php');

	/* Check Cookies */
	require (WM_INC . '/scripts/cookies.php');

        	/* Load Language */
	require (WM_SYS . '/scripts/language.php');

        	/* Arduino Calculations */
	require (WM_INC . '/scripts/ino_calculations.php');

	/* Read System Info */
	WM_SysInfo();

	/* Write DataLogger */
/*
	$Logger = "'".$WM_ReadGET[INO_TIMES]."'".","."'".$WM_ReadGET[INO_DATED].$WM_ReadGET[INO_DATEM].$WM_ReadGET[INO_DATEY]."'".","."'".$WM_ReadGET[INO_TIMEH].$WM_ReadGET[INO_TIMEM]."'".","."'".$WM_ReadGET[INO_GPSLT]."'".","."'".$WM_ReadGET[INO_GPSLG]."'".","."'".$WM_ReadGET[INO_CMPSS]."'".","."'".$WM_ReadGET[INO_SPEED]."'".","."'".$WM_ReadGET[INO_DEPTH]."'".","."'".$WM_ReadGET[INO_TMPIN]."'".","."'".$WM_ReadGET[INO_HMDIN]."'".","."'".$WM_ReadGET[INO_TMPEX]."'".","."'".$WM_ReadGET[INO_TMPH2]."'".","."'".$WM_ReadGET[INO_HDWBV]."'".","."'".$WM_ReadGET[INO_ENGBV]."'".","."'".$WM_ReadGET[INO_RPIBV]."'".","."'".$WM_ReadGET[INO_SONRF]."'".","."'".$WM_ReadGET[INO_SONRB]."'".","."'".$WM_ReadGET[INO_CLLSR]."'".","."'".$WM_ReadGET[INO_MGCMD]."'".","."'".$WM_ReadGET[INO_PRCMD]."'".","."'".$WM_ReadGET[INO_MGALM]."'".","."'".$WM_ReadGET[INO_CMDST]."'".","."'".$WM_ReadGET[INO_INPST]."'".","."'".$WM_ReadGET[INO_OUTST]."'" ;

	
	// Check if Data
	if( $Ino_TimeSc > 10 ) { WM_DBLog_Write($Logger); }	
*/
?>
