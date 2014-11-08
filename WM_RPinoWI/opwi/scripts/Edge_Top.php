<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Frame Top */

?>

<?php

$WM_Path_10 = 'http://';
$WM_Icon_01 = 'src="./opwi/template/Rfsh_icon_001.svg" ';
$WM_Icon_10 = 'src="./opwi/template/Rfsh_icon_100.svg" ';

?>

<!-- Frame Top -->
<div id="WM_FrmT">

	<?php
	// Corner Top Left
	echo "\n\t" .'<div id="WM_CrnTL"> ';
	?>
	
	<!-- Refresh Page -->
	<a onclick="XHRequest()" >
	
	<?php
	echo "\n\t" .'<img ' .$WM_Icon_01. ' title="' .INO_CPT_OPCMD_RFS. '" alt="' .INO_CPT_OPCMD_RFS. '" height="46" width="46" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>

	<?php
	// Corner Top Left (Portrait Narrow Display)
	echo "\n\t" .'<div id="WM_NrwTL"> ';
	?>
	
	<!-- Refresh Page -->
	<a onclick="XHRequest()" >
	
	<?php
	echo "\n\t" .'<img ' .$WM_Icon_10. ' title="' .INO_CPT_OPCMD_RFS. '" alt="' .INO_CPT_OPCMD_RFS. '" height="46" width="368" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>	


	<div id="WM_BtnT">

	<?php
	// Box 01
	require (WM_OWI_TPT .'/modules'. '/EdgeTop_Box01.php');
	// Box 02
	require (WM_OWI_TPT .'/modules'. '/EdgeTop_Box02.php');
	// Box 03
	require (WM_OWI_TPT .'/modules'. '/EdgeTop_Box03.php');
	?>

	</div>		

	<?php
	// Corner Top Right
	echo "\n\t" .'<div id="WM_CrnTR"> ';
	?>
	
	<!-- Refresh Page -->
	<a onclick="XHRequest()" > 
	
	<?php
	echo "\n\t" .'<img ' .$WM_Icon_01. ' title="' .INO_CPT_OPCMD_RFS. '" alt="' .INO_CPT_OPCMD_RFS. '" height="48" width="48" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>

	<?php
	// Corner Top Right (Portrait Narrow Display)
	echo "\n\t" .'<div id="WM_NrwTR"> ';
	?>
	
	<!-- Refresh Page -->
	<a onclick="XHRequest()" >
	
	<?php
	echo "\n\t" .'<img ' .$WM_Icon_10. ' title="' .INO_CPT_OPCMD_RFS. '" alt="' .INO_CPT_OPCMD_RFS. '" height="46" width="368" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>	

</div>