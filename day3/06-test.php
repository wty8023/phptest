<?php
	session_start();
?>


<?php
	if(isset($_POST['sub'])){
		$_SESSION['arr'][]=array($_POST['username'],$_POST['age']);
		//$v=array('laoshan',19) $v[0]
	}
	
	if(isset($_POST['del'])){
		array_pop($_SESSION['arr']);
	}

?>
<meta charset="utf-8">
<form action="06-test.php" method="post">
	名称:<input type="text" name="username"><br />
	年龄:<input type="text" name="age"><br />
	<input type="submit" name="sub" value="提交">
</form>

<h3>员工信息表</h3>
<form action="06-test.php" method="post">
	<table width="300" border=1>
		<tr>
			<th>编号</th>
			<th>姓名</th>
			<th>年龄</th>
		</tr>
		<?php
			if(isset($_SESSION['arr'])){
			foreach($_SESSION['arr'] as $k=>$v){
		?>
		<tr>
			<td><?php echo $k+1;?></td>
			<td><?php echo $v[0]?></td>
			<td><?php echo $v[1]?></td>
		</tr>
		<?php
			}}
		?>
		<tr>
			<td colspan='3'>
				<input type="submit" name="del" value="删除">
			</td>
		</tr>
	</table>
</form>








