<?php
	$a=20;
	$b=$a++ + ++$a; //20 + 22 42
	//echo $b;
	$c=--$b - $b--; //41 - 41 =0
	//echo $c;
	$d=$c++ + --$c; //0 + 0
	echo $d;
	
	//++$a  $a++

	//可变变量
	//$for=100;
	//echo $for;
	/*
	$one="$$$$$";
	$two="one";
	$three="two";
	$four="three";
	
	echo $four."<br />"; //three
	echo $$four."<br />";*/
	
	

	/*
	$one=100;   //0xa12b3c 10
	$two=&$one;   //&取地址符  0xa23c4a 0xa12b3c  hello
	
	$one=10;
	$two="hello";
	
	echo $one."<br />";
	echo $two."<br />";*/

?>





