<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Gambar</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
        }
        .gallery img {
            max-width: 150px;
            height: 150px;
            margin-right: 10px;
        }
        .gallery div {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Gambar</h1>
    <div class="gallery">
        <?php
            $fileList = glob('gambar/*');
            foreach($fileList as $filename){
                if(is_file($filename)){
                    echo '<div>';
                    echo '<img src="' . $filename . '" alt="' . basename($filename) . '">';
                    echo '<br>' . basename($filename) . '<br>';
                    echo '</div>';
                }
            }
        ?>
    </div>
</body>
</html>
