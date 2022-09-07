<?php
function welcome_user(&$name)
{
	//global $n;
	$name='User - '.$name;
	if(0)
	{
		return "welcom $name<br>";
	}else{
		return "welco $name<br>";
	}
	return "welc $name<br>";
	return "wel $name<br>";
}
$n='abc';
echo welcome_user($n);
echo $n;
?>