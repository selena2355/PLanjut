<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>

<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Nama: <input type="text" name="nama"><br>
    E-mail: <input type="email" name="email"><br>

    Komentar: <textarea name="komentar" rows="5" cols="40"></textarea><br>

    <input type="submit" value="simpan">
    <input type="reset" value="bersihkan">

  </form>

  <?php
    $name = $email = $comment ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = bersihkan_input($_POST["nama"]);
      $email = bersihkan_input($_POST["email"]);
      $comment = bersihkan_input($_POST["komentar"]);

      echo("Nama: " . $name . "<br>");
      echo("Email: " . $email . "<br>");
      echo("Komentar: " . $comment . "<br>");
    }

    function bersihkan_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  ?>
</body>

</html>