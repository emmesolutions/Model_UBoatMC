<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Admin Configuration File */

        /* System Login */
        // Default Value
	define("WM_LOGIN_USER", "username");
	define("WM_LOGIN_PSWD", "password");

/* GET Data */
	// GET Page Value 
	// WM_URI_DESK = WM_DESK_ADM
	// WM_URI_PAGE = ...
	define('WM_ADM_OWI', "WM_OWIConfig");		// OWI Configuration
	define('WM_ADM_SET', "WM_Settings");		// Settings
	define('WM_ADM_ADM', "WM_Admin");		// Administrator
	define('WM_ADM_DLG', "WM_Datalog");		// Datalogger
	
	define('WM_ADM_RPI', "WM_RPi");			// RaspberryPi Command
	define('WM_ADM_RPI_RST', "WM_RPi-InoReset");	// RaspberryPi Command - Arduino Reset
	define('WM_ADM_RPI_RBT', "WM_RPi-RPiReboot");	// RaspberryPi Command - RaspberryPi Reboot
	define('WM_ADM_RPI_HLT', "WM_RPi-RPiHalt");	// RaspberryPi Command - RaspberryPi Halt
	
	define('WM_ADM_SYS', "WM_System");		// System Info
	define('WM_ADM_LIC', "WM_License");		// License