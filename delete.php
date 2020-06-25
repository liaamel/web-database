<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$no_id   = $_GET['no_id'];
// query SQL untuk insert data
$query="DELETE from pendaftar where no_id='$no_id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:view.php");
?>