<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* U-boat Module Control Web Interface */


/* Operator Web Interface Configuration File */

/* WebInterface Site */
define('WM_SITE_NAME', "U-boat Module Control (Web Interface)");	// OpWI Name
define('WM_SITE_SLGN', "RPi+Ino U-Boat Model");			// OpWI Slogan
define('WM_SITE_DESC', "RPi+Ino U-Boat Model");			// OpWI Description
define('WM_SITE_AUTH', "Martinelli Michele");			// OpWI Author
define('WM_SITE_KEYW', "");	

/* GET Data */
	// GET Page Value 
	// WM_URI_DESK = WM_DESK_WEB
	// WM_URI_PAGE = ...
	define('WM_WEB_001', "WM_001");		// Web 001


/* Operator Command Code */
// Column A
define("INO_OPCMD_A010", "Z");
	define("INO_OPPRM_A011", "1");
	define("INO_OPPRM_A012", "2");
	define("INO_OPPRM_A013", "3");
define("INO_OPCMD_A020", "6");
	define("INO_OPPRM_A021", "1");
	define("INO_OPPRM_A022", "8");
	define("INO_OPPRM_A023", "5");
define("INO_OPCMD_A060", "X");
	define("INO_OPPRM_A061", "X");
	define("INO_OPPRM_A062", "X");
	define("INO_OPPRM_A063", "X");
define("INO_OPCMD_A070", "X");
	define("INO_OPPRM_A071", "X");
	define("INO_OPPRM_A072", "X");
	define("INO_OPPRM_A073", "X");
define("INO_OPCMD_A080", "X");
	define("INO_OPPRM_A081", "X");
	define("INO_OPPRM_A082", "X");
	define("INO_OPPRM_A083", "X");
// Column B
define("INO_OPCMD_B010", "Z");
	define("INO_OPPRM_B011", "1");
	define("INO_OPPRM_B012", "2");
	define("INO_OPPRM_B013", "3");
define("INO_OPCMD_B020", "4");
	define("INO_OPPRM_B021", "1");
	define("INO_OPPRM_B022", "8");
	define("INO_OPPRM_B023", "5");
define("INO_OPCMD_B060", "X");
	define("INO_OPPRM_B061", "X");
	define("INO_OPPRM_B062", "X");
	define("INO_OPPRM_B063", "X");
define("INO_OPCMD_B070", "X");
	define("INO_OPPRM_B071", "X");
	define("INO_OPPRM_B072", "X");
	define("INO_OPPRM_B073", "X");
define("INO_OPCMD_B080", "X");
	define("INO_OPPRM_B081", "X");
	define("INO_OPPRM_B082", "X");
	define("INO_OPPRM_B083", "X");
// Column C
define("INO_OPCMD_C010", "Z");
	define("INO_OPPRM_C011", "1");
	define("INO_OPPRM_C012", "2");
	define("INO_OPPRM_C013", "3");
define("INO_OPCMD_C020", "2");
	define("INO_OPPRM_C021", "1");
	define("INO_OPPRM_C022", "8");
	define("INO_OPPRM_C023", "5");
define("INO_OPCMD_C030", "8");
	define("INO_OPPRM_C031", "1");
	define("INO_OPPRM_C032", "2");
	define("INO_OPPRM_C033", "3");
define("INO_OPCMD_C040", "0");
	define("INO_OPPRM_C041", "1");
	define("INO_OPPRM_C042", "2");
	define("INO_OPPRM_C043", "3");
define("INO_OPCMD_C050", "D");
	define("INO_OPPRM_C051", "1");
	define("INO_OPPRM_C052", "2");
	define("INO_OPPRM_C053", "3");
define("INO_OPCMD_C060", "B");
	define("INO_OPPRM_C061", "1");
	define("INO_OPPRM_C062", "2");
	define("INO_OPPRM_C063", "3");
define("INO_OPCMD_C070", "X");
	define("INO_OPPRM_C071", "X");
	define("INO_OPPRM_C072", "X");
	define("INO_OPPRM_C073", "X");
define("INO_OPCMD_C080", "X");
	define("INO_OPPRM_C081", "X");
	define("INO_OPPRM_C082", "X");
	define("INO_OPPRM_C083", "X");
// Column DE
define("INO_OPCMD_DE20", "1");
	define("INO_OPPRM_DE21", "1");
	define("INO_OPPRM_DE22", "2");
	define("INO_OPPRM_DE23", "3");
