<?php
session_start();
$idsession = session_id();
Session_destroy();
$count=0;
$count++;
?>
<html>
<head>
<title>Demo session – destroy </title>
</head>
<body>
<h1> Demo Session – reset nilai </h1>
<?php
echo "<br> ID Session : ".$idsession;
echo "<br> Anda mengakses sever ini sebanyak :" .$count;
?>
</body>
</html>