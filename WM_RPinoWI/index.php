<?php
/*
	[WM_RPinoWI]
	RaspberryPi Arduino Web Interface
	Model Submarine Type212

    	Copyright (C) 2012 Martinelli Michele

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
        define('WM_INC', WM_BASE.'/includes');  	// Includes Path
        define('WM_SYS', WM_BASE.'/system');    	// System Path
        define('WM_ADM', WM_BASE.'/admin');     	// Administrator Path
        define('WM_OWI', WM_BASE.'/opwi'); 	// Operator WebInterface Path

	/* Configuration */
	require (WM_SYS . '/configuration.php');

	/* Includes */
	require (WM_INC . '/includes.php');

	/* System Template */
	require (WM_SYS . '/system.php');

?>
