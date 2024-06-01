<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Identitas Pengguna</title>
</head>
<body>
    <h1>Identitas Pengguna</h1>
    <?php
    if(isset($_COOKIE['name']) && isset($_COOKIE['email'])) {
        echo "<p>Nama: " . htmlspecialchars($_COOKIE['name']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($_COOKIE['email']) . "</p>";
    } else {
        echo "<p>Data tidak tersedia. Silakan <a href='cookies.php'>isi form identitas</a>.</p>";
    }
    ?>
</body>
</html>
