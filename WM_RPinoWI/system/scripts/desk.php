<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Desk */

	// OWI (Default View)
	if( empty($WM_ReadGET[WM_URI_DESK]) or $WM_ReadGET[WM_URI_DESK] == WM_DESK_OWI ) {

	// OperatorWI
	if( $WM_SCookies[WM_SYS_VAL_CNTANR] == '01' ) {
		echo '<div id="WM_OpWI">';
		require (WM_OWI. '/opwi.php');
		echo "</div>";
	} 

	} 

	// Administration
	if( $WM_ReadGET[WM_URI_DESK] == WM_DESK_ADM ) { 
		// echo $WM_DeskBot;
		echo '<div id="WM_Admin">';
		require (WM_ADM. '/admin.php');
		echo "</div>";
	}

	// Login
	if( $WM_ReadGET[WM_URI_DESK] == WM_DESK_LOG ) { 
		echo '<div id="WM_Login">';
		require (WM_SYS_SCT. '/login.php');
		echo "</div>";
	}

	// Alerts
	if( $WM_ReadGET[WM_URI_DESK] == WM_DESK_ALT ) { 
		echo '<div id="WM_Alerts">';
		require (WM_SYS_SCT. '/alerts.php');
		echo "</div>";
	}

?>