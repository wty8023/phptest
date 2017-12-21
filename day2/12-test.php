<?php
	/*
	$arr=array(
		array(1,"zhangsan",10,"male"),
		array(2,"lisi",29,"male"),
		array(3,"wangwu",20,"female"),
	);
	
	echo $arr[1][1];*/
	/*
	echo "<pre>";
	print_r($arr);
	echo "</pre>";*/
	
	//使用foreach循环遍历数组
	$user=array(
		'id'=>1,
		'name'=>'laoshan',
		'gender'=>'male',
		'email'=>'aaa@bb.com',
	);
	
	
	//foreach(数组变量名 as 键名=>键值)
	foreach($user as $key=>$value){
		echo $key." = ".$value;
		echo "<br />";
	}

?>












