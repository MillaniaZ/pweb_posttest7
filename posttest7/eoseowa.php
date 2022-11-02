<?php
    include 'refiew.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 4</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css"/>
    <link rel="https://fonts.googleapis.com/css?family-great+vibes" href="stylesheet" type="text/cs">
    <link rel="https://fonts.googleapis.com/css?family-great-raleway" href="stylesheet">
    
</head>
<body>
    
    <div class="container">
        <h4 class="text-center">어서 오십시오</h4>
        <br>
        <from method="POST" action="">
            <div class="form-group">
            <input type="username" id="username" name="username" placeholder ="Masukkan Username">
            <br>
            <input type="password" id="password" name="password"  placeholder ="Masukkan Password">
            <br>
            <!-- <input type="submit" name="sign-up"> -->
            <input type="submit"  id ="submit"name="commit" value="입력하다" data-disable-with=" 기다리세요...">
            <!-- <p>  belum punya akun?</p> -->
            <a href="daftar.php">  mau cari disini</a>
          
        
        </div>
        
    </form>
    <?php
    if (isset($_POST['commit'])) {
        $email = $_POST['username'];
        $password = $_POST['password'];
    }
    ?>
        </from>
    </div>

</body>
</html>