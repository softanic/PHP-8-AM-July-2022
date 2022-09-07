<?php
$arr=[10,20,8,52,24,9,5,55];
$arr1=["css"=>20,"js"=>50,"php"=>40];
sort($arr);
rsort($arr);
asort($arr);
arsort($arr);
ksort($arr);
krsort($arr);
array_push($arr,60);
array_pop($arr);
$new_arr=array_merge($arr,$arr1);
//echo var_dump(in_array(522,$arr));
$str= serialize($arr);
//echo var_dump(unserialize($str));
echo implode("*",$arr);
$s="a,b,c,d,e";
$arrrr=explode(",",$s);
print_r($arrrr);
/*echo "<pre>";
print_r($arr);
*/
?>