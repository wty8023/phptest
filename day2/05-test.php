<?php
	
	if(isset($_POST['sub'])){
		$score=$_POST['score'];
		
		if(!empty($score)){
			if(is_numeric($score)){
				if($score>=0 && $score<=100){
					if($score>=80 && $score<=100){
						echo "优秀";
					}else if($score>=60 && $score<80){
						echo "合格";
					}else{
						echo "不及格";
					}
				}else{
					echo "输入的不是范围内的分数";
				}
			}else{
				echo "输入不是数字";
			}
		}else{
			echo "输入不能为空";
		}
	}
	/*
	$a=12.89;
	$b=(int)$a;
	echo $b;*/
?>

<h3>输入分数查询成绩</h3>
<form action="05-test.php" method="post">
	分数:<input type="text" name="score"><br /><br />
	<input type="submit" name="sub" value="提交查询">
	<input type="reset" name="rst"  value="重置分数">
</form>