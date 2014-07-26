<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Check Session */


	// Login Ok Message
	$WM_Alerts01 = 'index.php?' .WM_URI_DESK. '=' .WM_DESK_ALT. '&' .WM_URI_PAGE. '=' .WM_ALT_01;

	// Login Error Message
	$WM_Alerts02 = 'index.php?' .WM_URI_DESK. '=' .WM_DESK_ALT. '&' .WM_URI_PAGE. '=' .WM_ALT_02;

	// Login Exit Message
	$WM_Alerts03 = 'index.php?' .WM_URI_DESK. '=' .WM_DESK_ALT. '&' .WM_URI_PAGE. '=' .WM_ALT_03;

	// Check Login
	if ($WM_ReadGET[WM_URI_PAGE] ==	WM_LOG_CHK) {
	// Verify User Name and Password
	if(WM_DBAdmin_Login($WM_ReadPST[WM_PST_USER], $WM_ReadPST[WM_PST_PSWD]) == 1) { // Login Ok
		session_start();  
    		$_SESSION['WM_ADM'] = $WM_ReadPST[WM_PST_USER];
		header("location:" .$WM_Alerts01);
		exit;
	} else {                                                     // Login Error
		header("location:" .$WM_Alerts02);
		exit; 
		}
	}

	// Login Exit
	if ($WM_ReadGET[WM_URI_PAGE] ==	WM_LOG_OUT) {                // Login Exit
	        session_start();
		session_unset();
		session_destroy();
		header("location:" .$WM_Alerts03);
		exit; 	
	} 

	// Check Session Exist
	session_start();
	if (isset($_SESSION['WM_ADM'])) { 
		// Set Admin Session	
		define('_WMAD', 1);
		// if ($WM_Settings[WM_SYS_VAL_WOFF] = 'TRUE') {$WM_Settings[WM_SYS_VAL_WOFF] = 'FALSE';}
		// if ($WM_Settings[WM_SYS_VAL_BRDLCK] = 'TRUE') {$WM_Settings[WM_SYS_VAL_BRDLCK] = 'FALSE';}
                WM_DBAdmAll_Read($_SESSION['WM_ADM']);
	} else { define('_WMAD', 0); }

?>