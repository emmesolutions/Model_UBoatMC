<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* U-boat Module Control Web Interface */


/* Operator Web Interface Configuration File */

/* WebInterface Site */
define('WM_SITE_NAME', "U-boat Module Control (Web Interface)");	// OpWI Name
define('WM_SITE_SLGN', "RPi+Ino U-Boat Model");				// OpWI Slogan
define('WM_SITE_DESC', "RPi+Ino U-Boat Model");				// OpWI Description
define('WM_SITE_AUTH', "Web eMMe By Martinelli Michele");		// OpWI Author
define('WM_SITE_KEYW', "");	

/* GET Data */
	// GET Page Value 
	// WM_URI_DESK = WM_DESK_WEB
	// WM_URI_PAGE = ...
	define('WM_WEB_001', "WM_001");		// Web 001


/* Operator Command Code */
// Column A
// F1
define("INO_OPCMD_A010", "R");
	define("INO_OPPRM_A011", "1");
	define("INO_OPPRM_A012", "2");
	define("INO_OPPRM_A013", "3");
// 06 Reversing Port Direction	
define("INO_OPCMD_A020", "6");
	define("INO_OPPRM_A021", "1");
	define("INO_OPPRM_A022", "4");
	define("INO_OPPRM_A023", "7");
// NONE		
define("INO_OPCMD_A060", "X");
	define("INO_OPPRM_A061", "X");
	define("INO_OPPRM_A062", "X");
	define("INO_OPPRM_A063", "X");
// NONE		
define("INO_OPCMD_A070", "X");
	define("INO_OPPRM_A071", "X");
	define("INO_OPPRM_A072", "X");
	define("INO_OPPRM_A073", "X");
// NONE		
define("INO_OPCMD_A080", "X");
	define("INO_OPPRM_A081", "X");
	define("INO_OPPRM_A082", "X");
	define("INO_OPPRM_A083", "X");
// Column B
// F2
define("INO_OPCMD_B010", "S");
	define("INO_OPPRM_B011", "1");
	define("INO_OPPRM_B012", "2");
	define("INO_OPPRM_B013", "3");
// 04 90° Turn Port Direction	
define("INO_OPCMD_B020", "4");
	define("INO_OPPRM_B021", "1");
	define("INO_OPPRM_B022", "4");
	define("INO_OPPRM_B023", "7");
// NONE	
define("INO_OPCMD_B060", "X");
	define("INO_OPPRM_B061", "X");
	define("INO_OPPRM_B062", "X");
	define("INO_OPPRM_B063", "X");
// NONE		
define("INO_OPCMD_B070", "X");
	define("INO_OPPRM_B071", "X");
	define("INO_OPPRM_B072", "X");
	define("INO_OPPRM_B073", "X");
// NONE		
define("INO_OPCMD_B080", "X");
	define("INO_OPPRM_B081", "X");
	define("INO_OPPRM_B082", "X");
	define("INO_OPPRM_B083", "X");
// Column C
// F3
define("INO_OPCMD_C010", "T");
	define("INO_OPPRM_C011", "1");
	define("INO_OPPRM_C012", "2");
	define("INO_OPPRM_C013", "3");
// 02 Quadrant Turn Port Direction	
define("INO_OPCMD_C020", "2");
	define("INO_OPPRM_C021", "1");
	define("INO_OPPRM_C022", "4");
	define("INO_OPPRM_C023", "7");
// Engine Astern	
define("INO_OPCMD_C030", "8");
	define("INO_OPPRM_C031", "1");
	define("INO_OPPRM_C032", "3");
	define("INO_OPPRM_C033", "5");
// Reset + Stop	
define("INO_OPCMD_C040", "0");
	define("INO_OPPRM_C041", "0");
	define("INO_OPPRM_C042", "0");
	define("INO_OPPRM_C043", "0");
// Static Diving
define("INO_OPCMD_C050", "D");
	define("INO_OPPRM_C051", "1");
	define("INO_OPPRM_C052", "3");
	define("INO_OPPRM_C053", "5");
// Dynamic Diving	
define("INO_OPCMD_C060", "B");
	define("INO_OPPRM_C061", "1");
	define("INO_OPPRM_C062", "3");
	define("INO_OPPRM_C063", "5");
// NONE	
define("INO_OPCMD_C070", "X");
	define("INO_OPPRM_C071", "X");
	define("INO_OPPRM_C072", "X");
	define("INO_OPPRM_C073", "X");
// NONE		
define("INO_OPCMD_C080", "X");
	define("INO_OPPRM_C081", "X");
	define("INO_OPPRM_C082", "X");
	define("INO_OPPRM_C083", "X");
// Column DE
// 01 Fixed/Reset Rudders Direction
define("INO_OPCMD_DE20", "1");
	define("INO_OPPRM_DE21", "1");
	define("INO_OPPRM_DE22", "4");
	define("INO_OPPRM_DE23", "7");
	define("INO_OPPRM_DE24", "8");	
	define("INO_OPPRM_DE25", "9");
	define("INO_OPPRM_DE26", "C");
	define("INO_OPPRM_DE27", "F");
