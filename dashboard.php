<?php
require 'config/functions.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/download.png">
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="style/admin.css">

  <title>Dashboard | E - LEARNIF</title>
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#"><img src="img/download.png" width="50" height="50"><b>E-LEARNIF</b></a>
    <div class="form-inline my-2 my-lg-0 ml-auto">
      <h5>
       <a href="login.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltop" title="Sign Out" href="https://stackoverflow.com/questions/21659691/error-1452-cannot-add-or-update-a-child-row-a-foreign-key-constraint-fails"></i></a> 
      </h5>
    </div>

    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 569px;">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php?halaman=1"><i class="fas fa-home mr-2"></i>Dashboard
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pages/member/member.php"><i class="fas fa-users mr-2"></i>Daftar Member
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pages/buku/buku.php"><i class="fas fa-book mr-2"></i>Daftar Buku
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pages/transaksi/transaksi.php"><i class="fas fa-calendar-week mr-2"></i>Daftar Transaksi
          </a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-home mr-2"></i>DASHBOARD</h3>
      <hr>
      <div class="row text-white mt-4">
        <div class="card bg-info ml-5 text-white" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-users mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Member</h5>
            <div class="display-4">
              <?php
             global $conn;
              $a = mysqli_query($conn, "SELECT COUNT(*) AS total FROM member");
              $data = mysqli_fetch_assoc($a);
              echo $data['total'];
              ?>
            </div>
            <a href="pages/member/member.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>

        <div class="card bg-success ml-5 text-white" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-book mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Buku</h5>
            <div class="display-4">
              <?php
             global $conn;
              $a = mysqli_query($conn, "SELECT COUNT(*) AS total FROM buku");
              $data = mysqli_fetch_assoc($a);
              echo $data['total'];
              ?>
            </div>
            <a href="pages/buku/buku.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
    
        <div class="card bg-danger ml-5 text-white" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-calendar-week mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Transaksi</h5>
            <div class="display-4">
              <?php
             global $conn;
              $a = mysqli_query($conn, "SELECT COUNT(*) AS total FROM transaksi");
              $data = mysqli_fetch_assoc($a);
              echo $data['total'];
              ?>
            </div>
            <a href="pages/transaksi/transaksi.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
      </div>
      <div class="row mt-4">
      <img src="img/logobuku.png" style="height: 300px;width:300px;margin-left:390px;margin-top:20px;" alt="">
      </div>
	</div>	
</section>

  <script type="text/javascript" src="style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="style/admin.js"></script>
</body>

</html>