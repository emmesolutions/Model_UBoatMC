<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");

/* Script Language */


/* English (EN) */
if ($WM_SCookies [WM_SYS_VAL_LANG] == "EN") {
        
        require (WM_SYS . '/language/lang_EN.php');

	if(defined('_WMAD')) {
        require (WM_ADM . '/language/lang_EN.php');
	} 

        require (WM_OWI . '/language/lang_EN.php');       
} 

/* Italian (IT) */
if ($WM_SCookies [WM_SYS_VAL_LANG] == "IT") {

        require (WM_SYS . '/language/lang_IT.php');

	if(defined('_WMAD')) {
        require (WM_ADM . '/language/lang_IT.php');
	} 
	if( empty($WM_ReadGET[WM_URI_DESK]) or $WM_ReadGET[WM_URI_DESK] == "Cont" ) {
        require (WM_OWI . '/language/lang_IT.php'); 
	}       
} 

?>
