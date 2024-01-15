<?php

$host           ="localhost";
$user           ="root";
$pass           ="";
$db             ="admin_page";
$port           = 3307;

$mysqli        = mysqli_connect($host,$user,$pass,$db, $port);
if(!$mysqli){
    die("gagal terkoneksi");
}
//echo"Berhasil";

//Menambah member baru
if(isset($_POST['tambahmember'])){
    $idmember= $_POST['idmember'];
    $namamember= $_POST['namamember'];
    $umur= $_POST['umur'];
    $alamat= $_POST['alamat'];
    $memberplan= $_POST['memberplan'];
    $mulaimember= $_POST['mulaimember'];
    $memberexpired= $_POST['memberexpired'];


    //tambah ke database
    $addtotable= mysqli_query($mysqli, "INSERT INTO addmember (idmember, namamember, umur, alamat, memberplan, mulaimember, memberexpired) VALUES ('$idmember', '$namamember', '$umur', '$alamat', '$memberplan', '$mulaimember', '$memberexpired')");
    if($addtotable){
        echo "<script> alert ('Success nambah member');</script>";
        header('location:index.php');
    } else{
        echo "<script> alert ('Gagal menambahkan member.');</script>";
    }
}
?>