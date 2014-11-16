<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Column A0 */

?>

<?php

// OpCmd Instruction
$WM_OpCmd_A010 = "\t".'<a accesskey="1" href="index.php?'.WM_OPWI_A0.WM_OPWI_R1;
$WM_OpCmd_A020 = "\t".'<a accesskey="2" href="index.php?'.WM_OPWI_A0.WM_OPWI_R2;
$WM_OpCmd_A030 = "\t".'<a accesskey="3" href="index.php?'.WM_OPWI_A0.WM_OPWI_R3;
$WM_OpCmd_A040 = "\t".'<a accesskey="4" href="index.php?'.WM_OPWI_A0.WM_OPWI_R4;
$WM_OpCmd_A050 = "\t".'<a accesskey="5" href="index.php?'.WM_OPWI_A0.WM_OPWI_R5;
$WM_OpCmd_A060 = "\t".'<a accesskey="6" href="index.php?'.WM_OPWI_A0.WM_OPWI_R6;
$WM_OpCmd_A070 = "\t".'<a accesskey="7" href="index.php?'.WM_OPWI_A0.WM_OPWI_R7;
$WM_OpCmd_A080 = "\t".'<a accesskey="8" href="index.php?'.WM_OPWI_A0.WM_OPWI_R8;

// OpCmd Icons
$WM_Icon_exe = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_010.svg" ';

$WM_Path_010 = 'href=" ' . INO_IP . '/';
$WM_icon_A010 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_A010.svg" ';
$WM_icon_A011 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_A011.svg" ';
$WM_icon_A012 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_A012.svg" ';
$WM_icon_A013 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_A013.svg" ';

$WM_icon_A020 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_A020.svg" ';
$WM_icon_A021 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_A021.svg" ';
$WM_icon_A022 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_A022.svg" ';
$WM_icon_A023 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_A023.svg" ';

$WM_icon_A060 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A061 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A062 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A063 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';

$WM_icon_A070 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A071 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A072 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A073 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';

$WM_icon_A080 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A081 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A082 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';
$WM_icon_A083 = 'src="./opwi/template/images/' .$WM_OpWI_FIcons. '/icon_000.svg" ';

// OpInstruments
// Temperature:
$WM_OpIns_A031 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A031.'</div>'.'<div class="WM_Val01">'.$Ino_TmpExt.' C' .'</div>'.'</a>';	
$WM_OpIns_A032 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A032.'</div>'.'<div class="WM_Val01">'.$Ino_TmpH2O.' C' .'</div>'.'</a>';
$WM_OpIns_A033 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A033.'</div>'.'<div class="WM_Val01">'.$Ino_TmpInt.' C' .'</div>'.'</a>';
$WM_OpIns_A034 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A034.'</div>'.'<div class="WM_Val01">'.$Ino_HmdInt.' %' .'</div>'.'</a>';
$WM_OpIns_A035 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A035.'</div>'.'<div class="WM_Val01">'.$Ino_MEnTmp.' C' .'</div>'.'</a>';
$WM_OpIns_A036 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A036.'</div>'.'<div class="WM_Val01">'.$Ino_BlTTmp.' C' .'</div>'.'</a>';
$WM_OpIns_A038 = '<div class="WM_Val01">'.'NONE' .'</div>'.'</a>';

// Supply:
$WM_OpIns_A041 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A041.'</div>'.'<div class="WM_Val01">'.$Ino_HdwBtV.' V' .'</div>'.'</a>';
$WM_OpIns_A042 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A042.'</div>'.'<div class="WM_Val01">'.$Ino_EngBtV.' V' .'</div>'.'</a>';
$WM_OpIns_A043 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A043.'</div>'.'<div class="WM_Val01">'.$Ino_RPiBtV.' A' .'</div>'.'</a>';
$WM_OpIns_A044 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A044.'</div>'.'<div class="WM_Val01">'.$Ino_EngBtI.' A' .'</div>'.'</a>';
$WM_OpIns_A045 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A045.'</div>'.'<div class="WM_Val01">'.$Ino_MEnSnI.' A' .'</div>'.'</a>';
$WM_OpIns_A046 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A046.'</div>'.'<div class="WM_Val01">'.$Ino_BlTSnI.' A' .'</div>'.'</a>';
$WM_OpIns_A048 = '<div class="WM_Val01">'.'NONE' .'</div>'.'</a>';

