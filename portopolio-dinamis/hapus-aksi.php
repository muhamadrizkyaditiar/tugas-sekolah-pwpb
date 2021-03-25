<?php
    include 'koneksi.php';

    if (isset($_GET['id'])) {
        header('location: data.php');
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM contact WHERE id='$id'";
    $query =mysqli_query($connect, $sql);

    if ($query) {
        header('location: admin.php');
    }else{
        header('location: hapus.php?status=gagal');
    } 
    ?>