<?php 
	// No Direct Access	
	defined('_WMEX') or exit;	

/* Administration */

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

        /* Path Definitions */
        define('WM_ADM_SCT', WM_ADM.'/scripts');  		// Administration Script Path
        define('WM_ADM_TPT', WM_ADM.'/template');    		// Administration Template Path
        define('WM_ADM_PAG', WM_ADM.'/pages');    		// Administration Pages Path

	/* Page Admin Name */
	echo '<div id="WM_AdminInfo">';
	echo $WM_Admin[WM_ADM_NAME];
	echo '</div>';

	/* Page Main */
	echo '<div id="WM_Main">';
	include (WM_ADM_SCT. '/main.php');
	echo '</div>';

?>



