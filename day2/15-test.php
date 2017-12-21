<?php
	//$_POST $_GET $_SERVER $_ENV $_REQUEST $_FILES
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		
		//var_dump($sfile);
		//die();
		$arr=explode('.',$sfile['name']);
		$hou=count($arr)-1;
		$newhou=$arr["$hou"];
		$harr=array('exe','txt','rar');
		$flag=true;
		for($i=0;$i<count($harr);$i++){
			if($harr[$i]==$newhou){
				$flag=false;
			}
		}
		
		if($flag==false){
			echo "<script>alert('上传文件非法')</script>";
		}else{
			//echo "上传成功";
			//["tmp_name"]=> string(24) "C:\xampp\tmp\php6263.tmp"
			$a=move_uploaded_file($sfile['tmp_name'], './upload/laoshan.jpg');
			if($a){
				echo "上传并移动成功";
			}else{
				echo "移动失败";
			}
		}
		//echo $arr[1];
		//var_dump($arr);
	}

?>

检测文件名后缀<br />
<form action="15-test.php" method="post" enctype="multipart/form-data">
	<input type="file" name="sfile">
	<input type="submit" name="sub" value="上传">
</form>