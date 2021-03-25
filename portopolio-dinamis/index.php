<?php
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <title>Portofolio</title>
  </head>
  <body  id="home">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">M Aditia</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
				<!-- <a class="nav-link active" aria-current="page" href="#home">Home</a> -->
				<a class="nav-link text-white" href="#home">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-white" href="#about">About</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-white" href="#galery">Gallery</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-white" href="#contact">Contact</a>
				</li>
        <li class="nav-item">
				<a class="nav-link text-white" href="admin.php">Admin</a>
				</li>
			</ul>
			</div>
		</div>
		</nav>
		<!-- Akhir Navbar -->

    <!-- Jumbotron -->
      <?php
      $sql = "SELECT * FROM profil";
      $query = mysqli_query($connect,$sql);

      while($profil = mysqli_fetch_array($query)){
      ?>
        <div class="jumbotron-sm text-center">
          <img src="<?php echo $profil['gambar'] ?>" alt="Ini Gambar" width="200" height="200" class="rounded-circle img-thumbnail" />
        <h4 class="display-6 fw-bold"><?php echo $profil['nama'] ?></h4>
        <p class="lead"><?php echo $profil['job'] ?></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffff"
            fill-opacity="1"
            d="M0,32L48,48C96,64,192,96,288,112C384,128,480,128,576,117.3C672,107,768,85,864,112C960,139,1056,213,1152,213.3C1248,213,1344,139,1392,101.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
      </svg>
    </div>
    <?php
        }
      ?>
<!-- Akhir Jumbotron -->

  <!-- About -->
    <?php
        $sql = "SELECT * FROM about";
        $query = mysqli_query($connect,$sql);

        while($about = mysqli_fetch_array($query)){
      ?>

      <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-6">
          <p class="col-sm"><?php echo $about['about'] ?></p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,192L48,202.7C96,213,192,235,288,213.3C384,192,480,128,576,128C672,128,768,192,864,218.7C960,245,1056,235,1152,208C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
      <?php 
      } 
      ?>
      <!-- Akhir About -->

      <!-- Gallery -->
			<section id="galery" style=" background-color: #e2edff;">
				<div class="container-sm">
				<div class="row text-center">
				<h2 style="margin-bottom:50px">My Gallery</h2>
				<div class="card-group justify-content-evenly">
        <?php               
              $id = mysqli_query($connect,'SELECT * FROM galery ORDER BY galery.id');
              while ($isi = mysqli_fetch_array($id)){
                  $idp = $isi['id'];
        ?>
					<div class="col-md-4 mb-5">
					<div class="card shadow-sm" style="width: 98%;">
						<img src="<?php echo $isi['gambar'] ?>" style="height:200px;" class="card-img-top" alt="">
						<div class="card-body" style="height: 160px;">
              <h5 class="card-title fw-bold text-center"><?php echo $isi['judul'] ?></h5>
              <p class="card-text"><?php echo $isi['isi'] ?></p>
						</div>
					</div>
					</div>
					<?php 
						} 
					?>
				</div>
				</div>
				</div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,160L40,181.3C80,203,160,245,240,266.7C320,288,400,288,480,272C560,256,640,224,720,181.3C800,139,880,85,960,101.3C1040,117,1120,203,1200,234.7C1280,267,1360,245,1400,234.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
			</section>
		<!-- Akhir Gallery -->

  <!-- Contact -->
  <section id="contact">
          <div class="container">
              <div class="row text-center mb-3">
              <div class="col">
                  <h2>Contact Me</h2>
              </div>
              </div>
              <div class="row justify-content-center">
              <div class="col-md-6">
              <form action="contact.php" method="POST">
                <input type="hidden" name="id">
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" required/>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required/>
                  </div>
                  <div class="mb-3">
                      <label for="pesan" class="form-label">Pesan</label>
                      <textarea class="form-control" id="pesan" rows="3" name="komentar" required></textarea>
                  </div>
                  <button type="submit" name="simpan" id="btn" class="btn btn-primary ml-2">Kirim</button>
                  </form>
        </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
        fill="#0d6efd"
        fill-opacity="1"
        d="M0,160L40,165.3C80,171,160,181,240,208C320,235,400,277,480,261.3C560,245,640,171,720,154.7C800,139,880,181,960,192C1040,203,1120,181,1200,186.7C1280,192,1360,224,1400,240L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
      </section>
      <!-- Akhir Contact -->

      <!-- Fotter -->
      <footer class="bg-primary text-white text-center pb-5">
        <p>Created With <i class="bi bi-instagram text-danger"></i> By <a href="https://www.instagram.com/aditiarizkyr/" class="text-white fw-bold text-decoration-none">Muhamad Rizky Aditia R</a></p>
      </footer>
      <!-- Akhir Fotter -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>