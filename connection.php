<?php

$mysqli= new mysqli("localhost", "root", "", "Soe77")
;
//check connection
if ($mysqli->connect_errno) {
    echo "gagal menyambungkan ke MySQL : " . $mysqli->connect_errno;
    exit();
}


?>