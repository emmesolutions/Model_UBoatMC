<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin RaspberryPi Command*/


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_RPI; 
echo "\n\t".'</div>';


echo "\n\t".'<div class="WM_Outline">';


// RPi Output -> Reset Arduino
echo "\n\t".'<form>';
	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_RPI_VAL_RST; 
	echo "\n\t".'</div>';
	
	echo "\n\t".'<a '.'href='.'./admin/scripts'. '/InoReset.php'.'>';
	echo "\n\t".'<div class="WM_AdmSetMod02">'; 
	echo "\n\t".'<input accesskey="U" type="button" value="' .WM_RPI_SEND. '" />';
	echo "\n\t".'</a>';
		
	echo "\n\t".'</div>';
echo "\n\t".'</form>';

// RPi Reboot
echo "\n\t".'<form>';
	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_RPI_VAL_RBT; 
	echo "\n\t".'</div>';

	echo "\n\t".'<a '.'href='.'./admin/scripts'. '/RPiHalt.php'.'>';
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_RPI_SEND. '" />';
	echo "\n\t".'</a>';
		
	echo "\n\t".'</div>';
echo "\n\t".'</form>';

// RPi Halt
echo "\n\t".'<form>';
	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_RPI_VAL_HLT; 
	echo "\n\t".'</div>';

	echo "\n\t".'<a '.'href='.'./admin/scripts'. '/RPiHalt.php'.'>';
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_RPI_SEND. '" />';
	echo "\n\t".'</a>';
	
	echo "\n\t".'</div>';
echo "\n\t".'</form>';
	
echo "\n\t".'</div>';

?>