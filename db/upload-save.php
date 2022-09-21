<?php
echo "<pre>";
//print_r($_REQUEST);
//echo "<br>";
//print_r($_FILES);
$tmp_name=$_FILES['photo']['tmp_name'];
$dest='photos/'.$_FILES['photo']['name'];
echo move_uploaded_file($tmp_name,$dest);

?>