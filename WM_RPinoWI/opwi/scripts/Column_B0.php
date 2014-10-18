<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Column B0 */

?>

<?php

// OpCmd Instruction
$WM_OpCmd_B010 = "\t".'<a accesskey="1" href="index.php?'.WM_OPWI_B0.WM_OPWI_R1;
$WM_OpCmd_B020 = "\t".'<a accesskey="2" href="index.php?'.WM_OPWI_B0.WM_OPWI_R2;
$WM_OpCmd_B030 = "\t".'<a accesskey="3" href="index.php?'.WM_OPWI_B0.WM_OPWI_R3;
$WM_OpCmd_B040 = "\t".'<a accesskey="4" href="index.php?'.WM_OPWI_B0.WM_OPWI_R4;
$WM_OpCmd_B050 = "\t".'<a accesskey="5" href="index.php?'.WM_OPWI_B0.WM_OPWI_R5;
$WM_OpCmd_B060 = "\t".'<a accesskey="6" href="index.php?'.WM_OPWI_B0.WM_OPWI_R6;
$WM_OpCmd_B070 = "\t".'<a accesskey="7" href="index.php?'.WM_OPWI_B0.WM_OPWI_R7;
$WM_OpCmd_B080 = "\t".'<a accesskey="8" href="index.php?'.WM_OPWI_B0.WM_OPWI_R8;

// OpCmd Icons
$WM_Icon_exe = 'src="./opwi/template/images/icon_010.svg" ';

$WM_Path_010 = 'href="' . INO_IP . '/';
$WM_icon_B010 = 'src="./opwi/template/images/icon_B010.svg" ';
$WM_icon_B011 = 'src="./opwi/template/images/icon_B011.svg" ';
$WM_icon_B012 = 'src="./opwi/template/images/icon_B012.svg" ';
$WM_icon_B013 = 'src="./opwi/template/images/icon_B013.svg" ';

$WM_icon_B020 = 'src="./opwi/template/images/icon_B020.svg" ';
$WM_icon_B021 = 'src="./opwi/template/images/icon_B021.svg" ';
$WM_icon_B022 = 'src="./opwi/template/images/icon_B022.svg" ';
$WM_icon_B023 = 'src="./opwi/template/images/icon_B023.svg" ';

$WM_icon_B060 = 'src="./opwi/template/images/icon_B060.svg" ';
$WM_icon_B061 = 'src="./opwi/template/images/icon_B061.svg" ';
$WM_icon_B062 = 'src="./opwi/template/images/icon_B062.svg" ';
$WM_icon_B063 = 'src="./opwi/template/images/icon_B063.svg" ';

$WM_icon_B070 = 'src="./opwi/template/images/icon_B070.svg" ';
$WM_icon_B071 = 'src="./opwi/template/images/icon_B070.svg" ';
$WM_icon_B072 = 'src="./opwi/template/images/icon_B070.svg" ';
$WM_icon_B073 = 'src="./opwi/template/images/icon_B070.svg" ';

$WM_icon_B080 = 'src="./opwi/template/images/icon_B080.svg" ';
$WM_icon_B081 = 'src="./opwi/template/images/icon_B080.svg" ';
$WM_icon_B082 = 'src="./opwi/template/images/icon_B080.svg" ';
$WM_icon_B083 = 'src="./opwi/template/images/icon_B080.svg" ';


// OpInstruments
// Temperature:
$WM_OpIns_B031 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B031.'</div>'.'<div id="WM_Val01">'.$Ino_TmpExt.' C' .'</div>'.'</a>';	
$WM_OpIns_B032 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B032.'</div>'.'<div id="WM_Val01">'.$Ino_TmpH2O.' C' .'</div>'.'</a>';
$WM_OpIns_B033 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B033.'</div>'.'<div id="WM_Val01">'.$Ino_TmpInt.' C' .'</div>'.'</a>';
$WM_OpIns_B034 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B034.'</div>'.'<div id="WM_Val01">'.$Ino_HmdInt.' %' .'</div>'.'</a>';
$WM_OpIns_B035 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B035.'</div>'.'<div id="WM_Val01">'.$Ino_MEnTmp.' C' .'</div>'.'</a>';
$WM_OpIns_B036 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B036.'</div>'.'<div id="WM_Val01">'.$Ino_BlTTmp.' C' .'</div>'.'</a>';
$WM_OpIns_B038 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

// Supply:
$WM_OpIns_B041 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B041.'</div>'.'<div id="WM_Val01">'.$Ino_HdwBtV.' V' .'</div>'.'</a>';
$WM_OpIns_B042 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B042.'</div>'.'<div id="WM_Val01">'.$Ino_EngBtV.' V' .'</div>'.'</a>';
$WM_OpIns_B043 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B043.'</div>'.'<div id="WM_Val01">'.$Ino_RPiBtV.' A' .'</div>'.'</a>';
$WM_OpIns_B044 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B044.'</div>'.'<div id="WM_Val01">'.$Ino_EngBtI.' A' .'</div>'.'</a>';
$WM_OpIns_B045 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B045.'</div>'.'<div id="WM_Val01">'.$Ino_MEnSnI.' A' .'</div>'.'</a>';
$WM_OpIns_B046 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B046.'</div>'.'<div id="WM_Val01">'.$Ino_BlTSnI.' A' .'</div>'.'</a>';
$WM_OpIns_B048 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

