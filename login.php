<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <style>
            .error{
                color: red;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <?php
        $name = $email ="";
        $nameErr = $emailErr ="";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["u"])){
                $nameErr ="Masukkan Username";
            }else{
                $name = bersihkan_input($_POST["u"]);
            }
            if(empty($_POST["p"])){
                $emailErr = "Masukkan Password";
            }else{
                $email= bersihkan_input($_POST["p"]);
            }
        }
        
        function bersihkan_input($data){
            $data =trim($data);
            $data =stripcslashes($data);
            $data =htmlspecialchars($data);
            return $data;
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Username : <input type="text" name="u">
            <span class="error">*<?php echo $nameErr;?></span>
            <br><br>
            Passwordd : <input type="password" name="p">
            <span class="error">*<?php echo $nameErr;?></span>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>