<?php

//panggil file connection
require_once("connection.php");

//status tidak eror
$error=0;

//memvalidasi inputan
if(isset($_POST['email'])) $email = $_POST['email'];
else $error=1; //status error

if(isset($_POST['password'])) $password = $_POST['password'];
else $error=1; //status error

//mengatasi jika terdapat error
if($error==1){
    echo "terjadi kesalahan pada data inputan. <a href='login.php'>kembali</a>";
    exit();
}

//hashing password
$password = hash("sha256", $password);

//menyiapkan querymysql untuk dieksekusi
$query = "select * from admin where email= '{$email}'";

//mengeksekusi mysql query
$result = mysqli_query($mysqli, $query);

$data = mysqli_fetch_assoc($result);

if(is_null($data)){
    echo "email tidak terdaftar. <a href='login.php'>kembali</a>";
    exit();
}else if($data['password']!=$password){
    echo"password salah. <a href='login.php'>kembali</a>";
    exit();
} else{
    header("location.index.php");
}

//session setelah login
if(is_null($data)){
    echo"email tidak terdaftar<a href='login.php'>kembali</a>";
    exit();
}
else if($data['password'] !=$password){
    echo"password salah<a href='login.php'>kembali</a>";
    exit();
}
else{
    //memulai fungsi session, session hanya dapat digunakan setelah fungsi ini
    session_start();
    $_SESSION["status"]=true;
    $_SESSION["nama"]=$data["nama"];
    $_SESSION["email"]=$data["email"];

    header("location:index.php");
}
?>