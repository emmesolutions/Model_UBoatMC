<?php 
  // No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Module Language */


// Position
$WM_Pstn = $_GET[WM_URI_PSTN]. '&amp;';
?>

<div class="WM_Language"> 

<?php

$Icons = 'src="./system/template/images/modules/language/';

echo "\n\t".'<div class="WM_Menu">'."\n";
	// Select Language
	if( $WM_SCookies[WM_SYS_VAL_LANG] == "EN" ) { echo "\n\t".'<a accesskey="L" href="index.php?'.$WM_Pstn.WM_SYS_VAL_LANG.'=IT">'; }
	if( $WM_SCookies[WM_SYS_VAL_LANG] == "IT" ) { echo "\n\t".'<a accesskey="L" href="index.php?'.$WM_Pstn.WM_SYS_VAL_LANG.'=EN">'; }
	echo "\n\t".'<img class="WM_MenuImg" ';
	if( $WM_SCookies[WM_SYS_VAL_LANG] == "EN" ) { 
	echo "\n\t".$Icons. 'WM_LangEN.png" ';
	echo 'title="' .WM_MOD_LANG_EN. '" alt="' .WM_MOD_LANG_EN. '" height="32" width="32" /></a>'."\n"; 
	}
	if( $WM_SCookies[WM_SYS_VAL_LANG] == "IT" ) { 
	echo "\n\t".$Icons. 'WM_LangIT.png" '; 
	echo 'title="' .WM_MOD_LANG_IT. '" alt="' .WM_MOD_LANG_IT. '" height="32" width="32" /></a>'."\n";
	}	
echo "\t".'</div>'."\n";
?>

</div>
