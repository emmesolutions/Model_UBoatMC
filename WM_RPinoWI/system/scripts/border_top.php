<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Border Top */
?>

	<!-- Borders Modules Container -->
	<div id="WM_TopBrdMods">

<?php

     	$WM_Path = WM_SYS_TPT. '/modules';

	// Link GPSCmp
	$WM_GPSCmp_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_GPSCMP.'=01" > ';	
	$WM_GPSCmp_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_GPSCMP.'=00" > ';
	// Link SysMsg
	$WM_SysMsg_00 = "\t".'<a accesskey="3"  > ';	
	$WM_SysMsg_01 = "\t".'<a accesskey="3"  > ';	
	// Link DthSpd
	$WM_DthSpd_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_DTHSPD.'=01" > ';	
	$WM_DthSpd_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_DTHSPD.'=00" > ';
	
	
	// Show/Hide BarCharts
	if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "01" ) {
		if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) { echo $WM_GPSCmp_01 ; } else { echo $WM_GPSCmp_00 ; } 
		}
	if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "01" ) {
		if( $WM_SCookies[WM_BCTS_SYSMSG] == "01" ) { echo $WM_SysMsg_01 ; } else { echo $WM_SysMsg_00 ; } 
		}		
	if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "01" ) {
		if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { echo $WM_DthSpd_01 ; } else { echo $WM_DthSpd_00 ; } 
		}		

		// Box 1 - Left
		echo "\n\t" .'<div class="WM_BrdMdL">';
			// GPS+Compass Module
			if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "01" ) { require ($WM_Path. '/mod_GPSCmp.php'); } 
			// System Message Module
			if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "01" ) { require ($WM_Path. '/mod_SysMsg.php'); } 
			// Depth+Speed Module
			if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "01" ) { require ($WM_Path. '/mod_DthSpd.php'); }  
		echo "\n\t" .'</div>';
	
	echo '</a>';
	
	// Show/Hide BarCharts
	if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "02" ) {
		if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) { echo $WM_GPSCmp_01 ; } else { echo $WM_GPSCmp_00 ; } 
		}
	if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "02" ) {
		if( $WM_SCookies[WM_BCTS_SYSMSG] == "01" ) { echo $WM_SysMsg_01 ; } else { echo $WM_SysMsg_00 ; } 
		}		
	if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "02" ) {
		if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { echo $WM_DthSpd_01 ; } else { echo $WM_DthSpd_00 ; } 
		}
		
		// Box 2 - Central
		echo "\n\t" .'<div class="WM_BrdMdC">';
			// GPS+Compass Module
			if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "02" ) { require ($WM_Path. '/mod_GPSCmp.php'); } 
			// System Message Module
			if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "02" ) { require ($WM_Path. '/mod_SysMsg.php'); } 
			// Depth+Speed Module
			if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "02" ) { require ($WM_Path. '/mod_DthSpd.php'); } 
		echo "\n\t" .'</div>';
	
	echo '</a>';
	
	// Show/Hide BarCharts
	if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "03" ) {
		if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) { echo $WM_GPSCmp_01 ; } else { echo $WM_GPSCmp_00 ; } 
		}
	if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "03" ) {
		if( $WM_SCookies[WM_BCTS_SYSMSG] == "01" ) { echo $WM_SysMsg_01 ; } else { echo $WM_SysMsg_00 ; } 
		}		
	if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "03" ) {
		if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { echo $WM_DthSpd_01 ; } else { echo $WM_DthSpd_00 ; } 
		}

		// Box 3 - Right
		echo "\n\t" .'<div class="WM_BrdMdC">';
			// GPS+Compass Module
			if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "03" ) { require ($WM_Path. '/mod_GPSCmp.php'); } 
			// System Message Module
			if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "03" ) { require ($WM_Path. '/mod_SysMsg.php'); } 
			// Depth+Speed Module
			if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "03" ) { require ($WM_Path. '/mod_DthSpd.php'); } 
		echo "\n\t" .'</div>';
	
	echo '</a>';

?> 

	<!-- Borders Add -->
	<div class="WM_BrdAdd">
<?php
	// Radar and Collision Sensors Module
	require ($WM_Path. '/mod_RadCll.php');
?> 
	</div> 
	
<?php
	// Borders Top BarCharts Module
	require ($WM_Path. '/mod_BrdTopBCh.php');
?> 	

	</div> 