<?php
include 'koneksi.php';

if(isset($_POST['editp'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gambar = $_POST['gambar'];
    $job = $_POST['job'];

    $sql = "UPDATE profil SET nama='$nama', gambar='$gambar', job='$job' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editprofil.php?status=gagal');
    }
}
?>