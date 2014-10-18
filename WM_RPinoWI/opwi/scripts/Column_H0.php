<?php
// No Direct Access
defined('_WMEX') or die("Access Denied!");


/* Operator Command */
/* Column H0 */

?>

<?php

// OpCmd Instruction
$WM_OpCmd_H010 = "\t".'<a accesskey="1" href="index.php?'.WM_OPWI_H0.WM_OPWI_R1;
$WM_OpCmd_H020 = "\t".'<a accesskey="2" href="index.php?'.WM_OPWI_H0.WM_OPWI_R2;
$WM_OpCmd_H030 = "\t".'<a accesskey="3" href="index.php?'.WM_OPWI_H0.WM_OPWI_R3;
$WM_OpCmd_H040 = "\t".'<a accesskey="4" href="index.php?'.WM_OPWI_H0.WM_OPWI_R4;
$WM_OpCmd_H050 = "\t".'<a accesskey="5" href="index.php?'.WM_OPWI_H0.WM_OPWI_R5;
$WM_OpCmd_H060 = "\t".'<a accesskey="6" href="index.php?'.WM_OPWI_H0.WM_OPWI_R6;
$WM_OpCmd_H070 = "\t".'<a accesskey="7" href="index.php?'.WM_OPWI_H0.WM_OPWI_R7;
$WM_OpCmd_H080 = "\t".'<a accesskey="8" href="index.php?'.WM_OPWI_H0.WM_OPWI_R8;

// OpCmd Icons
$WM_Icon_exe = 'src="./opwi/template/images/icon_010.svg" ';

$WM_Path_010 = 'href=" ' . INO_IP . '/';
$WM_icon_H010 = 'src="./opwi/template/images/icon_H010.svg" ';
$WM_icon_H011 = 'src="./opwi/template/images/icon_H011.svg" ';
$WM_icon_H012 = 'src="./opwi/template/images/icon_H012.svg" ';
$WM_icon_H013 = 'src="./opwi/template/images/icon_H013.svg" ';

$WM_icon_H020 = 'src="./opwi/template/images/icon_H020.svg" ';
$WM_icon_H021 = 'src="./opwi/template/images/icon_H021.svg" ';
$WM_icon_H022 = 'src="./opwi/template/images/icon_H022.svg" ';
$WM_icon_H023 = 'src="./opwi/template/images/icon_H023.svg" ';

$WM_icon_H060 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H061 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H062 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H063 = 'src="./opwi/template/images/icon_000.svg" ';

$WM_icon_H070 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H071 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H072 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H073 = 'src="./opwi/template/images/icon_000.svg" ';

$WM_icon_H080 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H081 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H082 = 'src="./opwi/template/images/icon_000.svg" ';
$WM_icon_H083 = 'src="./opwi/template/images/icon_000.svg" ';


// OpInstruments
// Temperature:
$WM_OpIns_H031 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H031.'</div>'.'<div id="WM_Val01">'.$Ino_TmpExt.' C' .'</div>'.'</a>';	
$WM_OpIns_H032 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H032.'</div>'.'<div id="WM_Val01">'.$Ino_TmpH2O.' C' .'</div>'.'</a>';
$WM_OpIns_H033 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H033.'</div>'.'<div id="WM_Val01">'.$Ino_TmpInt.' C' .'</div>'.'</a>';
$WM_OpIns_H034 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H034.'</div>'.'<div id="WM_Val01">'.$Ino_HmdInt.' %' .'</div>'.'</a>';
$WM_OpIns_H035 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H035.'</div>'.'<div id="WM_Val01">'.$Ino_MEnTmp.' C' .'</div>'.'</a>';
$WM_OpIns_H036 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H036.'</div>'.'<div id="WM_Val01">'.$Ino_BlTTmp.' C' .'</div>'.'</a>';
$WM_OpIns_H038 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

