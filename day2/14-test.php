<?php
	$user=array(
		'id'=>1,
		'name'=>'zhangsan',
		'age'=>10,
		'gender'=>'male',
	);
	
	$arr=each($user);
	$arr=each($user);
	$arr=each($user);
	$arr=reset($user);
	$arr=end($user);
	
	print_r($arr);
	
	
	echo "<br />";
	//next prev reset end
	/*
	while($arr=each($user)){
		echo $arr[0]." = ".$arr[1]."<br />";
	}*/
	
	//array list  ( mixed  $varname  [, mixed  $...  ] )
	
	$ip="192.168.0.1";
	list($a,$b,$c,$d)=explode(".",$ip); 
	list($a,$b,$c)=array(1,2,3);
	echo $b;
	//echo $a;
	
	//print_r($arr);
	
	
	


?>















