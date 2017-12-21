<?php
	//创建数组方式  $arr=array(),赋值方式   数组分为 索引数组 关联数组
	//索引数组
	/*
	$user[]=1;
	$user[0]="laoshan";
	$user[5]="female";
	$user[]=18;
	$user[]=array(1,2);*/
	
	echo $user[5];
	echo "<br />";
	echo $user[2];
	/*
	echo "<pre>";
	print_r($user);
	echo "</pre>";*/
	
	echo "<br />";
	
	//关联数组
	$user['id']=1;
	$user['name']="laoshan";
	$user['gender']="male";
	$user['age']=40;
	$user['email']="laoshan@163.com";
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	
	/*
	$user[1]=array();   //表1
	$user[2]=array();   //表2
	
	$this->load->view('index.php',$data1);
	$this->load->view('index.php',$data2);
	
	
	uid uname upass
	1   laoshan
	
	wid wcontent      writer
	1   loves laoxie   1*/
	
	
	for($i=0;$i<20;$i++){
		$user[$i]=$i;
	}
	
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";

?>














