<?php
$name=$_POST['name'];
$file=$_FILES['photo'];

$conn=mysqli_connect();
$q='insert into users (name)values($name)';
$res=mysqli_query();
$id=mysqli_insert_id($conn);

$dest=$id."-".$file;
if(move_uploaded_file($_FILES['photo']['tmp_name'],$dest))
{
		$q2="update users set photo='$dest' where user_id=$id";
		mysqli_query();
}


echo time()."file.jpg";
?>