<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
//echo "data: The server time is: {$time}\n\n";
echo "data:welcome to php 7\n\n";
flush();
?>