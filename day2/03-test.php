<?php
	if(isset($_POST['sub'])){
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$ysf=$_POST['ysf'];
		
		$sum=0;
		switch($ysf){
			case '+': 
				$sum=$num1+$num2;
				break;
			case '-':
				$sum=$num1-$num2;
				break;
			case '*':
				$sum=$num1*$num2;
				break;
			case '/':
				$sum=$num1/$num2;
				break;
			case '%':
				$sum=$num1%$num2;
				break; 
		}
	}

?>


<meta charset="utf-8">
<form action="03-test.php" method="post">
	<table width=800 align=center border=1>
	<caption><h1>计算器</h1></caption>
		<tr>
			<td>
				<input type="text" name="num1" value="<?php echo $num1?>">
			</td>	
			<td>
				<select name="ysf">
					<option value='+' <?php echo $ysf=='+'?'selected':''?>>+</option>
					<option value='-' <?php echo $ysf=='-'?'selected':''?>>-</option>
					<option value='*' <?php echo $ysf=='*'?'selected':''?>>×</option>
					<option value='/' <?php echo $ysf=='/'?'selected':''?>>/</option>
					<option value='%' <?php echo $ysf=='%'?'selected':''?>>%</option>
				</select>
			</td>
			<td>
				<input type="text" name="num2" value="<?php echo $num2 ?>">
			</td>
			<td>
				<input type="submit" name="sub" value="计算">
			</td>		
		</tr>
		<?php
			if(isset($_POST['sub'])){
				echo "<tr>";
				echo "<td colspan='4'>"."结果为:".$num1." ".$ysf." ".$num2." = ".$sum."</td>";
				echo "</tr>";
			}
		?>
		
	</table>
</form>