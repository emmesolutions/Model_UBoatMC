<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin System Info Command*/


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_SYS; 
echo "\n\t".'</div>';


echo "\n\t".'<div class="WM_Outline">';

	echo 'PHP Version: ' . phpversion();
	// echo phpinfo() ;
	
	$shell_uname= shell_exec('uname -v');
	echo "<pre>$shell_uname</pre>";
	
	/* System Info */	
	$Bw_Icons = '<img class="WM_MenuImg" src="./system/template/images/modules/sysinfo/Bw_';
	$OS_Icons = '<img class="WM_MenuImg" src="./system/template/images/modules/sysinfo/OS_';
        $Browser = $WM_SysInfo['Browser'];
        $OS = $WM_SysInfo['OS'];


	// Text Info
	echo 'Browser:' .$WM_SysInfo['Browser']. '<br />';
	echo 'OS:' .$WM_SysInfo['OS']. '<br />';
	echo 'IP:' .$WM_SysInfo['IP']. '<br />';

	echo '<div class="WM_SysIcons">';

		// Browser Icons
		echo '<div class="WM_Menu">';
		echo $Bw_Icons.$Browser. '.svg" title="' .$Browser. '" alt="' .$Browser. '" height="32" width="32" />'."\n";
		echo '</div>';
		
		// OS Icons
		echo '<div class="WM_Menu">';
		echo $OS_Icons.$OS. '.svg" title="' .$OS. '" alt="' .$OS. '" height="32" width="32" />'."\n";
		echo '</div>';
		
	echo '</div>';

echo "\n\t".'</div>';	

?>