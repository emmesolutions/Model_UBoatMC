<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Module Validator */
?>


<div class="WM_Validator"> 

	<!-- Web Content Accessibility Guidelines -->
	<div class="WM_Menu">
	<a accesskey="A" href="http://www.w3.org/TR/WCAG10/">
	<img class="WM_MenuImg" src="./system/template/images/modules/validator/WM_W3C.png"  
	<?php echo 'title="' .WM_MOD_VALIDATOR_W3C. '" alt="' .WM_MOD_VALIDATOR_W3C. '" height="32" width="32" /></a>'."\n"; ?>
	</div>

	<!-- XHTML Validator -->
	<div class="WM_Menu">
	<a accesskey="H" href="http://validator.w3.org/check?uri=referer">
	<img class="WM_MenuImg" src="./system/template/images/modules/validator/WM_Validator_XHTML.png"  
	<?php echo 'title="' .WM_MOD_VALIDATOR_XHTML. '" alt="' .WM_MOD_VALIDATOR_XHTML. '" height="32" width="32" /></a>'."\n"; ?>
	</div>

	<!-- CSS Validator -->
	<div class="WM_Menu">
	<a accesskey="C" href="http://jigsaw.w3.org/css-validator/validator?uri=http://framework.webemme.net/index.php&amp;profile=css3">
	<img class="WM_MenuImg" src="./system/template/images/modules/validator/WM_Validator_CSS.png" 
	<?php echo 'title="' .WM_MOD_VALIDATOR_CSS. '" alt="' .WM_MOD_VALIDATOR_CSS. '" height="32" width="32" /></a>'."\n"; ?>

	</div>

</div>
