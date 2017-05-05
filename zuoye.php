<?php 
	header("content-type:text/html;charset=utf-8;");
	//$x=86;
	//echo "1数据类型" ;
	//var_dump($x) ;
	//$y="money" ;
	//echo "2数据类型" .var_dump($y)  ,"<br/>";

	//$a=79.58;
	//$temp=$a;
	//$b=$a;
	//$a=floor($a);
	//$temp=ceil($temp);
	//$y=round($b,2);
	//echo $a ,"<br/>";
	//echo $temp ,"<br/>";
	//echo $y ,"<br/>";

	//$money=rand(10,100);
	//echo $money,"<br/>";

	//$x_6=rand(10000,99999);
	//echo $x_6;

	//$x=21;
	//$y="21abc";
	//echo $x+$y,"<br/>";

	//$x="53";
	//var_dump($x);
	//echo "<img  src='./images/".rand(1,9).".png '>";
	//echo "<img  src='./images/".rand(1,9).".png '>";
	//echo "<img  src='./images/".rand(1,9).".png '>";
	//echo "<img  src='./images/".rand(1,9).".png '>";
	//echo "<img  src='./images/".rand(1,9).".png '>";//让随机数字与图片建立连接

	
	// $x=54320;
	// if ($x%2==0) {
	 //	echo "为偶数";
	// } else {
	// 	echo "为奇数";
	// }
	

	/*$x=76;
	if($x>100){
		echo""
	}else if($x<80&&$x>60){
		echo 
	}else if ($x)*/
	/*$a=10;
	$b=20;
	$c=30;
	if ($a>$b&&$a>$c){
		echo "a最大";
	}else{
	if ($b>$c){
		echo "a中间";
	}else
		echo "a最小";
	}*/

	$x=50;
	$y=60;
	$z=40;
	$max;
	$min;
	if ($x>$y ){
		$max=$x ;
		$min=$y;
	}else{
		$max=$y;
		$min=$x;
	}if ($max>$z){
		if ($z>$min){
		echo "$max>$z>$min ";
		}else {echo  "$max>$min>$z";
	}
	}else{echo "$z>$max>$min" ;//比较任意三个不等数的大小，并按顺序写出来
	}
		
	
	


	  

	  
?>