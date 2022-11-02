<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_lighstick = $_POST['nama_lighstick'];
    $grup_idol = $_POST['grup_idol'];
   

    $kirim = mysqli_query($db, "INSERT INTO data_lighstick (nama_lighstick,grup_idol) VALUES ('$nama_lighstick','$grup_idol')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:data_lighstick.php");
    }else {
        echo "gagal mengirim";
    }
}