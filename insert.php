<?php

    include "koneksi.php";

	$no_id = $_POST['no_id'];
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$kota = $_POST['kota'];
	$kodemember = $_POST['kodemember'];

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into pendaftar(no_id, nama, telepon, email, kota, kodemember) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isissi", $no_id, $nama, $telepon, $email, $kota, $kodemember);
		$execval = $stmt->execute();
		echo "Pendaftaran Berhasil!";
		$stmt->close();
		$conn->close();
	}
?>

<!DOCTYPE html>
<html>
    <body>
        <br><br>
        <a href="view.php">
            Lihat Pendaftar
        </a>
    </body>
</html>
