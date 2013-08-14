<?php 
  // No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Operator Web Interface Language EN */

/* Arduino */
/* Operator Commands */
define("INO_CPT_OPCMD00", "Stop");		// Engine Stop
define("INO_CPT_OPCMD01", "Rudder Dir.");	// Fixed Rudder Direction
define("INO_CPT_OPCMD02", "&lt");		// Quadrant Turn Left Direction
define("INO_CPT_OPCMD03", "&gt");		// Quadrant Turn Right Direction
define("INO_CPT_OPCMD04", "&lt &lt");		// 90° Turn Left Direction
define("INO_CPT_OPCMD05", "&gt &gt");		// 90° Turn Right Direction
define("INO_CPT_OPCMD06", "&lt &lt &lt");	// Reversing Left Direction
define("INO_CPT_OPCMD07", "&gt &gt &gt");	// Reversing Right Direction
define("INO_CPT_OPCMD08", "Backward");		// Engine Backward
define("INO_CPT_OPCMD09", "Run");		// Engine Forward
define("INO_CPT_OPCMD10", "Dyn.Emersion");	// Dynamic Emersion
define("INO_CPT_OPCMD11", "Dyn.Diving");	// Dynamic Diving
define("INO_CPT_OPCMD12", "Emersion");		// Static Emersion
define("INO_CPT_OPCMD13", "Diving");		// Static Diving
define("INO_CPT_OPCMD14", "-");		// 
define("INO_CPT_OPCMD15", "Rudder Depth");	// Fixed Rudder Depth

define("INO_CPT_OPCMD21", "C1");			// C1
define("INO_CPT_OPCMD22", "C2");			// C2
define("INO_CPT_OPCMD23", "C3");			// C3
define("INO_CPT_OPCMD24", "C4");			// C4


/* Operator Web Interface - Square*/
define("INO_CPT_OPCMD_RLD", "RELOAD");				// RELOAD


// Column A
define("INO_CPT_OPCMD_A010", "F1");					// F1
define("INO_OPCMD_A010", "Z");
	define("INO_CPT_OPCMD_A011", "F1-1");
	define("INO_CPT_OPCMD_A012", "F1-2");
	define("INO_CPT_OPCMD_A013", "F1-3");
	define("INO_CPT_OPCMD_A014", "F1-4");
	define("INO_CPT_OPCMD_A015", "F1-5");
	define("INO_CPT_OPCMD_A016", "F1-6");
	define("INO_CPT_OPCMD_A017", "F1-7");

define("INO_CPT_OPCMD_A020", "Rev.Port");			// Rev.Port
define("INO_OPCMD_A020", "6");
	define("INO_CPT_OPCMD_A021", "90Dg.Port-1");
	define("INO_CPT_OPCMD_A022", "90Dg.Port-2");
	define("INO_CPT_OPCMD_A023", "90Dg.Port-3");
	define("INO_CPT_OPCMD_A024", "90Dg.Port-4");
	define("INO_CPT_OPCMD_A025", "90Dg.Port-5");
	define("INO_CPT_OPCMD_A026", "90Dg.Port-6");
	define("INO_CPT_OPCMD_A027", "90Dg.Port-7");

define("INO_CPT_OPCMD_A030", "Temperature");		// Temperature
	define("INO_CPT_OPCMD_A031", "Ext.");
	define("INO_CPT_OPCMD_A032", "Wtr.");
	define("INO_CPT_OPCMD_A033", "Int.");
	define("INO_CPT_OPCMD_A034", "Hmd.");
	define("INO_CPT_OPCMD_A035", "A035");
	define("INO_CPT_OPCMD_A036", "A036");
	define("INO_CPT_OPCMD_A037", "A037");

define("INO_CPT_OPCMD_A040", "A040");				// A040
	define("INO_CPT_OPCMD_A041", "Hdw.");
	define("INO_CPT_OPCMD_A042", "RPi.");
	define("INO_CPT_OPCMD_A043", "Eng.");
	define("INO_CPT_OPCMD_A044", "A044");
	define("INO_CPT_OPCMD_A045", "A045");
	define("INO_CPT_OPCMD_A046", "A046");
	define("INO_CPT_OPCMD_A047", "A047");

