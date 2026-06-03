<?php
$koneksi = mysqli_connect("localhost", "root", "root", "ifrrz");

///if($koneksi)
//{
 //echo "Koneksi Berhasil!";
//}

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query);

///ambil data (fetch) mahasiswa dari lemari result

/// mysqli_fetch_row
/// mysqli_fetch_assoc
/// mysqli_fetch_object
/// mysqli_fetch_array

$mhs = mysqli_fetch_assoc($result);

var_dump($mhs);


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
        <button type="button">Tambah Data</button>
    </a>
    
    <br><br>

    <table border="1" cellpadding="5px" cellspacing="0">
        <tr>
            <th rowspan="2">Nama</th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Foto</th> 
            <th colspan="3">Nilai</th>
        </tr>
        <tr>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
        </tr>
        <?php
           while($mhs = mysqli_fetch_assoc ($result))
            {
        ?>
        <tr>
            <td align="center">1</td>
            <td>Ainur Rizqiana</td>
            <td align="center">112233445</td>
            <td align="center">Informatika</td>
            <td align="center">ririzcantik@gmail.com</td>
            <td align="center">081956639875</td>
            <td><img src="assets/images/songkang.jpg" width="70px" alt="Foto" /></td>
        </tr>
        <?php
            }
        ?>
    </table>

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
    </table>
</body>
</html>