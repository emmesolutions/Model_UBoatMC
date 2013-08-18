<?php

$output = shell_exec('sudo halt');
echo "<pre>$output</pre>";
sleep(1);

?>
