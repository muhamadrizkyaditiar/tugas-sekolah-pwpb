<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Register</title>
    <style>
    .container{
        width:400px;
        margin-top:100px;
    }
    body{
        background-color: #0d6efd;
    }
    </style>
    </head>
    <body>
        <div class="container">
        <div class="card shadow" style="height:420px">
        <div class="card-body">
            <h3 class="text-center bg-transparent mb-3 mt-2 fw-bold">Create An Account!</h3>
            <form action="" method="POST">
            <div class="form-group">
                <input class="form-control rounded-pill mb-2 mt-4" type="text" name="name" placeholder="Nama Lengkap" />
            </div>
            <div class="form-group">
                <input class="form-control rounded-pill mb-2 mt-3" type="text" name="username" placeholder="Username" />
            </div>
            <div class="form-group">
                <input class="form-control rounded-pill mb-2 mt-3" type="email" name="email" placeholder="Alamat Email" />
            </div>
            <div class="form-group">
                <input class="form-control rounded-pill mb-2 mt-3" type="password" name="password" placeholder="Password" />
            </div>
                    <a href="login.php"><input type="submit" class="btn btn-primary btn-block mt-2 mb-3 rounded-pill fs-6" name="register" value="SIGN UP" style="width:100%;"/></a>
                    <a href="login.php" class="text-decoration-none text-primary text-center fw-bold" style="font-size:12px; padding-left:75px;">Already have an account? Login!</a>
                </form>
        </div>
        </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    </body>
</html>