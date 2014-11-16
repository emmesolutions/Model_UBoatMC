<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* GPS/Compass Module */
?>

<?php 
	// Link
	$WM_GPSCmp_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_GPSCMP.'=01"> ';	
	$WM_GPSCmp_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_GPSCMP.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) { echo $WM_GPSCmp_01 ; } else { echo $WM_GPSCmp_00 ; } 

?>

<?php 
	if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) { /*
		echo "\n\t" .'<div class="WM_GPSCmp">';
			// GPS Data
			echo 'GPS '.'Lat '.$Ino_GPSLat.' - '.'Lng '.$Ino_GPSLng;
			echo '<br />';
			echo "\n\t" .'</div>';
		// Compass Header BarCharts
		echo "\n\t" .'<div id="WM_BChtsCmpHr"> </div>'; 
		// Compass Pitch/Roll BarCharts
		echo "\n\t" .'<div id="WM_BChtsCmpPR"> </div>'; 
		*/ }
	else { 
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
			
	echo '</a>';

?>