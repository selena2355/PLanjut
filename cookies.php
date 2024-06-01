<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Identitas Pengguna</title>
</head>
<body>
    <h1>Masukkan Identitas Anda</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        
        // Set cookies dengan masa berlaku 30 hari
        setcookie("name", $name, time() + (86400 * 30), "/"); // 86400 detik = 1 hari
        setcookie("email", $email, time() + (86400 * 30), "/");

        // Redirect ke halaman yang menampilkan data
        header("Location: tampil_cookies.php");
        exit();
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
p
