<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Column G0 */

?>

<?php

// OpCmd Instruction
$WM_OpCmd_G010 = "\t".'<a accesskey="1" href="index.php?'.WM_OPWI_G0.WM_OPWI_R1;
$WM_OpCmd_G020 = "\t".'<a accesskey="2" href="index.php?'.WM_OPWI_G0.WM_OPWI_R2;
$WM_OpCmd_G030 = "\t".'<a accesskey="3" href="index.php?'.WM_OPWI_G0.WM_OPWI_R3;
$WM_OpCmd_G040 = "\t".'<a accesskey="4" href="index.php?'.WM_OPWI_G0.WM_OPWI_R4;
$WM_OpCmd_G050 = "\t".'<a accesskey="5" href="index.php?'.WM_OPWI_G0.WM_OPWI_R5;
$WM_OpCmd_G060 = "\t".'<a accesskey="6" href="index.php?'.WM_OPWI_G0.WM_OPWI_R6;
$WM_OpCmd_G070 = "\t".'<a accesskey="7" href="index.php?'.WM_OPWI_G0.WM_OPWI_R7;
$WM_OpCmd_G080 = "\t".'<a accesskey="8" href="index.php?'.WM_OPWI_G0.WM_OPWI_R8;

// OpCmd Icons
$WM_Icon_exe = 'src="./opwi/template/images/icon_010.svg" ';

$WM_Path_010 = 'href=" ' . INO_IP . '/';
$WM_icon_G010 = 'src="./opwi/template/images/icon_G010.svg" ';
$WM_icon_G011 = 'src="./opwi/template/images/icon_G011.svg" ';
$WM_icon_G012 = 'src="./opwi/template/images/icon_G012.svg" ';
$WM_icon_G013 = 'src="./opwi/template/images/icon_G013.svg" ';

$WM_icon_G020 = 'src="./opwi/template/images/icon_G020.svg" ';
$WM_icon_G021 = 'src="./opwi/template/images/icon_G021.svg" ';
$WM_icon_G022 = 'src="./opwi/template/images/icon_G022.svg" ';
$WM_icon_G023 = 'src="./opwi/template/images/icon_G023.svg" ';

$WM_icon_G060 = 'src="./opwi/template/images/icon_G060.svg" ';
$WM_icon_G061 = 'src="./opwi/template/images/icon_G061.svg" ';
$WM_icon_G062 = 'src="./opwi/template/images/icon_G062.svg" ';
$WM_icon_G063 = 'src="./opwi/template/images/icon_G063.svg" ';

$WM_icon_G070 = 'src="./opwi/template/images/icon_G070.svg" ';
$WM_icon_G071 = 'src="./opwi/template/images/icon_G070.svg" ';
$WM_icon_G072 = 'src="./opwi/template/images/icon_G070.svg" ';
$WM_icon_G073 = 'src="./opwi/template/images/icon_G070.svg" ';

$WM_icon_G080 = 'src="./opwi/template/images/icon_G080.svg" ';
$WM_icon_G081 = 'src="./opwi/template/images/icon_G080.svg" ';
$WM_icon_G082 = 'src="./opwi/template/images/icon_G080.svg" ';
$WM_icon_G083 = 'src="./opwi/template/images/icon_G080.svg" ';


// OpInstruments
// Temperature:
$WM_OpIns_G031 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G031.'</div>'.'<div id="WM_Val01">'.$Ino_TmpExt.' C' .'</div>'.'</a>';	
$WM_OpIns_G032 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G032.'</div>'.'<div id="WM_Val01">'.$Ino_TmpH2O.' C' .'</div>'.'</a>';
$WM_OpIns_G033 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G033.'</div>'.'<div id="WM_Val01">'.$Ino_TmpInt.' C' .'</div>'.'</a>';
$WM_OpIns_G034 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G034.'</div>'.'<div id="WM_Val01">'.$Ino_HmdInt.' %' .'</div>'.'</a>';
$WM_OpIns_G035 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G035.'</div>'.'<div id="WM_Val01">'.$Ino_MEnTmp.' C' .'</div>'.'</a>';
$WM_OpIns_G036 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G036.'</div>'.'<div id="WM_Val01">'.$Ino_BlTTmp.' C' .'</div>'.'</a>';
$WM_OpIns_G038 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

// Supply:
$WM_OpIns_G041 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G041.'</div>'.'<div id="WM_Val01">'.$Ino_HdwBtV.' V' .'</div>'.'</a>';
$WM_OpIns_G042 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G042.'</div>'.'<div id="WM_Val01">'.$Ino_EngBtV.' V' .'</div>'.'</a>';
$WM_OpIns_G043 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G043.'</div>'.'<div id="WM_Val01">'.$Ino_RPiBtV.' A' .'</div>'.'</a>';
$WM_OpIns_G044 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G044.'</div>'.'<div id="WM_Val01">'.$Ino_EngBtI.' A' .'</div>'.'</a>';
$WM_OpIns_G045 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G045.'</div>'.'<div id="WM_Val01">'.$Ino_MEnSnI.' A' .'</div>'.'</a>';
$WM_OpIns_G046 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G046.'</div>'.'<div id="WM_Val01">'.$Ino_BlTSnI.' A' .'</div>'.'</a>';
$WM_OpIns_G048 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

