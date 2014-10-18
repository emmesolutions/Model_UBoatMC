<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Function System Script */


/* DB Connection */
function WM_DBConnect() {

  	$WM_DBConnect = mysql_connect("localhost", WM_DB_USER, WM_DB_PSWD) 
    		or die("DB Connection Error " . mysql_error());

  	mysql_selectdb(WM_DB_NAME)
    		or die("DB Select Error " . mysql_error());

  	return $WM_DBConnect;
}

/* Read GET Data */
/* WM_ReadGET() Array: $WM_ReadGET */
function WM_ReadGET() {

        global $WM_ReadGET;

        // Settings Array (Setting Value)
	$WM_ReadGET = array( );

	if(isset($_GET[WM_URI_DESK])) { $WM_ReadGET[WM_URI_DESK] = $_GET[WM_URI_DESK]; } else { $WM_ReadGET[WM_URI_DESK] = ''; } 
	if(isset($_GET[WM_URI_PAGE])) { $WM_ReadGET[WM_URI_PAGE] = $_GET[WM_URI_PAGE]; } else { $WM_ReadGET[WM_URI_PAGE] = ''; } 
	if(isset($_GET[WM_URI_ITEM])) { $WM_ReadGET[WM_URI_ITEM] = $_GET[WM_URI_ITEM]; } else { $WM_ReadGET[WM_URI_ITEM] = ''; } 


	// $WM_ReadGET[WM_URI_DESK] = '';
	// $WM_ReadGET[WM_URI_PAGE] = '';
	// $WM_ReadGET[WM_URI_ITEM] = '';
	
	$WM_Desk = '';
	$WM_Page = '';
	$WM_Item = '';

	// Arduino Data
	if(isset($_GET[INO_TIMES])) { $WM_ReadGET[INO_TIMES] = $_GET[INO_TIMES]; } 
	
 	if(isset($_GET[INO_DATED])) { $WM_ReadGET[INO_DATED] = $_GET[INO_DATED]; } 
 	if(isset($_GET[INO_DATEM])) { $WM_ReadGET[INO_DATEM] = $_GET[INO_DATEM]; } 
 	if(isset($_GET[INO_DATEY])) { $WM_ReadGET[INO_DATEY] = $_GET[INO_DATEY]; } 
 	if(isset($_GET[INO_TIMEH])) { $WM_ReadGET[INO_TIMEH] = $_GET[INO_TIMEH]; } 
 	if(isset($_GET[INO_TIMEM])) { $WM_ReadGET[INO_TIMEM] = $_GET[INO_TIMEM]; } 
 	
 	if(isset($_GET[INO_GPSLT])) { $WM_ReadGET[INO_GPSLT] = $_GET[INO_GPSLT]; }  
 	if(isset($_GET[INO_GPSLG])) { $WM_ReadGET[INO_GPSLG] = $_GET[INO_GPSLG]; } 
 	if(isset($_GET[INO_CMPSH])) { $WM_ReadGET[INO_CMPSH] = $_GET[INO_CMPSH]; }  
 	if(isset($_GET[INO_CMPSP])) { $WM_ReadGET[INO_CMPSP] = $_GET[INO_CMPSP]; }  
 	if(isset($_GET[INO_CMPSR])) { $WM_ReadGET[INO_CMPSR] = $_GET[INO_CMPSR]; }  
 	if(isset($_GET[INO_SPEED])) { $WM_ReadGET[INO_SPEED] = $_GET[INO_SPEED]; }  
 	if(isset($_GET[INO_DEPTH])) { $WM_ReadGET[INO_DEPTH] = $_GET[INO_DEPTH]; } 

	if(isset($_GET[INO_TMPEX])) { $WM_ReadGET[INO_TMPEX] = $_GET[INO_TMPEX]; }
 	if(isset($_GET[INO_TMPIN])) { $WM_ReadGET[INO_TMPIN] = $_GET[INO_TMPIN]; } 
 	if(isset($_GET[INO_HMDIN])) { $WM_ReadGET[INO_HMDIN] = $_GET[INO_HMDIN]; }  
 	if(isset($_GET[INO_TMPH2])) { $WM_ReadGET[INO_TMPH2] = $_GET[INO_TMPH2]; } 
	if(isset($_GET[INO_TMPME])) { $WM_ReadGET[INO_TMPME] = $_GET[INO_TMPME]; } 
	if(isset($_GET[INO_TMPBT])) { $WM_ReadGET[INO_TMPBT] = $_GET[INO_TMPBT]; } 

 	if(isset($_GET[INO_HDWBV])) { $WM_ReadGET[INO_HDWBV] = $_GET[INO_HDWBV]; } 
	if(isset($_GET[INO_ENGBV])) { $WM_ReadGET[INO_ENGBV] = $_GET[INO_ENGBV]; } 
	if(isset($_GET[INO_ENGBI])) { $WM_ReadGET[INO_ENGBI] = $_GET[INO_ENGBI]; }
 	if(isset($_GET[INO_RPIBV])) { $WM_ReadGET[INO_RPIBV] = $_GET[INO_RPIBV]; }
 	if(isset($_GET[INO_BTAMY])) { $WM_ReadGET[INO_BTAMY] = $_GET[INO_BTAMY]; } 
	if(isset($_GET[INO_MENGI])) { $WM_ReadGET[INO_MENGI] = $_GET[INO_MENGI]; } 
	if(isset($_GET[INO_BTNKI])) { $WM_ReadGET[INO_BTNKI] = $_GET[INO_BTNKI]; } 
	if(isset($_GET[INO_RD1TM])) { $WM_ReadGET[INO_RD1TM] = $_GET[INO_RD1TM]; } 
	if(isset($_GET[INO_RD2TM])) { $WM_ReadGET[INO_RD2TM] = $_GET[INO_RD2TM]; } 		
 	
   	if(isset($_GET[INO_SONRF])) { $WM_ReadGET[INO_SONRF] = $_GET[INO_SONRF]; } 
    	if(isset($_GET[INO_SONRB])) { $WM_ReadGET[INO_SONRB] = $_GET[INO_SONRB]; } 
   	if(isset($_GET[INO_CLLSR])) { $WM_ReadGET[INO_CLLSR] = $_GET[INO_CLLSR]; } 
 	
 	if(isset($_GET[INO_OPCMD])) { $WM_ReadGET[INO_OPCMD] = $_GET[INO_OPCMD]; } 
 	if(isset($_GET[INO_PRCMD])) { $WM_ReadGET[INO_PRCMD] = $_GET[INO_PRCMD]; }   
 	if(isset($_GET[INO_MGALM])) { $WM_ReadGET[INO_MGALM] = $_GET[INO_MGALM]; }
 	if(isset($_GET[INO_CMDST])) { $WM_ReadGET[INO_CMDST] = $_GET[INO_CMDST]; }
 	if(isset($_GET[INO_INPST])) { $WM_ReadGET[INO_INPST] = $_GET[INO_INPST]; }
 	if(isset($_GET[INO_OUTST])) { $WM_ReadGET[INO_OUTST] = $_GET[INO_OUTST]; }


	// Actual Position PSTN
	if(isset($_GET[WM_URI_DESK])) {$WM_Desk = WM_URI_DESK.'='.$WM_ReadGET[WM_URI_DESK]; }
	if(isset($_GET[WM_URI_PAGE])) {$WM_Page = '&amp;'.WM_URI_PAGE.'='.$WM_ReadGET[WM_URI_PAGE]; }
	if(isset($_GET[WM_URI_ITEM])) {$WM_Item = '&amp;'.WM_URI_ITEM.'='.$WM_ReadGET[WM_URI_ITEM]; }
	Global $WM_Pstn;
	$WM_Pstn = $WM_Desk.$WM_Page.$WM_Item ;

  	return ;
} 

