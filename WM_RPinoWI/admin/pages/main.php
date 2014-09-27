<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin Main */


/* Select Items */

	// Settings
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_SET) { include (WM_ADM_PAG. '/adm_settings.php');  } 
	// Administrator
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_ADM) { include (WM_ADM_PAG. '/adm_administrator.php');  } 
	// Raspberry Command
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_RPI) { include (WM_ADM_PAG. '/adm_rpi.php');  } 
	// License
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_LIC) { include (WM_ADM_PAG. '/License_GPLV3.html'); } 



?>