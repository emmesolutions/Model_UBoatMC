<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin DataLog */


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_DLG; 
echo "\n\t".'</div>';

$WM_Action = 'index.php' . '?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_ADM ;

echo "\n\t".'<div class="WM_Outline">';

        global $WM_DataLogId;
 
        // Settings Array (Datalog Id) (Datalog Name)
    	$WM_DataLogId = array( );

	// $Id = 9126;
	
	// Count Number of DataLog
	echo 'Log Number = ';
	echo WM_DBLog_RowNb();
	echo '<br/> ';
	
		// View Menu Data
		for ($Set = 1; $Set < 34; ++$Set) {	    	// Retrieve 32 DataLog Value
	 
			$Name = WM_DataLogger_ValName($Set);	// Retrieve DataLog Name
			
			echo "\n\t".'<a href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .'Log_'.$Name. '">';
			echo "\n\t".' <span class="WM_AdmBtn" > ';
			
			if ($Set == 1) { echo "\n\t" .WM_LOG_TIMES; } 
			if ($Set == 2) { echo "\n\t" .WM_LOG_DATEX; } 
			if ($Set == 3) { echo "\n\t" .WM_LOG_TIMEX; } 
			
			if ($Set == 4) { echo "\n\t" .WM_LOG_GPSLT; } 
			if ($Set == 5) { echo "\n\t" .WM_LOG_GPSLG; } 
			
			if ($Set == 6) { echo "\n\t" .WM_LOG_CMPSH; } 
			if ($Set == 7) { echo "\n\t" .WM_LOG_CMPSP; } 
			if ($Set == 8) { echo "\n\t" .WM_LOG_CMPSR; } 
			
			if ($Set == 9) { echo "\n\t" .WM_LOG_SPEED; } 
			if ($Set == 10) { echo "\n\t" .WM_LOG_DEPTH; } 
			
			if ($Set == 11) { echo "\n\t" .WM_LOG_TMPIN; } 
			if ($Set == 12) { echo "\n\t" .WM_LOG_HMDIN; }
			if ($Set == 13) { echo "\n\t" .WM_LOG_TMPEX; }
			if ($Set == 14) { echo "\n\t" .WM_LOG_TMPH2; }
			
			if ($Set == 15) { echo "\n\t" .WM_LOG_TMPME; }
			if ($Set == 16) { echo "\n\t" .WM_LOG_TMPBT; }
			
			if ($Set == 17) { echo "\n\t" .WM_LOG_HDWBV; }
			if ($Set == 18) { echo "\n\t" .WM_LOG_ENGBV; }
			if ($Set == 19) { echo "\n\t" .WM_LOG_ENGBI; }
			if ($Set == 20) { echo "\n\t" .WM_LOG_RPIBV; }
			if ($Set == 21) { echo "\n\t" .WM_LOG_BTAMY; }
			
			if ($Set == 22) { echo "\n\t" .WM_LOG_MENGI; }
			if ($Set == 23) { echo "\n\t" .WM_LOG_BTNKI; }
			
			if ($Set == 24) { echo "\n\t" .WM_LOG_RD1TM; }
			if ($Set == 25) { echo "\n\t" .WM_LOG_RD2TM; }
			
			if ($Set == 26) { echo "\n\t" .WM_LOG_RD1TM; }
			if ($Set == 27) { echo "\n\t" .WM_LOG_RD2TM; }
			
			if ($Set == 28) { echo "\n\t" .WM_LOG_OPRCM; }
			if ($Set == 29) { echo "\n\t" .WM_LOG_PRMCM; }
			
			if ($Set == 30) { echo "\n\t" .WM_LOG_MGALM; }
			if ($Set == 31) { echo "\n\t" .WM_LOG_CMDST; }
			if ($Set == 32) { echo "\n\t" .WM_LOG_INPST; }
			if ($Set == 33) { echo "\n\t" .WM_LOG_OUTST; }
			
			echo "\n\t".'</span>'; 
			echo "\n\t".'</a>'."\n";

		} 
	
	/*
	// Read Datalog From DB by id
	for ($Id = 9130; $Id < 9131; ++$Id) {
	
		echo $Id;
		echo '<br/> ';
	
		// Read Data
		for ($Set = 1; $Set < 34; ++$Set) {	    	// Retrieve 32 DataLog Value
	 
			$Name = WM_DataLogger_ValName($Set);	// Retrieve DataLog Name
			
			$WM_DataLogId [$Id][$Name] = WM_DBLogOne_Read($Id, $Name);
			
			echo $Name;
			echo ' = ';
			echo $WM_DataLogId [$Id][$Name];
			echo '<br/> ';
	 	
		} 
	
	} 
	*/
	

echo "\n\t".'</div>';

?>