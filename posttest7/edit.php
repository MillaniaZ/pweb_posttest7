<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $ID = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM data_lighstick WHERE id = '$id' ");
        $baris = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_lighstick = $_POST['nama_lighstick'];
        $grup_idol = $_POST['grup_idol'];
        

        $update = mysqli_query($db, "UPDATE data_lighstick SET nama_lighstick='$nama_lighstick', grup_idol='$grup_idol' WHERE id='$id'");

        if($update){
            header("Location:data_lighstick.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kpop lighstick</title>
    <link rel="stylesheet" href="data_lighstick.css">
</head>
<body>
    <header>
        <h2>Formulir Data lighstick</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data</h3>
        <form action="" method="post">
            
            <label for="">Nama lighstick</label><br>
            <input type="text" name="nama_lighstick" class="form-text" value=<?=$baris['nama_lighstick'];?>><br>
            
            <label for="">grup idol</label><br>
            <input type="text" name="grup_idol" class="form-text" value=<?=$baris['grup_idol'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>