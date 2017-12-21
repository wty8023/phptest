<?php
	if(isset($_POST['sub'])){
		$name=$_POST['username'];
		$pass=$_POST['pass'];
		$arr=array('%','=','&');
		
		$flag=true;
		for($i=0;$i<strlen($name);$i++){
			for($j=0;$j<count($arr);$j++){
				if($name[$i]==$arr[$j]){
					$flag=false;
				}
			}
		}
		
		if($flag==false){
			echo "输入非法";
		}else{
			if($name=='admin' && $pass=='12345'){
				echo "登录成功";
			}else{
				echo "登录失败";
			}
		}
		
	}


?>

<meta charset="utf-8">
<form action="02-test.php" method="post">
	用户名:<input type="text" name="username"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">

</form>