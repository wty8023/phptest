<?php
	//变量存在不存在  在内存中销毁变量 isset  unset
	
	if(isset($_POST['sub'])){
		$ss=$_POST['num'];
		$arr=array(1,2);
		unset($arr);
		print_r($arr);
		//unset($ss);
		//echo $ss;
		//echo "success";
	}else{
		//echo "error";
	}
	
	//$a=123;
	//$A=456;
	//echo $a;
	/*
	function aa(){
		echo 678;
	}
	aa();
	AA();
	Aa();*/
	
	

?>

<meta charset="utf-8">
<form action="04-test.php" method="post">
	数据:<input type="text" name="num">
	<input type="submit" name="sub" value="提交">
</form>