define("INO_OPCMD_DE30", "0");
	define("INO_OPPRM_DE31", "1");
	define("INO_OPPRM_DE32", "2");
	define("INO_OPPRM_DE33", "3");
define("INO_OPCMD_DE40", "0");
	define("INO_OPPRM_DE41", "1");
	define("INO_OPPRM_DE42", "2");
	define("INO_OPPRM_DE43", "3");
define("INO_OPCMD_DE50", "E");
	define("INO_OPPRM_DE51", "1");
	define("INO_OPPRM_DE52", "2");
	define("INO_OPPRM_DE53", "3");
define("INO_OPCMD_DE60", "F");
	define("INO_OPPRM_DE61", "1");
	define("INO_OPPRM_DE62", "2");
	define("INO_OPPRM_DE63", "3");
// Column F
define("INO_OPCMD_F010", "N");
	define("INO_OPPRM_F011", "1");
	define("INO_OPPRM_F012", "2");
	define("INO_OPPRM_F013", "3");
define("INO_OPCMD_F020", "3");
	define("INO_OPPRM_F021", "1");
	define("INO_OPPRM_F022", "8");
	define("INO_OPPRM_F023", "5");
define("INO_OPCMD_F030", "9");
	define("INO_OPPRM_F031", "1");
	define("INO_OPPRM_F032", "2");
	define("INO_OPPRM_F033", "3");
define("INO_OPCMD_F040", "0");
	define("INO_OPPRM_F041", "1");
	define("INO_OPPRM_F042", "2");
	define("INO_OPPRM_F043", "3");
define("INO_OPCMD_F050", "C");
	define("INO_OPPRM_F051", "1");
	define("INO_OPPRM_F052", "2");
	define("INO_OPPRM_F053", "3");
define("INO_OPCMD_F060", "A");
	define("INO_OPPRM_F061", "1");
	define("INO_OPPRM_F062", "2");
	define("INO_OPPRM_F063", "3");
define("INO_OPCMD_F070", "X");
	define("INO_OPPRM_F071", "X");
	define("INO_OPPRM_F072", "X");
	define("INO_OPPRM_F073", "X");
define("INO_OPCMD_F080", "X");
	define("INO_OPPRM_F081", "X");
	define("INO_OPPRM_F082", "X");
	define("INO_OPPRM_F083", "X");
// Column G
define("INO_OPCMD_G010", "O");
	define("INO_OPPRM_G011", "1");
	define("INO_OPPRM_G012", "2");
	define("INO_OPPRM_G013", "3");
define("INO_OPCMD_G020", "5");
	define("INO_OPPRM_G021", "1");
	define("INO_OPPRM_G022", "8");
	define("INO_OPPRM_G023", "5");
define("INO_OPCMD_G060", "X");
	define("INO_OPPRM_G061", "X");
	define("INO_OPPRM_G062", "X");
	define("INO_OPPRM_G063", "X");
define("INO_OPCMD_G070", "X");
	define("INO_OPPRM_G071", "X");
	define("INO_OPPRM_G072", "X");
	define("INO_OPPRM_G073", "X");
define("INO_OPCMD_G080", "X");
	define("INO_OPPRM_G081", "X");
	define("INO_OPPRM_G082", "X");
	define("INO_OPPRM_G083", "X");
// Column H
define("INO_OPCMD_H010", "P");
	define("INO_OPPRM_H011", "1");
	define("INO_OPPRM_H012", "2");
	define("INO_OPPRM_H013", "3");
define("INO_OPCMD_H020", "7");
	define("INO_OPPRM_H021", "1");
	define("INO_OPPRM_H022", "8");
	define("INO_OPPRM_H023", "5");
define("INO_OPCMD_H060", "X");
	define("INO_OPPRM_H061", "X");
	define("INO_OPPRM_H062", "X");
	define("INO_OPPRM_H063", "X");
define("INO_OPCMD_H070", "X");
	define("INO_OPPRM_H071", "X");
	define("INO_OPPRM_H072", "X");
	define("INO_OPPRM_H073", "X");
define("INO_OPCMD_H080", "X");
	define("INO_OPPRM_H081", "X");
	define("INO_OPPRM_H082", "X");
	define("INO_OPPRM_H083", "X");


