<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* GPS+Compass Module */
?>

<div class="WM_GPSCmp"> 

	<?php 

	// GPS Data
	echo 'GPS '.'Lat '.$Ino_GPSLat.' - '.'Lng '.$Ino_GPSLng;
	echo '<br />';
	// Compass Data
	echo 'Cmp '.$Ino_Compas.' Dg.';

	?>
</div>
