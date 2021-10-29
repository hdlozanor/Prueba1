<?php
	$nume11 = $_POST['num1'];
	$nume22 = $_POST['num2'];
	//$num1 = 10;
	//$num2 = 20;
	$suma = $nume11+$nume22;
	if($suma>10){
		echo "Suma mayor a 10: ",$suma;
	}else{
		echo "Suma menor a 10: ",$suma;
	}
?>