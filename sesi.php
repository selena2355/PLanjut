<?php
session_start();

// Simulasi data pengguna yang disimpan dalam database
$valid_users = array(
    'hanifah' => 12345,
    // Tambahkan lebih banyak jika diperlukan
);

// Proses logout jika ada parameter logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Proses login jika form dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Verifikasi pengguna
    if (array_key_exists($username, $valid_users) && $valid_users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $error_message = "Nama pengguna atau kata sandi salah.";
    }
}

// Jika sudah login, tampilkan halaman utama
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Home</title>
    </head>
    <body>
        <h2>Selamat Datang, " . htmlspecialchars($username) . "!</h2>
        <p>Ini adalah halaman utama setelah login sesi.</p>
        <p><a href='" . $_SERVER['PHP_SELF'] . "?logout=true'>Logout</a></p>
    </body>
    </html>";
    exit();
}

// Jika belum login, tampilkan formulir login
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Login Sessions</title>
</head>
<body>
    <h2>Login Sessions</h2>";
if (isset($error_message)) {
    echo "<p style='color:red;'>" . htmlspecialchars($error_message) . "</p>";
}
echo "<form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='post'>
        <label for='username'>Username:</label><br>
        <input type='text' id='username' name='username' required><br><br>
        <label for='password'>Password:</label><br>
        <input type='password' id='password' name='password' required><br><br>
        <input type='submit' value='Login'>
    </form>
</body>
</html>";
?>
