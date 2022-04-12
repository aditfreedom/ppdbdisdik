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
    <!-- Favicons -->
    <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <title>Registrasi Pengguna</title>
  </head>
  <body  >
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a>ppdb.disdikbud@gmail.com</a>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">

      <img src="<?=base_url()?>assets/img/favicon.png" alt="" width="40px"><h2 class="logo mr-auto"><a href="#">&nbsp;DISDIKBUD<br>&nbsp;KAB. BIREUEN<span></span></a></h2></img>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  
    <div class="container text-center">
    <br>
<h2 class="text-dark" style="margin-top:10px;">REGISTRASI AKUN PENGGUNA SISWA SEKOLAH <br> DILUAR KABUPATEN BIREUEN</h2>
<hr>
</div>
<br>

    <div class="container">
    <?php foreach ($datajson as $data) : ?> 
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>DATA DIRI</b></a><br><br>
    <form action="<?=base_url('hal/tambahnonisn')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group" >
        <label for=""><b>PESERTA DIDIK ID</b></label>
        <input type="text" name="id_pesertadidik" value="<?=$data->peserta_didik_id;?>" class="form-control" placeholder="PD ID" maxlength="14" readonly>
        </div>  


        <div class="form-group">
        <label for=""><b>NAMA CALON PESERTA DIDIK : </b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->nama;?>" name="nama_siswa" class="form-control" maxlength="50" placeholder="Nama Lengkap" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>SEKOLAH ID :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->sekolah_id;?>" name="id_sekolah" class="form-control" placeholder="Tempat Lahir" maxlength="50" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>TEMPAT LAHIR :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->tempat_lahir;?>" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" maxlength="50" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>JENIS KELAMIN :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->jenis_kelamin;?>" name="jk" class="form-control" placeholder="Tempat Lahir" maxlength="50" readonly>

        </div>  
        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>NIK :</b></label>
        <input type="text" name="nik" class="form-control" value="<?=$data->nik;?>" placeholder="NIK" maxlength="16" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>NISN :</b></label>
        <input type="text" name="nisn" class="form-control" value="<?=$data->nisn;?>" placeholder="NISN" maxlength="10" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>TANGGAL LAHIR :</b></label>
        <input type="text" name="tanggal_lahir" class="form-control" value="<?=$data->tanggal_lahir;?>" placeholder="NISN" maxlength="10" readonly>
        </div>  
        </div>    
        </div>


  </div><br><br>
  <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>DATA TEMPAT TINGGAL</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>ALAMAT JALAN : </b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->alamat_jalan;?>" name="alamat_jalan" class="form-control" placeholder="Nama Jalan" maxlength="190" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>DESA KELURAHAN :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->desa_kelurahan;?>" name="desa_kelurahan" class="form-control" placeholder="Nama Desa" maxlength="200" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>DUSUN :</b></label>
        <input style="text-transform:uppercase" value="<?=$data->nama_dusun;?>" type="text" name="nama_dusun" class="form-control" placeholder="Nama Dusun" maxlength="200" readonly>
        </div>  
        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>RT :</b></label>
        <input type="number" name="rt" value="<?=$data->rt;?>" class="form-control" placeholder="Rt" maxlength="5" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>RW :</b></label>
        <input type="number" name="rw" value="<?=$data->rw;?>" class="form-control" placeholder="Rw" maxlength="5" readonly>
        </div>  


        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>DATA ORANG TUA</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA IBU KANDUNG : </b></label>
        <input style="text-transform:uppercase" value="<?=$data->nama_ibu_kandung;?>" type="text" name="nama_ibu_kandung" class="form-control" placeholder="Nama Ibu Kandung" maxlength="190" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN IBU KANDUNG :</b></label>
        <input style="text-transform:uppercase" value="<?=$data->pekerjaan_ibu_kandung;?>" type="text" name="pekerjaan_ibu_kandung" class="form-control" placeholder="Pekerjaan Ibu Kandung" maxlength="50" readonly>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN IBU KANDUNG :</b></label>
        <input style="text-transform:uppercase" value="<?=$data->penghasilan_ibu_kandung;?>" type="text" name="penghasilan_ibu_kandung" class="form-control" placeholder="Pekerjaan Ibu Kandung" maxlength="50" readonly>
        </div>  
        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA AYAH : </b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->nama_ayah;?>" name="nama_ayah" class="form-control" placeholder="Nama Ayah" maxlength="190" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN AYAH :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->pekerjaan_ayah;?>" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" maxlength="50" readonly>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN AYAH :</b></label>
        <input style="text-transform:uppercase" value="<?=$data->penghasilan_ayah;?>" type="text" name="penghasilan_ayah" class="form-control" placeholder="Penghasilan Ayah" maxlength="50" readonly>  
        </div>  
        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>DATA WALI</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA WALI : </b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->nama_wali;?>" name="nama_wali" placeholder="Nama Wali" class="form-control" maxlength="190" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN WALI :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->pekerjaan_wali;?>" name="pekerjaan_wali" placeholder="Pekerjaan Wali" class="form-control" maxlength="50" readonly>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN WALI :</b></label>
        <input style="text-transform:uppercase" value="<?=$data->penghasilan_wali;?>" type="text" name="penghasilan_wali" class="form-control" placeholder="Penghasilan Wali" maxlength="50" readonly>  

        </div>  
        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>DATA LAINNYA</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NO KIP : </b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->no_kip;?>" name="no_kip" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" readonly>
        </div>  

        <div class="form-group">
        <label for=""><b>NO PKH :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->no_pkh;?>" name="no_pkh" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" readonly>
        </div>  

       
        <button type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;">BUAT AKUN</button><br><br>
        <?php endforeach ;?>

        </form>

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
  <script>
   [].slice.call( document.querySelectorAll('select') ).forEach(ucfirst);

document.getElementById('title').addEventListener('change', fn, false);
document.getElementById('day').addEventListener('change', fn, false);

function ucfirst(el) {
    el.innerHTML = el.innerHTML.charAt(0).toUpperCase() + el.innerHTML.slice(1).toUpperCase();
}

function fn() {
    var options  = this.getElementsByTagName('select');
    var selected = options[this.selectedIndex];

    [].slice.call(options).forEach(ucfirst);
    selected.value = selected.innerHTML = selected.innerHTML.toUpperCase();
}
  </script>
</html>