<?php 

/* Script Admin RaspberryPi Command*/


	// RPi Reboot
	$output = shell_exec('sudo reboot');
	echo "<pre>$output</pre>";
	sleep(1);

?>