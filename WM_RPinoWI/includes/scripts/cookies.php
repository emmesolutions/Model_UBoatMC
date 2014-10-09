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


/* Operator Web Command */

	for ($OpWI_Cl = 1; $OpWI_Cl < 8; ++$OpWI_Cl) {

		if( $OpWI_Cl == 1  ) { $OpWI_X = WM_OPWI_A0; }	
		if( $OpWI_Cl == 2  ) { $OpWI_X = WM_OPWI_B0; }
		if( $OpWI_Cl == 3  ) { $OpWI_X = WM_OPWI_C0; }
		if( $OpWI_Cl == 4  ) { $OpWI_X = WM_OPWI_DE; }	
		if( $OpWI_Cl == 5  ) { $OpWI_X = WM_OPWI_F0; }
		if( $OpWI_Cl == 6  ) { $OpWI_X = WM_OPWI_G0; }
		if( $OpWI_Cl == 7  ) { $OpWI_X = WM_OPWI_H0; }


	for ($OpWI = 0; $OpWI < 8; ++$OpWI) {	// Retrieve OpWI Value
	$Val = WM_TabOpWI_ValName($OpWI);	// Retrieve OpWI Value Name
	$Tag = $OpWI_X.$Val;

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