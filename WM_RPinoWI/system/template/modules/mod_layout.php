<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Module Layout Settings */


// Position
$WM_Pstn = $_GET[WM_URI_PSTN]. '&amp;';
?>

<div class="WM_Layout"> 
<?php

$Icons = 'src="./system/template/images/modules/layout/';

echo "\n\t".'<div class="WM_Menu">'."\n";
	// Select Width 
	if( $WM_SCookies[WM_LAY_VAL_WIDTH] == "01" ) { echo "\n\t".'<a accesskey="W" href="index.php?'.$WM_Pstn.WM_LAY_VAL_WIDTH.'=02">'; }
	if( $WM_SCookies[WM_LAY_VAL_WIDTH] == "02" ) { echo "\n\t".'<a accesskey="W" href="index.php?'.$WM_Pstn.WM_LAY_VAL_WIDTH.'=03">'; }
	if( $WM_SCookies[WM_LAY_VAL_WIDTH] == "03" ) { echo "\n\t".'<a accesskey="W" href="index.php?'.$WM_Pstn.WM_LAY_VAL_WIDTH.'=01">'; }
	echo "\n\t".'<img class="WM_MenuImg" ';
	if( $WM_SCookies[WM_LAY_VAL_WIDTH] == "01" ) { echo "\n\t" .$Icons. 'WM_Width.png" '; }
	if( $WM_SCookies[WM_LAY_VAL_WIDTH] == "02" ) { echo "\n\t" .$Icons. 'WM_Width.png" '; }
	if( $WM_SCookies[WM_LAY_VAL_WIDTH] == "03" ) { echo "\n\t" .$Icons. 'WM_Width.png" '; }
	echo 'title="' .WM_MOD_LAYOUT_WIDTH. '" alt="' .WM_MOD_LAYOUT_WIDTH. '" height="32" width="32" /></a>'."\n";	
echo "\t".'</div>'."\n";

echo "\n\t".'<div class="WM_Menu">'."\n";
	// Select Style
	if( $WM_SCookies[WM_LAY_VAL_STYLE] == "01" ) { echo "\n\t".'<a accesskey="S" href="index.php?'.$WM_Pstn.WM_LAY_VAL_STYLE.'=02">'; }
	if( $WM_SCookies[WM_LAY_VAL_STYLE] == "02" ) { echo "\n\t".'<a accesskey="S" href="index.php?'.$WM_Pstn.WM_LAY_VAL_STYLE.'=03">'; }
	if( $WM_SCookies[WM_LAY_VAL_STYLE] == "03" ) { echo "\n\t".'<a accesskey="S" href="index.php?'.$WM_Pstn.WM_LAY_VAL_STYLE.'=01">'; }
	echo "\n\t".'<img class="WM_MenuImg" ';
	if( $WM_SCookies[WM_LAY_VAL_STYLE] == "01" ) { echo "\n\t" .$Icons. 'WM_Style.png" '; }
	if( $WM_SCookies[WM_LAY_VAL_STYLE] == "02" ) { echo "\n\t" .$Icons. 'WM_Style.png" '; }
	if( $WM_SCookies[WM_LAY_VAL_STYLE] == "03" ) { echo "\n\t" .$Icons. 'WM_Style.png" '; }
	echo 'title="' .WM_MOD_LAYOUT_STYLE. '" alt="' .WM_MOD_LAYOUT_STYLE. '" height="32" width="32" /></a>'."\n";
echo "\t".'</div>'."\n";

echo "\n\t".'<div class="WM_Menu">'."\n";
	// Select Fonts
	if( $WM_SCookies[WM_LAY_VAL_FONTS] == "01" ) { echo "\n\t".'<a accesskey="F" href="index.php?'.$WM_Pstn.WM_LAY_VAL_FONTS.'=02">'; }
	if( $WM_SCookies[WM_LAY_VAL_FONTS] == "02" ) { echo "\n\t".'<a accesskey="F" href="index.php?'.$WM_Pstn.WM_LAY_VAL_FONTS.'=03">'; }
	if( $WM_SCookies[WM_LAY_VAL_FONTS] == "03" ) { echo "\n\t".'<a accesskey="F" href="index.php?'.$WM_Pstn.WM_LAY_VAL_FONTS.'=01">'; }
	echo "\n\t".'<img class="WM_MenuImg" ';
	if( $WM_SCookies[WM_LAY_VAL_FONTS] == "01" ) { echo "\n\t" .$Icons. 'WM_Fonts.png" '; }
	if( $WM_SCookies[WM_LAY_VAL_FONTS] == "02" ) { echo "\n\t" .$Icons. 'WM_Fonts.png" '; }
	if( $WM_SCookies[WM_LAY_VAL_FONTS] == "03" ) { echo "\n\t" .$Icons. 'WM_Fonts.png" '; }
	echo 'title="' .WM_MOD_LAYOUT_FONTS. '" alt="' .WM_MOD_LAYOUT_FONTS. '" height="32" width="32" /></a>'."\n";
echo "\t".'</div>'."\n";

?>
</div>

