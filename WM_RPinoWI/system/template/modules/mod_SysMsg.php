<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* System Message Module */
?>

<?php 
	
	echo "\n\t" .'<div class="WM_SysMsg">';
		// MsgAlm
		echo 'MsgAlm '.$Ino_MsgAlm;
		echo '<br />';
		// Op.Cmd + PrmCmd
		echo 'OprCmd '.$Ino_OprCmd;
		echo ' - ';
		echo 'PrmCmd '.$Ino_PrmCmd;
	echo "\n\t" .'</div>';
				
?> 