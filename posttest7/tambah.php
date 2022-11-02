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
        <h2> Data lighstick</h2>
    </header>
    
    <div class="form-class">
        <h3>Tambah Data Baru</h3>
        <form action="read.php" method="post">
            
            <label for="">Nama lighstick</label><br>
            <input type="text" name="nama_lighstick" class="form-text"><br>
            
            <label for="">grup idol</label><br>
            <input type="text" name="grup_idol" class="form-text"><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>
</body>
</html>