define("INO_CPT_OPCMD_A050", "BatteryV.");			// BatteryV.
	define("INO_CPT_OPCMD_A051", "Hdw.");
	define("INO_CPT_OPCMD_A052", "RPi.");
	define("INO_CPT_OPCMD_A053", "Eng.");
	define("INO_CPT_OPCMD_A054", "A054");
	define("INO_CPT_OPCMD_A055", "A055");
	define("INO_CPT_OPCMD_A056", "A056");
	define("INO_CPT_OPCMD_A057", "A057");

define("INO_CPT_OPCMD_A060", "A060");				// A060
	define("INO_CPT_OPCMD_A061", "A061");
	define("INO_CPT_OPCMD_A062", "A062");
	define("INO_CPT_OPCMD_A063", "A063");
	define("INO_CPT_OPCMD_A064", "A064");
	define("INO_CPT_OPCMD_A065", "A065");
	define("INO_CPT_OPCMD_A066", "A066");
	define("INO_CPT_OPCMD_A067", "A067");

define("INO_CPT_OPCMD_A070", "A070");				// A070
	define("INO_CPT_OPCMD_A071", "A071");
	define("INO_CPT_OPCMD_A072", "A072");
	define("INO_CPT_OPCMD_A073", "A073");
	define("INO_CPT_OPCMD_A074", "A074");
	define("INO_CPT_OPCMD_A075", "A075");
	define("INO_CPT_OPCMD_A076", "A076");
	define("INO_CPT_OPCMD_A077", "A077");

define("INO_CPT_OPCMD_A080", "A080");				// A080
	define("INO_CPT_OPCMD_A081", "A081");
	define("INO_CPT_OPCMD_A082", "A082");
	define("INO_CPT_OPCMD_A083", "A083");
	define("INO_CPT_OPCMD_A084", "A084");
	define("INO_CPT_OPCMD_A085", "A085");
	define("INO_CPT_OPCMD_A086", "A086");
	define("INO_CPT_OPCMD_A087", "A087");

	
// Column B
define("INO_CPT_OPCMD_B010", "F2");					// F2
define("INO_OPCMD_B010", "Z");
	define("INO_CPT_OPCMD_B011", "F2-1");
	define("INO_CPT_OPCMD_B012", "F2-2");
	define("INO_CPT_OPCMD_B013", "F2-3");
	define("INO_CPT_OPCMD_B014", "F2-4");
	define("INO_CPT_OPCMD_B015", "F2-5");
	define("INO_CPT_OPCMD_B016", "F2-6");
	define("INO_CPT_OPCMD_B017", "F2-7");

define("INO_CPT_OPCMD_B020", "90Dg.Port");			// 90Dg.Port
define("INO_OPCMD_B020", "4");
	define("INO_CPT_OPCMD_B021", "90Dg.Port-1");
	define("INO_CPT_OPCMD_B022", "90Dg.Port-2");
	define("INO_CPT_OPCMD_B023", "90Dg.Port-3");
	define("INO_CPT_OPCMD_B024", "90Dg.Port-4");
	define("INO_CPT_OPCMD_B025", "90Dg.Port-5");
	define("INO_CPT_OPCMD_B026", "90Dg.Port-6");
	define("INO_CPT_OPCMD_B027", "90Dg.Port-7");

define("INO_CPT_OPCMD_B030", "Speed");				// Speed
	define("INO_CPT_OPCMD_B031", "Kn");
	define("INO_CPT_OPCMD_B032", "m/s");
	define("INO_CPT_OPCMD_B033", "cm/s");
	define("INO_CPT_OPCMD_B034", "B034");
	define("INO_CPT_OPCMD_B035", "B035");
	define("INO_CPT_OPCMD_B036", "B036");
	define("INO_CPT_OPCMD_B037", "B037");

