<?php
	$info=array(
		"user"=>array(
			array(1,'zhangsan',10,'male'),
			array(2,'lisi',20,'male'),
			array(3,'wangwu',23,'female'),
		),
		"score"=>array(
			array(1,100,89,10),
			array(2,90,89,67),
			array(3,89,76,55),
		),
		"connect"=>array(
			array(1,'110','aaa@bb.com'),
			array(2,'111','ccc@dd.com'),
			array(3,'112','ddd@ee.com'),
		),
	);
	
	foreach($info as $tablename=>$table){
		echo "<table width=500 align=center border=1>";
		echo "<caption><h3>".$tablename."</h3></caption>";
		foreach($table as $row){
			echo "<tr>";
			foreach($row as $col){
				echo "<td>";
				echo $col;
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

?>
