<?php
include 'koneksi.php';

if(isset($_POST['editg'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE galery SET judul='$judul', isi='$isi', gambar='$gambar' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editgalery.php?status=gagal');
    }
}
?>