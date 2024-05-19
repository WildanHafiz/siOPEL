<?php
include_once("koneksi.php");
$idadmin = $_POST['id_admin'];
$name = $_POST['name'];
$role = $_POST['role'];
$query = "INSERT INTO admins (id_admin, name, role) VALUES ('$idadmin', '$name', '$role')";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location: admin.php');
} else {
    echo "input data gagal";
}
?>
