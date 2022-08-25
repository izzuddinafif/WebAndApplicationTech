<?php
$data=array(5,7,9);
$n=count($data);
$max;
$mean;
$i=0;
function maxx($data, $n){
	$max=$data[0];
	for($i=0;$i<$n;$i++){
		if($max<$data[$i])
			$max=$data[$i];
	}
	return 	$max;
}
function mean($data, $n){
	$total=0;
	for($i=0;$i<$n;$i++){
		$total+=$data[$i];
	}
	$mean=$total/$n;
	return 	$mean;
}
echo "Input Data :<br>";
for($i;$i<$n;$i++)
	echo "Data $i : $data[$i]<br>";
echo "Output Data :<br>";
echo "Max : ".$max=maxx($data, $n).'<br>';
echo "Mean : ".$mean=mean($data, $n);
?>