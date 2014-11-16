<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin Administrator */


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_ADM; 
echo "\n\t".'</div>';

$WM_Action = 'index.php' . '?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_ADM ;
$WM_AdmBtn = "./admin/template/images/Adm_icon_Check.svg";

echo "\n\t".'<div class="WM_Outline">';

echo "\n\t".'<form action="' .$WM_Action. '" method="post" accept-charset="UTF-8">';

	// Admin Name
	echo "\n\t".'<div class="WM_AdmInfo" >';
	echo "\n\t".'<label class="WM_AdmInfo01" for="WM_User">' .WM_ADMIN_NAME. '</label> ';
	echo "\n\t".'<input class="WM_AdmInfo10" type="text" id="WM_Name" name="' .WM_PST_NAME. '" value="' .$WM_Admin[WM_ADM_NAME]. '">';
	echo "\n\t".'</div>';
	// Admin eMail	
	echo "\n\t".'<div class="WM_AdmInfo" >';
	echo "\n\t".'<label class="WM_AdmInfo01" for="WM_User">' .WM_ADMIN_EMAL. '</label> ';
	echo "\n\t".'<input class="WM_AdmInfo10" type="text" id="WM_Mail" name="' .WM_PST_EMAL. '" value="' .$WM_Admin[WM_ADM_EMAL]. '">';
	echo "\n\t".'</div>';	
	// Admin Username	
	echo "\n\t".'<div class="WM_AdmInfo" >';
	echo "\n\t".'<label class="WM_AdmInfo01" for="WM_User">' .WM_LOGIN_LUSER. '</label> ';
	echo "\n\t".'<input class="WM_AdmInfo10" type="text" id="WM_User" name="' .WM_PST_USER. '" value="' .$WM_Admin[WM_ADM_USER]. '">';
	echo "\n\t".'</div>';
	// Admin Password	
	echo "\n\t".'<div class="WM_AdmInfo" >';
	echo "\n\t".'<label class="WM_AdmInfo01" for="WM_Pass">' .WM_LOGIN_LPSWD. '</label> ';
	echo "\n\t".'<input class="WM_AdmInfo10" type="password" id="WM_Pass" name="' .WM_PST_PSWD. '" value="' .$WM_Admin[WM_ADM_PSWD]. '">';
	echo "\n\t".'</div>';

	// echo "\n\t".'<input class="WM_AdmInfoBt" accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
		  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmAdmBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
		
echo "\n\t".'</form>';


echo "\n\t".'</div>';

?>