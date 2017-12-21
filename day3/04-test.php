<?php
	$arr_all=array();
	for($i=1;$i<=5;$i++){
		echo "第".$i."注:";
		$arr_all[$i]=array();
		for($j=0;$j<7;$j++){
			$random=mt_rand(0,30);
			if(in_array($random,$arr_all[$i])){
				$j--;
				continue;
			}else{
				$arr_all[$i][$j]=$random;
				if($j<=7){
					echo $arr_all[$i][$j].",";
				}else{
					echo $arr_all[$i][$j];
				}
				
			}
		}
		
		echo "<br />";
	}

	/*
	$arr_all=array();
	for()//打行{
		$arr_all[$i]=array();
		for(){
			$random=mt_rand(0,30);
			$random在$arr_all[$i]数组里是否重复
			if(in_array($random,$arr_all[$i])){
				$arr_all[$i][$j]=$random;
			}
			
		}
		
	}*/

?>