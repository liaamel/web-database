<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$no_id          = $_POST['no_id'];
$nama           = $_POST['nama'];
$telepon        = $_POST['telepon'];
$email          = $_POST['email'];
$kota           = $_POST['kota'];
$kodemember     = $_POST['kodemember'];
// query SQL untuk insert data
$query="UPDATE pendaftar SET no_id='$no_id',nama='$nama',telepon='$telepon',email='$email',kota='$kota', kodemember='$kodemember' where no_id='$no_id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman view.php
header("location:view.php");
?>