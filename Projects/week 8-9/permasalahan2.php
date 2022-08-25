<?php
$bil=array(55,99);
$operator='*';
$x;
function calc($bil, $operator){
 	global $x;
	switch($operator){
		case '+':
		$x=$bil[0]+$bil[1];
		break;
		case '-':
		$x=$bil[0]-$bil[1];
		break;
		case '*':
		$x=$bil[0]*$bil[1];
		break;
		case '/':
		$x=$bil[0]/$bil[1];
		break;
		case '%':
		$x=$bil[0]%$bil[1];
		break;
		default:
		echo "inputkan operator yang sah";
	}
	return $x;
}
include("header.php");
echo "Bil 1: $bil[0]<br>";
echo "Bil 2: $bil[1]<br>";
echo "Operator : $operator<br>";
echo "Hasil : $bil[0] $operator $bil[1] = ".calc($bil, $operator).'<br>';
include("footer.php");
?>