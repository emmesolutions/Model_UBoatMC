<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Temperature/Humidity Module */
?>
 
<?php 
	if( $WM_SCookies[WM_BCTS_TMPHMD] == "00" ) { 
	
		echo "\n\t" .'<div class="WM_TmpHmd">';
		
			// Temperature/Humidity Data
			echo 'Int '.$Ino_TmpInt.'C '.' - '.$Ino_HmdInt.'% ';
			echo ' ';
			echo 'Ext '.$Ino_TmpExt.'C ';
			echo ' ';
			echo 'Wtr '.$Ino_TmpH2O.'C ';
			
			echo '<br />';
						
			echo 'MEn '.$Ino_MEnTmp.'C ';
			echo ' ';
			echo 'BlT '.$Ino_BlTTmp.'C ';
						
		echo "\n\t" .'</div>';
		}

?>