define("INO_CPT_OPCMD_B040", "B040");				// B040
	define("INO_CPT_OPCMD_B041", "B041");
	define("INO_CPT_OPCMD_B042", "B042");
	define("INO_CPT_OPCMD_B043", "B043");
	define("INO_CPT_OPCMD_B044", "B044");
	define("INO_CPT_OPCMD_B045", "B045");
	define("INO_CPT_OPCMD_B046", "B046");
	define("INO_CPT_OPCMD_B047", "B047");

define("INO_CPT_OPCMD_B050", "Depth");				// Depth
	define("INO_CPT_OPCMD_B051", "mt");
	define("INO_CPT_OPCMD_B052", "cm");
	define("INO_CPT_OPCMD_B053", "mm");
	define("INO_CPT_OPCMD_B054", "B045");
	define("INO_CPT_OPCMD_B055", "B055");
	define("INO_CPT_OPCMD_B056", "B056");
	define("INO_CPT_OPCMD_B057", "B057");

define("INO_CPT_OPCMD_B060", "B060");				// B060
	define("INO_CPT_OPCMD_B061", "B061");
	define("INO_CPT_OPCMD_B062", "B062");
	define("INO_CPT_OPCMD_B063", "B063");
	define("INO_CPT_OPCMD_B064", "B064");
	define("INO_CPT_OPCMD_B065", "B065");
	define("INO_CPT_OPCMD_B066", "B066");
	define("INO_CPT_OPCMD_B067", "B067");

define("INO_CPT_OPCMD_B070", "B070");				// B070
	define("INO_CPT_OPCMD_B071", "B071");
	define("INO_CPT_OPCMD_B072", "B072");
	define("INO_CPT_OPCMD_B073", "B073");
	define("INO_CPT_OPCMD_B074", "B074");
	define("INO_CPT_OPCMD_B075", "B075");
	define("INO_CPT_OPCMD_B076", "B076");
	define("INO_CPT_OPCMD_B077", "B077");

define("INO_CPT_OPCMD_B080", "B080");				// B080
	define("INO_CPT_OPCMD_B081", "B081");
	define("INO_CPT_OPCMD_B082", "B082");
	define("INO_CPT_OPCMD_B083", "B083");
	define("INO_CPT_OPCMD_B084", "B084");
	define("INO_CPT_OPCMD_B085", "B085");
	define("INO_CPT_OPCMD_B086", "B086");
	define("INO_CPT_OPCMD_B087", "B087");


// Column C
define("INO_CPT_OPCMD_C010", "F3");					// F3
define("INO_OPCMD_C010", "Z");
	define("INO_CPT_OPCMD_C011", "F3-1");
	define("INO_CPT_OPCMD_C012", "F3-2");
	define("INO_CPT_OPCMD_C013", "F3-3");
	define("INO_CPT_OPCMD_C014", "F3-4");
	define("INO_CPT_OPCMD_C015", "F3-5");
	define("INO_CPT_OPCMD_C016", "F3-6");
	define("INO_CPT_OPCMD_C017", "F3-7");
	
define("INO_CPT_OPCMD_C020", "Qdt.Port");			// Qdt.Port
define("INO_OPCMD_C020", "2");
	define("INO_CPT_OPCMD_C021", "Qdt.Port-1");
	define("INO_CPT_OPCMD_C022", "Qdt.Port-2");
	define("INO_CPT_OPCMD_C023", "Qdt.Port-3");
	define("INO_CPT_OPCMD_C024", "Qdt.Port-4");
	define("INO_CPT_OPCMD_C025", "Qdt.Port-5");
	define("INO_CPT_OPCMD_C026", "Qdt.Port-6");
	define("INO_CPT_OPCMD_C027", "Qdt.Port-7");

define("INO_CPT_OPCMD_C030", "Astern");				// Astern
define("INO_OPCMD_C030", "8");
	define("INO_CPT_OPCMD_C031", "Speed-1");
	define("INO_CPT_OPCMD_C032", "Speed-2");
	define("INO_CPT_OPCMD_C033", "Speed-3");
	define("INO_CPT_OPCMD_C034", "Speed-4");
	define("INO_CPT_OPCMD_C035", "Speed-5");
	define("INO_CPT_OPCMD_C036", "Speed-6");
	define("INO_CPT_OPCMD_C037", "Speed-7");

