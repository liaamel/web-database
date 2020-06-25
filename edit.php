<?php
include 'koneksi.php';
$id         = $_GET['no_id'];
$pendaftar  = mysqli_query($conn, "select * from pendaftar where no_id='$id'");
$row        = mysqli_fetch_array($pendaftar);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>NO ID</td>
                    <td><input type="hidden" value="<?php echo $row['no_id'];?>" name="no_id"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td>
                </tr>
                <tr>
                    <td>NO TELP</td>
                    <td><input type="text" value="<?php echo $row['telepon'];?>" name="telepon"></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input value="<?php echo $row['email'];?>" type="text" name="email"></td>
                </tr>
                <tr>
                    <td>KOTA</td>
                    <td><input type="text" value="<?php echo $row['kota'];?>" name="kota"></td>
                </tr>
                <tr>
                    <td>KODE MEMBER</td>
                    <td><input value="<?php echo $row['kodemember'];?>" type="text" name="kodemember"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="view.php">Kembali</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>