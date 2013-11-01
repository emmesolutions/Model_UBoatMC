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
	echo "\n\t" .'<a ' .$WM_Path_10. '1234"'.'> ';
	echo "\n\t" .'<img ' .$WM_Icon_01. ' title="' .INO_CPT_OPCMD_CrnTL. '" alt="' .INO_CPT_OPCMD_CrnTL. '" height="48" width="48" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>

	<div id="WM_BtnB">

	<?php
	// Box 01
	echo "\n\t" .'<div class="WM_Box01"> ';
	
	// MsgAlm
	echo 'MsgAlm '.$Ino_MsgAlm;
	echo '<br />';
	// Op.Cmd + PrmCmd
	echo 'OprCmd '.$Ino_OprCmd;
	echo ' - ';
	echo 'PrmCmd '.$Ino_PrmCmd;
	
	echo "\n\t" .'</div>'."\n";
	
	// Box 02
	echo "\n\t" .'<div class="WM_Box02"> ';	
	
	echo 'Op.WI Square';
	
	echo "\n\t" .'</div>'."\n";
	
	// Box 03
	echo "\n\t" .'<div class="WM_Box03"> ';	

	echo 'PHP '.$WM_SysInfo['Date'];
	echo ' - '.$WM_SysInfo['Time'];
	
	echo "\n\t" .'</div>'."\n";
	?>

	</div>		

		<?php
	// Corner Bottom Right
	echo "\n\t" .'<div id="WM_CrnBR"> ';
	echo "\n\t" .'<a ' .$WM_Path_10. '1234"'.'> ';
	echo "\n\t" .'<img ' .$WM_Icon_01. ' title="' .INO_CPT_OPCMD_CrnTR. '" alt="' .INO_CPT_OPCMD_CrnTR. '" height="48" width="48" /></a>'."\n";
	echo "\n\t" .'</div>'."\n";
	?>

</div>
