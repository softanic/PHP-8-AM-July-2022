<?php
$user_id=$_REQUEST['user_id'];
$name=$_REQUEST['name'];
$mobile_no=$_REQUEST['mobile'];
$gender=$_REQUEST['gender'];
$email_id=$_REQUEST['email'];

//print_r($_REQUEST);
include 'db.php';
$q="update users set name='$name',email_id='$email_id',mobile_no='$mobile_no',gender='$gender' where user_id=$user_id";
$res=mysqli_query($conn,$q);
//echo mysqli_affected_rows($conn);
if(mysqli_affected_rows($conn)>0)
{
	echo "<script>alert('record updated.');window.location='select.php';</script>";
}else{
	echo "<script>alert('record not updated.');window.history.back();</script>";
}
?>