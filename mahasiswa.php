<?php
    require 'fungsi.php';
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmahasiswa);

    // var_dump($mahasiswas);
    // die;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>WEB INFORMATIKA KELAS A</h1>
    <hr>
    
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    
    <h2>Data Mahasiswa</h2>
    <a href="inputdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="5px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th> 
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
        </tr>
        <?php
          $i = 1;
          foreach($mahasiswas as $mhs) 
            {
        ?>
        <tr>
            <td align="center"><?= $i ?></td>
            <td><?php echo $mhs ["nama"] ?></td>
            <td><?php echo $mhs ["nim"] ?></td>
            <td><?= $mhs ["jurusan"] ?></td>
            <td><?= $mhs ["email"] ?></td>
            <td><?= $mhs ["no_hp"] ?></td>
            <td><img src="assets/images/<?= $mhs["foto"] ?> width="70px" alt="foto" /></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')";><button>Hapus</button></a>
            </td>
        </tr>
        <?php
            $i++;

            }
        ?>
    <!-- </table>

    <br>
    <hr>

    <table border="1" cellspacing="0" cellpadding="40">
        <tr>
            <th>1,1</th>
            <th>1,2</th>
            <th>1,3</th>
            <th>1,4</th>
        </tr>
        <tr>
            <th>2,1</th>
            <th colspan="2" rowspan="2" align="center">
                <font size="6">?</font>
            </th>
            <th>2,4</th>
        </tr>
        <tr>
            <th>3,1</th>
            <th>3,4</th>
        </tr>
        <tr>
            <th>4,1</th>
            <th>4,2</th>
            <th>4,3</th>
            <th>4,4</th>
        </tr>
    </table> -->
</body>
</html>