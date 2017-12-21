<?php
	$str="0123456789abcdefghigklmnopqrstuvwxyz";
	$nstr="";
	for($i=0;$i<4;$i++){
		$num=rand(0,35);
		$flag=true;
		for($j=0;$j<strlen($nstr);$j++){
			if($num==$nstr[$j]){
				//continue;
				$flag=false;
			}
		}
		if($flag==false){
			$i--;
			continue;
		}
		$nstr.=$str[$num];
	}
	
	echo $nstr;
	


?>