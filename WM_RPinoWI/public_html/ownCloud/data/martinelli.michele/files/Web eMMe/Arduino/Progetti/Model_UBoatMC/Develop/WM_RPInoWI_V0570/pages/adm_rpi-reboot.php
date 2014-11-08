<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin RaspberryPi Command - REBOOT */


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_ADM; 
echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

	include (WM_ADM_SCT. '/RPiReboot.php');

echo "\n\t".'</div>';

?>