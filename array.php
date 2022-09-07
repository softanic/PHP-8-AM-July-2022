<?php
//$arr=array('aniket','pranali','bhavesh');
$aniket=[10,20,30,40];
$marks=['aniket'=>["css"=>20,"js"=>30,"php"=>40],
		'bhavesh'=>["c"=>13,"cpp"=>23,"ds"=>33,"os"=>43],
		'om'=>["html"=>20,"java"=>15,"coa"=>25,"se"=>35,"python"=>45]
		];

//echo "<pre>";
//print_r($marks);

/*for($i=0;$i<sizeof($marks);$i++)
{
	echo "<li> Hello <b>" .ucfirst($arr[$i]). "</b>, you got $marks[$i] marks.</li>";
	//echo "<br>";
}*/
foreach($marks as $student_name => $m)
{
	echo "<table border=1>";
	echo "<tr><th colspan=2>Logo</th></tr>";
	echo "<tr><th colspan=2><h1>Softanic Solutions Pvt. Ltd.</h1></th></tr>";
	echo "<tr><th colspan=2>Jalgaon MH 425001. www.softanic.in</th></tr>";
	echo "<tr style='background-color:blue;'><th colspan=2>Marksheet</th></tr>";
	echo "<tr><th>Stundent Name</th><th>$student_name</th></tr>";
	echo "<tr><th>Subject Name</th><th>Marks</th></tr>";
	foreach($m as $subject =>$mark)
	{
		echo "<tr><th>$subject</th><th>$mark</th></tr>";
	}
	$total=array_sum($m);
	$no_of_subject=sizeof($m);
	$out_of_marks=$no_of_subject*100;
	
	$percent=$total/$out_of_marks * 100;
	
	echo "<tr><th>Total</th><th>".array_sum($m)."</th></tr>";
	echo "<tr><th>Percentage</th><th>".$percent."%</th></tr>";
	echo "</table><br><br>";

}




?>