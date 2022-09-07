<?php
	
	function add($n1,$n2,$n3=0,$n4=0,$n5=0)
	{
		return $n1+$n2+$n3+$n4+$n5;
	}
	echo add(10,20,20,20,40);
	echo '<br>';
	echo add(10,20,30);
	echo '<br>';
	$str='sOFTanic solutions';
	echo strlen($str);
	echo '<br>';
	echo strpos($str,'f');
	echo '<br>';
	echo str_replace('solutions','<b>solutions</b>',$str);
	echo '<br>';
	echo strtoupper($str);
	echo '<br>';
	echo strtolower($str);
	echo '<br>';
	echo ucfirst($str);
	echo '<br>';
	echo ucwords($str);
	echo '<br>';
	echo str_word_count($str);
	echo "<br>";
	$password='abcdefghijklmnopqrstuvwxz';
	echo md5($password);
	echo "<br>";
	echo md5($password);
	

?>