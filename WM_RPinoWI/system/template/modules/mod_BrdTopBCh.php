<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Borders Top BarCharts */

	// GPS/Compass Module BarCharts 
	
	if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) {	
	// Link
	$WM_GPSCmp_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_GPSCMP.'=01"> ';	
	$WM_GPSCmp_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_GPSCMP.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) { echo $WM_GPSCmp_01 ; } else { echo $WM_GPSCmp_00 ; } 
	
		echo '<div class="WM_BrdBCh">';
	 
			echo "\n\t" .'<div class="WM_GPSCmp">';
				// GPS Data
				echo 'GPS '.'Lat '.$Ino_GPSLat.' - '.'Lng '.$Ino_GPSLng;
				echo '<br />';
				echo "\n\t" .'</div>';
			// Compass Header BarCharts
			echo "\n\t" .'<div id="WM_BChtsCmpHr"> </div>'; 
			// Compass Pitch/Roll BarCharts
			echo "\n\t" .'<div id="WM_BChtsCmpPR"> </div>'; 
			
		echo '</div> ';
		
		echo '</a>';
	}

	// Depth+Speed Module BarCharts 
	
	if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { 		
	// Link
	$WM_DthSpd_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_DTHSPD.'=01"> ';	
	$WM_DthSpd_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_DTHSPD.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { echo $WM_DthSpd_01 ; } else { echo $WM_DthSpd_00 ; } 
	
		echo '<div class="WM_BrdBCh">';
	
			// Depth BarCharts
			echo "\n\t" .'<div id="WM_BChtsDth"> </div>';
			// Speed BarCharts 
			echo "\n\t" .'<div id="WM_BChtsSpd"> </div>'; 
			
		echo '</div> ';	
		
		echo '</a>';
	}

?> 