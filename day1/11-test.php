<?php
	//九九乘法表 for
	/*
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			echo $i." * ".$j." = ".($i*$j)." ";
		}
		
		echo "<br />";
	}*/
	/*
	echo "<table width=800 align=center border=1>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".($i*$j);
			echo "</td>";
		}
		echo "</tr>";
		//echo "<br />";
	}*/
	
	/*
	for($i=1;$i<=9;$i++){
		echo $i."<br />";
	}*/
	
	/*
	$i=1;
	for(;$i<=9;){
		echo $i."<br />";
		$i++;
	}*/
	//while
	
	$i=1;
	while($i<=9){
		$j=1;
		while($j<=$i){
			echo $i." * ".$j." = ".($i*$j)." ";
			$j++;
		}
		$i++;
		echo "<br />";
	}

?>



