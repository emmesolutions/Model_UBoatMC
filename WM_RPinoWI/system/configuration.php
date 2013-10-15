<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");

/* System Configuration File */

/* Enable Debug */
$WM_Debug = false;

/* DB Connect Parameter */
/* RaspberryPi */
	define('WM_DB_NAME', "wm_rpinowi");	// Database Name
	define('WM_DB_USER', "wm_rpinowi");	// Database User
	define('WM_DB_PSWD', "UfhtyFBbXJehk");	// Database Password

/* Arduino Settings*/
	// IP Address
	define('INO_IP', "192.168.0.111");

/* Time Zone */
       	// Supported: 
       	// http://www.php.net/manual/en/timezones.php
	define('WM_TIME_ZONE', "Europe/Rome");	// Set Time Zone

/* GET Data */
	// GET Variables Name
	define('WM_URI', "URI"); 		// URI
	define('WM_URI_DESK', "WM_Desk");	// Desk
	define('WM_URI_PAGE', "WM_Page");	// Page
	define('WM_URI_ITEM', "WM_Item");	// Item
	// GET Arduino Data
	define('INO_TIMES', "TimeSc"); 		// Time On
	
	define('INO_DATED', "DateD"); 		// Date Day
	define('INO_DATEM', "DateM"); 		// Date Month
	define('INO_DATEY', "DateY"); 		// Date Year
	define('INO_TIMEH', "TimeH"); 		// Time Hour
	define('INO_TIMEM', "TimeM"); 		// Time Minute
	
	define('INO_GPSLT', "GPSLat"); 		// GPS Latitude
	define('INO_GPSLG', "GPSLng"); 		// GPS Longitude
	define('INO_CMPSH', "CmpsH"); 		// Compass Heading
	define('INO_CMPSP', "CmpsP"); 		// Compass Pitch
	define('INO_CMPSR', "CmpsR"); 		// Compass Roll
	define('INO_SPEED', "Speed"); 		// Speed
	define('INO_DEPTH', "Depth"); 		// Depth
	
	define('INO_TMPEX', "TmpExt"); 		// Temperature External
	define('INO_TMPIN', "TmpInt"); 		// Temperature Internal
	define('INO_HMDIN', "HmdInt"); 		// Humidity Internal
	define('INO_TMPH2', "TmpH2O"); 		// Temperature Water
	
	define('INO_HDWBV', "HdwBtV"); 		// Hardware Battery Voltage
	define('INO_ENGBV', "EngBtV"); 		// Engine Battery Voltage
	define('INO_ENGBI', "EngBtI"); 		// Engine Battery Current
	define('INO_RPIBV', "RPiBtV"); 		// RPi Battery Voltage
	
	define('INO_SONRF', "SonarF"); 		// Sonar Front
	define('INO_SONRB', "SonarB"); 		// Sonar Back
	define('INO_CLLSR', "CllSnr"); 		// Collisiion Sensors
	
	define('INO_OPCMD', "OprCmd"); 		// Operator Command
	define('INO_PRCMD', "PrmCmd"); 		// Parameter Command	
	define('INO_MGALM', "MsgAlm"); 		// Message Allarm
	define('INO_CMDST', "CmdSts"); 		// Command Status
	define('INO_INPST', "InpSts"); 		// Digital Input Status
	define('INO_OUTST', "OutSts"); 		// Digital Output Status
	
	
	// GET Desk Value
        	// WM_URI_DESK = ...
	define('WM_DESK_OFF', "WM_Off");	// Offline
	define('WM_DESK_OWI', "WM_OWI");	// Operator WI
	define('WM_DESK_ADM', "WM_Adm");	// Administrator
	define('WM_DESK_LOG', "WM_Log");	// Login
	define('WM_DESK_ALT', "WM_Alt");	// Alerts
	// GET Login Value
        	// WM_URI_DESK = WM_DESK_LOG
        	// WM_URI_PAGE = ...
	define('WM_LOG_CHK', "WM_LogChk");	// Login Check
	define('WM_LOG_OUT', "WM_LogOut");	// Login Exit
	// GET Alerts Value
        	// WM_URI_DESK = WM_DESK_ALT
        	// WM_URI_PAGE = ...
	define('WM_ALT_01', "WM_Alt01");	// Alerts Login Success
	define('WM_ALT_02', "WM_Alt02");	// Alerts Login Error
	define('WM_ALT_03', "WM_Alt03");	// Alerts
	define('WM_ALT_04', "WM_Alt04");	// Alerts

/* POST Data */
	// Login
	define('WM_PST_USER', "User"); 	// Admin User
	define('WM_PST_PSWD', "Pswd"); 	// Admin Password

