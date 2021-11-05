<?php

//panggil file connection
require_once("connection.php");

//status tidak eror
$error = 0;

//memvalidasi inputan


if ( isset($_POST['nama'])) $nama = $_POST['nama'];
else $error=1; // status error
if ( isset($_POST['email']) ) $email = $_POST['email'];
else $error=1; // status error
if ( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1; // status error

if(isset($_POST['repassword'])) $repassword = $_POST['repassword'];
else $error = 1; // status error

//mengtasi jika terdapat error inputan
if($error==1) {
    echo "terjadi kesalahan pada proses input data. <a href='registration.php'>kembali</a>";
    exit( );
}

//pengecekan password dan konfirmasi password
if($password != $repassword){
    echo "password tidak sama, ulangi mengisi form pendaftaran! <a href='registration.php'>kembali</a>";
    exit();
}else{
    $password= hash('sha256', $password);
}

//menyiapkan query mySQL untuk dieksekusi
$query= "
insert into admin (nama, email, password)
values ('{$nama}','{$email}','{$password}')";

//mengeksekusi MySQL query
$insert = mysqli_query($mysqli, $query);

//menangani ketika error eksekusi query
if($insert==false){
    echo "error dalam menambahkan data. <a href='restration.php'>kembali</a>";
}else{
    header("location:index.php");
}
?>