// Supply:
$WM_OpIns_H041 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H041.'</div>'.'<div id="WM_Val01">'.$Ino_HdwBtV.' V' .'</div>'.'</a>';
$WM_OpIns_H042 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H042.'</div>'.'<div id="WM_Val01">'.$Ino_EngBtV.' V' .'</div>'.'</a>';
$WM_OpIns_H043 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H043.'</div>'.'<div id="WM_Val01">'.$Ino_RPiBtV.' A' .'</div>'.'</a>';
$WM_OpIns_H044 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H044.'</div>'.'<div id="WM_Val01">'.$Ino_EngBtI.' A' .'</div>'.'</a>';
$WM_OpIns_H045 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H045.'</div>'.'<div id="WM_Val01">'.$Ino_MEnSnI.' A' .'</div>'.'</a>';
$WM_OpIns_H046 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H046.'</div>'.'<div id="WM_Val01">'.$Ino_BlTSnI.' A' .'</div>'.'</a>';
$WM_OpIns_H048 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

// SpeedDepth:
$WM_OpIns_H051 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H051.'</div>'.'<div id="WM_Val01">'.$Ino_Speed.' Kn' .'</div>'.'</a>';
$WM_OpIns_H052 = '<div id="WM_Dsc00">'.INO_CPT_OPCMD_H052.'</div>'.'<div id="WM_Val01">'.$Ino_Depth.' Dm' .'</div>'.'</a>';
$WM_OpIns_H058 = '<div id="WM_Val01">'.'NONE' .'</div>'.'</a>';

?>



