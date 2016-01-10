<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Radar + Collision Sensor Module */
?>

<?php 
	
	echo "\n\t" .'<div class="WM_RadCll">';
	
		// CllSnr
		echo 'CllSnr '.$Ino_CllSnr. 'Cm ';
		echo '   ';
		// SonarF
		echo 'SonarF '.$Ino_SonarF. 'Cm ';
		echo '   ';
		// SonarB
		echo 'SonarB '.$Ino_SonarB. 'Cm '; 
		
	echo "\n\t" .'</br>';

		// Rudders 1-3 Positions
		echo 'Rudders 1-3 '.$Ino_Rd1Trm. '%';
		echo '   ';
		// Rudders 2-4 Positions
		echo 'Rudders 2-4 '.$Ino_Rd2Trm. '%';
		
	echo "\n\t" .'</div>';
				
?> 