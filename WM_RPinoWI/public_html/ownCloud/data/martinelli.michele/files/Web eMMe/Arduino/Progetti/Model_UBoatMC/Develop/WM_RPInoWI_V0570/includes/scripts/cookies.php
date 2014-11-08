<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Check Cookies */

/* Settings */
for ($Set = 2; $Set < 9; ++$Set) {			// Retrieve Setting Value
	$Val = WM_TabSettings_ValName($Set);		// Retrieve Setting Value Name

	if(isset($_GET[$Val])) {				// Check If GET Value	
		
		$WM_SCookies[$Val] = $_GET[$Val];		
		setcookie($Val, $WM_SCookies [$Val], $WM_CookieEx);	
	} else {								
		if (isset($_COOKIE[$Val])) {			// Check If COOKIE Set

			if (isset($WM_ReadPST[$Val])) { 	// Check If WM_ReadPST Set
			 setcookie($Val, $WM_SCookies[$Val], $WM_CookieEx); 
			} else { $WM_SCookies[$Val] = $_COOKIE[$Val]; }

		} else { setcookie($Val, $WM_SCookies[$Val], $WM_CookieEx); }
	}
} 
/* BarCharts Enable View */

	// BarCharts Tempemperature/Humidity
	if(isset($_GET[WM_BCTS_TMPHMD])) {				
		$WM_SCookies[WM_BCTS_TMPHMD] = $_GET[WM_BCTS_TMPHMD];		
		setcookie(WM_BCTS_TMPHMD, $WM_SCookies [WM_BCTS_TMPHMD], $WM_CookieEx);	
	} else {								
		if (isset($_COOKIE[WM_BCTS_TMPHMD])) {

		if (isset($WM_ReadPST[WM_BCTS_TMPHMD])) { setcookie($Val, $WM_SCookies[$Val], $WM_CookieEx); }
		  else { $WM_SCookies[WM_BCTS_TMPHMD] = $_COOKIE[WM_BCTS_TMPHMD]; }

		} else {						
		setcookie(WM_BCTS_TMPHMD, "00", $WM_CookieEx);
	        }
	}
	
	// BarCharts Hardware Status
	if(isset($_GET[WM_BCTS_HDWSTS])) {				
		$WM_SCookies[WM_BCTS_HDWSTS] = $_GET[WM_BCTS_HDWSTS];		
		setcookie(WM_BCTS_HDWSTS, $WM_SCookies [WM_BCTS_HDWSTS], $WM_CookieEx);	
	} else {								
		if (isset($_COOKIE[WM_BCTS_HDWSTS])) {

		if (isset($WM_ReadPST[WM_BCTS_HDWSTS])) { setcookie(WM_BCTS_HDWSTS, $WM_SCookies[WM_BCTS_HDWSTS], $WM_CookieEx); }
		  else { $WM_SCookies[WM_BCTS_HDWSTS] = $_COOKIE[WM_BCTS_HDWSTS]; }

		} else {						
		setcookie(WM_BCTS_HDWSTS, "00", $WM_CookieEx);
	        }
	}
	
	// BarCharts GPS/Compass
	if(isset($_GET[WM_BCTS_GPSCMP])) {				
		$WM_SCookies[WM_BCTS_GPSCMP] = $_GET[WM_BCTS_GPSCMP];		
		setcookie(WM_BCTS_GPSCMP, $WM_SCookies [WM_BCTS_GPSCMP], $WM_CookieEx);	
	} else {								
		if (isset($_COOKIE[WM_BCTS_GPSCMP])) {

		if (isset($WM_ReadPST[WM_BCTS_GPSCMP])) { setcookie(WM_BCTS_GPSCMP, $WM_SCookies[WM_BCTS_GPSCMP], $WM_CookieEx); }
		  else { $WM_SCookies[WM_BCTS_GPSCMP] = $_COOKIE[WM_BCTS_GPSCMP]; }

		} else {						
		setcookie(WM_BCTS_GPSCMP, "00", $WM_CookieEx);
	        }
	}

	// BarCharts Depth/Speed
	if(isset($_GET[WM_BCTS_DTHSPD])) {				
		$WM_SCookies[WM_BCTS_DTHSPD] = $_GET[WM_BCTS_DTHSPD];		
		setcookie(WM_BCTS_DTHSPD, $WM_SCookies [WM_BCTS_DTHSPD], $WM_CookieEx);	
	} else {								
		if (isset($_COOKIE[WM_BCTS_DTHSPD])) {

		if (isset($WM_ReadPST[WM_BCTS_DTHSPD])) { setcookie(WM_BCTS_DTHSPD, $WM_SCookies[WM_BCTS_DTHSPD], $WM_CookieEx); }
		  else { $WM_SCookies[WM_BCTS_DTHSPD] = $_COOKIE[WM_BCTS_DTHSPD]; }

		} else {						
		setcookie(WM_BCTS_DTHSPD, "00", $WM_CookieEx);
	        }
	}

/* Operator Web Command */

	for ($OpWI_X = 0; $OpWI_X < 7; ++$OpWI_X ) {

	$OpWI_Cl = WM_TabOpWI_ClmName($OpWI_X);

	for ($OpWI_Y = 0; $OpWI_Y < 8; ++$OpWI_Y) {	// Retrieve 8 OpWI Row Value
	$OpWI_Rw = WM_TabOpWI_RowName($OpWI_Y);		// Retrieve OpWI Row Name
	$Tag = $OpWI_Cl .$OpWI_Rw ;

	if(isset($_GET[$Tag])) {				
		$WM_OCookies[$Tag] = $_GET[$Tag];		
		setcookie($Tag, $WM_OCookies [$Tag], $WM_CookieEx);	
	} else {								
		if (isset($_COOKIE[$Tag])) {

		if (isset($WM_ReadPST[$Tag])) { setcookie($Tag, $WM_OCookies[$Tag], $WM_CookieEx); }
		  else { $WM_OCookies[$Tag] = $_COOKIE[$Tag]; }

		} else {						
		setcookie($Tag, $WM_OCookies[$Tag], $WM_CookieEx);
	        }
	}
	} 


	}


?>