<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Module Admin Menu - 01 */


$Icons = 'src="./admin/template/images/wmenu/';

	/* Web */
	// Sito Web
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_WEB. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Web.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_SITE. '" alt="' .WM_MOD_WMENU_SITE. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';

	/* Administrator */
	// Dati Amministratore
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_ADM. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Admin.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_ADM. '" alt="' .WM_MOD_WMENU_ADM. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';

	/* Settings */
	// Settaggi Framework
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_SET. '">';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Settings.png" ';
	echo "\n\t".'title="' .WM_MOD_WMENU_SET. '" alt="' .WM_MOD_WMENU_SET. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';

	/* RPi Halt */
	echo "\n\t".'<div class="WM_Menu">';
	echo "\n\t".'<a '.'href='.'./admin/pages'. '/RPiHalt.php'.'>';
	echo "\n\t".'<img class="WM_MenuImg" ' .$Icons. 'WM_Halt.png" ';
	echo "\n\t".'title="' .'RPi Halt'. '" alt="' .'RPi Halt'. '" height="32" width="32" /></a>'."\n";
	echo "\n\t".'</div>';

?>
