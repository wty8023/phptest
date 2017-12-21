<?php

	for($i=1;$i<=5;$i++){
		//先打空格
		for($j=0;$j<5-$i;$j++){
			echo "&nbsp;";
		}
		
		//再打星
		for($k=0;$k<2*$i-1;$k++){
			echo "*";
		}
		
		echo "<br />";
	}
	
	echo "<br />";
	
	$n=5;
	for($i=1;$i<=$n;$i++){
		for($k=1;$k<=$n-$i;$k++){
			echo "&nbsp;";
		}
		
		for($j=1;$j<=2*$i-1;$j++){
			if($i==1 || $i==$n){
				echo "*";
			}else{
				if($j==1 || $j==2*$i-1){
					echo "*";
				}else{
					echo "&nbsp;";
				}
			}
			
		}
		echo "<br />";
		
	}


?>