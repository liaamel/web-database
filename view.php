<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Member</title>
    </head>
    <body>
        <h2>List Member</h2>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>NO ID</th>
                <th>NAMA</th>
                <th>NO TELP</th>
                <th>EMAIL</th>
                <th>KOTA</th>
                <th>KODE MEMBER</th>
                <th>ACTION</th>
            </tr>

            <?php
            include 'koneksi.php';
            $pendaftar = mysqli_query($conn, "SELECT * from pendaftar");
            $no = 1;
            foreach ($pendaftar as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['no_id'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['telepon'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['kota'] . "</td>
            <td>" . $row['kodemember'] . "</td>
            <td><a href='edit.php?no_id=$row[no_id]'>Edit</a>
                <a href='delete.php?no_id=$row[no_id]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table>

        <br>
        <a href="ks.html">Tambah Pendaftar Baru</a>

    </body>
</html>