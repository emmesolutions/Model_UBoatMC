<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Depth+Speed Module */
?>

<?php 

	if( $WM_SCookies[WM_BCTS_DTHSPD] == "00" ) { 
		echo "\n\t" .'<div class="WM_DthSpd">';
			// Depth/SpeedData
			echo 'Depth '.$Ino_Depth.' cm';
			echo '<br />';
			echo 'Speed '.$Ino_Speed.' kt';
		echo "\n\t" .'</div>';
		}

?>