<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Check Cookies */

/* Settings */
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