define("INO_CPT_OPCMD_C040", "STOP");				// STOP
define("INO_OPCMD_C040", "0");
	define("INO_CPT_OPCMD_B041", "C041");
	define("INO_CPT_OPCMD_B042", "C042");
	define("INO_CPT_OPCMD_B043", "C043");
	define("INO_CPT_OPCMD_B044", "C044");
	define("INO_CPT_OPCMD_B045", "C045");
	define("INO_CPT_OPCMD_B046", "C046");
	define("INO_CPT_OPCMD_B047", "C047");
	
define("INO_CPT_OPCMD_C050", "Stat.Diving");		// Stat.Diving
define("INO_OPCMD_C050", "D");
	define("INO_CPT_OPCMD_C051", "Stat.Diving-1");
	define("INO_CPT_OPCMD_C052", "Stat.Diving-2");
	define("INO_CPT_OPCMD_C053", "Stat.Diving-3");
	define("INO_CPT_OPCMD_C054", "Stat.Diving-4");
	define("INO_CPT_OPCMD_C055", "Stat.Diving-5");
	define("INO_CPT_OPCMD_C056", "Stat.Diving-6");
	define("INO_CPT_OPCMD_C057", "Stat.Diving-7");
	
define("INO_CPT_OPCMD_C060", "Dyn.Diving");			// Dyn.Diving
define("INO_OPCMD_C060", "B");
	define("INO_CPT_OPCMD_C061", "Dyn.Diving-1");
	define("INO_CPT_OPCMD_C062", "Dyn.Diving-2");
	define("INO_CPT_OPCMD_C063", "Dyn.Diving-3");
	define("INO_CPT_OPCMD_C064", "Dyn.Diving-4");
	define("INO_CPT_OPCMD_C065", "Dyn.Diving-5");
	define("INO_CPT_OPCMD_C066", "Dyn.Diving-6");
	define("INO_CPT_OPCMD_C067", "Dyn.Diving-7");
	
define("INO_CPT_OPCMD_C070", "C070");				// C070
	define("INO_CPT_OPCMD_C071", "C071");
	define("INO_CPT_OPCMD_C072", "C072");
	define("INO_CPT_OPCMD_C073", "C073");
	define("INO_CPT_OPCMD_C074", "C074");
	define("INO_CPT_OPCMD_C075", "C075");
	define("INO_CPT_OPCMD_C076", "C076");
	define("INO_CPT_OPCMD_C077", "C077");
	
define("INO_CPT_OPCMD_C080", "C080");				// C080
	define("INO_CPT_OPCMD_C081", "C081");
	define("INO_CPT_OPCMD_C082", "C082");
	define("INO_CPT_OPCMD_C083", "C083");
	define("INO_CPT_OPCMD_C084", "C084");
	define("INO_CPT_OPCMD_C085", "C085");
	define("INO_CPT_OPCMD_C086", "C086");
	define("INO_CPT_OPCMD_C087", "C087");


// Column DE
define("INO_CPT_OPCMD_DE10", "Compass");			// Compass
	define("INO_CPT_OPCMD_DE11", "DE11");
	define("INO_CPT_OPCMD_DE12", "DE12");
	define("INO_CPT_OPCMD_DE13", "DE13");
	define("INO_CPT_OPCMD_DE14", "DE14");
	define("INO_CPT_OPCMD_DE15", "DE15");
	define("INO_CPT_OPCMD_DE16", "DE16");
	define("INO_CPT_OPCMD_DE17", "DE17");
	
