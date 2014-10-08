<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin Administrator */


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_ADM; 
echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

	
	echo "\n\t" .WM_ADMIN_USER.' = '. $WM_Admin[WM_ADM_USER];
	echo "\n\t".'</br>';
	echo "\n\t" .WM_ADMIN_PSWD.' = '. $WM_Admin[WM_ADM_PSWD];
	echo "\n\t".'</br>';
	echo "\n\t" .WM_ADMIN_NAME.' = '. $WM_Admin[WM_ADM_NAME];
	echo "\n\t".'</br>';
	echo "\n\t" .WM_ADMIN_EMAL.' = '. $WM_Admin[WM_ADM_EMAL];
	echo "\n\t".'</br>';

echo "\n\t".'</div>';

?>