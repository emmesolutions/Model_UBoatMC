<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Frame Bottom */

?>

<?php

$WM_Path_10 = 'href="http://';
$WM_Icon_01 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/Rfsh_icon_001.svg" ';
$WM_Icon_10 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/Rfsh_icon_100.svg" ';

?>

<!-- Frame Bottom -->
<div id="WM_FrmB">

	<?php
	// Corner Bottom Left
	echo "\n\t" .'<div id="WM_CrnBL"> ';
	?>
	
	<!-- Refresh Page -->
	<a onclick="XHRequest()" > 
	
	<?php	
	echo "\n\t" .'<img ' .$WM_Icon_01. ' title="' .INO_CPT_OPCMD_RFS. '" alt="' .INO_CPT_OPCMD_RFS. '" height="48" width="48" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>
	
	<?php
	// Corner Bottom Left (Portrait Narrow Display)
	echo "\n\t" .'<div id="WM_NrwBL"> ';
	?>
	
	<!-- Refresh Page -->
	<a onclick="XHRequest()" >
	
	<?php
	echo "\n\t" .'<img ' .$WM_Icon_10. ' title="' .INO_CPT_OPCMD_RFS. '" alt="' .INO_CPT_OPCMD_RFS. '" height="46" width="368" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>
		

	<div id="WM_BtnB">

	<?php
	// Botton Boxs
	require (WM_OWI_TPT .'/modules'. '/EdgeBot_Boxs.php');
	?>

	</div>		

	<?php
	// Corner Bottom Right
	echo "\n\t" .'<div id="WM_CrnBR"> ';
	?>
	
	<!-- Refresh Page -->
	<a onclick="XHRequest()" > 
	
	<?php
	echo "\n\t" .'<img ' .$WM_Icon_01. ' title="' .INO_CPT_OPCMD_RFS. '" alt="' .INO_CPT_OPCMD_RFS. '" height="48" width="48" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>

	<?php
	// Corner Bottom Right (Portrait Narrow Display)
	echo "\n\t" .'<div id="WM_NrwBR"> ';
	?>
	
	<!-- Refresh Page -->
	<a onclick="XHRequest()" >
	
	<?php
	echo "\n\t" .'<img ' .$WM_Icon_10. ' title="' .INO_CPT_OPCMD_RFS. '" alt="' .INO_CPT_OPCMD_RFS. '" height="46" width="368" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>
		

</div>