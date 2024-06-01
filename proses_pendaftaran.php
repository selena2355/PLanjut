<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        Selamat datang <b><?php echo $_GET["nama"]; ?></b><br>
        NIM : <?php echo $_GET["nim"]; ?><br>
        Email : <?php echo $_GET["email"]; ?><br>
        Tempat, tanggal lahir : <?php echo $_GET["tempat"]; ?>, <?php echo $_GET["ttl"]; ?><br>
        Jenis Kelamin : <?php echo $_GET["gender"]; ?><br>
    </body>
</html>