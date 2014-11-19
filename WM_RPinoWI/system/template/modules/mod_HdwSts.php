<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Hardware Status Module */
?>

<?php
	if( $WM_SCookies[WM_BCTS_HDWSTS] == "00" ) { 
	
	 	echo "\n\t" .'<div class="WM_HdwSts">';
		 	// Hardware Data
			echo 'HdwBtV '.$Ino_HdwBtV;
			echo ' - EngBtV '.$Ino_EngBtV;
			echo ' - RPiBtV '.$Ino_RPiBtV;
			echo '<br />';
			echo 'Cmd.Sts '.$Ino_CmdSBIN;
		echo "\n\t" .'</div>';
		}

?>