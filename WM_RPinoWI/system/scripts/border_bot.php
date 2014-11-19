<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Border Bottom */
?>

	<!-- Borders Modules Container -->
	<div id="WM_BotBrdMods">

<?php

     	$WM_Path = WM_SYS_TPT. '/modules';

	// Link TmpHmd
	$WM_TmpHmd_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_TMPHMD.'=01" > ';	
	$WM_TmpHmd_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_TMPHMD.'=00" > ';
	// Link DteTme
	$WM_DteTme_00 = "\t".'<a accesskey="3"  > ';	
	$WM_DteTme_01 = "\t".'<a accesskey="3"  > ';	
	// Link HdwSts
	$WM_HdwSts_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_HDWSTS.'=01" > ';	
	$WM_HdwSts_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_HDWSTS.'=00" > ';
	
	
	// Show/Hide BarCharts
	if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "01" ) {
		if( $WM_SCookies[WM_BCTS_TMPHMD] == "01" ) { echo $WM_TmpHmd_01 ; } else { echo $WM_TmpHmd_00 ; } 
		}
	if( $WM_Settings[WM_SYS_MOD_DTETME] == "01" ) {
		if( $WM_SCookies[WM_BCTS_DTETME] == "01" ) { echo $WM_DteTme_01 ; } else { echo $WM_DteTme_00 ; } 
		}		
	if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "01" ) {
		if( $WM_SCookies[WM_BCTS_HDWSTS] == "01" ) { echo $WM_HdwSts_01 ; } else { echo $WM_HdwSts_00 ; } 
		}		

		// Box 1 - Left
		echo "\n\t" .'<div class="WM_BrdMdL">';
			// Date Time Module 
			if( $WM_Settings[WM_SYS_MOD_DTETME] == "01" ) { require ($WM_Path. '/mod_DteTme.php'); } 
			// Temp/Humidity Module
			if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "01" ) { require ($WM_Path. '/mod_TmpHmd.php'); } 
			// Hardware Status Module
			if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "01" ) { require ($WM_Path. '/mod_HdwSts.php'); }  
		echo "\n\t" .'</div>';
	
	echo '</a>';
	
	// Show/Hide BarCharts
	if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "02" ) {
		if( $WM_SCookies[WM_BCTS_TMPHMD] == "01" ) { echo $WM_TmpHmd_01 ; } else { echo $WM_TmpHmd_00 ; } 
		}
	if( $WM_Settings[WM_SYS_MOD_DTETME] == "02" ) {
		if( $WM_SCookies[WM_BCTS_DTETME] == "01" ) { echo $WM_DteTme_01 ; } else { echo $WM_DteTme_00 ; } 
		}		
	if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "02" ) {
		if( $WM_SCookies[WM_BCTS_HDWSTS] == "01" ) { echo $WM_HdwSts_01 ; } else { echo $WM_HdwSts_00 ; } 
		}
		
		// Box 2 - Central
		echo "\n\t" .'<div class="WM_BrdMdC">';
			// Date Time Module 
			if( $WM_Settings[WM_SYS_MOD_DTETME] == "02" ) { require ($WM_Path. '/mod_DteTme.php'); } 
			// Temp/Humidity Module
			if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "02" ) { require ($WM_Path. '/mod_TmpHmd.php'); } 
			// Hardware Status Module
			if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "02" ) { require ($WM_Path. '/mod_HdwSts.php'); }  
		echo "\n\t" .'</div>';
	
	echo '</a>';
	
	// Show/Hide BarCharts
	if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "03" ) {
		if( $WM_SCookies[WM_BCTS_TMPHMD] == "01" ) { echo $WM_TmpHmd_01 ; } else { echo $WM_TmpHmd_00 ; } 
		}
	if( $WM_Settings[WM_SYS_MOD_DTETME] == "03" ) {
		if( $WM_SCookies[WM_BCTS_DTETME] == "01" ) { echo $WM_DteTme_01 ; } else { echo $WM_DteTme_00 ; } 
		}		
	if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "03" ) {
		if( $WM_SCookies[WM_BCTS_HDWSTS] == "01" ) { echo $WM_HdwSts_01 ; } else { echo $WM_HdwSts_00 ; } 
		}

		// Box 3 - Right
		echo "\n\t" .'<div class="WM_BrdMdC">';
			// Date Time Module 
			if( $WM_Settings[WM_SYS_MOD_DTETME] == "03" ) { require ($WM_Path. '/mod_DteTme.php'); } 
			// Temp/Humidity Module
			if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "03" ) { require ($WM_Path. '/mod_TmpHmd.php'); } 
			// Hardware Status Module
			if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "03" ) { require ($WM_Path. '/mod_HdwSts.php'); } 
		echo "\n\t" .'</div>';
	
	echo '</a>';

?> 

<?php
	// Borders Top BarCharts Module
	require ($WM_Path. '/mod_BrdBotBCh.php');
?> 
	</div> 
	