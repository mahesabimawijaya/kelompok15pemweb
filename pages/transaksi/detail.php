<?php
require '../../config/functions.php';

$id_transaksi = $_GET['id_transaksi'];
$t = tampil("SELECT
              transaksi.id_transaksi, transaksi.id_buku, transaksi.id_member, transaksi.tgl_pinjam, transaksi.tgl_kembali,
              buku.judul, member.nama
            FROM transaksi, buku, member
            WHERE id_transaksi='$id_transaksi' AND buku.id_buku = transaksi.id_buku AND member.id_member = transaksi.id_member");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../../style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/admin.css">

  <title>Daftar Buku | Perpustakaanku</title>
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
          <a class="nav-link text-white" href="../buku/buku.php"><i class="fas fa-book mr-2"></i>Daftar Buku
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="transaksi.php"><i class="fas fa-calendar-week mr-2"></i>Daftar Transaksi
          </a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-user mr-2"></i></i>Detail Transaksi</h3>
      <hr>
      <div class="col-md-8">
        <form>
          <div class="form-group row">
            <label for="id_transaksi" class="col-md-3 col-form-label">ID Transaksi</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="id_transaksi" value="<?= $t['id_transaksi']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="id_buku" class="col-md-3 col-form-label">ID Buku</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="id_buku" value="<?= $t['id_buku']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_kembali" class="col-md-3 col-form-label">Judul Buku</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="tgl_kembali" value="<?= $t['judul']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="id_member" class="col-md-3 col-form-label">ID Member</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="id_member" value="<?= $t['id_member']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_pinjam" class="col-md-3 col-form-label">Nama Member</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="tgl_pinjam" value="<?= $t['nama']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_pinjam" class="col-md-3 col-form-label">Tanggal Pinjam</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="tgl_pinjam" value="<?= $t['tgl_pinjam']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_kembali" class="col-md-3 col-form-label">Tanggal Kembali</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="tgl_kembali" value="<?= $t['tgl_kembali']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row pt-3" style="float: right;">
            <hr>
            <a href="transaksi.php" class="btn btn-success mb-3 mr-3">Kembali</a>
            <a href="ubah.php?id_transaksi=<?= $t['id_transaksi']; ?>" class="btn btn-warning mb-3 mr-3" onclick="return confirm('Apakah anda yakin ingin mengubah data?');">Ubah</a>
            <a href="hapus.php?id_transaksi=<?= $t['id_transaksi']; ?>" class="btn btn-danger mb-3 mr-3" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="../../style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../style/admin.js"></script>
</body>

</html>
