<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Upload File</title>
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="233307015">
        <meta name="author" content="Hanifah Alya">
        <style>
            
        </style>
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $target_dir = "gambar/";
                $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
                $uploadOk = 1;
                $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
                    if ($check !== false) {
                        echo "File berupa citra/gambar - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File bukan gambar";
                        $uploadOk = 0;
                    }
                }
        
                if (file_exists($target_file)) {
                    echo "<br>Sorry, file already exists";
                    $uploadOk = 0;
                }
        
                if ($tipeGambar !== "jpg" && $tipeGambar !== "png" && $tipeGambar != "jpeg" && $tipeGambar !== "gif") {
                    echo "<br> Sorry, hanya file JPG, PNG & GIF" ;
                    $uploadOk = 0;
                }
        
                if ($uploadOk == 0) {
                    echo "<br>Sorry, file anda gagal upload";
                } else {
                    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                        echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diupload" ;
                    } else {
                        echo "<br> Sorry, ada error saat upload";
                    }
                }
            }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <p><label>Pilih Gambar yang akan diunggah</label><br>
                <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </body>
</html>