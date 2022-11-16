$to='aniket@gmail.com';
$subject='Registration successful';
$message="hello";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .="From: Prasad neve<prasad@softanic.in> \r\n";
$headers .="Cc: Prasad neve<prasad@softanic.in> \r\n";



mail($to,$subject,$meessage,$headers);