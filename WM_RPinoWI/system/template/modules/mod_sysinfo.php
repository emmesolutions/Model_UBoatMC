<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Module System Info */


	$Icons = '<img class="WM_MenuImg" src="./system/template/images/modules/sysinfo/WM_';
        $Browser = $WM_SysInfo['Browser'];
        $OS = $WM_SysInfo['OS'];

echo '<div class="WM_SysIcons">';

	// Browser Icons
	echo '<div class="WM_Menu">';
	echo $Icons.$Browser. '.png" title="' .$Browser. '" alt="' .$Browser. '" height="32" width="32" />'."\n";
	echo '</div>';
	// OS Icons
	echo '<div class="WM_Menu">';
	echo $Icons.$OS. '.png" title="' .$OS. '" alt="' .$OS. '" height="32" width="32" />'."\n";
	echo '</div>';

echo '</div>';

	// Text Info
	echo '<div class="WM_SysInfo">';
		echo 'Browser:' .$WM_SysInfo['Browser']. '<br />';
		echo 'OS:     ' .$WM_SysInfo['OS']. '<br />';
		echo 'IP:     ' .$WM_SysInfo['IP']. '<br />';
		// echo '<br />' .$_SERVER['HTTP_USER_AGENT']. '<br />';
	echo '</div>';

?>
