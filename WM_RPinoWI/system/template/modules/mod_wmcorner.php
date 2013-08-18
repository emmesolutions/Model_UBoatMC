<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Module Web eMMe Corner Menu */



	// Left Corner
	if( $WM_Settings[WM_SYS_MOD_WMCORNER] == "01") {
	require (WM_SYS_TPT. '/modules/mod_wmcorner/mod_wmcorner_R.php');
	require (WM_SYS_TPT. '/modules/mod_wmcorner/mod_wmcorner_G.php');
	require (WM_SYS_TPT. '/modules/mod_wmcorner/mod_wmcorner_B.php');
	}

	// Right Corner
	if( $WM_Settings[WM_SYS_MOD_WMCORNER] == "02") {
	require (WM_SYS_TPT. '/modules/mod_wmcorner/mod_wmcorner_G.php');
	require (WM_SYS_TPT. '/modules/mod_wmcorner/mod_wmcorner_R.php');

	require (WM_SYS_TPT. '/modules/mod_wmcorner/mod_wmcorner_X.php');

	require (WM_SYS_TPT. '/modules/mod_wmcorner/mod_wmcorner_B.php');
	}


?>


