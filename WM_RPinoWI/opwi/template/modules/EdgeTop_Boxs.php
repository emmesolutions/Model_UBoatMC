<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Edge Top Boxs */

?>
	
	<?php
	
	// Box 01
	echo "\n\t" .'<div class="WM_EdgeBox01"> ';
		
		echo "\n\t" .'<div class="WM_EdgeBoxs">';
			// Hardware Data
			echo 'Hdw ' .$Ino_HdwBtV. 'V ';
			
			echo '<br />';
			
			echo 'Eng ' .$Ino_EngBtV. 'V ';
			echo ' - ';
			echo 'Eng ' .$Ino_EngBtI. 'A ';
		echo "\n\t" .'</div>'."\n";
	
	echo "\n\t" .'</div>'."\n";
	
	// Box 02
	echo "\n\t" .'<div class="WM_EdgeBox02"> ';	

		echo "\n\t" .'<div class="WM_EdgeBoxs">';	
			// Compass Data
			echo 'Head = ' .$Ino_CmpssH. 'Dg. ';
			
			echo '<br />';
			
			echo ' Pich = ' .$Ino_CmpssP. 'Dg. ';
			echo ' Roll = ' .$Ino_CmpssR. 'Dg. ';
		echo "\n\t" .'</div>'."\n";
		
	echo "\n\t" .'</div>'."\n";

	// Box 03
	echo "\n\t" .'<div class="WM_EdgeBox03"> ';	

		echo "\n\t" .'<div class="WM_EdgeBoxs">';
			// GPS Data
			echo 'Lat '.$Ino_GPSLat;
			
			echo '<br />';
			
			echo 'Lng '.$Ino_GPSLng;
		echo "\n\t" .'</div>'."\n";
		
	echo "\n\t" .'</div>'."\n";	
		
	?>