<!-- Column H0 -->
<ul id="WM_Nav01">

  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_H010) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
	
		<?php
		// OpCmd_H010
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_H0.WM_OPWI_R1];
	if( $OCookies == "10" ) {$Icon = $WM_icon_H011; $Cpt = INO_CPT_OPCMD_H011; $Cmd = INO_OPCMD_H010; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_H012; $Cpt = INO_CPT_OPCMD_H012; $Cmd = INO_OPCMD_H010; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_H013; $Cpt = INO_CPT_OPCMD_H013; $Cmd = INO_OPCMD_H010; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_H010 - Parameter
		echo "\n\t" . $WM_OpCmd_H010. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_H011. ' 
				title="' .INO_CPT_OPCMD_H011. '" alt="' .INO_CPT_OPCMD_H011. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_H010. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_H012. ' 
				title="' .INO_CPT_OPCMD_H012. '" alt="' .INO_CPT_OPCMD_H012. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_H010. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_H013. ' 
				title="' .INO_CPT_OPCMD_H013. '" alt="' .INO_CPT_OPCMD_H013. '" 
				height="48" width="48" />'.'</a>'."\n";	
					
		?>

	</li>


  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_H020) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_H020
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_H0.WM_OPWI_R2];
	if( $OCookies == "10" ) {$Icon = $WM_icon_H021; $Cpt = INO_CPT_OPCMD_H021; $Cmd = INO_OPCMD_H020; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_H022; $Cpt = INO_CPT_OPCMD_H022; $Cmd = INO_OPCMD_H020; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_H023; $Cpt = INO_CPT_OPCMD_H023; $Cmd = INO_OPCMD_H020; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_H020 - Parameter
		echo "\n\t" . $WM_OpCmd_H020. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_H021. ' 
				title="' .INO_CPT_OPCMD_H021. '" alt="' .INO_CPT_OPCMD_H021. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_H020. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_H022. ' 
				title="' .INO_CPT_OPCMD_H022. '" alt="' .INO_CPT_OPCMD_H022. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_H020. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_H023. ' 
				title="' .INO_CPT_OPCMD_H023. '" alt="' .INO_CPT_OPCMD_H023. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>
  
	<li class="WM_Btn09">
	
		<?php
		// OpIns_H030
		// Temperature
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_H0.WM_OPWI_R3];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_TmpExt; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_H031; }
	if( $OCookies == "20" ) {$Val = $Ino_TmpH2O; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_H032; }
	if( $OCookies == "30" ) {$Val = $Ino_TmpInt; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_H033; }
	if( $OCookies == "40" ) {$Val = $Ino_HmdInt; $Unt = ' %'; $Cpt = INO_CPT_OPCMD_H034; }
	if( $OCookies == "50" ) {$Val = $Ino_MEnTmp; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_H035; }
	if( $OCookies == "60" ) {$Val = $Ino_BlTTmp; $Unt = ' C'; $Cpt = INO_CPT_OPCMD_H036; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_H030 - Instruments
		echo "\n\t" . $WM_OpCmd_H030. '=10">';
		echo "\n\t" . $WM_OpIns_H031. "\n";
		echo "\n\t" . $WM_OpCmd_H030. '=20">';
		echo "\n\t" . $WM_OpIns_H032. "\n";
		echo "\n\t" . $WM_OpCmd_H030. '=30">';
		echo "\n\t" . $WM_OpIns_H033. "\n";	
		echo "\n\t" . $WM_OpCmd_H030. '=40">';
		echo "\n\t" . $WM_OpIns_H034. "\n";	
		echo "\n\t" . $WM_OpCmd_H030. '=50">';
		echo "\n\t" . $WM_OpIns_H035. "\n";
		echo "\n\t" . $WM_OpCmd_H030. '=60">';
		echo "\n\t" . $WM_OpIns_H036. "\n";		
			
		?>

    	</li>

	<li class="WM_Btn09">
	
		<?php
		// OpIns_H040
		// Supply
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_H0.WM_OPWI_R4];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_HdwBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_H041; }
	if( $OCookies == "20" ) {$Val = $Ino_EngBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_H042; }
	if( $OCookies == "30" ) {$Val = $Ino_RPiBtV; $Unt = ' V'; $Cpt = INO_CPT_OPCMD_H043; }
	if( $OCookies == "40" ) {$Val = $Ino_EngBtI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_H044; }
	if( $OCookies == "50" ) {$Val = $Ino_MEnSnI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_H045; }
	if( $OCookies == "60" ) {$Val = $Ino_BlTSnI; $Unt = ' A'; $Cpt = INO_CPT_OPCMD_H046; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_H040 - Instruments
		echo "\n\t" . $WM_OpCmd_H040. '=10">';
		echo "\n\t" . $WM_OpIns_H041. "\n";
		echo "\n\t" . $WM_OpCmd_H040. '=20">';
		echo "\n\t" . $WM_OpIns_H042. "\n";	
		echo "\n\t" . $WM_OpCmd_H040. '=30">';
		echo "\n\t" . $WM_OpIns_H043. "\n";	
		echo "\n\t" . $WM_OpCmd_H040. '=40">';
		echo "\n\t" . $WM_OpIns_H044. "\n";	
		echo "\n\t" . $WM_OpCmd_H040. '=50">';
		echo "\n\t" . $WM_OpIns_H045. "\n";
		echo "\n\t" . $WM_OpCmd_H040. '=60">';
		echo "\n\t" . $WM_OpIns_H046. "\n";		
			
		?>

    	</li>

	<li class="WM_Btn09">
	
		<?php
		// OpIns_H050
		// Speed/Depth
		// View OpIns Selected
	$OCookies = $WM_OCookies [WM_OPWI_H0.WM_OPWI_R5];
	$Val = ''; $Unt = ' '; $Cpt = 'NONE';
	if( $OCookies == "10" ) {$Val = $Ino_Speed; $Unt = ' Kn'; $Cpt = INO_CPT_OPCMD_H051; }
	if( $OCookies == "20" ) {$Val = $Ino_Depth; $Unt = ' Dm'; $Cpt = INO_CPT_OPCMD_H052; }

		echo "\n\t" .'<a >' .'<div id="WM_Dsc00">'.$Cpt.'<div id="WM_Val00">'.$Val.$Unt.'</div>'."\n";
		
		// OpIns_H050 - Instruments
		echo "\n\t" . $WM_OpCmd_H050. '=10">';
		echo "\n\t" . $WM_OpIns_H051. "\n";
		echo "\n\t" . $WM_OpCmd_H050. '=20">';
		echo "\n\t" . $WM_OpIns_H052. "\n";	

		?>

    	</li>
	
  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_H060) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_H060
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_H0.WM_OPWI_R6];
	if( $OCookies == "10" ) {$Icon = $WM_icon_H061; $Cpt = INO_CPT_OPCMD_H061; $Cmd = INO_OPCMD_H060; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_H062; $Cpt = INO_CPT_OPCMD_H062; $Cmd = INO_OPCMD_H060; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_H063; $Cpt = INO_CPT_OPCMD_H063; $Cmd = INO_OPCMD_H060; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_H060 - Parameter
		echo "\n\t" . $WM_OpCmd_H060. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_H061. ' 
				title="' .INO_CPT_OPCMD_H061. '" alt="' .INO_CPT_OPCMD_H061. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_H060. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_H062. ' 
				title="' .INO_CPT_OPCMD_H062. '" alt="' .INO_CPT_OPCMD_H062. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_H060. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_H063. ' 
				title="' .INO_CPT_OPCMD_H063. '" alt="' .INO_CPT_OPCMD_H063. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>
  
  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_H070) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_H070
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_H0.WM_OPWI_R7];
	if( $OCookies == "10" ) {$Icon = $WM_icon_H071; $Cpt = INO_CPT_OPCMD_H071; $Cmd = INO_OPCMD_H070; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_H072; $Cpt = INO_CPT_OPCMD_H072; $Cmd = INO_OPCMD_H070; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_H073; $Cpt = INO_CPT_OPCMD_H073; $Cmd = INO_OPCMD_H070; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_H070 - Parameter
		echo "\n\t" . $WM_OpCmd_H070. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_H071. ' 
				title="' .INO_CPT_OPCMD_H071. '" alt="' .INO_CPT_OPCMD_H071. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_H070. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_H072. ' 
				title="' .INO_CPT_OPCMD_H072. '" alt="' .INO_CPT_OPCMD_H072. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_H070. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_H073. ' 
				title="' .INO_CPT_OPCMD_H073. '" alt="' .INO_CPT_OPCMD_H073. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>

  	<?php
	// echo "\n\t" .'<li class="WM_Btn00">'; // Passive
	if ($Ino_OprCmd == INO_OPCMD_H080) { echo "\n\t" .'<li class="WM_Btn11">'; } // Execution
    	   		   	      else { echo "\n\t" .'<li class="WM_Btn01">'; } // Active
	?>
		
		<?php
		// OpCmd_H080
		// View OpCmd Selected
	$OCookies = $WM_OCookies [WM_OPWI_H0.WM_OPWI_R8];
	if( $OCookies == "10" ) {$Icon = $WM_icon_H081; $Cpt = INO_CPT_OPCMD_H081; $Cmd = INO_OPCMD_H080; $Prm = '@1"';}
	if( $OCookies == "20" ) {$Icon = $WM_icon_H082; $Cpt = INO_CPT_OPCMD_H082; $Cmd = INO_OPCMD_H080; $Prm = '@2"';}
	if( $OCookies == "30" ) {$Icon = $WM_icon_H083; $Cpt = INO_CPT_OPCMD_H083; $Cmd = INO_OPCMD_H080; $Prm = '@3"';}

		echo "\n\t" .'<a > ';
		echo "\n\t" .'<img ' .$Icon. ' title="' .$Cpt. '" alt="' .$Cpt. '" height="48" width="48" />'."\n";

		// Command Execution
		echo "\n\t" .'<a ' .$WM_Path_010. '$' .$Cmd.$Prm. ' > ';
		echo "\n\t" .'<img ' .$WM_Icon_exe. ' title="' .INO_CPT_OPCMD_EXE. '" alt="' .INO_CPT_OPCMD_EXE. '" height="48" width="48" />'."\n";
		echo "\n\t" .'</a>'."\n";

		// OpCmd_H080 - Parameter
		echo "\n\t" . $WM_OpCmd_H080. '=10">';
		echo "\n\t" .'<img ' .$WM_icon_H081. ' 
				title="' .INO_CPT_OPCMD_H081. '" alt="' .INO_CPT_OPCMD_H081. '" 
				height="48" width="48" />'.'</a>'."\n";	
		echo "\n\t" . $WM_OpCmd_H080. '=20">';
		echo "\n\t" .'<img ' .$WM_icon_H082. ' 
				title="' .INO_CPT_OPCMD_H082. '" alt="' .INO_CPT_OPCMD_H082. '" 
				height="48" width="48" />'.'</a>'."\n";		
		echo "\n\t" . $WM_OpCmd_H080. '=30">';
		echo "\n\t" .'<img ' .$WM_icon_H083. ' 
				title="' .INO_CPT_OPCMD_H083. '" alt="' .INO_CPT_OPCMD_H083. '" 
				height="48" width="48" />'.'</a>'."\n";		
				
		?>
        
	</li>

	
</ul>