<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Edge Bottom Boxs */

?>

	<?php
	
	// Box 01
	echo "\n\t" .'<div class="WM_EdgeBox01"> ';
		
		echo "\n\t" .'<div class="WM_EdgeBoxs">';	
			// MsgAlm
			echo 'MsgAlm '.$Ino_MsgAlm;
			echo '<br />';
			// Op.Cmd + PrmCmd
			echo 'Cmd '.$Ino_OprCmd;
			echo ' - ';
			echo 'Prm '.$Ino_PrmCmd;
		echo "\n\t" .'</div>'."\n";
			
	echo "\n\t" .'</div>'."\n";
 
	// Box 02
	echo "\n\t" .'<div class="WM_EdgeBox02"> ';	

		echo "\n\t" .'<div class="WM_EdgeBoxs">';	
			echo 'Op.WI Square';
		echo "\n\t" .'</div>'."\n";
		
	echo "\n\t" .'</div>'."\n";
 
	// Box 03
	echo "\n\t" .'<div class="WM_EdgeBox03"> ';	

		echo "\n\t" .'<div class="WM_EdgeBoxs">';
			// echo $WM_SysInfo['Date'];
			// echo '<br/>';
			echo 'RPi '.$WM_SysInfo['Time'];
		echo "\n\t" .'</div>'."\n";
	
	echo "\n\t" .'</div>'."\n";
	
	?>
