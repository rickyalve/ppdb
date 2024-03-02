<?php include_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi ppdb by programming</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="images/WebPro10.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>webpro</h1>
        <h2>Penerimaan peserta didik baru</h2>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <h4>List Siswa Yang Mendaftar</h4>
    <table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no=1;
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$no."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."' onclick='return confirm (\"Serius Lu?\")'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        $no++;    
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
<h5><a href="form-daftar.php">Daftar Baru</a></h5>
    <foother>
    <hr>
    <i>Dibuat dengan semangat &copy;by <b>std progweb</b></i>
    </footer>
</body>
</html>
