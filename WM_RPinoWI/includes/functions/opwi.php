<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Function Operator Web Interface Script */


/* Read One OpWI Value */
/* WM_DBOpWIOne_Read('OpWI Column', 'Value Name') */
function WM_DBOpWIOne_Read($OpWI_Cl, $Val) {

	$WM_DBOpWI = WM_DBConnect();	

  	$WM_SQL = "SELECT " .$Val.  " FROM " .WM_TAB_OPWI. " WHERE " .WM_OPWI_CL. " = " . "'" .$OpWI_Cl. "'";  

	$WM_DBRead = mysql_query($WM_SQL) 
		or die("Errore nella query: " . $WM_SQL . "\n" . mysql_error());

        $WM_Row = mysql_fetch_row($WM_DBRead); 
        $WM_DBRead = $WM_Row [0] ;

 	mysql_close($WM_DBOpWI); 

  	return $WM_DBRead;
}

/* Read All OpWI */
/* WM_DBOpWIAll_Read('$OpWI_Column') */
function WM_DBOpWIAll_Read($OpWI_Cl) { 

        	global $WM_OpWI;
        	global $WM_OCookies;

	for ($OpWI = 0; $OpWI < 8; ++$OpWI) {	// Retrieve 8 OpWI Row Value
	
	$Val = WM_TabOpWI_ValName($OpWI);	// Retrieve OpWI Row Name
	$Tag = $OpWI_Cl.$Val;

	$WM_OpWI [$Tag] = WM_DBOpWIOne_Read($OpWI_Cl, $Val);
	$WM_OCookies [$Tag] = $WM_OpWI [$Tag];
	
	} 

  	return ;
} 

/* Table OpWI Retrieve OpWI Value Name */
/* WM_TabOpWI_ValName('OpWI Value Name') */
function WM_TabOpWI_ValName($OpWI) {

	switch ($OpWI) {
 			case 0:  
				$Name = WM_OPWI_01;		
				break;
 			case 1:  
				$Name = WM_OPWI_02;	
				break;
 			case 2:  
				$Name = WM_OPWI_03;	
				break;
  			case 3:  
				$Name = WM_OPWI_04;	
				break;
  			case 4:  	
				$Name = WM_OPWI_05;	
				break;
  			case 5:  
				$Name = WM_OPWI_06;	
				break;
  			case 6:  
				$Name = WM_OPWI_07;	
				break;
  			case 7:  
				$Name = WM_OPWI_08;	
				break;
	}

	return $Name;
}

/* Write One OpWI */
/* WM_DBOpWIOne_Write('OpWI Name', 'Field Name', 'Value') */
function WM_DBOpWIOne_Write($OpWI_Name, $Field_Name, $Value) {

	$WM_DBOpWI = WM_DBConnect();	

  	$WM_SQL = "UPDATE " .WM_TAB_OPWI.  " SET " .$Field_Name. '='. "'" .$Value. "'" ." 
						WHERE " .WM_TS_NAME. " = " . "'" .$Set_Name. "'";  

	mysql_query($WM_SQL) ;

 	mysql_close($WM_DBOpWI); 

  	return $WM_DBRead;
}

?>
