<?php
/*
	[WM_RPinoWI]
	U-boat Module Control Web Interface

    	Copyright (C) 2014 Martinelli Michele

   	This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

	/* Session */
	define('_WMEX', 1);

        /* Path Definitions */
        define('WM_DS', DIRECTORY_SEPARATOR);	// Directory Separator
        define('WM_BASE', dirname(__FILE__));	// Root Path
        define('WM_INC', WM_BASE.'/includes');  // Includes Path
        define('WM_SYS', WM_BASE.'/system');    // System Path
        define('WM_ADM', WM_BASE.'/admin');     // Administrator Path
        define('WM_OWI', WM_BASE.'/opwi'); 	// Operator WebInterface Path

	/* Configuration */
	require (WM_SYS . '/configuration.php');

	/* Includes */
	require (WM_INC . '/includes.php');

	/* Check Arduino DEMO Mode */
	if( $WM_Settings[WM_SYS_VAL_DEMO] == "TRUE" ) { $INO_ADD = INO_DEMO;  }
	if( $WM_Settings[WM_SYS_VAL_DEMO] == "FALSE" ) { $INO_ADD = INO_ADIP; }
	
	define('INO_IP', $INO_ADD);
	
	/* System Template */
	require (WM_SYS . '/system.php');
	
?>