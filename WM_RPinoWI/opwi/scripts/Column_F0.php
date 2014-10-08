<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Column F0 */

?>

<?php

// OpCmd Instruction
$WM_OpCmd_F010 = "\t".'<a accesskey="1" href="index.php?'.WM_OPWI_F0.WM_OPWI_01;
$WM_OpCmd_F020 = "\t".'<a accesskey="2" href="index.php?'.WM_OPWI_F0.WM_OPWI_02;
$WM_OpCmd_F030 = "\t".'<a accesskey="3" href="index.php?'.WM_OPWI_F0.WM_OPWI_03;
$WM_OpCmd_F040 = "\t".'<a accesskey="4" href="index.php?'.WM_OPWI_F0.WM_OPWI_04;
$WM_OpCmd_F050 = "\t".'<a accesskey="5" href="index.php?'.WM_OPWI_F0.WM_OPWI_05;
$WM_OpCmd_F060 = "\t".'<a accesskey="6" href="index.php?'.WM_OPWI_F0.WM_OPWI_06;
$WM_OpCmd_F070 = "\t".'<a accesskey="7" href="index.php?'.WM_OPWI_F0.WM_OPWI_07;
$WM_OpCmd_F080 = "\t".'<a accesskey="8" href="index.php?'.WM_OPWI_F0.WM_OPWI_08;

// OpCmd Icons
$WM_Icon_exe = 'src="./opwi/template/images/icon_010.svg" ';

$WM_Path_010 = 'href=" ' . INO_IP . '/';
$WM_icon_F010 = 'src="./opwi/template/images/icon_A010.svg" ';
$WM_icon_F011 = 'src="./opwi/template/images/icon_A011.svg" ';
$WM_icon_F012 = 'src="./opwi/template/images/icon_A012.svg" ';
$WM_icon_F013 = 'src="./opwi/template/images/icon_A013.svg" ';

$WM_icon_F020 = 'src="./opwi/template/images/icon_F020.svg" ';
$WM_icon_F021 = 'src="./opwi/template/images/icon_F021.svg" ';
$WM_icon_F022 = 'src="./opwi/template/images/icon_F022.svg" ';
$WM_icon_F023 = 'src="./opwi/template/images/icon_F023.svg" ';

$WM_icon_F030 = 'src="./opwi/template/images/icon_F030.svg" ';
$WM_icon_F031 = 'src="./opwi/template/images/icon_F031.svg" ';
$WM_icon_F032 = 'src="./opwi/template/images/icon_F032.svg" ';
$WM_icon_F033 = 'src="./opwi/template/images/icon_F033.svg" ';

$WM_icon_F040 = 'src="./opwi/template/images/icon_F040.svg" ';
$WM_icon_F041 = 'src="./opwi/template/images/icon_F041.svg" ';
$WM_icon_F042 = 'src="./opwi/template/images/icon_F042.svg" ';
$WM_icon_F043 = 'src="./opwi/template/images/icon_F043.svg" ';

$WM_icon_F050 = 'src="./opwi/template/images/icon_F050.svg" ';
$WM_icon_F051 = 'src="./opwi/template/images/icon_F051.svg" ';
$WM_icon_F052 = 'src="./opwi/template/images/icon_F052.svg" ';
$WM_icon_F053 = 'src="./opwi/template/images/icon_F053.svg" ';

$WM_icon_F060 = 'src="./opwi/template/images/icon_F060.svg" ';
$WM_icon_F061 = 'src="./opwi/template/images/icon_F061.svg" ';
$WM_icon_F062 = 'src="./opwi/template/images/icon_F062.svg" ';
$WM_icon_F063 = 'src="./opwi/template/images/icon_F063.svg" ';

$WM_icon_F070 = 'src="./opwi/template/images/icon_A060.svg" ';
$WM_icon_F071 = 'src="./opwi/template/images/icon_A060.svg" ';
$WM_icon_F072 = 'src="./opwi/template/images/icon_A060.svg" ';
$WM_icon_F073 = 'src="./opwi/template/images/icon_A060.svg" ';

$WM_icon_F080 = 'src="./opwi/template/images/icon_A060.svg" ';
$WM_icon_F081 = 'src="./opwi/template/images/icon_A060.svg" ';
$WM_icon_F082 = 'src="./opwi/template/images/icon_A060.svg" ';
$WM_icon_F083 = 'src="./opwi/template/images/icon_A060.svg" ';

?>




