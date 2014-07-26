<?php 
  // No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* System Language EN */


	/* Module Corner Menu */
	define("WM_MOD_CORNER_TITLE", "Framework Menu");
	define("WM_MOD_CORNER_LOGIN", "Administration Login");
	define("WM_MOD_CORNER_BRDT", "Show-Hide Border Top");
	define("WM_MOD_CORNER_BRDB", "Show-Hide Border Bottom");

	/* Module Layout */
	define("WM_MOD_LAYOUT_TITLE", "Layout Module");
	define("WM_MOD_LAYOUT_WIDTH", "Layout Width");
	define("WM_MOD_LAYOUT_STYLE", "Layout Style");
	define("WM_MOD_LAYOUT_FONTS", "Layout Font");
	/* Module Date Time*/
	define("WM_MOD_DATETIME_TITLE", "Date Time Module");
	define("WM_MOD_DATETIME_MTH01", "January");
	define("WM_MOD_DATETIME_MTH02", "February");
	define("WM_MOD_DATETIME_MTH03", "March");
	define("WM_MOD_DATETIME_MTH04", "April");
	define("WM_MOD_DATETIME_MTH05", "May");
	define("WM_MOD_DATETIME_MTH06", "June");
	define("WM_MOD_DATETIME_MTH07", "July");
	define("WM_MOD_DATETIME_MTH08", "August");
	define("WM_MOD_DATETIME_MTH09", "September");
	define("WM_MOD_DATETIME_MTH10", "October");
	define("WM_MOD_DATETIME_MTH11", "November");
	define("WM_MOD_DATETIME_MTH12", "December");
	define("WM_MOD_DATETIME_DAY01", "Monday");
	define("WM_MOD_DATETIME_DAY02", "Tuesday");
	define("WM_MOD_DATETIME_DAY03", "Wednesday");
	define("WM_MOD_DATETIME_DAY04", "Thursday");
	define("WM_MOD_DATETIME_DAY05", "Friday");
	define("WM_MOD_DATETIME_DAY06", "Saturday");
	define("WM_MOD_DATETIME_DAY07", "Sunday");
	/* Module Language */
	define("WM_MOD_LANG_TITLE", "Language Selection Module");
	define("WM_MOD_LANG_EN", "English Language");
	/* Module Copyright */
	define("WM_MOD_COPYRIGHT_TITLE", "Copyright Info Module");
	define("WM_MOD_COPYRIGHT_TXT1", "Copyright &#169; %date% %sitename%. All Rights Reserved.");
	define("WM_MOD_COPYRIGHT_TXT2", "");
	/* Module Validator */
	define("WM_MOD_VALIDATOR_TITLE", "XHTML-CSS Validator Module");
	define("WM_MOD_VALIDATOR_W3C", "Web Content Accessibility Guidelines");
	define("WM_MOD_VALIDATOR_XHTML", "XHTML Validator");
	define("WM_MOD_VALIDATOR_CSS", "CSS Validator");
	/* Module SysInfo */
	define("WM_MOD_SYSINFO_TITLE", "System Info Module");	
	define("WM_MOD_SYSINFO_OSYS", "Operative System: ");
	define("WM_MOD_SYSINFO_BRWSER", "Browser: ");
	/* Module Contact*/
	define("WM_MOD_CONTACT_TITLE", "Contact Module");	
	define("WM_MOD_CONTACT_NAME", "Contact Name");
	define("WM_MOD_CONTACT_ADDRESS1", "Contact Address Line 1");
	define("WM_MOD_CONTACT_ADDRESS2", "Contact Address Line 2");
	define("WM_MOD_CONTACT_TEL", "Contact Telephone");
	define("WM_MOD_CONTACT_EMAIL", "Contact eMail");
	/* Module Stats*/
	define("WM_MOD_STATS_TITLE", "Stats Module");	

        /* System Layout */
	define("WM_LAYOUT_BACKGROUND", "Background");
	define("WM_LAYOUT_BRDTOP", "Border Top");
	define("WM_LAYOUT_DESK", "Desk");
	define("WM_LAYOUT_ADMIN", "Administration");
	define("WM_LAYOUT_CONTAINER", "Container");
	define("WM_LAYOUT_BRDBOT", "Border Bottom");
	define("WM_LAYOUT_BOX1", "Box 1");
	define("WM_LAYOUT_BOX2", "Box 2");
	define("WM_LAYOUT_BOX3", "Box 3");
        
        /* System Login */
	define("WM_LOGIN_NAME", "Administration Login");
	define("WM_LOGIN_LUSER", "Username");
	define("WM_LOGIN_LPSWD", "Password");
	define("WM_LOGIN_USER", "username");
	define("WM_LOGIN_PSWD", "password");
	define("WM_LOGIN_LIN", "Login");	
	define("WM_LOGIN_LOUT", "Logout");

	/* System Alerts */
	define("WM_ALERT_TITLE", "MESSAGE");
	define("WM_ALERT_01", "Admin Login Succesful");
	define("WM_ALERT_02", "Admin Login Denied");
	define("WM_ALERT_03", "Admin Logout Succesful");

	/* Arduino */
	/* Message Commands */
	define("INO_MSGCMD_00", "Engine Stop");
	define("INO_MSGCMD_01", "Straight Direction");
	define("INO_MSGCMD_02", "Quadrant Turn Left Direction");
	define("INO_MSGCMD_03", "Quadrant Turn Right Direction");
	define("INO_MSGCMD_04", "90° Turn Left Direction");
	define("INO_MSGCMD_05", "90° Turn Right Direction");
	define("INO_MSGCMD_06", "Reversing Left Direction");
	define("INO_MSGCMD_07", "Reversing Right Direction");
	define("INO_MSGCMD_08", "Engine Backward");
	define("INO_MSGCMD_09", "");
	define("INO_MSGCMD_10", "");
	define("INO_MSGCMD_11", "Engine Decrease");
	define("INO_MSGCMD_12", "Engine Slow");
	define("INO_MSGCMD_13", "Engine Increase");
	define("INO_MSGCMD_14", "Periscope");
	define("INO_MSGCMD_15", "");
	define("INO_MSGCMD_31", "Wait Hardware");
	
	/* Message Allarms */
	define("INO_MSGALM_00", "None");
	define("INO_MSGALM_01", "Temperature and Humidity Sensor Read Fault");
	define("INO_MSGALM_02", "Temperature Sensor DS18B20 Read Fault");
	define("INO_MSGALM_03", "Pressure Sensor Read Fault");
	define("INO_MSGALM_04", "Compass Read Fault");
	define("INO_MSGALM_05", "GPS Read Fault");
	define("INO_MSGALM_06", "-");
	define("INO_MSGALM_07", "-");
	define("INO_MSGALM_08", "Battery Voltage Low");
	define("INO_MSGALM_09", "None");
	define("INO_MSGALM_10", "Web TimeOut");
	define("INO_MSGALM_11", "Wait Hardware");
	define("INO_MSGALM_12", "-");
	define("INO_MSGALM_13", "-");
	define("INO_MSGALM_14", "-");
	define("INO_MSGALM_15", "-");
	
	
?>
