<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin RaspberryPi Command*/


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_RPI; 
echo "\n\t".'</div>';


echo "\n\t".'<div class="WM_Outline">';


// RPi Reboot
echo "\n\t".'<form>';
	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_RPI_VAL_RBT; 
	echo "\n\t".'</div>';

	echo "\n\t".'<a '.'href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_RPI_RBT. '">';
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="button" value="' .WM_RPI_SEND. '" />';
	echo "\n\t".'</a>';
		
	echo "\n\t".'</div>';
echo "\n\t".'</form>';

// RPi Halt
echo "\n\t".'<form>';
	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_RPI_VAL_HLT; 
	echo "\n\t".'</div>';

	echo "\n\t".'<a '.'href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_RPI_HLT. '">';
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="button" value="' .WM_RPI_SEND. '" />';
	echo "\n\t".'</a>';
	
	echo "\n\t".'</div>';
echo "\n\t".'</form>';
	
echo "\n\t".'</div>';
	

?>