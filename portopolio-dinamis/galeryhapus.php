<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    header('Location: admin.php');
}

$idp = $_GET['id'];

$sql = "DELETE FROM galery WHERE id='$idp'";
$query = mysqli_query($connect,$sql);

if ($query) {
    header('Location: admin.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>