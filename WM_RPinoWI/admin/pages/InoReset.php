<?php
$output = shell_exec('gpio mode 0 out');
echo "<pre>$output</pre>";

$output = shell_exec('gpio write 0 1');
echo "<pre>$output</pre>";

sleep(1);

$output = shell_exec('gpio write 0 0');
echo "<pre>$output</pre>";

?>
