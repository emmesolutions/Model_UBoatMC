<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Borders Bottom BarCharts */

	// Hardware Status Module BarCharts 
	
	if( $WM_SCookies[WM_BCTS_HDWSTS] == "01" ) {	
	// Link
	$WM_HdwSts_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_HDWSTS.'=01"> ';	
	$WM_HdwSts_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_HDWSTS.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_HDWSTS] == "01" ) { echo $WM_HdwSts_01 ; } else { echo $WM_HdwSts_00 ; } 
	
		echo '<div class="WM_BrdBCh">';
	 
			echo "\n\t" .'<div class="WM_HdwSts">';
			// Hardware BarCharts
			echo "\n\t" .'<div id="WM_BChtsHdw"> </div>'; 
			
		echo '</div> ';
		
		echo '</a>';
	}

	// Temperature/Humidity Module BarCharts 
	
	if( $WM_SCookies[WM_BCTS_TMPHMD] == "01" ) { 		
	// Link
	$WM_TmpHmd_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_TMPHMD.'=01"> ';	
	$WM_TmpHmd_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_TMPHMD.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_TMPHMD] == "01" ) { echo $WM_TmpHmd_01 ; } else { echo $WM_TmpHmd_00 ; } 
	
		echo '<div class="WM_BrdBCh">';
	
			// Temperature BarCharts
			echo "\n\t" .'<div id="WM_BChtsTmp"> </div>';
			// Humidity  BarCharts 
			echo "\n\t" .'<div id="WM_BChtsHmd"> </div>'; 
			
		echo '</div> ';	
		
		echo '</a>';
	}

?> 