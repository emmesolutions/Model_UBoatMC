<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Module Admin Menu - 01 */


$Icons = 'src="./admin/template/images/wmenu/';

	/* Web */
	// Operator Web Interface
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_DESK_OWI. '=' .WM_DESK_OWI. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Web.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_OWI. '" alt="' .WM_MOD_WMENU_OWI. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';

	/* Administrator */
	// Dati Amministratore
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_ADM. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Admin.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_ADM. '" alt="' .WM_MOD_WMENU_ADM. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';

	/* Datalogger */
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_DLG. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Icons.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_DLG. '" alt="' .WM_MOD_WMENU_DLG. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';


	/* Settings */
	// Settaggi Framework
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_SET. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Settings.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_SET. '" alt="' .WM_MOD_WMENU_SET. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';

	/* RPi Command */
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_RPI. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_RPi.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_RPI. '" alt="' .WM_MOD_WMENU_RPI. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';
	
	/* System Info */
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_SYS. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Icons.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_SYS. '" alt="' .WM_MOD_WMENU_SYS. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';

?>