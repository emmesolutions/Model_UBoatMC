<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* GPS/Compass Module */
?>

<?php 

	if( $WM_SCookies[WM_BCTS_GPSCMP] == "00" ) { 
		echo "\n\t" .'<div class="WM_GPSCmp">';
			// GPS+Compass Data	
			// GPS Data
			echo 'GPS '.'Lat '.$Ino_GPSLat.' - '.'Lng '.$Ino_GPSLng;
			echo '<br />';
			// Compass Data
			echo 'Head = '.$Ino_CmpssH.' Dg.';
			echo ' Pitch = '.$Ino_CmpssP.' Dg.';
			echo ' Roll = '.$Ino_CmpssR.' Dg.';
		echo "\n\t" .'</div>';
		}

?>