<?php 

/* Script Admin RaspberryPi Command*/


	// RPi Halt 
	$output = shell_exec('sudo halt');
	echo "<pre>$output</pre>";
	sleep(1);

?>