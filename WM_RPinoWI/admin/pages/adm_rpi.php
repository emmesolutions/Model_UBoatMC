<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin RaspberryPi Command*/


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_RPI; 
echo "\n\t".'</div>';


echo "\n\t".'<div class="WM_Outline">';


// RPi Reboot
	echo "\n\t".'<a '.'href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_RPI_RBT. '">';
	echo "\n\t".' <span class="WM_AdmBtn" > '; 
	echo "\n\t".WM_RPI_VAL_RBT;
	echo "\n\t".'</span>';
	echo "\n\t".'</a>';

// RPi Halt
	echo "\n\t".'<a '.'href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_RPI_HLT. '">';
	echo "\n\t".' <span class="WM_AdmBtn" > '; 
	echo "\n\t".WM_RPI_VAL_HLT;
	echo "\n\t".'</span>';	
	echo "\n\t".'</a>';
	
echo "\n\t".'</div>';
	

?>