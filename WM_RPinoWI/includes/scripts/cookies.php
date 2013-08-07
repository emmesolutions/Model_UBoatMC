<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Check Cookies */


for ($Set = 2; $Set < 9; ++$Set) {		// Retrieve Setting Value
	$Val = WM_TabSettings_ValName($Set);	// Retrieve Setting Value Name

	if(isset($_GET[$Val])) {				
		$WM_SCookies[$Val] = $_GET[$Val];		
		setcookie($Val, $WM_SCookies [$Val], $WM_CookieEx);	
	} else {								
		if (isset($_COOKIE[$Val])) {

		if (isset($WM_ReadPST[$Val])) { setcookie($Val, $WM_SCookies[$Val], $WM_CookieEx); }
		  else { $WM_SCookies[$Val] = $_COOKIE[$Val]; }

		} else {						
		setcookie($Val, $WM_SCookies[$Val], $WM_CookieEx);
	        }
	}
} 

?>
