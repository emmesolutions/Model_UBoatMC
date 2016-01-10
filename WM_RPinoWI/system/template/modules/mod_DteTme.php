<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Date Time Module */
?>

<?php 
	
	echo "\n\t" .'<div class="WM_DteTme">';
	
		// GPS Date Time
		echo 'GPS '.$Ino_DataD.'/'.$Ino_DataM.'/'.$Ino_DataY;
		echo ' - '.$Ino_TimeH.':'.$Ino_TimeM;
		
		echo '<br />';
		
		echo 'TimeOn '.$Ino_TON_Sec.' - '.$Ino_TON_Hor.':'.$Ino_TON_Min;
		
	echo "\n\t" .'</div>';
				
?> 