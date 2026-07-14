<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>

    <!-- Form tambahan di dalam session login -->
    <form method="post" action="proses.php">
        <label for="data">Masukkan data:</label><br>
        <input type="text" name="data" id="data" required>
        <br><br>
        <button type="submit">Kirim</button>
    </form>

    <br>
    <a href="logout.php">Logout</a>
</body>
</html>