<?php

$conn = mysqli_connect("localhost", "root", "", "db_adminsiopel");

if (!$conn) {
    echo "koneksi gagal!";
    die();
}

?>