// SpeedDepth:
$WM_OpIns_B051 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B051.'</div>'.'<div id="WM_Val01">'.$Ino_Speed.' Kn' .'</div>'.'</a>';
$WM_OpIns_B052 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_B052.'</div>'.'<div id="WM_Val01">'.$Ino_Depth.' Dm' .'</div>'.'</a>';
$WM_OpIns_B058 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

?>


<!-- Column B0 -->
<ul id="WM_Nav01">

  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_B010) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
	
		<?php
		// OpCmd_B010
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_B0.WM_OPWI_R1];
	if( $OCookies == "10" ) {$Icon = $WM_icon_B011; $Cpt = INO_CPT_OPCMD_B011; $Cmd = INO_OPCMD_B010; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_B012; $Cpt = INO_CPT_OPCMD_B012; $Cmd = INO_OPCMD_B010; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_B013; $Cpt = INO_CPT_OPCMD_B013; $Cmd = INO_OPCMD_B010; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_B010 - Parameter
		echo "\n\t" . $WM_OpCmd_B010. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_B011. ' 
				title="' .INO_CPT_OPCMD_B011. '" alt="' .INO_CPT_OPCMD_B011. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_B010. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_B012. ' 
				title="' .INO_CPT_OPCMD_B012. '" alt="' .INO_CPT_OPCMD_B012. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_B010. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_B013. ' 
				title="' .INO_CPT_OPCMD_B013. '" alt="' .INO_CPT_OPCMD_B013. '" 
				height="48" width="48" />'.'</a>'."\n";	
				
		?>

	</li>


  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_B020) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_B020
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_B0.WM_OPWI_R2];
	if( $OCookies == "10" ) {$Icon = $WM_icon_B021; $Cpt = INO_CPT_OPCMD_B021; $Cmd = INO_OPCMD_B020; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_B022; $Cpt = INO_CPT_OPCMD_B022; $Cmd = INO_OPCMD_B020; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_B023; $Cpt = INO_CPT_OPCMD_B023; $Cmd = INO_OPCMD_B020; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_B020 - Parameter
		echo "\n\t" . $WM_OpCmd_B020. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_B021. ' 
				title="' .INO_CPT_OPCMD_B021. '" alt="' .INO_CPT_OPCMD_B021. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_B020. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_B022. ' 
				title="' .INO_CPT_OPCMD_B022. '" alt="' .INO_CPT_OPCMD_B022. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_B020. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_B023. ' 
				title="' .INO_CPT_OPCMD_B023. '" alt="' .INO_CPT_OPCMD_B023. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>
  
	<li class="WM_Btn09">
	
		<?php
		// OpIns_B030
		// Temperature
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_B0.WM_OPWI_R3];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_TmpExt; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_B031; }
	if( $OCookies == "20" ) {$Val = $Ino_TmpH2O; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_B032; }
	if( $OCookies == "30" ) {$Val = $Ino_TmpInt; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_B033; }
	if( $OCookies == "40" ) {$Val = $Ino_HmdInt; $Unt = ' %'; $Cpt = INO_CPT_OPCMD_B034; }
	if( $OCookies == "50" ) {$Val = $Ino_MEnTmp; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_B035; }
	if( $OCookies == "60" ) {$Val = $Ino_BlTTmp; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_B036; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_B030 - Instruments
		echo "\n\t" . $WM_OpCmd_B030. '=10">';
		echo "\n\t" . $WM_OpIns_B031. "\n";
		echo "\n\t" . $WM_OpCmd_B030. '=20">';
		echo "\n\t" . $WM_OpIns_B032. "\n";
		echo "\n\t" . $WM_OpCmd_B030. '=30">';
		echo "\n\t" . $WM_OpIns_B033. "\n";	
		echo "\n\t" . $WM_OpCmd_B030. '=40">';
		echo "\n\t" . $WM_OpIns_B034. "\n";	
		echo "\n\t" . $WM_OpCmd_B030. '=50">';
		echo "\n\t" . $WM_OpIns_B035. "\n";
		echo "\n\t" . $WM_OpCmd_B030. '=60">';
		echo "\n\t" . $WM_OpIns_B036. "\n";		
			
		?>

    	</li>

	<li class="WM_Btn09">
	
		<?php
		// OpIns_B040
		// Supply
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_B0.WM_OPWI_R4];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_HdwBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_B041; }
	if( $OCookies == "20" ) {$Val = $Ino_EngBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_B042; }
	if( $OCookies == "30" ) {$Val = $Ino_RPiBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_B043; }
	if( $OCookies == "40" ) {$Val = $Ino_EngBtI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_B044; }
	if( $OCookies == "50" ) {$Val = $Ino_MEnSnI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_B045; }
	if( $OCookies == "60" ) {$Val = $Ino_BlTSnI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_B046; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_B040 - Instruments
		echo "\n\t" . $WM_OpCmd_B040. '=10">';
		echo "\n\t" . $WM_OpIns_B041. "\n";
		echo "\n\t" . $WM_OpCmd_B040. '=20">';
		echo "\n\t" . $WM_OpIns_B042. "\n";	
		echo "\n\t" . $WM_OpCmd_B040. '=30">';
		echo "\n\t" . $WM_OpIns_B043. "\n";	
		echo "\n\t" . $WM_OpCmd_B040. '=40">';
		echo "\n\t" . $WM_OpIns_B044. "\n";	
		echo "\n\t" . $WM_OpCmd_B040. '=50">';
		echo "\n\t" . $WM_OpIns_B045. "\n";
		echo "\n\t" . $WM_OpCmd_B040. '=60">';
		echo "\n\t" . $WM_OpIns_B046. "\n";		
			
		?>

    	</li>

	<li class="WM_Btn09">
	
		<?php
		// OpIns_B050
		// Speed/Depth
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_B0.WM_OPWI_R5];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_Speed; $Unt = ' Kn'; $Cpt = INO_CPT_OPCMD_B051; }
	if( $OCookies == "20" ) {$Val = $Ino_Depth; $Unt = ' Dm'; $Cpt = INO_CPT_OPCMD_B052; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_B050 - Instruments
		echo "\n\t" . $WM_OpCmd_B050. '=10">';
		echo "\n\t" . $WM_OpIns_B051. "\n";
		echo "\n\t" . $WM_OpCmd_B050. '=20">';
		echo "\n\t" . $WM_OpIns_B052. "\n";	

		?>

    	</li>
	
    	<li class="WM_Btn01">
		
		<?php
		// OpCmd_B060
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_B0.WM_OPWI_R6];
	if( $OCookies == "10" ) {$Icon = $WM_icon_B061; $Cpt = INO_CPT_OPCMD_B061; $Cmd = INO_OPCMD_B060; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_B062; $Cpt = INO_CPT_OPCMD_B062; $Cmd = INO_OPCMD_B060; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_B063; $Cpt = INO_CPT_OPCMD_B063; $Cmd = INO_OPCMD_B060; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_B060 - Parameter
		echo "\n\t" . $WM_OpCmd_B060. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_B061. ' 
				title="' .INO_CPT_OPCMD_B061. '" alt="' .INO_CPT_OPCMD_B061. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_B060. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_B062. ' 
				title="' .INO_CPT_OPCMD_B062. '" alt="' .INO_CPT_OPCMD_B062. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_B060. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_B063. ' 
				title="' .INO_CPT_OPCMD_B063. '" alt="' .INO_CPT_OPCMD_B063. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>
  
  	<li class="WM_Btn01">
		
		<?php
		// OpCmd_B070
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_B0.WM_OPWI_R7];
	if( $OCookies == "10" ) {$Icon = $WM_icon_B071; $Cpt = INO_CPT_OPCMD_B071; $Cmd = INO_OPCMD_B070; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_B072; $Cpt = INO_CPT_OPCMD_B072; $Cmd = INO_OPCMD_B070; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_B073; $Cpt = INO_CPT_OPCMD_B073; $Cmd = INO_OPCMD_B070; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_B070 - Parameter
		echo "\n\t" . $WM_OpCmd_B070. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_B071. ' 
				title="' .INO_CPT_OPCMD_B071. '" alt="' .INO_CPT_OPCMD_B071. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_B070. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_B072. ' 
				title="' .INO_CPT_OPCMD_B072. '" alt="' .INO_CPT_OPCMD_B072. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_B070. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_B073. ' 
				title="' .INO_CPT_OPCMD_B073. '" alt="' .INO_CPT_OPCMD_B073. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>

  	<li class="WM_Btn01">
		
		<?php
		// OpCmd_B080
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_B0.WM_OPWI_R8];
	if( $OCookies == "10" ) {$Icon = $WM_icon_B081; $Cpt = INO_CPT_OPCMD_B081; $Cmd = INO_OPCMD_B080; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_B082; $Cpt = INO_CPT_OPCMD_B082; $Cmd = INO_OPCMD_B080; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_B083; $Cpt = INO_CPT_OPCMD_B083; $Cmd = INO_OPCMD_B080; $Prm = '@3"';}

		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm.'> ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_B080 - Parameter
		echo "\n\t" . $WM_OpCmd_B080. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_B081. ' 
				title="' .INO_CPT_OPCMD_B081. '" alt="' .INO_CPT_OPCMD_B081. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_B080. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_B082. ' 
				title="' .INO_CPT_OPCMD_B082. '" alt="' .INO_CPT_OPCMD_B082. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_B080. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_B083. ' 
				title="' .INO_CPT_OPCMD_B083. '" alt="' .INO_CPT_OPCMD_B083. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>

	
</ul>