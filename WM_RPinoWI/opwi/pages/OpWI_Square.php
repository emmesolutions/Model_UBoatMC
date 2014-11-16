<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* UBoatMC Operator Web Interface - Square */

?>

<?php 

		// Icons Style
		if( $WM_SCookies [WM_LAY_VAL_STYLE] == "01" ) { $WM_OpWI_FIcons = 'Style01'; } 
		if( $WM_SCookies [WM_LAY_VAL_STYLE] == "02" ) { $WM_OpWI_FIcons = 'Style02'; } 
		if( $WM_SCookies [WM_LAY_VAL_STYLE] == "03" ) { $WM_OpWI_FIcons = 'Style03'; } 

$WM_Icon_01 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_010.svg';
$WM_Icon_02 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_020.svg';
$WM_Path_01 = ' href="' . INO_IP . '/';

?>
	

<div id="WM_Square">

	<?php
	require (WM_OWI_SCT . '/Edge_Top.php');
	?>


<div id="WM_FrmC">

	<?php
	// Left RELOAD
	echo "\n\t" .'<a ' .$WM_Path_01.'"> ';
	echo "\n\t" .'<div id="WM_BtnL">'."\n";	
	echo "\n\t" .'<span class="WM_TextLR">'. INO_CPT_OPCMD_RLD .'</span>'."\n";
	echo "\n\t" .'</div>'.'</a>'."\n";	
	?>

	<div id="WM_OpCmd">

	<?php 
	require (WM_OWI_SCT . '/Column_A0.php');
	require (WM_OWI_SCT . '/Column_B0.php');
	require (WM_OWI_SCT . '/Column_C0.php');
	require (WM_OWI_SCT . '/Column_DE.php');
	require (WM_OWI_SCT . '/Column_F0.php');
	require (WM_OWI_SCT . '/Column_G0.php');
	require (WM_OWI_SCT . '/Column_H0.php');
	?>
	
	</div>

	<?php
	// Right RELOAD
	echo "\n\t" .'<a ' .$WM_Path_01.'"> ';
	echo "\n\t" .'<div id="WM_BtnR">'."\n";	
	echo "\n\t" .'<span class="WM_TextLR">'. INO_CPT_OPCMD_RLD .'</span>'."\n";
	echo "\n\t" .'</div>'.'</a>'."\n";	
	?>

</div>

	<?php
	require (WM_OWI_SCT . '/Edge_Bot.php');
	?>



</div>
	
	