define("INO_CPT_OPCMD_DE20", "Rudders");			// Rudders
define("INO_OPCMD_DE20", "1");
	define("INO_CPT_OPCMD_DE21", "Port-1");
	define("INO_CPT_OPCMD_DE22", "Port-2");
	define("INO_CPT_OPCMD_DE23", "Port-3");
	define("INO_CPT_OPCMD_DE24", "Port-4");
	define("INO_CPT_OPCMD_DE25", "Port-5");
	define("INO_CPT_OPCMD_DE26", "Port-6");
	define("INO_CPT_OPCMD_DE27", "Port-7");
	define("INO_CPT_OPCMD_DE29", "Starboard-7");
	define("INO_CPT_OPCMD_DE2A", "Starboard-6");
	define("INO_CPT_OPCMD_DE2B", "Starboard-5");
	define("INO_CPT_OPCMD_DE2C", "Starboard-4");
	define("INO_CPT_OPCMD_DE2D", "Starboard-3");
	define("INO_CPT_OPCMD_DE2E", "Starboard-2");
	define("INO_CPT_OPCMD_DE2F", "Starboard-1");

define("INO_CPT_OPCMD_DE30", "Eng.Stop");				// Eng.Stop
define("INO_OPCMD_DE30", "0");

define("INO_CPT_OPCMD_DE40", "Rudder Dir.");				// Rudder Direction
define("INO_OPCMD_DE40", "0");

define("INO_CPT_OPCMD_DE50", "Surface");				// Surface
define("INO_OPCMD_DE50", "E");
	define("INO_CPT_OPCMD_DE51", "Surface-1");
	define("INO_CPT_OPCMD_DE52", "Surface-2");
	define("INO_CPT_OPCMD_DE53", "Surface-3");
	define("INO_CPT_OPCMD_DE54", "Surface-4");
	define("INO_CPT_OPCMD_DE55", "Surface-5");
	define("INO_CPT_OPCMD_DE56", "Surface-6");
	define("INO_CPT_OPCMD_DE57", "Surface-7");
	
define("INO_CPT_OPCMD_DE60", "Rudder Depth");				// Rudder Depth
define("INO_OPCMD_DE60", "F");

define("INO_CPT_OPCMD_DE70", "GPS");					// GPS
	define("INO_CPT_OPCMD_DE71", "Lat.");
	define("INO_CPT_OPCMD_DE72", "Lng.");
	define("INO_CPT_OPCMD_DE73", "DE73");
	define("INO_CPT_OPCMD_DE74", "DE74");
	define("INO_CPT_OPCMD_DE75", "DE75");
	define("INO_CPT_OPCMD_DE76", "DE76");
	define("INO_CPT_OPCMD_DE77", "DE77");
	
define("INO_CPT_OPCMD_DE80", "GPS");					// GPS
	define("INO_CPT_OPCMD_DE81", "Lat.");
	define("INO_CPT_OPCMD_DE82", "Lng.");
	define("INO_CPT_OPCMD_DE83", "DE83");
	define("INO_CPT_OPCMD_DE84", "DE84");
	define("INO_CPT_OPCMD_DE85", "DE85");
	define("INO_CPT_OPCMD_DE86", "DE86");
	define("INO_CPT_OPCMD_DE87", "DE87");


// Column F
define("INO_CPT_OPCMD_F010", "C1");					// C1
define("INO_OPCMD_F010", "N");
	define("INO_CPT_OPCMD_F011", "C1-1");
	define("INO_CPT_OPCMD_F012", "C1-2");
	define("INO_CPT_OPCMD_F013", "C1-3");
	define("INO_CPT_OPCMD_F014", "C1-4");
	define("INO_CPT_OPCMD_F015", "C1-5");
	define("INO_CPT_OPCMD_F016", "C1-6");
	define("INO_CPT_OPCMD_F017", "C1-7");
	
define("INO_CPT_OPCMD_F020", "Qdt.Starboard");			// Qdt.Starboard
define("INO_OPCMD_F020", "3");
	define("INO_CPT_OPCMD_F021", "Qdt.Starboard-1");
	define("INO_CPT_OPCMD_F022", "Qdt.Starboard-2");
	define("INO_CPT_OPCMD_F023", "Qdt.Starboard-3");
	define("INO_CPT_OPCMD_F024", "Qdt.Starboard-4");
	define("INO_CPT_OPCMD_F025", "Qdt.Starboard-5");
	define("INO_CPT_OPCMD_F026", "Qdt.Starboard-6");
	define("INO_CPT_OPCMD_F027", "Qdt.Starboard-7");

