<?php
	$con=1;
	$arr=array();
	while($con<=5){
		$arr[]=mt_rand(0,9);
		//var_dump($arr);
		$newarr=array_unique($arr);
		$newarr=array_merge($newarr);
		
		/*
		echo "<pre>";
		var_dump($newarr);
		echo "</pre>";*/
		$con=count($newarr);
		//$con++;
	}
	
	
	for($j=0;$j<count($newarr);$j++){
		$str.=$newarr[$j];
	}
	
	echo $str;
	/*
	$arr=array(1,3,5,1,9);
	$newarr=array_unique($arr);
	
	var_dump($arr);
	echo "<br />";
	var_dump($newarr);*/
	/*
	$a=array(1,2,3);
	unset($a[0]);
	var_dump($a);*/

	/*
	$arr=array();
	$str="";
	for($i=0;$i<5;$i++){
		$arr[]=rand(0,9);
		$newarr=array_unique($arr);
		if(count($arr)==count($newarr)+1){
			array_pop($arr);
			//unset($arr[$i]);
			$i--;
		}
		
	}
	
	for($j=0;$j<count($newarr);$j++){
		$str.=$arr[$j]."&nbsp;";
	}
	
	echo $str; */


?>