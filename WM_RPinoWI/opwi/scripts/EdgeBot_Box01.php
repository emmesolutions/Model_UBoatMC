<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Edge Bottom - Box01 */

?>

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
	?>