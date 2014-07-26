<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Temp/Humidity Module */
?>

<div class="WM_TmpHmd"> 

	<?php 

	// GPS Data
	echo 'Int '.$Ino_TmpInt.' C'.' - '.$Ino_HmdInt.' %';
	echo '<br />';
	echo 'Ext '.$Ino_TmpExt.' C';
	echo '<br />';
	echo 'Wtr '.$Ino_TmpH2O.' C';
	?>

</div>
