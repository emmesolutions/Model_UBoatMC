<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Depth+Speed Module */
?>

<?php 
	// Link
	$WM_DthSpd_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_DTHSPD.'=01"> ';	
	$WM_DthSpd_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_DTHSPD.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { echo $WM_DthSpd_01 ; } else { echo $WM_DthSpd_00 ; } 

?>

<?php 
	if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { /* 
		// Depth BarCharts
		echo "\n\t" .'<div id="WM_BChtsDth"> </div>';
		// Speed BarCharts 
		echo "\n\t" .'<div id="WM_BChtsSpd"> </div>'; 
		*/}
	else { 
		echo "\n\t" .'<div class="WM_DthSpd">';
			// Depth/SpeedData
			echo 'Depth '.$Ino_Depth.' cm';
			echo '<br />';
			echo 'Speed '.$Ino_Speed.' kt';
		echo "\n\t" .'</div>';
		}
			
	echo '</a>';
?>