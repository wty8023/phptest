<?php
	$str=file_get_contents('./test.txt',true);
	echo $str;


?>

<form action="next.php" method="post">
	<input type="submit" name="sub" value="同意注册">
</form>
<form action="index.php" method="post">
	<input type="submit" name="sub" value="我不同意">
</form>