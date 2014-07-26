<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Border Top */
?>

	<!-- Borders Modules Container -->
	<div id="WM_BrdMods">

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
require ($WM_Path. '/mod_RadCll.php');
?> 
	</div> 

	</div> 
