<?php
/*
d


*/
date_default_timezone_set("Asia/kolkata");

//echo date_default_timezone_get();

//echo date('d-m-Y H i s');

$dob="1990-11-27";
$today=date('Y-m-d');
$d1=date_create($dob);
$d2=date_create($today);
echo date_diff($d1,$d2)->format("%y %m %d");
//echo date('Y',strtotime($dob));


?>