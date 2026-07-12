<?php

  $koneksi = mysqli_connect("localhost", "root", "root", "IFRRZ");

  function tampildata($query)
  {
    global $koneksi;

    $result = mysqli_query($koneksi,$query);

    $rows = []; //siapkan wadahnya

    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
  }
  function tambahdata($data)
    {
        global $koneksi;
        $nama = htmlspecialchars($data["name"]);
        $nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["no_hp"]);
        $foto = $data["foto"];
        $newnamefoto = date('dmYhis_').$namafoto;
        $tmpfoto = $foto["tmp_name"];

        $path ="assets/images/$newnamefoto";

        if(move_uploaded_file($tmpfoto,$path))
            {
                 $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto) 
                 VALUES ('$nama', ' $nim', '$jurusan', ' $email', ' $nohp', '$foto')";
                 $result = mysqli_query($koneksi, $query);
            }
                return mysqli_affected_rows($koneksi);

        
        
    }

    function hapusdata($id)
    {
        global $koneksi;

        $query = "DELETE FROM mahasiswa WHERE id=$id";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }
    function editdata($data, $id) 
    {
        global $koneksi;

         $nama = htmlspecialchars($data['nama']);
         $nim = htmlspecialchars($data['nim']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $email = htmlspecialchars($data['email']);
        $no_hp = htmlspecialchars($data['no_hp']);
        $foto = htmlspecialchars($data['foto']);

        $query = "UPDATE mahasiswa SET
               nama = '$nama',
               nim = '$nim',
               jurusan = '$jurusan',
               email = '$email',
               no_hp = '$no_hp',
               foto = '$foto'
               WHERE id = $id
               ";
         $result = mysqli_query($koneksi, $query);

         return mysqli_affected_rows($koneksi);

    }

    function register($data)
            {
                global $koneksi;

                $username = stripcslashes($data["username"]);
                $password1 = mysqli_real_escape_string($koneksi,$data["password"]);
                $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

                if($password1 != $password2)
                    {
                        echo "<script>
                        alert('confirmation password not be able');
                        window.location.href='register.php'
                        </scipt>
                        ";
                        return false;

                    }
                    $password_hash = password_hash($password1, PASSWORD_DEFAULT);

                    $query = "INSERT INTO user(username,password) VALUES ('$username','$password_hash')";
                    mysqli_query($koneksi,$query);

                    return mysqli_affected_rows($koneksi);
            }

?>





