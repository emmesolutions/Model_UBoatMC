<?php 

/* Script RPiHalt */

	// RPiHalt 
	$output = shell_exec('sudo halt');
	echo "<pre>$output</pre>";
	sleep(1);

?>