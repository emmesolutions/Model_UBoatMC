<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* System Message Module */
?>

<?php 
	
	echo "\n\t" .'<div class="WM_SysMsg">';
		// MsgAlm
		// echo 'MsgAlm '.$Ino_MsgAlm;
		switch ($Ino_MsgAlm) {
		    case 0: echo INO_MSGALM_00; break;
		    case 1: echo INO_MSGALM_01; break;
		    case 2: echo INO_MSGALM_02; break;
		    case 3: echo INO_MSGALM_03; break;
		    case 4: echo INO_MSGALM_04; break;
		    case 5: echo INO_MSGALM_05; break;
		    case 6: echo INO_MSGALM_06; break;
		    case 7: echo INO_MSGALM_07; break;
    		    case 8: echo INO_MSGALM_08; break;
		    case 9: echo INO_MSGALM_09; break;
		    case 10: echo INO_MSGALM_10; break;
    		    case 11: echo INO_MSGALM_11; break;	
    		    case 12: echo INO_MSGALM_12; break;	
    		    case 13: echo INO_MSGALM_13; break;	
    		    case 14: echo INO_MSGALM_14; break;	
    		    case 15: echo INO_MSGALM_15; break;	    		        		        		        		    		
		}
		
		echo '<br />';
		
		// Op.Cmd + PrmCmd
		// echo 'OprCmd '.$Ino_OprCmd;
		switch (isset($WM_ReadGET[INO_OPCMD])) {
		    case 0: echo INO_MSGCMD_00; break;
		    case 1: echo INO_MSGCMD_01; break;
		    case 2: echo INO_MSGCMD_02; break;
		    case 3: echo INO_MSGCMD_03; break;
		    case 4: echo INO_MSGCMD_04; break;
		    case 5: echo INO_MSGCMD_05; break;
		    case 6: echo INO_MSGCMD_06; break;
		    case 7: echo INO_MSGCMD_07; break;
    		    case 8: echo INO_MSGCMD_08; break;
		    case 9: echo INO_MSGCMD_09; break;
		    case 10: echo INO_MSGCMD_10; break;
    		    case 11: echo INO_MSGCMD_11; break;	
    		    case 12: echo INO_MSGCMD_12; break;	
    		    case 13: echo INO_MSGCMD_13; break;	
    		    case 14: echo INO_MSGCMD_14; break;	
    		    case 15: echo INO_MSGCMD_15; break;	  
    		    case 21: echo INO_MSGCMD_21; break;	
    		    case 22: echo INO_MSGCMD_22; break;	
    		    case 23: echo INO_MSGCMD_23; break;	
    		    case 25: echo INO_MSGCMD_25; break;	
    		    case 26: echo INO_MSGCMD_26; break;	
    		    case 27: echo INO_MSGCMD_27; break;    		      		        		        		        		    		
		}
		echo ' ';
		echo 'Ist= ' .$Ino_OprCmd.$Ino_PrmCmd;
		
	echo "\n\t" .'</div>';
				
?> 