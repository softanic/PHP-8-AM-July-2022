<?php

session_start();
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

include 'db.php';
$user_id = $_SESSION['user'];
$id = $_REQUEST['to_id'];

$q2 = "select * from msgs where (from_id=$user_id and to_id=$id) or (from_id=$id and to_id=$user_id)";
$chat_res = mysqli_query($conn, $q2);
echo "data: ";
while ($chat = mysqli_fetch_array($chat_res)) {
    if ($chat['from_id'] == $user_id) {
        //$str .= "1";
        echo $chat['msg'];
    } else {
        //$str .= '1';
        //echo "<div class=' text-success'>" . $chat['msg'] . "</div>";
    }
}
echo "\n\n";
flush();
?>