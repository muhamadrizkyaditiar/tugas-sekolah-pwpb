<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$gambar = $_POST['gambar'];

$sql = "INSERT INTO galery (id, judul, isi, gambar) VALUES ('$id', '$judul', '$isi', '$gambar')";
$query = mysqli_query($connect,$sql);

if("query") {
    header('Location: admin.php');
}else{
    header('Location: galery.php?status=gagal');
}
}
?>