


<meta charset="utf-8">
<form action="09-test.php" method="post">
	请出拳
	<select name="you" onclick="mychange(this)">
		<option value='2'>拳头</option>
		<option value='1'>剪刀</option>
		<option value='0'>布</option>
	</select>
	<img src="cq.jpg" id="myimg">
	<input type="submit" name="sub" value="提交">
</form>

<script>
	//点击option img src发生变化
	function mychange(obj){
		var val=obj.value;
		var myimg=document.getElementById('myimg');
		//alert(val);
		if(val==2){
			myimg.src="qt.jpg";
		}else if(val==1){
			myimg.src="jz.jpg";
		}else{
			myimg.src="b.jpg";
		}
		
	}
</script>

<?php
	if(isset($_POST['sub'])){
		$cq=$_POST['you'];
		$num=rand(0,2);
		switch($cq){
			case '2':
				echo "出的拳头";
				break;
			case '1':
				echo "出的剪刀";
				break;
			case '0':
				echo "出的布";
				break;
		}
		
		echo $num;
		echo "<br />";
		echo $cq;
		
		
	}

?>




