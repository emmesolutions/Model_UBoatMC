<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* System */

/*
	[WM_RPinoWI]
	U-boat Module Control Web Interface

    	Copyright (C) 2014 Martinelli Michele

   	This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

        /* Path Definitions */
        define('WM_SYS_LIB', WM_SYS.'/library');    		// System Library Path
        define('WM_SYS_SCT', WM_SYS.'/scripts');  		// System Script Path
        define('WM_SYS_TPT', WM_SYS.'/template');    		// System Template Path

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   
   
	<?php 
	
		// Header
		require (WM_SYS_SCT. '/header.php');
	?>
	

	<?php 
		// Auto-Refresh Data
		// Auto-Update Empty Data
		if ( $WM_SCookies[WM_SYS_VAL_CNTANR] == '00' )  {
		echo '<body onload="XHRequest('."'http://webemme.net/WM_RPinoWI/UMC_InoSIM.php/'".' );">';
		} else {
			if ( ( $WM_ReadGET[WM_URI_DESK] <> WM_DESK_ADM ) && ( $WM_ReadGET[WM_URI_DESK] <> WM_DESK_LOG ) && ( $Ino_TimeSc == 0 ) )  {
			echo '<body onload="XHRequest('."'http://webemme.net/WM_RPinoWI/UMC_InoSIM.php/'".' );">';
			} else {
			// No Refresh  Data
			echo '<body >';
			}
		}
	?>


	<!-- Wrapper -->
	<div id="WM_Wrapper">

	<!-- U.M.C. Web Interface - Text -->
	<div id="WM_UMC_WI_text">
	</div>

	<!-- Border Top -->
	<?php
	if( $WM_SCookies[WM_SYS_VAL_BRDTOP] == '01' ) {

		echo '<div id="WM_BrdTop">'; 
		require (WM_SYS_SCT. '/border_top.php');
		echo "</div>";

	} 
	?>

	<!-- Web eMMe Corner Menu -->
	<?php
	if( $WM_Settings[WM_SYS_MOD_WMCORNER] == "01" ) {
		echo '<div id="WM_Corner01">'."\n";
		require (WM_SYS_TPT. '/modules/mod_wmcorner.php');
		echo "\t"."</div>";
	} 
	?>

	<?php
	if( $WM_Settings[WM_SYS_MOD_WMCORNER] == "02" ) {
		echo '<div id="WM_Corner02">'."\n";
		require (WM_SYS_TPT. '/modules/mod_wmcorner.php');
		echo "\t"."</div>";
	} 
	?>


	<!-- Web eMMe Admin Menu -->
	<?php
	// Verifico Sessione
	if( _WMAD == 1 ) {

		if( $WM_Settings[WM_SYS_MOD_ADMENU] == "01" ) {
			echo '<div id="WM_Menu01">';
			require (WM_ADM. '/template/modules/mod_wmenu.php');
			echo "</div>";
		} 

		if( $WM_Settings[WM_SYS_MOD_ADMENU] == "02" ) {
			echo '<div id="WM_Menu02">';
			require (WM_ADM. '/template/modules/mod_wmenu.php');
			echo "</div>";
		}
	} 
	?>


	<!-- Desk -->
	
	<div id="WM_Desk">
	<?php require (WM_SYS_SCT. '/desk.php'); ?>
 	</div>	


	<!-- Border Bottom -->
	<?php
	if( $WM_SCookies[WM_SYS_VAL_BRDBOT] == '01' ) {

		echo '<div id="WM_BrdBot">';
		require (WM_SYS_SCT. '/border_bot.php');
		echo "</div>";

	} 
	?>

	</div>

	<!-- Copyright-->
	<?php
	require (WM_SYS_TPT. '/modules/mod_copyright.php');
	?>

	<!-- Debug -->
	<?php
	if( $WM_Debug == true ) { 	// Debug
		echo '<div id="WM_Debug">';
		require (WM_SYS_TPT. '/modules/mod_debug.php');
		echo "</div>";
	} 
	?>

	<!-- RELOAD XMLHttpRequest-->
	<div id="WM_XHRequest">
	</div>
		
	</body>

</html>	