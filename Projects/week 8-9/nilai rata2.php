<?php
$nilai=array(94.25, 73.34, 85.67);
$n=count($nilai);
$total=0;
$j=1;
for($i=0;$i<$n;$i++){
	echo "nilai ".$j++." = $nilai[$i]<br>";
	$total+=$nilai[$i];
}
echo 'rata-rata = '.$rata=$total/$n;