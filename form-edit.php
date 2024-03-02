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

    <h4>Formulir Edit PPDB</h4>
    <?php 
    include_once("config.php");
    $id      = $_GET['id'];
    $sql     = "SELECT * FROM calon_siswa WHERE id = $id";
    $query   = mysqli_query($db, $sql);
    $r       = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action="proses-edit.php" method="post">
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" value="<?= $r['nama']; ?>"   require>
            </div>
            <div>
                <label for="">Alamat Lengkap</label>
                <textarea name="alamat" cols="30" rows="5" require><?= $r['alamat']; ?></textarea>
            </div>
            <div>
                <label for="">Jenis Kelamin</label>
                <input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin']=='Laki-laki'  ? 'checked' : '' ?> value="Laki-laki">Laki-laki
                <input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin']=='Perempuan' ? 'checked' : '' ?> value="Perempuan">Perempuan
                <input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin']=='Alien/Mahluk Luar Bumi' ? 'checked' : '' ?> value="Alien/Mahluk Luar Bumi">Alien/Mahluk Luar Bumi
            </div>
            <div>
                <label for="">Agama</label>
                <select name="agama">
                    <option value="Islam" <?= $r['agama'] == 'Islam'  ? 'selected' : ''?>>Islam</option>
                    <option value="Kristen" <?= $r['agama'] == 'Kristen'  ? 'selected' : ''?>>kristen</option>
                    <option value="Hindu" <?= $r['agama'] == 'Hindu'  ? 'selected' : ''?>>Hindu</option>
                    <option value="Budha" <?= $r['agama'] == 'Budha'  ? 'selected' : ''?>>Budha</option>
                    <option value="Konghucu" <?= $r['agama'] == 'Konghucu'  ? 'selected' : ''?>>Konghucu</option>
                    <option value="Katholik" <?= $r['agama'] == 'Katholik'  ? 'selected' : ''?>>Katholik</option>
                    <option value="Atheis" <?= $r['agama'] == 'Atheis'  ? 'selected' : ''?>>Atheis/Tidak Beragama</option>
                    <option value="Agama Lain" <?= $r['agama'] == 'Agama Lain'  ? 'selected' : ''?>>Agama lain</option>
                </select>
            </div>
            <div>
                <label for="">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" require>
            </div>
            <div>
                <input type="hidden" name= "id" value="<?= $r['id']; ?>">
                <input type="reset">  
                <input type="submit" name="update" value="Update">
            </div>
        </form>
    </div>
    <foother>
        <hr>
         <i>Dibuat dengan semangat &copy;by <b>std progweb</b></i>
    </footer>
</body>
</html>
