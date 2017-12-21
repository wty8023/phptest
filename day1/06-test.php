<?php
	//phpinfo();
	
	if(isset($_POST['sub'])){
		$str=$_POST['address'];
		$addr=substr($str,10);
		//echo $addr;
		echo base64_decode($addr);
		
		/*
		//echo $str;
		
		$dizhi=base64_encode($str);
		
		$add="thunder://".$dizhi;
		
		echo $add;*/
		
		//aHR0cDovL3d3dy4xNjMuY29tLzEucm12Yg==
		//thunder://aHR0cDovL3d3dy4xNjMuY29tLzEucm12Yg==
	}
	
	
	//base64_encode  base64_decode
	//md5(md5($pass)+$salt);
	
	
	//630ad1fe1935f61055a5998378b6fe36 laoshan123
	//827ccb0eea8a706c4c34a16891f84e7b 12345
	//彩虹表
?>

<meta charset="utf-8">
<form action="06-test.php" method="post">
	地址:<input type="text" name="address">
	<input type="submit" name="sub" value="提交">
</form>