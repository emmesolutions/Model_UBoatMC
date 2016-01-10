<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin Settings */


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_SET; 
echo "\n\t".'</div>';

$WM_Action = 'index.php' . '?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_SET ;
$WM_AdmBtn = "./admin/template/images/Adm_icon_Check.svg";

echo "\n\t".'<div class="WM_Outline">';

/* Save Operator W.I. Command Buttons Position */
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_OPWI_CMD_SAVE; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="OpWI" >';
	echo "\n\t".'<option value="SAVE"> ' .WM_OPWI_VAL_SAVE. '</option>';
	echo "\n\t".'<option value="RSET"> ' .WM_OPWI_VAL_RSET. '</option>';
  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* DemoMode */
$Val = WM_TabSettings_ValName(1);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_DEMO; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == 'TRUE' ) { 
		echo "\n\t".'<option value="TRUE"> ' .WM_SETTINGS_DEMO1. '</option>';
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_DEMO2. '</option>';
		} 
		if ($WM_Settings[$Val] == 'FALSE' ) { 
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_DEMO2. '</option>';
		echo "\n\t".'<option value="TRUE"> ' .WM_SETTINGS_DEMO1. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Language */
$Val = WM_TabSettings_ValName(2);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_LANG; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == 'EN' ) { 
		echo "\n\t".'<option value="EN">' .WM_SETTINGS_LANG1. '</option>';
		echo "\n\t".'<option value="IT">' .WM_SETTINGS_LANG2. '</option>';
		} 
		if ($WM_Settings[$Val] == 'IT' ) { 
		echo "\n\t".'<option value="IT">' .WM_SETTINGS_LANG2. '</option>';
		echo "\n\t".'<option value="EN">' .WM_SETTINGS_LANG1. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Layout Style */
$Val = WM_TabSettings_ValName(4);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_STYLE; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_STYLE1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_STYLE2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_STYLE3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_STYLE2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_STYLE3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_STYLE1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_STYLE3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_STYLE1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_STYLE2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Layout Fonts */
$Val = WM_TabSettings_ValName(5);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_FONTS; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_FONTS1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_FONTS2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_FONTS3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_FONTS2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_FONTS3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_FONTS1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_FONTS3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_FONTS1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_FONTS2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Border Top */
$Val = WM_TabSettings_ValName(6);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_BRDTOP; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '00' ) { 
		echo "\n\t".'<option value="00">' .WM_SETTINGS_HIDE. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_SHOW. '</option>';
		} 
		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_SHOW. '</option>';
		echo "\n\t".'<option value="00">' .WM_SETTINGS_HIDE. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Border Bottom */
$Val = WM_TabSettings_ValName(7);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_BRDBOT; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '00' ) { 
		echo "\n\t".'<option value="00">' .WM_SETTINGS_HIDE. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_SHOW. '</option>';
		} 
		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_SHOW. '</option>';
		echo "\n\t".'<option value="00">' .WM_SETTINGS_HIDE. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Show Corner Menu Module */
$Val = WM_TabSettings_ValName(9);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_WMCORNER; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == 'TRUE' ) { 
		echo "\n\t".'<option value="TRUE">' .WM_SETTINGS_SHOW. '</option>';
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_HIDE. '</option>';
		} 
		if ($WM_Settings[$Val] == 'FALSE' ) { 
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_HIDE. '</option>';
		echo "\n\t".'<option value="TRUE">' .WM_SETTINGS_SHOW. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Corner Menu Module */
$Val = WM_TabSettings_ValName(10);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_WMCORNER; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_LEFT. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_RIGHT. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_RIGHT. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_LEFT. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Admin Menu Module */
$Val = WM_TabSettings_ValName(11);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_ADMENU; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_LEFT. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_RIGHT. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_RIGHT. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_LEFT. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Position GPS+Compass Module */
$Val = WM_TabSettings_ValName(14);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_GPSCMP; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position System Message Module */
$Val = WM_TabSettings_ValName(15);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_SYSMSG; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Depth+Speed Module */
$Val = WM_TabSettings_ValName(16);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_DTHSPD; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';


echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Position Date Time Module */
$Val = WM_TabSettings_ValName(18);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_DTETME; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Temp. Humidity Module */
$Val = WM_TabSettings_ValName(19);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_TMPHMD; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Hardware Status Module */
$Val = WM_TabSettings_ValName(20);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_HDWSTS; 
	echo "\n\t".'</div>';
	  	
	// Button Update
	echo "\n\t".'<div class="WM_AdmSetBtn">';
	echo "\n\t".'<input accesskey="U" class="WM_MenuImg" type="image" src="' .$WM_AdmBtn. '" ';
	echo "\n\t".'title="' .WM_SETTINGS_UPDATE. '" alt="' .WM_SETTINGS_UPDATE. '" height="32" width="32" />';
	echo "\n\t".'</div>';
		
	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

?>