<?php 
  // No Direct Access
  defined('_WMEX') or die("Access Denied!");


/* Script Alerts */


echo '<div class="WM_AlertsTitle">';
echo WM_ALERT_TITLE ;
echo '</div>';

echo '<br />';

echo '<div class="WM_AlertsMsg">';

if ($_GET[WM_URI_PAGE] == WM_ALT_01) { echo WM_ALERT_01 ; } 
if ($_GET[WM_URI_PAGE] == WM_ALT_02) { echo WM_ALERT_02 ; }
if ($_GET[WM_URI_PAGE] == WM_ALT_03) { echo WM_ALERT_03 ; }

echo '</div>';


?>