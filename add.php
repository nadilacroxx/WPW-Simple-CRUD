<?php
require 'functions.php';
if (isset($_POST["submit"])) {
  if (add($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
    <script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Link CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Title -->
  <title>Add Data</title>
</head>

<body>
  <h1 class="text-center" style="margin-top:50px;">
    <strong>Tambah Data Mahasiswa</strong>
  </h1>
  <br>
  <div class="container">
    <div class="card">
      <h5 class="card-header bg-dark"><a href="index.php" style="color:white">Kembali ke home</a></h5>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" name="nrp" id="nrp" required>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" required>
          </div>
          <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select class="form-control" name="gender" id="gender" required>
              <option value="">-- Pilih Jenis Kelamin --</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Email Student</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" required></textarea>
          </div>
          <div class="form-group">
            <label for="no_hp">No Telepon</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" required>
          </div>
          <div class="form-group">
            <label for="asal_sma">Asal SLTA</label>
            <input type="text" class="form-control" name="asal_sma" id="asal_sma" required>
          </div>
          <div class="form-group">
            <label for="matkul_fav">Mata Kuliah Favorit</label>
            <input type="text" class="form-control" name="matkul_fav" id="matkul_fav" required>
          </div>
          <br>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>