// SpeedDepth:
$WM_OpIns_A051 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A051.'</div>'.'<div class="WM_Val01">'.$Ino_Speed.' Kn' .'</div>'.'</a>';
$WM_OpIns_A052 = '<div class="WM_Dsc00">'.INO_CPT_OPCMD_A052.'</div>'.'<div class="WM_Val01">'.$Ino_Depth.' Dm' .'</div>'.'</a>';
$WM_OpIns_A058 = '<div class="WM_Val01">'.'NONE' .'</div>'.'</a>';

?>

<!-- Column A01x -->
<ul class="WM_Nav01">

  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_A010) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
 		
		<?php
		// OpCmd_A010
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_A0.WM_OPWI_R1];
	if( $OCookies == "10" ) {$Icon = $WM_icon_A011; $Cpt = INO_CPT_OPCMD_A011; $Cmd = INO_OPCMD_A010; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_A012; $Cpt = INO_CPT_OPCMD_A012; $Cmd = INO_OPCMD_A010; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_A013; $Cpt = INO_CPT_OPCMD_A013; $Cmd = INO_OPCMD_A010; $Prm = '@3"';}

		echo "\n\t" .'<nav> ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="46" width="46" >'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="46" width="46" >';
		echo "\n\t" .'</a>'."\n";

		// OpCmd_A010 - Parameter
		echo "\n\t" . $WM_OpCmd_A010. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_A011. ' title="' .INO_CPT_OPCMD_A011. '" alt="' .INO_CPT_OPCMD_A011. '" 
				height="46" width="46" >'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_A010. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_A012. ' title="' .INO_CPT_OPCMD_A012. '" alt="' .INO_CPT_OPCMD_A012. '" 
				height="46" width="46" >'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_A010. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_A013. ' title="' .INO_CPT_OPCMD_A013. '" alt="' .INO_CPT_OPCMD_A013. '" 
				height="46" width="46" >'.'</a>'."\n";	
		echo "\n\t" .'</nav> ';
		?>

	</li>

  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_A020) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		              else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_A020
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_A0.WM_OPWI_R2];
	if( $OCookies == "10" ) {$Icon = $WM_icon_A021; $Cpt = INO_CPT_OPCMD_A021; $Cmd = INO_OPCMD_A020; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_A022; $Cpt = INO_CPT_OPCMD_A022; $Cmd = INO_OPCMD_A020; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_A023; $Cpt = INO_CPT_OPCMD_A023; $Cmd = INO_OPCMD_A020; $Prm = '@3"';}

		echo "\n\t" .'<nav> ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="46" width="46" >'."\n";
		
		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="46" width="46" >'."\n";
		echo "\n\t" .'</a>'."\n";
		
		// OpCmd_A020 - Parameter
		echo "\n\t" . $WM_OpCmd_A020. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_A021. ' title="' .INO_CPT_OPCMD_A021. '" alt="' .INO_CPT_OPCMD_A021. '" 
				height="46" width="46" >'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_A020. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_A022. ' title="' .INO_CPT_OPCMD_A022. '" alt="' .INO_CPT_OPCMD_A022. '" 
				height="46" width="46" >'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_A020. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_A023. ' title="' .INO_CPT_OPCMD_A023. '" alt="' .INO_CPT_OPCMD_A023. '" 
				height="46" width="46" >'.'</a>'."\n";
		echo "\n\t" .'</nav> ';		
				
		?>
        
	</li>
  
	<li class="WM_Btn09">
	
		<?php
		// OpIns_A030
		// Temperature
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_A0.WM_OPWI_R3];
	$Val = ''; $Unt = ' '; $Cpt = ' ';
	if( $OCookies == "10" ) {$Val = $Ino_TmpExt; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_A031; }
	if( $OCookies == "20" ) {$Val = $Ino_TmpH2O; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_A032; }
	if( $OCookies == "30" ) {$Val = $Ino_TmpInt; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_A033; }
	if( $OCookies == "40" ) {$Val = $Ino_HmdInt; $Unt = ' %'; $Cpt = INO_CPT_OPCMD_A034; }
	if( $OCookies == "50" ) {$Val = $Ino_MEnTmp; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_A035; }
	if( $OCookies == "60" ) {$Val = $Ino_BlTTmp; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_A036; }

		echo "\n\t" .'<nav> ';
		echo "\n\t" .'<div class="WM_Dsc00">'.$Cpt.'</div>'.'<div class="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_A030 - Instruments
		echo "\n\t" . $WM_OpCmd_A030. '=10">';
		echo "\n\t" . $WM_OpIns_A031. "\n";
		echo "\n\t" . $WM_OpCmd_A030. '=20">';
		echo "\n\t" . $WM_OpIns_A032. "\n";
		echo "\n\t" . $WM_OpCmd_A030. '=30">';
		echo "\n\t" . $WM_OpIns_A033. "\n";	
		echo "\n\t" . $WM_OpCmd_A030. '=40">';
		echo "\n\t" . $WM_OpIns_A034. "\n";	
		echo "\n\t" . $WM_OpCmd_A030. '=50">';
		echo "\n\t" . $WM_OpIns_A035. "\n";
		echo "\n\t" . $WM_OpCmd_A030. '=60">';
		echo "\n\t" . $WM_OpIns_A036. "\n";	
		echo "\n\t" . $WM_OpCmd_A030. '=80">';
		echo "\n\t" . $WM_OpIns_A038. "\n";	
		echo "\n\t" .'</nav> ';
		?>

    	</li>

	<li class="WM_Btn09">
	
		<?php
		// OpIns_A040
		// Supply
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_A0.WM_OPWI_R4];
	$Val = ''; $Unt = ' '; $Cpt = ' ';
	if( $OCookies == "10" ) {$Val = $Ino_HdwBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_A041; }
	if( $OCookies == "20" ) {$Val = $Ino_EngBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_A042; }
	if( $OCookies == "30" ) {$Val = $Ino_RPiBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_A043; }
	if( $OCookies == "40" ) {$Val = $Ino_EngBtI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_A044; }
	if( $OCookies == "50" ) {$Val = $Ino_MEnSnI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_A045; }
	if( $OCookies == "60" ) {$Val = $Ino_BlTSnI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_A046; }

		echo "\n\t" .'<nav> '; 
		echo "\n\t" .'<div class="WM_Dsc00">'.$Cpt.'</div>'.'<div class="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_A040 - Instruments
		echo "\n\t" . $WM_OpCmd_A040. '=10">';
		echo "\n\t" . $WM_OpIns_A041. "\n";
		echo "\n\t" . $WM_OpCmd_A040. '=20">';
		echo "\n\t" . $WM_OpIns_A042. "\n";	
		echo "\n\t" . $WM_OpCmd_A040. '=30">';
		echo "\n\t" . $WM_OpIns_A043. "\n";	
		echo "\n\t" . $WM_OpCmd_A040. '=40">';
		echo "\n\t" . $WM_OpIns_A044. "\n";	
		echo "\n\t" . $WM_OpCmd_A040. '=50">';
		echo "\n\t" . $WM_OpIns_A045. "\n";
		echo "\n\t" . $WM_OpCmd_A040. '=60">';
		echo "\n\t" . $WM_OpIns_A046. "\n";
		echo "\n\t" . $WM_OpCmd_A040. '=80">';
		echo "\n\t" . $WM_OpIns_A048. "\n";		
		echo "\n\t" .'</nav> ';
		?>

    	</li>

	<li class="WM_Btn09">
	
		<?php
		// OpIns_A050
		// Speed/Depth
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_A0.WM_OPWI_R5];
	$Val = ''; $Unt = ' '; $Cpt = ' ';
	if( $OCookies == "10" ) {$Val = $Ino_Speed; $Unt = ' Kn'; $Cpt = INO_CPT_OPCMD_A051; }
	if( $OCookies == "20" ) {$Val = $Ino_Depth; $Unt = ' Dm'; $Cpt = INO_CPT_OPCMD_A052; }

		echo "\n\t" .'<nav> '; 
		echo "\n\t" .'<div class="WM_Dsc00">'.$Cpt.'</div>'.'<div class="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_A050 - Instruments
		echo "\n\t" . $WM_OpCmd_A050. '=10">';
		echo "\n\t" . $WM_OpIns_A051. "\n";
		echo "\n\t" . $WM_OpCmd_A050. '=20">';
		echo "\n\t" . $WM_OpIns_A052. "\n";
		echo "\n\t" . $WM_OpCmd_A050. '=80">';
		echo "\n\t" . $WM_OpIns_A058. "\n";	
		echo "\n\t" .'</nav> ';
		?>

    	</li>
	
	<?php
	   echo "\n\t" .'<li class="WM_Btn00">'; // Passive
    	// echo "\n\t" .'<li class="WM_Btn01">'; // Active
	?>	
		<?php
		// OpCmd_A060
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_A0.WM_OPWI_R6];
	if( $OCookies == "10" ) {$Icon = $WM_icon_A061; $Cpt = INO_CPT_OPCMD_A061; $Cmd = INO_OPCMD_A060; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_A062; $Cpt = INO_CPT_OPCMD_A062; $Cmd = INO_OPCMD_A060; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_A063; $Cpt = INO_CPT_OPCMD_A063; $Cmd = INO_OPCMD_A060; $Prm = '@3"';}

		echo "\n\t" .'<nav> ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="46" width="46" />'."\n";
		
		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="46" width="46" />'."\n";
		echo "\n\t" .'</a>'."\n";
		
		// OpCmd_A060 - Parameter
		echo "\n\t" . $WM_OpCmd_A060. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_A061. ' title="' .INO_CPT_OPCMD_A061. '" alt="' .INO_CPT_OPCMD_A061. '" 	
				height="46" width="46" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_A060. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_A062. ' title="' .INO_CPT_OPCMD_A062. '" alt="' .INO_CPT_OPCMD_A062. '" 
				height="46" width="46" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_A060. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_A063. ' title="' .INO_CPT_OPCMD_A063. '" alt="' .INO_CPT_OPCMD_A063. '" 
				height="46" width="46" />'.'</a>'."\n";	
		echo "\n\t" .'</nav> ';		
			
		?>
        
	</li>
  
  	<?php
	   echo "\n\t" .'<li class="WM_Btn00">'; // Passive
    	// echo "\n\t" .'<li class="WM_Btn01">'; // Active
	?>
		
		<?php
		// OpCmd_A070
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_A0.WM_OPWI_R7];
	if( $OCookies == "10" ) {$Icon = $WM_icon_A071; $Cpt = INO_CPT_OPCMD_A071; $Cmd = INO_OPCMD_A070; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_A072; $Cpt = INO_CPT_OPCMD_A072; $Cmd = INO_OPCMD_A070; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_A073; $Cpt = INO_CPT_OPCMD_A073; $Cmd = INO_OPCMD_A070; $Prm = '@3"';}

		echo "\n\t" .'<nav> ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="46" width="46" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="46" width="46" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_A070 - Parameter
		echo "\n\t" . $WM_OpCmd_A070. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_A071. ' title="' .INO_CPT_OPCMD_A071. '" alt="' .INO_CPT_OPCMD_A071. '" 	
				height="46" width="46" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_A070. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_A072. ' title="' .INO_CPT_OPCMD_A072. '" alt="' .INO_CPT_OPCMD_A072. '" 
				height="46" width="46" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_A070. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_A073. ' title="' .INO_CPT_OPCMD_A073. '" alt="' .INO_CPT_OPCMD_A073. '" 
				height="46" width="46" />'.'</a>'."\n";	
		echo "\n\t" .'</nav> ';		
			
		?>
        
	</li>

  	<?php
	   echo "\n\t" .'<li class="WM_Btn00">'; // Passive
    	// echo "\n\t" .'<li class="WM_Btn01">'; // Active
	?>
		
		<?php
		// OpCmd_A080
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_A0.WM_OPWI_R8];
	if( $OCookies == "10" ) {$Icon = $WM_icon_A081; $Cpt = INO_CPT_OPCMD_A081; $Cmd = INO_OPCMD_A080; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_A082; $Cpt = INO_CPT_OPCMD_A082; $Cmd = INO_OPCMD_A080; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_A083; $Cpt = INO_CPT_OPCMD_A083; $Cmd = INO_OPCMD_A080; $Prm = '@3"';}

		echo "\n\t" .'<nav> ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="46" width="46" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" 
					height="46" width="46" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_A080 - Parameter
		echo "\n\t" . $WM_OpCmd_A080. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_A081. ' title="' .INO_CPT_OPCMD_A081. '" alt="' .INO_CPT_OPCMD_A081. '" 	
				height="46" width="46" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_A080. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_A082. ' title="' .INO_CPT_OPCMD_A082. '" alt="' .INO_CPT_OPCMD_A082. '" 
				height="46" width="46" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_A080. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_A083. ' title="' .INO_CPT_OPCMD_A083. '" alt="' .INO_CPT_OPCMD_A083. '" 
				height="46" width="46" />'.'</a>'."\n";	
		echo "\n\t" .'</nav> ';	
				
		?>
        
	</li>

	
</ul>