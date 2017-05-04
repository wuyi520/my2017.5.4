
<?php
	header("content-type:text/html;charset=utf-8;");
		//$name="aaa";
	
	//echo  $name;
	//echo "<br/>$name";
	//echo '<br/>$name ';
	//echo "<br/>"($name);

	define(PAI , 3.14);
	echo PAI *3;
	$x=7;
	$y=2*$x+8;
	echo "<br/>$x";
	echo "<br/>$y";
	

	$x=3;
	$y=24;
	$x="$y";
	$y="$x";
	echo "<br/>$x";
	echo "<br/>$y";


	$x=9;
	$y=13;
	if ($x>$y) {
		echo "<br/>$x";
	}else{
		echo "<br/>$y";
	}
 ?>