<!-- Column F01x -->
<ul id="WM_Nav01">

    	<li class="WM_Btn01">
	
		<?php
		// OpCmd_F010
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_F0.WM_OPWI_01];
	if( $OCookies == "10" ) {$Icon = $WM_icon_F011; $Cpt = INO_CPT_OPCMD_F011; $Cmd = INO_OPCMD_F010; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_F012; $Cpt = INO_CPT_OPCMD_F012; $Cmd = INO_OPCMD_F010; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_F013; $Cpt = INO_CPT_OPCMD_F013; $Cmd = INO_OPCMD_F010; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_F010 - Parameter
		echo "\n\t" . $WM_OpCmd_F010. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_F011. ' 
				title="' .INO_CPT_OPCMD_F011. '" alt="' .INO_CPT_OPCMD_F011. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F010. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_F012. ' 
				title="' .INO_CPT_OPCMD_F012. '" alt="' .INO_CPT_OPCMD_F012. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F010. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_F013. ' 
				title="' .INO_CPT_OPCMD_F013. '" alt="' .INO_CPT_OPCMD_F013. '" 
				height="48" width="48" />'.'</a>'."\n";	
				
		?>

	</li>


    	<li class="WM_Btn01">
		
		<?php
		// OpCmd_F020
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_F0.WM_OPWI_02];
	if( $OCookies == "10" ) {$Icon = $WM_icon_F021; $Cpt = INO_CPT_OPCMD_F021; $Cmd = INO_OPCMD_F020; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_F022; $Cpt = INO_CPT_OPCMD_F022; $Cmd = INO_OPCMD_F020; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_F023; $Cpt = INO_CPT_OPCMD_F023; $Cmd = INO_OPCMD_F020; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_F020 - Parameter
		echo "\n\t" . $WM_OpCmd_F020. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_F021. ' 
				title="' .INO_CPT_OPCMD_F021. '" alt="' .INO_CPT_OPCMD_F021. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F020. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_F022. ' 
				title="' .INO_CPT_OPCMD_F022. '" alt="' .INO_CPT_OPCMD_F022. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_F020. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_F023. ' 
				title="' .INO_CPT_OPCMD_F023. '" alt="' .INO_CPT_OPCMD_F023. '" 
				height="48" width="48" />'.'</a>'."\n";		
			
		?>
        
	</li>
  
    	<li class="WM_Btn01">
		
		<?php
		// OpCmd_F030
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_F0.WM_OPWI_03];
	if( $OCookies == "10" ) {$Icon = $WM_icon_F031; $Cpt = INO_CPT_OPCMD_F031; $Cmd = INO_OPCMD_F030; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_F032; $Cpt = INO_CPT_OPCMD_F032; $Cmd = INO_OPCMD_F030; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_F033; $Cpt = INO_CPT_OPCMD_F033; $Cmd = INO_OPCMD_F030; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_F030 - Parameter
		echo "\n\t" . $WM_OpCmd_F030. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_F031. ' 
				title="' .INO_CPT_OPCMD_F031. '" alt="' .INO_CPT_OPCMD_F031. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F030. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_F032. ' 
				title="' .INO_CPT_OPCMD_F032. '" alt="' .INO_CPT_OPCMD_F032. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_F030. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_F033. ' 
				title="' .INO_CPT_OPCMD_F033. '" alt="' .INO_CPT_OPCMD_F033. '" 
				height="48" width="48" />'.'</a>'."\n";		
			
		?>
        
	</li>

    	<li class="WM_Btn01">
		
		<?php
		// OpCmd_F040
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_F0.WM_OPWI_04];
	if( $OCookies == "10" ) {$Icon = $WM_icon_F041; $Cpt = INO_CPT_OPCMD_F041; $Cmd = INO_OPCMD_F040; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_F042; $Cpt = INO_CPT_OPCMD_F042; $Cmd = INO_OPCMD_F040; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_F043; $Cpt = INO_CPT_OPCMD_F043; $Cmd = INO_OPCMD_F040; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_F040 - Parameter
		echo "\n\t" . $WM_OpCmd_F040. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_F041. ' 
				title="' .INO_CPT_OPCMD_F041. '" alt="' .INO_CPT_OPCMD_F041. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F040. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_F042. ' 
				title="' .INO_CPT_OPCMD_F042. '" alt="' .INO_CPT_OPCMD_F042. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_F040. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_F043. ' 
				title="' .INO_CPT_OPCMD_F043. '" alt="' .INO_CPT_OPCMD_F043. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>

    	<li class="WM_Btn01">
		
		<?php
		// OpCmd_F050
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_F0.WM_OPWI_05];
	if( $OCookies == "10" ) {$Icon = $WM_icon_F051; $Cpt = INO_CPT_OPCMD_F051; $Cmd = INO_OPCMD_F050; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_F052; $Cpt = INO_CPT_OPCMD_F052; $Cmd = INO_OPCMD_F050; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_F053; $Cpt = INO_CPT_OPCMD_F053; $Cmd = INO_OPCMD_F050; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_F050 - Parameter
		echo "\n\t" . $WM_OpCmd_F050. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_F051. ' 
				title="' .INO_CPT_OPCMD_F051. '" alt="' .INO_CPT_OPCMD_F051. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F050. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_F052. ' 
				title="' .INO_CPT_OPCMD_F052. '" alt="' .INO_CPT_OPCMD_F052. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_F050. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_F053. ' 
				title="' .INO_CPT_OPCMD_F053. '" alt="' .INO_CPT_OPCMD_F053. '" 
				height="48" width="48" />'.'</a>'."\n";		
			
		?>
        
	</li>

    	<li class="WM_Btn01">
		
		<?php
		// OpCmd_F060
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_F0.WM_OPWI_06];
	if( $OCookies == "10" ) {$Icon = $WM_icon_F061; $Cpt = INO_CPT_OPCMD_F061; $Cmd = INO_OPCMD_F060; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_F062; $Cpt = INO_CPT_OPCMD_F062; $Cmd = INO_OPCMD_F060; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_F063; $Cpt = INO_CPT_OPCMD_F063; $Cmd = INO_OPCMD_F060; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_F060 - Parameter
		echo "\n\t" . $WM_OpCmd_F060. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_F061. ' 
				title="' .INO_CPT_OPCMD_F061. '" alt="' .INO_CPT_OPCMD_F061. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F060. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_F062. ' 
				title="' .INO_CPT_OPCMD_F062. '" alt="' .INO_CPT_OPCMD_F062. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_F060. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_F063. ' 
				title="' .INO_CPT_OPCMD_F063. '" alt="' .INO_CPT_OPCMD_F063. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>
  
  	<li class="WM_Btn01">
		
		<?php
		// OpCmd_F070
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_F0.WM_OPWI_07];
	if( $OCookies == "10" ) {$Icon = $WM_icon_F071; $Cpt = INO_CPT_OPCMD_F071; $Cmd = INO_OPCMD_F070; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_F072; $Cpt = INO_CPT_OPCMD_F072; $Cmd = INO_OPCMD_F070; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_F073; $Cpt = INO_CPT_OPCMD_F073; $Cmd = INO_OPCMD_F070; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_F070 - Parameter
		echo "\n\t" . $WM_OpCmd_F070. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_F071. ' 
				title="' .INO_CPT_OPCMD_F071. '" alt="' .INO_CPT_OPCMD_F071. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F070. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_F072. ' 
				title="' .INO_CPT_OPCMD_F072. '" alt="' .INO_CPT_OPCMD_F072. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_F070. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_F073. ' 
				title="' .INO_CPT_OPCMD_F073. '" alt="' .INO_CPT_OPCMD_F073. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>

  	<li class="WM_Btn01">
		
		<?php
		// OpCmd_F080
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_F0.WM_OPWI_08];
	if( $OCookies == "10" ) {$Icon = $WM_icon_F081; $Cpt = INO_CPT_OPCMD_F081; $Cmd = INO_OPCMD_F080; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_F082; $Cpt = INO_CPT_OPCMD_F082; $Cmd = INO_OPCMD_F080; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_F083; $Cpt = INO_CPT_OPCMD_F083; $Cmd = INO_OPCMD_F080; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_F080 - Parameter
		echo "\n\t" . $WM_OpCmd_F080. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_F081. ' 
				title="' .INO_CPT_OPCMD_F081. '" alt="' .INO_CPT_OPCMD_F081. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_F080. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_F082. ' 
				title="' .INO_CPT_OPCMD_F082. '" alt="' .INO_CPT_OPCMD_F082. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_F080. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_F083. ' 
				title="' .INO_CPT_OPCMD_F083. '" alt="' .INO_CPT_OPCMD_F083. '" 
				height="48" width="48" />'.'</a>'."\n";		
					
		?>
        
	</li>

	
</ul>