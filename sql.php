<?php 
    require 'koneksi.php';
    $mahas = query("SELECT * FROM mahasiswa");
    if ( isset($_POST["cari"])) {
         $mahas = cari($_POST["key"]);
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL TO PHP</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <h3><a href="tambah.php">Tambah data</a></h3>
    <form action="" method="post">
        <input type="text" name="key" placeholder="cari mahasiswa NAMA/NIP" autofocus size="40">
        <button type="submit" name="cari" >Search!</button>
    </form>

    <table border="1" cellspacing="1" cellpadding="10">
        <tr>
        <th>NO</th>
        <th>AKSI</th>
        <th>NAMA</th>
        <th>NIP</th>
        <th>JURUSAN</th>
        <th>EMAIL</th>
        <th>GAMBAR</th>
        </tr>
        <?php 
            foreach($mahas as $rows) :
        ?>
        <tr>
        <td><?= $rows["ID"] ?></td>
        <td><a href="ubah.php?id=<?= $rows["ID"] ?>">ubah</a> | <a href="hapus.php?ID=<?= $rows["ID"] ?>" onclick="return confirm('yakin?')">hapus</a></td>
        <td><?= $rows["NAMA"] ?></td>
        <td><?= $rows["NIP"] ?></td>
        <td><?= $rows["JURUSAN"] ?></td>
        <td><?= $rows["EMAIL"] ?></td>
        <td><img src="../img/img/<?= $rows["GAMBAR"] ?>" alt="" width="100px"></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>