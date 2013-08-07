<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Web Container */

/*
	Web eMMe Framework
	Simply PHP Framework
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
        define('WM_OWI_SCT', WM_OWI.'/scripts');  		// OperatorWI Script Path
        define('WM_OWI_TPT', WM_OWI.'/template');    		// OperatorWI Template Path
        define('WM_OWI_PAG', WM_OWI.'/pages');    		// OperatorWI Pages Path


?>


<div id="WM_WebMain"> 
	<?php
	require (dirname(__FILE__) . '/pages/OpWI384.php');
	?>
</div>
