<?php
require_once("config.php");
if(isset($_GET['id'])) {
   $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    if($query) {
        header('Location: list-siswa.php');
    } else {
        header('Location: index.php?status=gagal');
    }
} else  {
    die("akses dilarang... <a href='index.php'>kembali</a>");
}