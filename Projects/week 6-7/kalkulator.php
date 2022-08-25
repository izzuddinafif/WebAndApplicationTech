<?php
$bil1=5;
$bil2=3;
$operator='%';
$x;
 
switch($operator){
	case '+':
	$x=$bil1+$bil2;
	echo "$bil1 + $bil2 = $x";
	break;
	case '-':
	$x=$bil1-$bil2;
	echo "$bil1 - $bil2 = $x";
	break;
	case '*':
	$x=$bil1*$bil2;
	echo "$bil1 * $bil2 = $x";
	break;
	case '/':
	$x=$bil1/$bil2;
	echo "$bil1 / $bil2 = $x";
	break;
	case '%':
	$x=$bil1%$bil2;
	echo "$bil1 % $bil2 = $x";
	break;
	default:
	echo "inputkan operator yang sah";
}
?>