<?php
    
    require 'fungsi.php';

    ///  variable super global
    if(isset($_POST["kirim"]))
    {

    if(tambahdata($_POST) > 0)
        {
            echo "<script>
                    alert('Data Berhasil Ditambahkan!!');
                    window.location.href='mahasiswa.php';
                    </script>
                    ";
        }
        else
        {
            echo "<script>
                    alert('Data Berhasil Ditambahkan!!');
                    window.location.href='mahasiswa.php';
                    </script>";
        }

            // $nama =  $_POST["nama"];
            // $nim =  $_POST["nim"];
            // $prodi =  $_POST["jurusan"];
            // $email =  $_POST["email"];
            // $nohp =  $_POST["nohp"];
            // $foto =  $_POST["foto"];

            // $qeury = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto)
            // VALUES ('$nama', '$nim', '$prodi', '$email', '$nohp', '$foto' )";

            // mysqli_query($koneksi, $query);

            // if(mysqli_affected_rows($koneksi) > 0)
            // {
            //     echo "<script>
            //             alert('Data Berhasil Ditambahkan!!');
            //             window.location.href='mahasiswa.php';
            //             </script>";
            // }
            // else
            // {
            //     echo "<script>
            //            alert('Data Berhasil Ditambahkan!!');
            //             window.location.href='mahasiswa.php';
            //             </script>";

            // }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiwa</h2>
    <form action="mahasiswa.html" method="post">
        <table border="1">
            <tr>
                <td><label for="nama">Nama :</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM :</label></td></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim" /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" /></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" name="nohp" id="no_hp" /></td>
            </tr>
             <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="text" name="foto" id="foto" /></td>
            </tr>
            </table>
            <button type="submit" name="kirim" >Tambah Data</button>
     
        

    </form>
</body>
</html>