define("INO_CPT_OPCMD_F030", "Ahead");				// Ahead
define("INO_OPCMD_F030", "9");
	define("INO_CPT_OPCMD_F031", "Speed-1");
	define("INO_CPT_OPCMD_F032", "Speed-2");
	define("INO_CPT_OPCMD_F033", "Speed-3");
	define("INO_CPT_OPCMD_F034", "Speed-4");
	define("INO_CPT_OPCMD_F035", "Speed-5");
	define("INO_CPT_OPCMD_F036", "Speed-6");
	define("INO_CPT_OPCMD_F037", "Speed-7");

define("INO_CPT_OPCMD_F040", "STOP");				// STOP
define("INO_OPCMD_F040", "0");
	define("INO_CPT_OPCMD_B041", "F041");
	define("INO_CPT_OPCMD_B042", "F042");
	define("INO_CPT_OPCMD_B043", "F043");
	define("INO_CPT_OPCMD_B044", "F044");
	define("INO_CPT_OPCMD_B045", "F045");
	define("INO_CPT_OPCMD_B046", "F046");
	define("INO_CPT_OPCMD_B047", "F047");
	
define("INO_CPT_OPCMD_F050", "Stat.Emersion");		// Stat.Emersion
define("INO_OPCMD_F050", "C");
	define("INO_CPT_OPCMD_F051", "Stat.Emersion-1");
	define("INO_CPT_OPCMD_F052", "Stat.Emersion-2");
	define("INO_CPT_OPCMD_F053", "Stat.Emersion-3");
	define("INO_CPT_OPCMD_F054", "Stat.Emersion-4");
	define("INO_CPT_OPCMD_F055", "Stat.Emersion-5");
	define("INO_CPT_OPCMD_F056", "Stat.Emersion-6");
	define("INO_CPT_OPCMD_F057", "Stat.Emersion-7");
	
define("INO_CPT_OPCMD_F060", "Dyn.Emersion");			// Dyn.Emersion
define("INO_OPCMD_F060", "A");
	define("INO_CPT_OPCMD_F061", "Dyn.Emersion-1");
	define("INO_CPT_OPCMD_F062", "Dyn.Emersion-2");
	define("INO_CPT_OPCMD_F063", "Dyn.Emersion-3");
	define("INO_CPT_OPCMD_F064", "Dyn.Emersion-4");
	define("INO_CPT_OPCMD_F065", "Dyn.Emersion-5");
	define("INO_CPT_OPCMD_F066", "Dyn.Emersion-6");
	define("INO_CPT_OPCMD_F067", "Dyn.Emersion-7");
	
define("INO_CPT_OPCMD_F070", "F070");				// F070
	define("INO_CPT_OPCMD_F071", "F071");
	define("INO_CPT_OPCMD_F072", "F072");
	define("INO_CPT_OPCMD_F073", "F073");
	define("INO_CPT_OPCMD_F074", "F074");
	define("INO_CPT_OPCMD_F075", "F075");
	define("INO_CPT_OPCMD_F076", "F076");
	define("INO_CPT_OPCMD_F077", "F077");
	
define("INO_CPT_OPCMD_F080", "F080");				// F080
	define("INO_CPT_OPCMD_F081", "F081");
	define("INO_CPT_OPCMD_F082", "F082");
	define("INO_CPT_OPCMD_F083", "F083");
	define("INO_CPT_OPCMD_F084", "F084");
	define("INO_CPT_OPCMD_F085", "F085");
	define("INO_CPT_OPCMD_F086", "F086");
	define("INO_CPT_OPCMD_F087", "F087");

	
// Column G
define("INO_CPT_OPCMD_G010", "C2");					// C2
define("INO_OPCMD_G010", "O");
	define("INO_CPT_OPCMD_G011", "C2-1");
	define("INO_CPT_OPCMD_G012", "C2-2");
	define("INO_CPT_OPCMD_G013", "C2-3");
	define("INO_CPT_OPCMD_G014", "C2-4");
	define("INO_CPT_OPCMD_G015", "C2-5");
	define("INO_CPT_OPCMD_G016", "C2-6");
	define("INO_CPT_OPCMD_G017", "C2-7");

