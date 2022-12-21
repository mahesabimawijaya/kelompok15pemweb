<?php
$conn =  mysqli_connect('sql304.epizy.com', 'epiz_33233323', 'ajgAbqyQhJTy', 'epiz_33233323_perpustakaanku') or die(mysqli_error($conn));

function hitungmember()
{
 global $conn;
  $sql = "SELECT * FROM member";
  $mysqliStatus = $mysqli->query($sql);

  $rows_count_value = mysqli_num_rows($mysqliStatus);
  echo $rows_count_value;

  $mysqli->close();
}

function tampil($query)
{
 global $conn;

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambahmember($data)
{
 global $conn;

  $id_member = htmlspecialchars($data['id_member']);
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $no_telp = htmlspecialchars($data['no_telp']);

  $query =  "INSERT INTO member VALUES ('$id_member','$nama','$alamat','$no_telp')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapusmember($id_member)
{
 global $conn;
  $query = "DELETE FROM member WHERE id_member = '$id_member'";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubahmember($data)
{
 global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $no_telp = htmlspecialchars($data['no_telp']);

  $query =  "UPDATE member SET
              nama = '$nama',
              alamat = '$alamat',
              no_telp = '$no_telp'
            WHERE id_member = '$id';
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function carimember($keyword)
{
 global $conn;

  $query = "SELECT * FROM member 
              WHERE 
            id_member LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%'
            ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambahbuku($data)
{
 global $conn;

  $id_buku = htmlspecialchars($data['id_buku']);
  $judul = htmlspecialchars($data['judul']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $penerbit = htmlspecialchars($data['penerbit']);

  $query =  "INSERT INTO buku VALUES ('$id_buku','$judul','$pengarang','$penerbit')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapusbuku($id_buku)
{
 global $conn;
  $query = "DELETE FROM buku WHERE id_buku = '$id_buku'";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubahbuku($data)
{
 global $conn;

  $id = $data['id'];
  $judul = htmlspecialchars($data['judul']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $penerbit = htmlspecialchars($data['penerbit']);

  $query =  "UPDATE buku SET
              judul = '$judul',
              pengarang = '$pengarang',
              penerbit = '$penerbit'
            WHERE id_buku = '$id';
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function caribuku($keyword)
{
 global $conn;

  $query = "SELECT * FROM buku 
              WHERE 
            id_buku LIKE '%$keyword%' OR
            judul LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%'
            ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambahtransaksi($data)
{
 global $conn;

  $id_buku = htmlspecialchars($data['id_buku']);
  $id_member = htmlspecialchars($data['id_member']);
  $tgl_pinjam = htmlspecialchars($data['tgl_pinjam']);
  $tgl_kembali = htmlspecialchars($data['tgl_kembali']);

  $query =  "INSERT INTO transaksi VALUES (null,'$id_buku','$id_member','$tgl_pinjam','$tgl_kembali')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapustransaksi($id_transaksi)
{
 global $conn;
  $query = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubahtransaksi($data)
{
 global $conn;

  $id = $data['id'];
  $id_buku = htmlspecialchars($data['id_buku']);
  $id_member = htmlspecialchars($data['id_member']);
  $tgl_pinjam = htmlspecialchars($data['tgl_pinjam']);
  $tgl_kembali = htmlspecialchars($data['tgl_kembali']);

  $query =  "UPDATE transaksi SET
              id_buku = '$id_buku',
              id_member = '$id_member',
              tgl_pinjam = '$tgl_pinjam',
              tgl_kembali = '$tgl_kembali'
            WHERE id_transaksi = $id
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function caritransaksi($keyword)
{
 global $conn;

  $query = "SELECT * FROM transaksi 
              WHERE 
            id_transaksi LIKE '%$keyword%' OR
            id_buku LIKE '%$keyword%' OR
            id_member LIKE '%$keyword%' OR
            tgl_pinjam LIKE '%$keyword%' OR
            tgl_kembali LIKE '%$keyword%'
            ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
