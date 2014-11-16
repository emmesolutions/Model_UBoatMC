<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Border Bottom */
?>

	<!-- Borders Modules Container -->
	<div id="WM_BotBrdMods">

	<!-- Box 1 -->
	<div class="WM_BrdMdL">	

<?php
        	$WM_Path = WM_SYS_TPT. '/modules';

	// Date Time Module 
	if( $WM_Settings[WM_SYS_MOD_DTETME] == "01" ) { require ($WM_Path. '/mod_DteTme.php'); } 
	// Temp/Humidity Module
	if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "01" ) { require ($WM_Path. '/mod_TmpHmd.php'); } 
	// Hardware Status Module
	if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "01" ) { require ($WM_Path. '/mod_HdwSts.php'); }  
?>
	</div>

	<!-- Box 2 -->
	<div class="WM_BrdMdC">	
<?php
	// Date Time Module 
	if( $WM_Settings[WM_SYS_MOD_DTETME] == "02" ) { require ($WM_Path. '/mod_DteTme.php'); } 
	// Temp/Humidity Module
	if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "02" ) { require ($WM_Path. '/mod_TmpHmd.php'); } 
	// Hardware Status Module
	if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "02" ) { require ($WM_Path. '/mod_HdwSts.php'); }  
?>
	</div>

	<!-- Box 3 -->
	<div class="WM_BrdMdR">	
<?php
	// Date Time Module 
	if( $WM_Settings[WM_SYS_MOD_DTETME] == "03" ) { require ($WM_Path. '/mod_DteTme.php'); } 
	// Temp/Humidity Module
	if( $WM_Settings[WM_SYS_MOD_TMPHMD] == "03" ) { require ($WM_Path. '/mod_TmpHmd.php'); } 
	// Hardware Status Module
	if( $WM_Settings[WM_SYS_MOD_HDWSTS] == "03" ) { require ($WM_Path. '/mod_HdwSts.php'); } 
?>
	</div>

	</div>
	