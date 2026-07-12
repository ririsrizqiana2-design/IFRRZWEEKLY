<?php
    require 'fungsi.php';
    
    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $mhs = tampildata($query)[0];




    //variable super global $_POST
    if (isset($_POST['kirim']))
    {
        if (editdata($_POST, $id) > 0)
        {
            echo "<script>
            alert('data berhasil DIEDIT!!');
            window,location.herf= 'mahasiswa.php';
            </script>";
        } else {
            echo "<script>
            alert('data gagal DIEDIT!!');
            window,location.herf= 'mahasiswa.php';
            </script>";
        }


    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action=" " method="post">
        <table cellpadding="5" cellspacing="0">
            <tr>
                <td><label for="nama">Nama:</labell></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?=$mhs["nama"]; ?>" required /></td>
</tr>
<tr>
    <td><label for="nim">NIM:</label></td>
    <td>:</td>
    <td><input type="number" name="nim" id="nim" value="<?=$mhs["nim"]; ?>" required/></td>
</tr>
<tr>
    <td><label for="jurusan">Jurusan:</labell></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" value="<?=$mhs["jurusan"]; ?>" required /></td>
</tr>
<tr>
    <td><label for="email">email:</labell></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" value="<?=$mhs["email"]; ?>" required /></td>
</tr>
<tr>
    <td><label for="no_hp">nomor hp:</labell></td>
                <td>:</td>
                <td><input type="number" name="no_hp" id="no_hp" value="<?=$mhs["no_hp"]; ?>" required /></td>
</tr>
<tr>
    <td><label for="foto">Foto:</labell></td>
                <td>:</td>
                <td><input type="text" name="foto" id="foto" value="<?=$mhs["foto"]; ?>" required /></td>
</tr>
</table>
<button type="submit" name="kirim" id="submit">Edit Data</button>
</form>
</body>
</html>