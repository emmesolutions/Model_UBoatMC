<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Function Administration Script */


/* Read Admin Login */
/* WM_DBAdmin_Login('Login Name', 'Login Password') */
function WM_DBAdmin_Login($Adm_User, $Adm_Pswd) {

	$WM_DBSettings = WM_DBConnect();	

	$Adm_PswdMD5 = md5($Adm_Pswd);

  	$WM_SQL = "SELECT " ."*".  " FROM " .WM_TAB_ADMIN. " WHERE ".WM_ADM_USER." = "."'" .$Adm_User. "'".
							" and " .WM_ADM_PSWD. " = "."'" .$Adm_PswdMD5. "'"; 

	$WM_DBRead = mysql_query($WM_SQL) 
		or die("Errore nella query: " . $WM_SQL . "\n" . mysql_error());

	$WM_Count = mysql_num_rows($WM_DBRead);

 	mysql_close($WM_DBSettings); 
 
  	return $WM_Count;
}



/* Read One Administrator Info*/
/* WM_DBAdmOne_Read('Admin User', 'Value Name') */
function WM_DBAdmOne_Read($Adm_User, $Val) {

	$WM_DBAdmin = WM_DBConnect();	

  	$WM_SQL = "SELECT " .$Val.  " FROM " .WM_TAB_ADMIN. " WHERE " .WM_ADM_USER. " = " . "'" .$Adm_User. "'";  

	$WM_DBRead = mysql_query($WM_SQL) 
		or die("Errore nella query: " . $WM_SQL . "\n" . mysql_error());

        $WM_Row = mysql_fetch_row($WM_DBRead); 
        $WM_DBRead = $WM_Row [0] ;

 	mysql_close($WM_DBAdmin); 

  	return $WM_DBRead;
}


/* Read All Administrator Info */
/* WM_DBAdmAll_Read('Admin User') */
function WM_DBAdmAll_Read($Adm_User) {

        global $WM_Admin;

        // Admin Info Array (Admin Value)
	$WM_Admin = array( );

	for ($Adm = 3; $Adm < 5; ++$Adm) {	// Retrieve 4 Admin Value
	
	$Val = WM_TabAdmin_ValName($Adm);	// Retrieve Setting Value Name
	$WM_Admin [$Val] = WM_DBAdmOne_Read($Adm_User, $Val);

	} 

  	return ;
} 


/* Table Admin Retrieve Administration Value Name */
/* WM_TabAdmin_ValName('Admin Value Name') */
function WM_TabAdmin_ValName($Adm) {

	switch ($Adm) {
 			case 1:  
				$Name = WM_ADM_USER;	// 'Username'
				break;
 			case 2:  
				$Name = WM_ADM_PSWD;	// 'Password'
				break;
  			case 3:  
				$Name = WM_ADM_NAME;	// 'Name'
				break;
  			case 4:  	
				$Name = WM_ADM_EMAIL;	// 'EMail'
				break;

	}

	return $Name;
}


?>
