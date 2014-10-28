<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Header*/

?>


	<head>
	
	<!-- Javascript Refresh Data -->	
	<script type="text/javascript"> 
	var Refresh= <?= '"'.INO_IP.'"'?>;
	</script>
	<script src="../system/scripts/System.js"></script>
		
	<!-- Javascript CanvasJS Library -->
	<script src="../system/library/canvasjs.min.js"></script>
		
	<?php 
	// Check BarCharts Cookies
	if(!isset($WM_SCookies[WM_BCTS_GPSCMP])) $WM_SCookies[WM_BCTS_GPSCMP] = '00';
	if(!isset($WM_SCookies[WM_BCTS_TMPHMD])) $WM_SCookies[WM_BCTS_TMPHMD] = '00';
	if(!isset($WM_SCookies[WM_BCTS_HDWSTS])) $WM_SCookies[WM_BCTS_HDWSTS] = '00';
	?>
		
	<script type="text/javascript"> 
		// Style Color 
		var Clr_Grid00= "<?= WM_CLR_GRID00?>;"
		var Clr_Styl01= "<?= WM_CLR_STYL01?>;"
		var Clr_Styl02= "<?= WM_CLR_STYL02?>;"
		var Clr_Bkgd10= "<?= WM_CLR_BKGD10?>;"
		var Clr_Styl10= "<?= WM_CLR_STYL10?>;"
		// Check Borders View
		var Enb_BrdTop= <?= $WM_SCookies[WM_SYS_VAL_BRDTOP]?>;
		var Enb_BrdBot= <?= $WM_SCookies[WM_SYS_VAL_BRDBOT]?>;
		// BarCharts GPS/Compass 
		var Enb_GPSCmp= <?= $WM_SCookies[WM_BCTS_GPSCMP]?>;
		var Ino_CmpssH= <?= $Ino_CmpssH?>;
		var Ino_CmpssP= <?= $Ino_CmpssP?>; var T01_CmpssP= <?= $T01_CmpssP?>; var T02_CmpssP= <?= $T02_CmpssP?>; var T03_CmpssP= <?= $T03_CmpssP?>;
		var Ino_CmpssR= <?= $Ino_CmpssR?>; var T01_CmpssR= <?= $T01_CmpssR?>; var T02_CmpssR= <?= $T02_CmpssR?>; var T03_CmpssR= <?= $T03_CmpssR?>;
		// BarCharts Depth/Speed 
		var Enb_DthSpd= <?= $WM_SCookies[WM_BCTS_DTHSPD]?>;
		var Ino_Depth = <?= $Ino_Depth?>;
		var Ino_Speed = <?= $Ino_Speed?>;
  		// BarCharts Tempemperature/Humidity
		var Enb_TmpHmd= <?= $WM_SCookies[WM_BCTS_TMPHMD]?>;
	  	var Ino_TmpInt= <?= $Ino_TmpInt?>; var T01_TmpInt= <?= $T01_TmpInt?>; var T02_TmpInt= <?= $T02_TmpInt?>; var T03_TmpInt= <?= $T03_TmpInt?>;
	  	var Ino_TmpExt= <?= $Ino_TmpExt?>;
	  	var Ino_TmpH2O= <?= $Ino_TmpH2O?>;
	  	var Ino_MEnTmp= <?= $Ino_MEnTmp?>; var T01_MEnTmp= <?= $T01_MEnTmp?>; var T02_MEnTmp= <?= $T02_MEnTmp?>; var T03_MEnTmp= <?= $T03_MEnTmp?>;
	  	var Ino_BlTTmp= <?= $Ino_BlTTmp?>; var T01_BlTTmp= <?= $T01_BlTTmp?>; var T02_BlTTmp= <?= $T02_BlTTmp?>; var T03_BlTTmp= <?= $T03_BlTTmp?>;
	  	var Ino_HmdInt= <?= $Ino_HmdInt?>; var T01_HmdInt= <?= $T01_HmdInt?>; var T02_HmdInt= <?= $T02_HmdInt?>; var T03_HmdInt= <?= $T03_HmdInt?>;
	  	// BarCharts Hardware Status
	  	var Enb_HdwSts= <?= $WM_SCookies[WM_BCTS_HDWSTS]?>;
	  	var Ino_BtAtmy= <?= $Ino_BtAtmy?>; var T01_BtAtmy= <?= $T01_BtAtmy?>; var T02_BtAtmy= <?= $T02_BtAtmy?>; var T03_BtAtmy= <?= $T03_BtAtmy?>;
	  	var Ino_HdwBtV= <?= $Ino_HdwBtV?>; var T01_HdwBtV= <?= $T01_HdwBtV?>; var T02_HdwBtV= <?= $T02_HdwBtV?>; var T03_HdwBtV= <?= $T03_HdwBtV?>;
	  	var Ino_EngBtV= <?= $Ino_EngBtV?>; var T01_EngBtV= <?= $T01_EngBtV?>; var T02_EngBtV= <?= $T02_EngBtV?>; var T03_EngBtV= <?= $T03_EngBtV?>;
	  	var Ino_EngBtI= <?= $Ino_EngBtI?>;
	  	var Ino_RPiBtV= <?= $Ino_RPiBtV?>;
	  	var Ino_MEnSnI= <?= $Ino_MEnSnI?>;
	  	var Ino_BlTSnI= <?= $Ino_BlTSnI?>;
  	</script>
  	
  	<!-- BarCharts Border -->
  	<script src="../system/scripts/BarCharts.js"></script>
  				
  				
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

		<title> <?php echo WM_SITE_NAME ?> </title>	
	
		<meta <?php echo 'name="description" content= "' .WM_SITE_DESC. '"' ?> />
		<meta <?php echo 'name="author" content= "' .WM_SITE_AUTH. '"' ?> />

		<meta name="viewport" content="width=device-width, 
					initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

	<link rel="shortcut icon" href="/favicon.ico" />

	<!-- System Stylesheet -->
	<?php require (WM_SYS_SCT. '/stylesheet.php'); ?>

	</head>
	