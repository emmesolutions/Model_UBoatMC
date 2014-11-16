<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Border Top */
?>

	<!-- Borders Modules Container -->
	<div id="WM_TopBrdMods">

	<!-- Box 1 -->
	<div class="WM_BrdMdL"> 

<?php
     	$WM_Path = WM_SYS_TPT. '/modules';

	// GPS+Compass Module
	if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "01" ) { require ($WM_Path. '/mod_GPSCmp.php'); } 
	// System Message Module
	if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "01" ) { require ($WM_Path. '/mod_SysMsg.php'); } 
	// Depth+Speed Module
	if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "01" ) { require ($WM_Path. '/mod_DthSpd.php'); }  
?>
	</div>

	<!-- Box 2 -->
	<div class="WM_BrdMdC"> 
<?php
	// GPS+Compass Module
	if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "02" ) { require ($WM_Path. '/mod_GPSCmp.php'); } 
	// System Message Module
	if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "02" ) { require ($WM_Path. '/mod_SysMsg.php'); } 
	// Depth+Speed Module
	if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "02" ) { require ($WM_Path. '/mod_DthSpd.php'); } 
?>  
	</div>

	<!-- Box 3 -->
	<div class="WM_BrdMdR">
<?php
	// GPS+Compass Module
	if( $WM_Settings[WM_SYS_MOD_GPSCMP] == "03" ) { require ($WM_Path. '/mod_GPSCmp.php'); } 
	// System Message Module
	if( $WM_Settings[WM_SYS_MOD_SYSMSG] == "03" ) { require ($WM_Path. '/mod_SysMsg.php'); } 
	// Depth+Speed Module
	if( $WM_Settings[WM_SYS_MOD_DTHSPD] == "03" ) { require ($WM_Path. '/mod_DthSpd.php'); } 
?> 
	</div> 

	<!-- Borders Add -->
	<div class="WM_BrdAdd">
<?php
	// Radar and Collision Sensors Module
	require ($WM_Path. '/mod_RadCll.php');
?> 
	</div> 
	
<?php
	// Borders BarCharts 
	// GPS/Compass Module BarCharts 
	
	if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) {	
	// Link
	$WM_GPSCmp_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_GPSCMP.'=01"> ';	
	$WM_GPSCmp_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_GPSCMP.'=00"> ';
	
	// Show/Hide BarCharts
	if( $WM_SCookies[WM_BCTS_GPSCMP] == "01" ) { echo $WM_GPSCmp_01 ; } else { echo $WM_GPSCmp_00 ; } 
	
		echo '<div class="WM_BrdBCh">';
	 
			echo "\n\t" .'<div class="WM_GPSCmp">';
				// GPS Data
				echo 'GPS '.'Lat '.$Ino_GPSLat.' - '.'Lng '.$Ino_GPSLng;
				echo '<br />';
				echo "\n\t" .'</div>';
			// Compass Header BarCharts
			echo "\n\t" .'<div id="WM_BChtsCmpHr"> </div>'; 
			// Compass Pitch/Roll BarCharts
			echo "\n\t" .'<div id="WM_BChtsCmpPR"> </div>'; 
			
			
		echo '</div> ';
	}
		
	// Depth+Speed Module BarCharts 
	
	if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { 		
		// Link
		$WM_DthSpd_00 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_DTHSPD.'=01"> ';	
		$WM_DthSpd_01 = "\t".'<a accesskey="3" href="index.php?'.'&amp;'.WM_BCTS_DTHSPD.'=00"> ';
		
		// Show/Hide BarCharts
		if( $WM_SCookies[WM_BCTS_DTHSPD] == "01" ) { echo $WM_DthSpd_01 ; } else { echo $WM_DthSpd_00 ; } 
		
		echo '<div class="WM_BrdBCh">';
	
			// Depth BarCharts
			echo "\n\t" .'<div id="WM_BChtsDth"> </div>';
			// Speed BarCharts 
			echo "\n\t" .'<div id="WM_BChtsSpd"> </div>'; 
			
			
		echo '</div> ';	
		
		echo '</a>';
	}
?> 

	</div> 