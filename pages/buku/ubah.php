<?php
require '../../config/functions.php';

$id_buku = $_GET['id_buku'];
$b = tampil("SELECT * FROM buku WHERE id_buku = '$id_buku'");

if (isset($_POST['ubah'])) {
  if (ubahbuku($_POST) > 0) {
    echo "<script>
            alert ('Data berhasil diubah');
            document.location.href = 'buku.php';
          </script>";
  } else {
    echo "<script>
            alert ('Data gagal diubah');
          </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../../style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/admin.css">

  <title>Daftar Buku | E - LEARNIF</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>E - LEARNIF</b></a>

    <div class="icon my-2 my-lg-0 ml-auto">
      <h5>
        <i class="fas fa-envelope mr-3"></i>
        <i class="fas fa-bell mr-3"></i>
        <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltop" title="Sign Out"></i>
      </h5>
    </div>

    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 569px;">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="../../dashboard.php?halaman=1"><i class="fas fa-home mr-2"></i>Dashboard
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../member/member.php"><i class="fas fa-users mr-2"></i>Daftar Member
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="buku.php"><i class="fas fa-book mr-2"></i>Daftar Buku
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../transaksi/transaksi.php"><i class="fas fa-calendar-week mr-2"></i>Daftar Transaksi
          </a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-user mr-2"></i></i>Ubah Data Buku</h3>
      <hr>
      <div class="col-md-8">
        <form action="" method="POST">
          <input type="hidden" name="id" value="<?= $b['id_buku']; ?>">
          <div class="form-group row">
            <label for="id_buku" class="col-md-3 col-form-label">ID Buku</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="id_buku" readonly value="<?= $b['id_buku']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="judul" class="col-md-3 col-form-label">Judul</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="judul" autofocus required value="<?= $b['judul']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="pengarang" class="col-md-3 col-form-label">Pengarang</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="pengarang" required value="<?= $b['pengarang']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="penerbit" class="col-md-3 col-form-label">Penerbit</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="penerbit" required value="<?= $b['penerbit']; ?>">
            </div>
          </div>
          <div class="form-group row pt-3" style="float: right;">
            <hr>
            <button type="submit" name="ubah" class="btn btn-primary mb-3 mr-3">Perbarui</a>
          </div>
        </form>

      </div>
    </div>
  </div>

  <script type="text/javascript" src="../../style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../style/admin.js"></script>
</body>

</html>
