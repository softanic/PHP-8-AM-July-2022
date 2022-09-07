<?php
$marks=165;
if($marks>=0 && $marks<35)
{
	echo "Fail";
}else if($marks>=35 && $marks <50)
{
	echo "Pass class";
}elseif($marks >= 50 && $marks <60){
	echo 'second class';
}else if($marks>=60 && $marks <=100)
{
	echo 'first class';
}
else{
	echo "invalid marks";
}

?>