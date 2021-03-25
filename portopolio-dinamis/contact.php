<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

$sql = "INSERT INTO contact (id, nama, email, komentar) VALUES ('$id', '$nama', '$email', '$komentar')";
$query = mysqli_query($connect,$sql);

if("query") {
    header('Location: index.php');
}else{
    header('Location: contact.php?status=gagal');
}
}
?>