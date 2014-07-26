<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Operator Web Interface */

?>

<?php 

$WM_Icon_01 = 'src="./opwi/template/images/icon_010.svg';
$WM_Icon_02 = 'src="./opwi/template/images/icon_020.svg';
$WM_Path_01 = ' href="http://' . INO_IP . '/';

?>
	
<div id="WM_Desk">
<div id="WM_Square">

	<?php
	require (dirname(__FILE__) . '/Frame_T.php');
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

	require (dirname(__FILE__) . '/Column_A0.php');
	require (dirname(__FILE__) . '/Column_B0.php');
	require (dirname(__FILE__) . '/Column_C0.php');
	require (dirname(__FILE__) . '/Column_DE.php');
	require (dirname(__FILE__) . '/Column_F0.php');
	require (dirname(__FILE__) . '/Column_G0.php');
	require (dirname(__FILE__) . '/Column_H0.php');

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
	require (dirname(__FILE__) . '/Frame_B.php');
	?>


</div>
</div>
	
	

