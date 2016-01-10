<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Function Operator Web Interface Script */


/* Table OpWI Retrieve OpWI Row Name */
/* WM_TabOpWI_RowName('OpWI Value Position') */
function WM_TabOpWI_RowName($OpWI) {

	switch ($OpWI) {
 			case 0:  
				$Name = WM_OPWI_R1;		
				break;
 			case 1:  
				$Name = WM_OPWI_R2;	
				break;
 			case 2:  
				$Name = WM_OPWI_R3;	
				break;
  			case 3:  
				$Name = WM_OPWI_R4;	
				break;
  			case 4:  	
				$Name = WM_OPWI_R5;	
				break;
  			case 5:  
				$Name = WM_OPWI_R6;	
				break;
  			case 6:  
				$Name = WM_OPWI_R7;	
				break;
  			case 7:  
				$Name = WM_OPWI_R8;	
				break;
	}

	return $Name;
}
/* Table OpWI Retrieve OpWI Column Name */
/* WM_TabOpWI_ClmName('OpWI Value Position') */
function WM_TabOpWI_ClmName($OpWI) {

	switch ($OpWI) {
 			case 0:  
				$Name = WM_OPWI_A0;		
				break;
 			case 1:  
				$Name = WM_OPWI_B0;	
				break;
 			case 2:  
				$Name = WM_OPWI_C0;	
				break;
  			case 3:  
				$Name = WM_OPWI_DE;	
				break;
  			case 4:  	
				$Name = WM_OPWI_F0;	
				break;
  			case 5:  
				$Name = WM_OPWI_G0;	
				break;
  			case 6:  
				$Name = WM_OPWI_H0;	
				break;
  
	}

	return $Name;
}

/* Read One OpWI Value */
/* WM_DBOpWIOne_Read('Column Name', 'Row Name') */
function WM_DBOpWIOne_Read($OpWI_Cl, $OpWI_Rw) {

	$WM_DBOpWI = WM_DBConnect();	

  	$WM_SQL = "SELECT " .$OpWI_Rw.  " FROM " .WM_TAB_OPWI. " WHERE " .WM_OPWI_CL. " = " . "'" .$OpWI_Cl. "'";  

	// Debug
	// echo $WM_SQL;

	$WM_DBRead = mysql_query($WM_SQL) 
		or die("Errore nella query: " . $WM_SQL . "\n" . mysql_error());

         $WM_Row = mysql_fetch_row($WM_DBRead); 
         $WM_DBRead = $WM_Row [0] ;

 	mysql_close($WM_DBOpWI); 

  	return $WM_DBRead;
}

/* Read Column OpWI */
/* WM_DBOpWIClm_Read('Column Name') */
function WM_DBOpWIClm_Read($OpWI_Cl) { 

	global $WM_OpWI;
        global $WM_OCookies;

	for ($OpWI = 0; $OpWI < 8; ++$OpWI) {	// Retrieve 8 OpWI Row Value
	
	$OpWI_Rw= WM_TabOpWI_RowName($OpWI);	// Retrieve OpWI Row Name
	$Tag = $OpWI_Cl.$OpWI_Rw;

	$WM_OpWI [$Tag] = WM_DBOpWIOne_Read($OpWI_Cl, $OpWI_Rw);
	$WM_OCookies [$Tag] = $WM_OpWI [$Tag];

	} 

  	return ;
} 

/* Read All OpWI */
/* WM_DBOpWIAll_Read(NONE) */
function WM_DBOpWIAll_Read() { 

	for ($OpWI = 0; $OpWI < 7; ++$OpWI ) {

		$OpWI_Cl = WM_TabOpWI_ClmName ($OpWI );
		WM_DBOpWIClm_Read($OpWI_Cl);

	}

  	return ;
} 

/* Write One OpWI */
/* WM_DBOpWIOne_Write('Column Name', 'Row Name', 'Value Set') */
function WM_DBOpWIOne_Write($OpWI_Cl, $OpWI_Rw, $Set) {

	$WM_DBOpWI = WM_DBConnect();	

  	$WM_SQL = "UPDATE " .WM_TAB_OPWI.  " SET " .$OpWI_Rw. '='. "'" .$Set. "'" ." 
						WHERE " .WM_OPWI_CL. " = " . "'" .$OpWI_Cl. "'";  
	
	// Debug
	// echo $WM_SQL;
	mysql_query($WM_SQL) ;

 	mysql_close($WM_DBOpWI); 

  	return ;
}

/* Write Clm OpWI */
/* WM_DBOpWIClm_Write('Column Name') */
function WM_DBOpWIClm_Write($OpWI_Cl) { 

	for ($OpWI = 0; $OpWI < 8; ++$OpWI) {	// Retrieve 8 OpWI Row Value

	$OpWI_Rw = WM_TabOpWI_RowName($OpWI);	// Retrieve OpWI Row Name
	$Tag = $OpWI_Cl.$OpWI_Rw;
	$Set = $_COOKIE[$Tag];

	$WM_OpWI [$Tag] = WM_DBOpWIOne_Write($OpWI_Cl, $OpWI_Rw, $Set);
	
	} 

  	return ;
} 

/* Write All OpWI */
/* WM_DBOpWIAll_Write(NULL) */
function WM_DBOpWIAll_Write() { 

	for ($OpWI = 0; $OpWI < 7; ++$OpWI ) {

		$OpWI_Cl = WM_TabOpWI_ClmName ($OpWI );
		WM_DBOpWIClm_Write($OpWI_Cl);

	}

  	return ;
} 
?>