// Engine Stop
define("INO_OPCMD_DE30", "0");
	define("INO_OPPRM_DE31", "1");
	define("INO_OPPRM_DE32", "1");
	define("INO_OPPRM_DE33", "1");
// Reset + Stop		
define("INO_OPCMD_DE40", "0");
	define("INO_OPPRM_DE41", "0");
	define("INO_OPPRM_DE42", "0");
	define("INO_OPPRM_DE43", "0");
// 14 Surface	
define("INO_OPCMD_DE50", "E");
	define("INO_OPPRM_DE51", "1");
	define("INO_OPPRM_DE52", "3");
	define("INO_OPPRM_DE53", "5");
// 15 Fixed/Reset Rudders Depth	
define("INO_OPCMD_DE60", "F");
	define("INO_OPPRM_DE61", "1");
	define("INO_OPPRM_DE62", "4");
	define("INO_OPPRM_DE63", "7");
	define("INO_OPPRM_DE64", "8");	
	define("INO_OPPRM_DE65", "9");
	define("INO_OPPRM_DE66", "C");
	define("INO_OPPRM_DE67", "F");	
// Column F
// C1
define("INO_OPCMD_F010", "N");
	define("INO_OPPRM_F011", "1");
	define("INO_OPPRM_F012", "2");
	define("INO_OPPRM_F013", "3");
// 03 Quadrant Turn Starboard Direction
define("INO_OPCMD_F020", "3");
	define("INO_OPPRM_F021", "1");
	define("INO_OPPRM_F022", "4");
	define("INO_OPPRM_F023", "7");
// Engine Ahead	
define("INO_OPCMD_F030", "9");
	define("INO_OPPRM_F031", "1");
	define("INO_OPPRM_F032", "3");
	define("INO_OPPRM_F033", "5");
// Reset + Stop	
define("INO_OPCMD_F040", "0");
	define("INO_OPPRM_F041", "0");
	define("INO_OPPRM_F042", "0");
	define("INO_OPPRM_F043", "0");
// Static Emersion
define("INO_OPCMD_F050", "C");
	define("INO_OPPRM_F051", "1");
	define("INO_OPPRM_F052", "3");
	define("INO_OPPRM_F053", "5");
// Dynamic Emersion
define("INO_OPCMD_F060", "A");
	define("INO_OPPRM_F061", "1");
	define("INO_OPPRM_F062", "3");
	define("INO_OPPRM_F063", "5");
// NONE	
define("INO_OPCMD_F070", "X");
	define("INO_OPPRM_F071", "X");
	define("INO_OPPRM_F072", "X");
	define("INO_OPPRM_F073", "X");
// NONE		
define("INO_OPCMD_F080", "X");
	define("INO_OPPRM_F081", "X");
	define("INO_OPPRM_F082", "X");
	define("INO_OPPRM_F083", "X");
// Column G
// C2
define("INO_OPCMD_G010", "O");
	define("INO_OPPRM_G011", "1");
	define("INO_OPPRM_G012", "2");
	define("INO_OPPRM_G013", "3");
// 05 90° Turn Starboard Direction
define("INO_OPCMD_G020", "5");
	define("INO_OPPRM_G021", "1");
	define("INO_OPPRM_G022", "4");
	define("INO_OPPRM_G023", "7");
// NONE		
define("INO_OPCMD_G060", "X");
	define("INO_OPPRM_G061", "X");
	define("INO_OPPRM_G062", "X");
	define("INO_OPPRM_G063", "X");
// NONE		
define("INO_OPCMD_G070", "X");
	define("INO_OPPRM_G071", "X");
	define("INO_OPPRM_G072", "X");
	define("INO_OPPRM_G073", "X");
// NONE		
define("INO_OPCMD_G080", "X");
	define("INO_OPPRM_G081", "X");
	define("INO_OPPRM_G082", "X");
	define("INO_OPPRM_G083", "X");
// Column H
// C3
define("INO_OPCMD_H010", "P");
	define("INO_OPPRM_H011", "1");
	define("INO_OPPRM_H012", "2");
	define("INO_OPPRM_H013", "3");
// 07 Reversing Starboard Direction	
define("INO_OPCMD_H020", "7");
	define("INO_OPPRM_H021", "1");
	define("INO_OPPRM_H022", "4");
	define("INO_OPPRM_H023", "7");
// NONE		
define("INO_OPCMD_H060", "X");
	define("INO_OPPRM_H061", "X");
	define("INO_OPPRM_H062", "X");
	define("INO_OPPRM_H063", "X");
// NONE		
define("INO_OPCMD_H070", "X");
	define("INO_OPPRM_H071", "X");
	define("INO_OPPRM_H072", "X");
	define("INO_OPPRM_H073", "X");
// NONE		
define("INO_OPCMD_H080", "X");
	define("INO_OPPRM_H081", "X");
	define("INO_OPPRM_H082", "X");
	define("INO_OPPRM_H083", "X");
