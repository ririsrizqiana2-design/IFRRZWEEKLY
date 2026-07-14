<?php
require 'fungsi.php'; // pastikan koneksi $koneksi ada di sini
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['data'])) {
    $nama = $_POST['data'];

    $query = "INSERT INTO mahasiswa (nama) VALUES ('$nama')";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan: " . htmlspecialchars($nama);
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
