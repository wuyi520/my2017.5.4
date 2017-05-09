<?php 


/*for ($i=6; $i >0 ; $i--) { 
	for ($j=$i; $j>0 ; $j--) { 
		echo "*";
	}
		echo "<br/.>"	;

	}*/

	/*for ($i=1; $i<=9;$i++) {
		for($j=1;$j<=$i;$j++){

			echo "$i"."x"."$j"."=".$i*$j."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		echo "<br/>";
	}*/

	//for ($i=1;$i<6;$i++){
		//echo "*";}
		//echo "<hr/>";

	for ($i=0;$i<3;$i++){
		if($i==0){//第一行
			for ($j=0;$j<11;$j++){
				if($j==0||$j==10)
					{
						echo "&nbsp;&nbsp;";
					}else{
						echo "*";
						
					}
				}echo "<br/>";
			}
		
			
		if($i==1){//第二行
			for ($j=0;$j<11;$j++){
				if($j<3||$j>7){
					echo "&nbsp;&nbsp;";
				}else{
					echo "*";
					
					}
				}echo "<br/>";
			}
		if($i==2){//第三行
		for ($j=0;$j<11;$j++){
				echo "*";
				
				}echo "<br/>";
			}
		
	}
		
		for($i=0;$i<5;$i++)
			{
				if($i==0){
				for($j=0;$j<7;$j++){
					echo "*";
			}
					echo "<br/>";
				}
				if($i==1){
				for($j=0;$j<8;$j++){
					if($j<7){
						echo "&nbsp;&nbsp;";
					}else{echo "*";}
				}	echo "<br/>";
				}
				if($i==2){
				for($j=0;$j<7;$j++){
					echo "*";
				}
					echo "<br/>";
			}
				if($i==3){
				for($j=0;$j<8;$j++){
					if($j>0){
						echo "&nbsp;&nbsp;";
					}else{echo "*";}
					}		echo "<br/>";
				}
				if($i==4){
				for($j=0;$j<7;$j++){
					echo "*";
			}
					echo "<br/>";
				}
			}

		for($i=0;$i<5;$i++)
		{
			if($i==0){
				for($j=0;$j<7;$j++){
					echo "*";
			}
					echo "<br/>";
				}
				if($i==1){
				for($j=0;$j<8;$j++){
					if($j<7){
						echo "&nbsp;&nbsp;";
					}else{echo "*";}
				}	echo "<br/>";
				}
				if($i==2){
				for($j=0;$j<7;$j++){
					echo "*";
				}
					echo "<br/>";
			}
				if($i==3){
				for($j=0;$j<8;$j++){
					if($j<7){
						echo "&nbsp;&nbsp;";
					}else{echo "*";}
					}		echo "<br/>";
				}
				if($i==4){
				for($j=0;$j<7;$j++){
					echo "*";
			}
					echo "<br/>";
				}

		}
	?>		
	
		
		
		
		

		
	
		
	

	



	
		
			
	
	
	
		
	
	