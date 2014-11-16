<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Hardware Status Module */
?>

<?php 
	// Link
	$WM_HdwSts_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_HDWSTS.'=01"> ';	
	$WM_HdwSts_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_HDWSTS.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_HDWSTS] == "01" ) { echo $WM_HdwSts_01 ; } else { echo $WM_HdwSts_00 ; } 

?>

<?php
	if( $WM_SCookies[WM_BCTS_HDWSTS] == "01" ) { echo "\n\t" .'<div id="WM_BChtsHdw"> </div>'; }
	else { 
	 	echo "\n\t" .'<div class="WM_HdwSts">';
		 	// Hardware Data
			echo 'HdwBtV '.$Ino_HdwBtV;
			echo ' - EngBtV '.$Ino_EngBtV;
			echo ' - RPiBtV '.$Ino_RPiBtV;
			echo '<br />';
			echo 'Cmd.Sts '.$Ino_CmdSBIN;
		echo "\n\t" .'</div>';
		}
			
	echo '</a>';
?>