<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Date Time Module */
?>

	<div class="WM_DteTme"> 

	<?php 

	// Prints Date Time
	echo 'PHP '.$WM_SysInfo['Date'];
	echo ' - '.$WM_SysInfo['Time'];
	echo '<br />';
	echo 'GPS '.$Ino_DataD.'/'.$Ino_DataM.'/'.$Ino_DataY;
	echo ' - '.$Ino_TimeH.':'.$Ino_TimeM;

	?> 

</div>