<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Hardware Status Module */
?>

	<div class="WM_HdwSts"> 

	<?php

	echo 'TimeOn '.$Ino_TON_Sec.' - '.$Ino_TON_Hor.':'.$Ino_TON_Min;
	echo '<br />';	
	echo 'HdwBtV '.$Ino_HdwBtV;
	echo ' - EngBtV '.$Ino_EngBtV;
	echo ' - RPiBtV '.$Ino_RPiBtV;
	echo '<br />';
	echo 'Cmd.Sts '.$Ino_CmdSBIN;

	?>

	</div>
