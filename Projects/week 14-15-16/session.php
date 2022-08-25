<?php
session_start();
$_SESSION['count'] ?? null;
$count=0;
$count++;
?>
<html=0>
<head>
<title>Demo session 1 </title>
</head>
<body>
<h1> Demo Session 1 </h1>
<?php
Echo "Anda telah mengakses halaman ini sebanyak : $count
kali";
?>
</body>
</html>