define("INO_CPT_OPCMD_G020", "90Dg.Starboard");			// 90Dg.Starboard
define("INO_OPCMD_G020", "5");
	define("INO_CPT_OPCMD_G021", "90Dg.Starboard-1");
	define("INO_CPT_OPCMD_G022", "90Dg.Starboard-2");
	define("INO_CPT_OPCMD_G023", "90Dg.Starboard-3");
	define("INO_CPT_OPCMD_G024", "90Dg.Starboard-4");
	define("INO_CPT_OPCMD_G025", "90Dg.Starboard-5");
	define("INO_CPT_OPCMD_G026", "90Dg.Starboard-6");
	define("INO_CPT_OPCMD_G027", "90Dg.Starboard-7");

define("INO_CPT_OPCMD_G030", "Speed");				// Speed
	define("INO_CPT_OPCMD_G031", "Kn");
	define("INO_CPT_OPCMD_G032", "m/s");
	define("INO_CPT_OPCMD_G033", "cm/s");
	define("INO_CPT_OPCMD_G034", "G034");
	define("INO_CPT_OPCMD_G035", "G035");
	define("INO_CPT_OPCMD_G036", "G036");
	define("INO_CPT_OPCMD_G037", "G037");

define("INO_CPT_OPCMD_G040", "G040");				// G040
	define("INO_CPT_OPCMD_G041", "G041");
	define("INO_CPT_OPCMD_G042", "G042");
	define("INO_CPT_OPCMD_G043", "G043");
	define("INO_CPT_OPCMD_G044", "G044");
	define("INO_CPT_OPCMD_G045", "G045");
	define("INO_CPT_OPCMD_G046", "G046");
	define("INO_CPT_OPCMD_G047", "G047");

define("INO_CPT_OPCMD_G050", "Depth");				// Depth
	define("INO_CPT_OPCMD_G051", "mt");
	define("INO_CPT_OPCMD_G052", "cm");
	define("INO_CPT_OPCMD_G053", "mm");
	define("INO_CPT_OPCMD_G054", "G045");
	define("INO_CPT_OPCMD_G055", "G055");
	define("INO_CPT_OPCMD_G056", "G056");
	define("INO_CPT_OPCMD_G057", "G057");

define("INO_CPT_OPCMD_G060", "G060");				// G060
	define("INO_CPT_OPCMD_G061", "G061");
	define("INO_CPT_OPCMD_G062", "G062");
	define("INO_CPT_OPCMD_G063", "G063");
	define("INO_CPT_OPCMD_G064", "G064");
	define("INO_CPT_OPCMD_G065", "G065");
	define("INO_CPT_OPCMD_G066", "G066");
	define("INO_CPT_OPCMD_G067", "G067");

define("INO_CPT_OPCMD_G070", "G070");				// G070
	define("INO_CPT_OPCMD_G071", "G071");
	define("INO_CPT_OPCMD_G072", "G072");
	define("INO_CPT_OPCMD_G073", "G073");
	define("INO_CPT_OPCMD_G074", "G074");
	define("INO_CPT_OPCMD_G075", "G075");
	define("INO_CPT_OPCMD_G076", "G076");
	define("INO_CPT_OPCMD_G077", "G077");

define("INO_CPT_OPCMD_G080", "G080");				// G080
	define("INO_CPT_OPCMD_G081", "G081");
	define("INO_CPT_OPCMD_G082", "G082");
	define("INO_CPT_OPCMD_G083", "G083");
	define("INO_CPT_OPCMD_G084", "G084");
	define("INO_CPT_OPCMD_G085", "G085");
	define("INO_CPT_OPCMD_G086", "G086");
	define("INO_CPT_OPCMD_G087", "G087");


