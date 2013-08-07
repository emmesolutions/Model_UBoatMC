<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Function Arduino Script */

/* WM_DataLogger */
 
/* Read One DataLog */
/* WM_DBLogOne_Read('DataLog Name', 'Value Name') */
function WM_DBLogOne_Read($Log_ID, $Val) {
 
	$WM_DBDataLog = WM_DBConnect();	
 
  	$WM_SQL = "SELECT " .$Val.  " FROM " .WM_TAB_DATALOG. " WHERE " ."id". " = " . "'" .$Log_ID. "'";  
 
	$WM_DBRead = mysql_query($WM_SQL) 
		or die("Errore nella query: " . $WM_SQL . "\n" . mysql_error());
 
        $WM_Row = mysql_fetch_row($WM_DBRead); 
        $WM_DBRead = $WM_Row [0] ;
 
 	mysql_close($WM_DBDataLog); 
 
  	return $WM_DBRead;
}
 
/* Read All DataLog */
/* WM_DBLogAll_Read('DataLog Name') */
function WM_DBLogAll_Read($Log_ID) {
 
        global $WM_DataLogger;
 
        // Settings Array (Setting Value)
    $WM_DataLogger = array( );
 
	for ($Set = 1; $Set < 25; ++$Set) {	    // Retrieve 24 DataLog Value
 
	$Val = WM_DataLogger_ValName($Set);	    // Retrieve DataLog Value Name
	$WM_DataLogger [$Val] = WM_DBLogOne_Read($Log_ID, $Val);
 
	} 
 
  	return ;
} 
 
/* Table Settings Retrieve DataLog Value Name */
/* WM_DataLogger_ValName('DataLog Value Name') */
function WM_DataLogger_ValName($Set) {
 
    switch ($Set) {
 			case 1:  
				$Name = INO_LOG_TIMES;	 // 'TimeSc'
				break;
 			case 2:  
				$Name = INO_LOG_DATEX;	// 'Date D+M+Y'
				break;
  			case 3:  
				$Name = INO_LOG_TIMEX;	// 'Time H+M'
				break;
  			case 4:  
				$Name = INO_LOG_GPSLT;	// 'GPS Latitude'
				break;
  			case 5:  
				$Name = INO_LOG_GPSLG;	// 'GPS Longitude'
				break;
			case 6:  
				$Name = INO_LOG_CMPSS;	// 'Compass'
				break;
  			case 7:  
				$Name = INO_LOG_SPEED;	// 'Speed'
				break;
  			case 8:  
				$Name = INO_LOG_DEPTH;	// 'Depth'
				break;
  			case 9:  
				$Name = INO_LOG_TMPIN;	// 'Tmp Internal'
				break;
  			case 10: 
				$Name = INO_LOG_HMDIN;	// 'Hmd Internal'
				break;
  			case 11: 
				$Name = INO_LOG_TMPEX;	// 'Tmp External'
				break;
  			case 12: 
				$Name = INO_LOG_TMPH2;	// 'Tmp H2O'
				break;
  			case 13: 
				$Name = INO_LOG_HDWBV;	// 'Hardware Voltage'
				break;
  			case 14: 
				$Name = INO_LOG_ENGBV;	// 'Engine Voltage'
				break;
  			case 15: 
				$Name = INO_LOG_RPIBV;	// 'RPi Voltage'
				break;
  			case 16: 
				$Name = INO_LOG_OPRCM;	// 'Operator Command'
				break;
  			case 17: 
				$Name = INO_LOG_SONRF;	// 
				break;
			case 18: 
				$Name = INO_LOG_SONRB;	// 
				break;
			case 19: 
				$Name = INO_LOG_CLLSR;	// 
				break;
			case 20: 
				$Name = INO_LOG_PRMCM;	// 'Parameter Command'
				break;
			case 21: 
				$Name = INO_LOG_MGALM;	// 'Message Allarm'
				break;
			case 22: 
				$Name = INO_LOG_CMDST;	// 'Command Status'
				break;
			case 23: 
				$Name = INO_LOG_INPST;	// 'Input Status'
				break;
			case 24: 
				$Name = INO_LOG_OUTST;	// 'Output Status'
				break;
	}
 
	return $Name;
}
 
/* Write One DataLog */
/* WM_DBLogOne_Write('DataLog Name', 'Field Name', 'Value') */
function WM_DBLog_Write($Log) {
 
    $WM_DBDataLog = WM_DBConnect();	

	$WM_SQL = "INSERT INTO " .WM_TAB_DATALOG. "(".INO_LOG_TIMES. "," .INO_LOG_DATEX. "," .INO_LOG_TIMEX.
			"," .INO_LOG_GPSLT. "," .INO_LOG_GPSLG. "," .INO_LOG_CMPSS. "," .INO_LOG_SPEED. "," .INO_LOG_DEPTH. 
			"," .INO_LOG_TMPIN. "," .INO_LOG_HMDIN. "," .INO_LOG_TMPEX. "," .INO_LOG_TMPH2.
			"," .INO_LOG_HDWBV. "," .INO_LOG_ENGBV. "," .INO_LOG_RPIBV. 
			"," .INO_LOG_SONRF. "," .INO_LOG_SONRB. "," .INO_LOG_CLLSR.
			"," .INO_LOG_OPRCM. "," .INO_LOG_PRMCM. "," .INO_LOG_MGALM. 
			"," .INO_LOG_CMDST. ")" .INO_LOG_INPST. "," .INO_LOG_OUTST.
		  " VALUES "."(".$Log.")" ;

	// echo $WM_SQL;

	mysql_query($WM_SQL) ;
 
 	mysql_close($WM_DBDataLog); 
 
  	return $WM_DBRead;
}
 
?>
