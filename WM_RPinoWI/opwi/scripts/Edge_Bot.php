<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Frame Bottom */

?>

<?php

$WM_Path_10 = 'href="http://';
$WM_Icon_01 = 'src="./opwi/template/images/icon_010.svg" ';

?>

<!-- Frame Bottom -->
<div id="WM_FrmB">

	<?php
	// Corner Bottom Left
	echo "\n\t" .'<div id="WM_CrnBL"> ';
	?>
	
	<!- Refresh Page -->
	<a onclick="XHRequest()" > 
	
	<?php	
	echo "\n\t" .'<img ' .$WM_Icon_01. ' title="' .INO_CPT_OPCMD_CrnTL. '" alt="' .INO_CPT_OPCMD_CrnTL. '" height="48" width="48" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>

	<div id="WM_BtnB">

	<?php
	// Box 01
	require (WM_OWI_SCT . '/EdgeBot_Box01.php');
	// Box 02
	require (WM_OWI_SCT . '/EdgeBot_Box02.php');
	// Box 03
	require (WM_OWI_SCT . '/EdgeBot_Box03.php');
	?>

	</div>		

	<?php
	// Corner Bottom Right
	echo "\n\t" .'<div id="WM_CrnBR"> ';
	?>
	
	<!- Refresh Page -->
	<a onclick="XHRequest()" > 
	
	<?php
	echo "\n\t" .'<img ' .$WM_Icon_01. ' title="' .INO_CPT_OPCMD_CrnTR. '" alt="' .INO_CPT_OPCMD_CrnTR. '" height="48" width="48" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>

</div>