// Column H
define("INO_CPT_OPCMD_H010", "C3");					// C3
define("INO_OPCMD_H010", "P");
	define("INO_CPT_OPCMD_H011", "C3-1");
	define("INO_CPT_OPCMD_H012", "C3-2");
	define("INO_CPT_OPCMD_H013", "C3-3");
	define("INO_CPT_OPCMD_H014", "C3-4");
	define("INO_CPT_OPCMD_H015", "C3-5");
	define("INO_CPT_OPCMD_H016", "C3-6");
	define("INO_CPT_OPCMD_H017", "C3-7");

define("INO_CPT_OPCMD_H020", "Rev.Starboard");			// Rev.Starboard
define("INO_OPCMD_H020", "7");
	define("INO_CPT_OPCMD_H021", "90Dg.Starboard-1");
	define("INO_CPT_OPCMD_H022", "90Dg.Starboard-2");
	define("INO_CPT_OPCMD_H023", "90Dg.Starboard-3");
	define("INO_CPT_OPCMD_H024", "90Dg.Starboard-4");
	define("INO_CPT_OPCMD_H025", "90Dg.Starboard-5");
	define("INO_CPT_OPCMD_H026", "90Dg.Starboard-6");
	define("INO_CPT_OPCMD_H027", "90Dg.Starboard-7");

define("INO_CPT_OPCMD_H030", "Temperature");		// Temperature
	define("INO_CPT_OPCMD_H031", "Ext.");
	define("INO_CPT_OPCMD_H032", "Wtr.");
	define("INO_CPT_OPCMD_H033", "Int.");
	define("INO_CPT_OPCMD_H034", "Hmd.");
	define("INO_CPT_OPCMD_H035", "H035");
	define("INO_CPT_OPCMD_H036", "H036");
	define("INO_CPT_OPCMD_H037", "H037");

define("INO_CPT_OPCMD_H040", "BatteryV.");			// BatteryV.
	define("INO_CPT_OPCMD_H041", "Hdw.");
	define("INO_CPT_OPCMD_H042", "RPi.");
	define("INO_CPT_OPCMD_H043", "Eng.");
	define("INO_CPT_OPCMD_H044", "H044");
	define("INO_CPT_OPCMD_H045", "H045");
	define("INO_CPT_OPCMD_H046", "H046");
	define("INO_CPT_OPCMD_H047", "H047");

define("INO_CPT_OPCMD_H050", "H050");				// H050
	define("INO_CPT_OPCMD_H051", "H051");
	define("INO_CPT_OPCMD_H052", "H052");
	define("INO_CPT_OPCMD_H053", "H053");
	define("INO_CPT_OPCMD_H054", "H054");
	define("INO_CPT_OPCMD_H055", "H055");
	define("INO_CPT_OPCMD_H056", "H056");
	define("INO_CPT_OPCMD_H057", "H057");

define("INO_CPT_OPCMD_H060", "H060");				// H060
	define("INO_CPT_OPCMD_H061", "H061");
	define("INO_CPT_OPCMD_H062", "H062");
	define("INO_CPT_OPCMD_H063", "H063");
	define("INO_CPT_OPCMD_H064", "H064");
	define("INO_CPT_OPCMD_H065", "H065");
	define("INO_CPT_OPCMD_H066", "H066");
	define("INO_CPT_OPCMD_H067", "H067");

define("INO_CPT_OPCMD_H070", "H070");				// H070
	define("INO_CPT_OPCMD_H071", "H071");
	define("INO_CPT_OPCMD_H072", "H072");
	define("INO_CPT_OPCMD_H073", "H073");
	define("INO_CPT_OPCMD_H074", "H074");
	define("INO_CPT_OPCMD_H075", "H075");
	define("INO_CPT_OPCMD_H076", "H076");
	define("INO_CPT_OPCMD_H077", "H077");

define("INO_CPT_OPCMD_H080", "H080");				// H080
	define("INO_CPT_OPCMD_H081", "H081");
	define("INO_CPT_OPCMD_H082", "H082");
	define("INO_CPT_OPCMD_H083", "H083");
	define("INO_CPT_OPCMD_H084", "H084");
	define("INO_CPT_OPCMD_H085", "H085");
	define("INO_CPT_OPCMD_H086", "H086");
	define("INO_CPT_OPCMD_H087", "H087");

		
?>