/* Check POST Data */
/* WM_ReadPST() Array: $WM_ReadPST */
function WM_ReadPST() {

        global $WM_ReadPST;

        // Settings Array (Setting Value)
	$WM_ReadPST = array( );

	// Login
	if(isset($_POST[WM_PST_USER])) { $WM_ReadPST[WM_PST_USER] = $_POST[WM_PST_USER]; } 
	if(isset($_POST[WM_PST_PSWD])) { $WM_ReadPST[WM_PST_PSWD] = $_POST[WM_PST_PSWD]; } 

	// Check for Update Settings
	for ($Set = 1; $Set < 21; ++$Set) {		// Retrieve Setting Value
	$Val = WM_TabSettings_ValName($Set);		// Retrieve Setting Value Name

		if(isset($_POST[$Val])) { 
			$WM_ReadPST[$Val] = $_POST[$Val];
			WM_DBSetOne_Write(WM_SET_NAME, $Val, $WM_ReadPST[$Val]);
		} 
	} 

	// Check Save Operator Web Interface 
	if(isset($_POST['OpWI'])) { 
		$WM_ReadPST['OpWI'] = $_POST['OpWI']; 
		} else { 
		$WM_ReadPST['OpWI'] = "NONE"; 
		}
	if($WM_ReadPST['OpWI'] == "SAVE") { WM_DBOpWIAll_Write(); }
	
  	return ;
}


