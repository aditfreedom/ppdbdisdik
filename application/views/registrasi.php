<!doctype html>
<html lang="en">
  <head>
  <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <title>Registrasi Pengguna</title>
  </head>
  <body  >
  <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="height:50px">
 
    </nav>
    <div class="container text-center">
    <br>
    <img src="<?=base_url()?>assets/img/favicon.png" width="200px">
<h1 class="text-dark" style="margin-top:10px;">REGISTRASI PENGGUNA<br>CALON PESERTA DIDIK BARU<br>DISDIKBUD KAB. BIREUEN TA.2021/2022</h1>
</div>
<br>
    <div class="container">
    <form action="<?=base_url('hal/tambahuser')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="">Asal Sekolah</label>
        <select class="form-control selectpicker" data-live-search="true" name="sekolah_asal">
          <option>SDN 21 Bireuen</option>
          <option>SDN 6 Bireuen</option>
          <option>SDN 18 Bireuen</option>
          <option>SDN 3 Jeumpa</option>
          </select>
        </div>
       
        <div class="form-group">
        <label for="">NIK Calon PD</label>
        <input type="text" name="username" class="form-control" required>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
        <label for="">Jenis Pendaftaran</label>
        <select class="form-control selectpicker" data-live-search="true" name="jenis">
          <option>Zonasi</option>
          <option>Afirmasi</option>
          <option>Pindahan Orang Tua</option>
          <option>Jalur Prestasi</option>
          </select>
        </div>

        <div class="form-group" hidden>
        <label for="">Pas Foto Layar Merah Uk.3x4 (Maks. 1MB, Format JPEG)</label>
        <input type="text" name="foto" class="form-control" values="foto">
        </div>

        <div class="form-group">
        <label for="">NISN Calon Siswa</label>
        <input type="text" name="password" class="form-control" required>
        </div>
    </div>
  </div>
        <button type="submit" class="btn btn-primary font-weight-bold" style="width:100%;">DAFTAR AKUN</button>
      </div>
        </form>

<br>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

  </body>
</html>