/* DB Table Name */
/* Table Settings */
	define('WM_TAB_SETTINGS', "WM_Settings");	// Database Table Settings Name
	define('WM_SET_NAME', "Default");	        	// Table Settings Default Name
	// Table Settings Value Name
	define('WM_TS_NAME', "Val_Name"); 		// 'Settings Name'
	define('WM_SYS_VAL_DEMO', "Val_DemoMode");       	// 'Demo Mode'
	define('WM_SYS_VAL_LANG', "Val_Lang"); 	        	// 'Language'
	define('WM_LAY_VAL_WIDTH', "Val_Width"); 	// 'Layout Width'
	define('WM_LAY_VAL_STYLE', "Val_Style"); 	// 'Layout Style Color'
	define('WM_LAY_VAL_FONTS', "Val_Fonts"); 	// 'Layout Fonts Height'
	define('WM_SYS_VAL_BRDTOP', "Val_BrdTop"); 	// 'Show Border Top'
	define('WM_SYS_VAL_BRDBOT', "Val_BrdBot"); 	// 'Show Border Bottom'
	define('WM_SYS_VAL_CNTANR', "Val_Container"); 	// 'Show Container'
	define('WM_SYS_VAL_WMCORNER', "Val_WMenu"); 	// 'Show Corner Menu Module'
	define('WM_SYS_MOD_WMCORNER', "Mod_WMenu"); 	// 'Position Corner Menu Module'
	// Module 
	// [GPS/Compass] [System Message] [Depth/Speed    ] [Radar+Coll.]
	// [Date/Time  ] [Temp/Humidity ] [Hardware Status]
	define('WM_SYS_MOD_ADMENU', "Mod_AdMenu"); 	// 'Position Admin Menu Module'
	define('WM_SYS_MOD_LNGSEL', "Mod_LngSel"); 	// 'Position Language Module'
	define('WM_SYS_MOD_CPYRGT', "Mod_Cpyrgt");	// 'Position Copyright Module'
	define('WM_SYS_MOD_GPSCMP', "Mod_GPSCmp"); 	// 'Position GPS+Compass Module'
	define('WM_SYS_MOD_SYSMSG', "Mod_SysMsg"); 	// 'Position System Message Module'
	define('WM_SYS_MOD_DTHSPD', "Mod_DthSpd");	// 'Position Depth+Speed Module'
	define('WM_SYS_MOD_RADCLL', "Mod_RadCll"); 	// 'Position Radar+Coll.Sensor Module'
	define('WM_SYS_MOD_DTETME', "Mod_DteTme"); 	// 'Position Date Time Module'
	define('WM_SYS_MOD_TMPHMD', "Mod_TmpHmd"); 	// 'Position Temp. Humidity Module'
	define('WM_SYS_MOD_HDWSTS', "Mod_HdwSts"); 	// 'Position Hardware Status Module'

/* Table Administration */
	define('WM_TAB_ADMIN', "WM_Admin");		// Database Table Admin Name
	// Table Administration Value Name
	define('WM_ADM_USER', "User"); 		// 'Username'
	define('WM_ADM_PSWD', "Pswd"); 		// 'Password'
	define('WM_ADM_NAME', "Name"); 		// 'Name'
	define('WM_ADM_EMAIL', "EMail"); 		// 'EMail'
	define('WM_ADM_PHONE', "Phone"); 		// 'Telephone'
	define('WM_ADM_ADDRESS', "Address"); 		// 'Address'
	define('WM_ADM_CITY', "City"); 		// 'City'
	define('WM_ADM_CAP', "CAP"); 			// 'CAP'
	define('WM_ADM_COUNTRY', "Country"); 		// 'Country'

/* Table DataLog */
	define('WM_TAB_DATALOG', "WM_DataLogger");	// Database Table DataLogger Name
	// Table DataLogger Value Name
	define('INO_LOG_TIMES', "TimeSc"); 	// Time Sec.
	define('INO_LOG_DATEX', "DateX"); 	// Date
	define('INO_LOG_TIMEX', "TimeX"); 	// Time
	define('INO_LOG_GPSLT', "GPSLat"); 	// GPS Latitude
	define('INO_LOG_GPSLG', "GPSLng"); 	// GPS Longitude
	define('INO_LOG_CMPSH', "CmpsH"); 	// Compass Heading
	define('INO_LOG_CMPSP', "CmpsP"); 	// Compass Pitch
	define('INO_LOG_CMPSR', "CmpsR"); 	// Compass Roll
	define('INO_LOG_SPEED', "Speed"); 	// Speed
	define('INO_LOG_DEPTH', "Depth"); 	// Depth
	define('INO_LOG_TMPIN', "TmpInt"); 	// Temperature Internal
	define('INO_LOG_HMDIN', "HmdInt"); 	// Humidity Internal
	define('INO_LOG_TMPEX', "TmpExt"); 	// Temperature External
	define('INO_LOG_TMPH2', "TmpH2O"); 	// Temperature Water
	define('INO_LOG_HDWBV', "HdwBtV"); 	// Hardware Battery Voltage
	define('INO_LOG_ENGBV', "EngBtV"); 	// Engine Battery Voltage
	define('INO_LOG_ENGBI', "EngBtI"); 	// Engine Battery Current
	define('INO_LOG_RPIBV', "RPiBtV"); 	// RPi Battery Voltage
	define('INO_LOG_SONRF', "SonarF"); 	// Sonar Front
	define('INO_LOG_SONRB', "SonarB"); 	// Sonar Back
	define('INO_LOG_CLLSR', "CllSnr"); 	// Collisiion Sensors	
	define('INO_LOG_OPRCM', "OprCmd"); 	// Operator Command	
	define('INO_LOG_PRMCM', "PrmCmd"); 	// Parameter Command	
	define('INO_LOG_MGALM', "MsgAlm"); 	// Message Allarm
	define('INO_LOG_CMDST', "CmdSts"); 	// Command Status
	define('INO_LOG_INPST', "InpSts"); 	// Digital Input Status
	define('INO_LOG_OUTST', "OutSts"); 	// Digital Output Status

/* Admin Configuration */
	require (WM_ADM . '/configuration.php');
/* OpWI Configuration */
	require (WM_OWI . '/configuration.php');

