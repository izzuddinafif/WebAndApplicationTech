<?php $nama = $_POST['nama'];  
 $umur = $_POST['umur']; 
  $email = $_POST['email']; 
   if(strlen($nama) == 0){ 
   	 echo "Silahkan masukkan nama anda<br>"; 
   	} 
   	  if((trim($umur) == "") || ($umur < 0) ||(preg_match('/[^0-9]/', $umur))){ 
   	   echo "Input umur anda salah<br>"; } 
   	    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
 echo "Invalid email<br>"; } 
 if(isset($_POST['nama'])){ 
  if(isset($_POST['umur'])){ 
   if(isset($_POST['email'])){ 
    echo "Nama : $nama<br>";
      echo "Umur : $umur<br>";
       echo "Email : $email<br>";
      
   } 
} 
}
   ?>