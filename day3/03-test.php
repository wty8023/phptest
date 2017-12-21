<?php

	if(isset($_POST['sub'])){
		array_pop($_POST);
		$str=implode($_POST);
		echo $str;
		/*
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";*/
	}
?>

<meta charset="utf-8">
<form action="03-test.php" method="post">
	<input type="text" name="d1"><br />
	<input type="text" name="d2"><br />
	<input type="submit" name="sub" value="查询">
	<input type="text" name="d3"><br />
	
	<input type="reset" name="rst" value="重置">
</form>