/* Read System Info */
/* WM_SysInfo() Array: $WM_SysInfo */
function WM_SysInfo() {

	global $WM_SysInfo;

	// Set Timezone
	date_default_timezone_set( WM_TIME_ZONE );

	// Day
	$Day = date ("D");
	switch ($Day) {
 		case "Mon":  
			$WM_Day = WM_MOD_DATETIME_DAY01;
			break;
 		case "Tue":  
			$WM_Day = WM_MOD_DATETIME_DAY02;
			break;
  		case "Wed":  
			$WM_Day = WM_MOD_DATETIME_DAY03;
			break;
  		case "Thu":  
			$WM_Day = WM_MOD_DATETIME_DAY04;
			break;
  		case "Fri":  
			$WM_Day = WM_MOD_DATETIME_DAY05;
			break;
  		case "Sat":  
			$WM_Day = WM_MOD_DATETIME_DAY06;
			break;
  		case "Sun":  
			$WM_Day = WM_MOD_DATETIME_DAY07;
			break;
		}

	// Month
	$Mth = date ("m");
	switch ($Mth) {
 		case "01":  
			$WM_Mth = WM_MOD_DATETIME_MTH01;
			break;
 		case "02":  
			$WM_Mth = WM_MOD_DATETIME_MTH02;
			break;
  		case "03":  
			$WM_Mth = WM_MOD_DATETIME_MTH03;
			break;
  		case "04":  
			$WM_Mth = WM_MOD_DATETIME_MTH04;
			break;
  		case "05":  
			$WM_Mth = WM_MOD_DATETIME_MTH05;
			break;
  		case "06":  
			$WM_Mth = WM_MOD_DATETIME_MTH06;
			break;
  		case "07":  
			$WM_Mth = WM_MOD_DATETIME_MTH07;
			break;
  		case "08":  
			$WM_Mth = WM_MOD_DATETIME_MTH08;
			break;
  		case "09":  
			$WM_Mth = WM_MOD_DATETIME_MTH09;
			break;
  		case "10":  
			$WM_Mth = WM_MOD_DATETIME_MTH10;
			break;
  		case "11":  
			$WM_Mth = WM_MOD_DATETIME_MTH11;
			break;
  		case "12":  
			$WM_Mth = WM_MOD_DATETIME_MTH12;
			break;
		}

	// Date Time
	$WM_Date = $WM_Day. " " .date('d'). " " .$WM_Mth. " " .date('Y');
	$WM_Time = date('H:i');

	// Browser 
	$Browser = 'none';
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') ) { $Browser = 'Safari'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') ) { $Browser = 'Firefox'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') ) { $Browser = 'Chrome'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Chromium') ) { $Browser = 'Chromium'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') ) { $Browser = 'Opera'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Midori') ) { $Browser = 'Midori'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Epiphany') ) { $Browser = 'Epiphany'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ) { $Browser = 'IE'; }

	// OS
	$OS = 'none';
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Ubuntu') ) { $OS = 'Ubuntu'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Android') ) { $OS = 'Android'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mac OS') ) { $OS = 'Mac OS X'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') ) { $OS = 'Windows'; }

	$IP      = $_SERVER['REMOTE_ADDR'];

	// Settings Array (System Info)
	$WM_SysInfo = array( 
				'Date' => $WM_Date,
				'Time' => $WM_Time,
				'Browser' => $Browser,
				'OS' => $OS,
				'IP' => $IP,	
				);

        return;

}

?>