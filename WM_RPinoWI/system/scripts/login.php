<?php 
  // No Direct Access
  defined('_WMEX') or die("Access Denied!");


/* Script Login */


/* Check Session Exist */
if (_WMAD == 1)	{

	/* Form Logout */
	$WM_Action = 'index.php' . '?' .WM_URI_PAGE. '=' .WM_LOG_OUT ;
	echo "\n\t".'<div class="WM_LoginTitle">' .WM_LOGIN_NAME. '</div>'; 

	echo "\n\t".'<div class="WM_LoginImg">';
	echo "\n\t".'<a href="' .$WM_Action. '">'; 
	echo "\n\t".'<img class="WM_MenuImg" src="./system/template/images/Sys_icon_LogO.svg" ';
	echo "\n\t".'title="' .WM_LOGIN_LOUT. '" alt="' .WM_LOGIN_LOUT. '" height="32" width="32" /></a>';
	echo "\n\t".'</div>'; 

	} else {

	/* Form Login */
	$WM_Action = 'index.php' . '?' .WM_URI_PAGE. '=' .WM_LOG_CHK ;
	echo "\n\t".'<div class="WM_LoginTitle">' .WM_LOGIN_NAME. '</div>'; 

	echo "\n\t".'<form action="' .$WM_Action. '" method="post" accept-charset="UTF-8">';

	echo "\n\t".'<div class="WM_LoginBox">';
	echo "\n\t".'<input class="WM_LoginInput" type="text" id="WM_User" name="' .WM_PST_USER. '" value="' .WM_LOGIN_USER. '" />';
	echo "\n\t".'</div>'; 
	
	echo "\n\t".'<div class="WM_LoginBox">';
	echo "\n\t".'<input class="WM_LoginInput" type="password" id="WM_Pass" name="' .WM_PST_PSWD. '" value="' .WM_LOGIN_PSWD. '" />';
	echo "\n\t".'</div>'; 

	echo "\n\t".'<div class="WM_LoginImg">';
	echo "\n\t".'<input class="WM_MenuImg" type="image" src="./system/template/images/Sys_icon_LogI.svg" ';
	echo "\n\t".'title="' .WM_LOGIN_LIN. '" alt="' .WM_LOGIN_LIN. '" height="32" width="32" />';
	echo "\n\t".'</div>'; 

	echo "\n\t".'</form>';

	}

?>