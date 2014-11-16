<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Temperature/Humidity Module */
?>

<?php 
	// Link
	$WM_TmpHmd_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_TMPHMD.'=01"> ';	
	$WM_TmpHmd_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_TMPHMD.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_TMPHMD] == "01" ) { echo $WM_TmpHmd_01 ; } else { echo $WM_TmpHmd_00 ; } 

?>

<?php 
	if( $WM_SCookies[WM_BCTS_TMPHMD] == "01" ) { 
		// Temperature BarCharts
		echo "\n\t" .'<div id="WM_BChtsTmp"> </div>';
		// Humidity  BarCharts 
		echo "\n\t" .'<div id="WM_BChtsHmd"> </div>'; 
		}
	else { 
		echo "\n\t" .'<div class="WM_TmpHmd">';
			// Temperature/Humidity Data
			echo 'Int '.$Ino_TmpInt.' C'.' - '.$Ino_HmdInt.' %';
			echo '<br />';
			echo 'Ext '.$Ino_TmpExt.' C';
			echo '<br />';
			echo 'Wtr '.$Ino_TmpH2O.' C';
		echo "\n\t" .'</div>';
		}
	
	echo '</a>';
?>