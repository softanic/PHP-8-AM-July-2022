<?php

session_start();
include 'db.php';
$from_id = $_SESSION['user'];
$to_id = $_REQUEST['to_id'];
$msg = $_REQUEST['msg'];
$q = "insert into msgs (`from_id`,`to_id`,`msg`) values($from_id,$to_id,'$msg')";
$res = mysqli_query($conn, $q);
header("location:index.php?id=" . $to_id);
?>