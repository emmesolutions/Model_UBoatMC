<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Module Web eMMe Corner Admin */


// Position
// $WM_Pstn = $_GET[WM_URI_PSTN]. '&amp;';

	// Link
	$WM_WMenu_10 = "\t".'<a accesskey="1" href="index.php?'.$WM_Pstn.'&amp;'.WM_URI_DESK. '=' .WM_DESK_OWI. '">';
	$WM_WMenu_11 = "\t".'<a accesskey="1" href="index.php?'.$WM_Pstn.'&amp;'.WM_URI_DESK. '=' .WM_DESK_LOG. '">';

// Show/Hide Corner Menu
if( $WM_Settings[WM_SYS_VAL_WMCORNER] == "TRUE" ) { $Icons = 'src="./system/template/images/wmcorner/WM_Corner_00.png'; }
if( $WM_Settings[WM_SYS_VAL_WMCORNER] == "FALSE" ) { $Icons = 'src="./system/template/images/wmcorner/WM_Corner_00.png'; }

echo "\n\t".'<div class="WM_Menu">'."\n";

	// Show/Hide Login
	if( $WM_ReadGET[WM_URI_DESK] == WM_DESK_LOG ) { echo $WM_WMenu_10; }
	if( $WM_ReadGET[WM_URI_DESK] <> WM_DESK_LOG ) { echo $WM_WMenu_11; }
	echo '<img class="WM_MenuImg" ';
	echo "\n\t".$Icons. '" '; 
	echo "\n\t".'title="' .WM_MOD_CORNER_LOGIN. '" alt="' .WM_MOD_CORNER_LOGIN. '" height="32" width="32" /></a>'."\n";

echo "\t".'</div>'."\n";

?>
