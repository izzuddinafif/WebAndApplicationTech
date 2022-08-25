<HTML>
<HEAD>
<title>Simpan Buku Tamu</title>
</HEAD>
<BODY>
<h1>Simpan Buku Tamu MySQL</h1>
<?php
$nama = $_POST["nama"] ?? null;
$email = $_POST["email"] ?? null;
$komentar = $_POST["komentar"] ?? null;
$conn=mysqli_connect ("localhost","root","","ligaaaa")
or die ("koneksi gagal");
echo "Nama : $nama <br>";
echo "Email : $email <br>";
echo "Komentar : $komentar <br>";
$sqlstr="insert into bukutamu (nama,email,komentar)
values ('$nama','$email','$komentar')";
$hasil = mysqli_query($conn, $sqlstr);
echo "Simpan bukutamu berhasil dilakukan";
?>
</BODY>
</HTML>