// SpeedDepth:
$WM_OpIns_G051 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G051.'</div>'.'<div id="WM_Val01">'.$Ino_Speed.' Kn' .'</div>'.'</a>';
$WM_OpIns_G052 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_G052.'</div>'.'<div id="WM_Val01">'.$Ino_Depth.' Dm' .'</div>'.'</a>';
$WM_OpIns_G058 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

?>



<!-- Column G0 -->
<ul id="WM_Nav01">

  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_G010) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
	
		<?php
		// OpCmd_G010
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_G0.WM_OPWI_R1];
	if( $OCookies == "10" ) {$Icon = $WM_icon_G011; $Cpt = INO_CPT_OPCMD_G011; $Cmd = INO_OPCMD_G010; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_G012; $Cpt = INO_CPT_OPCMD_G012; $Cmd = INO_OPCMD_G010; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_G013; $Cpt = INO_CPT_OPCMD_G013; $Cmd = INO_OPCMD_G010; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_G010 - Parameter
		echo "\n\t" . $WM_OpCmd_G010. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_G011. ' 
				title="' .INO_CPT_OPCMD_G011. '" alt="' .INO_CPT_OPCMD_G011. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_G010. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_G012. ' 
				title="' .INO_CPT_OPCMD_G012. '" alt="' .INO_CPT_OPCMD_G012. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_G010. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_G013. ' 
				title="' .INO_CPT_OPCMD_G013. '" alt="' .INO_CPT_OPCMD_G013. '" 
				height="48" width="48" />'.'</a>'."\n";	
					
		?>

	</li>


  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_G020) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_G020
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_G0.WM_OPWI_R2];
	if( $OCookies == "10" ) {$Icon = $WM_icon_G021; $Cpt = INO_CPT_OPCMD_G021; $Cmd = INO_OPCMD_G020; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_G022; $Cpt = INO_CPT_OPCMD_G022; $Cmd = INO_OPCMD_G020; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_G023; $Cpt = INO_CPT_OPCMD_G023; $Cmd = INO_OPCMD_G020; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_G020 - Parameter
		echo "\n\t" . $WM_OpCmd_G020. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_G021. ' 
				title="' .INO_CPT_OPCMD_G021. '" alt="' .INO_CPT_OPCMD_G021. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_G020. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_G022. ' 
				title="' .INO_CPT_OPCMD_G022. '" alt="' .INO_CPT_OPCMD_G022. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_G020. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_G023. ' 
				title="' .INO_CPT_OPCMD_G023. '" alt="' .INO_CPT_OPCMD_G023. '" 
				height="48" width="48" />'.'</a>'."\n";		
			
		?>
        
	</li>
  
	<li class="WM_Btn09">
	
		<?php
		// OpIns_G030
		// Temperature
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_G0.WM_OPWI_R3];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_TmpExt; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_G031; }
	if( $OCookies == "20" ) {$Val = $Ino_TmpH2O; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_G032; }
	if( $OCookies == "30" ) {$Val = $Ino_TmpInt; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_G033; }
	if( $OCookies == "40" ) {$Val = $Ino_HmdInt; $Unt = ' %'; $Cpt = INO_CPT_OPCMD_G034; }
	if( $OCookies == "50" ) {$Val = $Ino_MEnTmp; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_G035; }
	if( $OCookies == "60" ) {$Val = $Ino_BlTTmp; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_G036; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_G030 - Instruments
		echo "\n\t" . $WM_OpCmd_G030. '=10">';
		echo "\n\t" . $WM_OpIns_G031. "\n";
		echo "\n\t" . $WM_OpCmd_G030. '=20">';
		echo "\n\t" . $WM_OpIns_G032. "\n";
		echo "\n\t" . $WM_OpCmd_G030. '=30">';
		echo "\n\t" . $WM_OpIns_G033. "\n";	
		echo "\n\t" . $WM_OpCmd_G030. '=40">';
		echo "\n\t" . $WM_OpIns_G034. "\n";	
		echo "\n\t" . $WM_OpCmd_G030. '=50">';
		echo "\n\t" . $WM_OpIns_G035. "\n";
		echo "\n\t" . $WM_OpCmd_G030. '=60">';
		echo "\n\t" . $WM_OpIns_G036. "\n";		
			
		?>

    	</li>

	<li class="WM_Btn09">
	
		<?php
		// OpIns_G040
		// Supply
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_G0.WM_OPWI_R4];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_HdwBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_G041; }
	if( $OCookies == "20" ) {$Val = $Ino_EngBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_G042; }
	if( $OCookies == "30" ) {$Val = $Ino_RPiBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_G043; }
	if( $OCookies == "40" ) {$Val = $Ino_EngBtI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_G044; }
	if( $OCookies == "50" ) {$Val = $Ino_MEnSnI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_G045; }
	if( $OCookies == "60" ) {$Val = $Ino_BlTSnI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_G046; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_G040 - Instruments
		echo "\n\t" . $WM_OpCmd_G040. '=10">';
		echo "\n\t" . $WM_OpIns_G041. "\n";
		echo "\n\t" . $WM_OpCmd_G040. '=20">';
		echo "\n\t" . $WM_OpIns_G042. "\n";	
		echo "\n\t" . $WM_OpCmd_G040. '=30">';
		echo "\n\t" . $WM_OpIns_G043. "\n";	
		echo "\n\t" . $WM_OpCmd_G040. '=40">';
		echo "\n\t" . $WM_OpIns_G044. "\n";	
		echo "\n\t" . $WM_OpCmd_G040. '=50">';
		echo "\n\t" . $WM_OpIns_G045. "\n";
		echo "\n\t" . $WM_OpCmd_G040. '=60">';
		echo "\n\t" . $WM_OpIns_G046. "\n";		
			
		?>

    	</li>

	<li class="WM_Btn09">
	
		<?php
		// OpIns_G050
		// Speed/Depth
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_G0.WM_OPWI_R5];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_Speed; $Unt = ' Kn'; $Cpt = INO_CPT_OPCMD_G051; }
	if( $OCookies == "20" ) {$Val = $Ino_Depth; $Unt = ' Dm'; $Cpt = INO_CPT_OPCMD_G052; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_G050 - Instruments
		echo "\n\t" . $WM_OpCmd_G050. '=10">';
		echo "\n\t" . $WM_OpIns_G051. "\n";
		echo "\n\t" . $WM_OpCmd_G050. '=20">';
		echo "\n\t" . $WM_OpIns_G052. "\n";	

		?>

    	</li>
	
  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_G060) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_G060
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_G0.WM_OPWI_R6];
	if( $OCookies == "10" ) {$Icon = $WM_icon_G061; $Cpt = INO_CPT_OPCMD_G061; $Cmd = INO_OPCMD_G060; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_G062; $Cpt = INO_CPT_OPCMD_G062; $Cmd = INO_OPCMD_G060; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_G063; $Cpt = INO_CPT_OPCMD_G063; $Cmd = INO_OPCMD_G060; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_G060 - Parameter
		echo "\n\t" . $WM_OpCmd_G060. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_G061. ' 
				title="' .INO_CPT_OPCMD_G061. '" alt="' .INO_CPT_OPCMD_G061. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_G060. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_G062. ' 
				title="' .INO_CPT_OPCMD_G062. '" alt="' .INO_CPT_OPCMD_G062. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_G060. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_G063. ' 
				title="' .INO_CPT_OPCMD_G063. '" alt="' .INO_CPT_OPCMD_G063. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>
  
  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_G070) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_G070
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_G0.WM_OPWI_R7];
	if( $OCookies == "10" ) {$Icon = $WM_icon_G071; $Cpt = INO_CPT_OPCMD_G071; $Cmd = INO_OPCMD_G070; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_G072; $Cpt = INO_CPT_OPCMD_G072; $Cmd = INO_OPCMD_G070; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_G073; $Cpt = INO_CPT_OPCMD_G073; $Cmd = INO_OPCMD_G070; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_G070 - Parameter
		echo "\n\t" . $WM_OpCmd_G070. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_G071. ' 
				title="' .INO_CPT_OPCMD_G071. '" alt="' .INO_CPT_OPCMD_G071. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_G070. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_G072. ' 
				title="' .INO_CPT_OPCMD_G072. '" alt="' .INO_CPT_OPCMD_G072. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_G070. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_G073. ' 
				title="' .INO_CPT_OPCMD_G073. '" alt="' .INO_CPT_OPCMD_G073. '" 
				height="48" width="48" />'.'</a>'."\n";		
			
		?>
        
	</li>

  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_G080) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_G080
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_G0.WM_OPWI_R8];
	if( $OCookies == "10" ) {$Icon = $WM_icon_G081; $Cpt = INO_CPT_OPCMD_G081; $Cmd = INO_OPCMD_G080; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_G082; $Cpt = INO_CPT_OPCMD_G082; $Cmd = INO_OPCMD_G080; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_G083; $Cpt = INO_CPT_OPCMD_G083; $Cmd = INO_OPCMD_G080; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_G080 - Parameter
		echo "\n\t" . $WM_OpCmd_G080. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_G081. ' 
				title="' .INO_CPT_OPCMD_G081. '" alt="' .INO_CPT_OPCMD_G081. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_G080. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_G082. ' 
				title="' .INO_CPT_OPCMD_G082. '" alt="' .INO_CPT_OPCMD_G082. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_G080. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_G083. ' 
				title="' .INO_CPT_OPCMD_G083. '" alt="' .INO_CPT_OPCMD_G083. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>

	
</ul>