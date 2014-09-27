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
        define('WM_SYS_SCT', WM_SYS.'/scripts');  		// System Script Path
        define('WM_SYS_TPT', WM_SYS.'/template');    		// System Template Path

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
	
	<!-- Javascript Refresh Data -->	
	<script type="text/javascript"> 
	var Refresh= <?= '"'.INO_IP.'"'?>;
	</script>
	<script src="/system/scripts/System.js"></script>
		
	<!-- Javascript CanvasJS Library -->
	<script src="/system/library/canvasjs.min.js"></script>
		
	<?php 
	// Check BarCharts Cookies
	if(!isset($WM_SCookies[WM_BCTS_GPSCMP])) $WM_SCookies[WM_BCTS_GPSCMP] = '00';
	if(!isset($WM_SCookies[WM_BCTS_TMPHMD])) $WM_SCookies[WM_BCTS_TMPHMD] = '00';
	if(!isset($WM_SCookies[WM_BCTS_HDWSTS])) $WM_SCookies[WM_BCTS_HDWSTS] = '00';
	?>
		
	<script type="text/javascript"> 
		// Style Color
		var Clr_Styl01= "<?= WM_CLR_STYL01?>;"
		var Clr_Styl02= "<?= WM_CLR_STYL02?>;"
		var Clr_Bkgd10= "<?= WM_CLR_BKGD10?>;"
		var Clr_Styl10= "<?= WM_CLR_STYL10?>;"
		// Check Borders View
		var Enb_BrdTop= <?= $WM_SCookies[WM_SYS_VAL_BRDTOP]?>;
		var Enb_BrdBot= <?= $WM_SCookies[WM_SYS_VAL_BRDBOT]?>;
		// BarCharts GPS/Compass 
		var Enb_GPSCmp= <?= $WM_SCookies[WM_BCTS_GPSCMP]?>;
		var Ino_CmpssH= <?= $Ino_CmpssH?>;
		var Ino_CmpssP= <?= $Ino_CmpssP?>;
		var Ino_CmpssR= <?= $Ino_CmpssR?>;
  		// BarCharts Tempemperature/Humidity
		var Enb_TmpHmd= <?= $WM_SCookies[WM_BCTS_TMPHMD]?>;
	  	var Ino_TmpInt= <?= $Ino_TmpInt?>;
	  	var Ino_TmpExt= <?= $Ino_TmpExt?>;
	  	var Ino_TmpH2O= <?= $Ino_TmpH2O?>;
	  	var Ino_MEnTmp= <?= $Ino_MEnTmp?>;
	  	var Ino_BlTTmp= <?= $Ino_BlTTmp?>;
	  	var Ino_HmdInt= <?= $Ino_HmdInt?>;
	  	// BarCharts Hardware Status
	  	var Enb_HdwSts= <?= $WM_SCookies[WM_BCTS_HDWSTS]?>;
	  	var Ino_BtAtmy= <?= $Ino_BtAtmy?>;
	  	var Ino_HdwBtV= <?= $Ino_HdwBtV?>;
	  	var Ino_EngBtV= <?= $Ino_EngBtV?>;
	  	var Ino_EngBtI= <?= $Ino_EngBtI?>;
	  	var Ino_RPiBtV= <?= $Ino_RPiBtV?>;
	  	var Ino_MEnSnI= <?= $Ino_MEnSnI?>;
	  	var Ino_BlTSnI= <?= $Ino_BlTSnI?>;
  	</script>
  	
  	<!-- BarCharts Border -->
  	<script src="/system/scripts/BarCharts.js"></script>
  				
  				
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />


		<?php 
		// Auto-Reload Page
		if( $WM_SCookies[WM_SYS_VAL_CNTANR] == '00' ) {
		// Reload Page
		// echo '<meta http-equiv="refresh" content="3;url=http://' . INO_IP . '/">';
		}

		?>

		<title> <?php echo WM_SITE_NAME ?> </title>	
	
		<meta <?php echo 'name="description" content= "' .WM_SITE_DESC. '"' ?> />
		<meta <?php echo 'name="author" content= "' .WM_SITE_AUTH. '"' ?> />

		<meta name="viewport" content="width=device-width, 
					initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

	<link rel="shortcut icon" href="/favicon.ico" />

	<!-- System Stylesheet -->
	<?php require (WM_SYS_SCT. '/stylesheet.php'); ?>

	</head>

	<?php 
		// Auto-Refresh Data
		if( $WM_SCookies[WM_SYS_VAL_CNTANR] == '00' ) {
		// Refresh Page <body onload="autoRefresh(10000);">
		echo '<body onload="XHRequest('."'http://webemme.net/WM_RPinoWI/UMC_InoSIM.php/'".' );">';
		} else {
		// No Refresh  Data
		echo '<body >';
		}

	?>


	<!-- Wrapper -->
	<div id="WM_Wrapper">


<?php
/* Test Operator Web Interface Value:
echo WM_OPWI_A0.$WM_OpWI ['A0R01'].'-';
echo WM_OPWI_B0.$WM_OpWI ['B0R01'].'-';
echo WM_OPWI_C0.$WM_OpWI ['C0R01'].'-';
echo WM_OPWI_DE.$WM_OpWI ['DER01'].'-';
echo WM_OPWI_F0.$WM_OpWI ['F0R01'].'-';
echo WM_OPWI_G0.$WM_OpWI ['G0R01'].'-';
echo WM_OPWI_H0.$WM_OpWI ['H0R01'];

echo $WM_OCookies [WM_OPWI_A0.WM_OPWI_01];

echo WM_URI_DESK. '=' .$WM_ReadGET[WM_URI_DESK];
echo INO_TIMES. '=' .$WM_ReadGET[INO_TIMES];
*/
?>

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