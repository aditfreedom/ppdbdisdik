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
    <title>Registrasi Sekolah</title>
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
<h2 class="text-dark" style="margin-top:10px;">INPUT DATA SEKOLAH <br> DILUAR KABUPATEN BIREUEN</h2>
<hr>
</div>
<br>

    <div class="container">
    <?php foreach ($datajson as $data) : ?> 
    <form action="<?=base_url('hal/insertsekolah')?>" method="post">
    <div class="container">
        <div class="form-group">
        <label for=""><b>SEKOLAH ID :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$data->sekolah_id;?>" name="id_sekolah" class="form-control" placeholder="Tempat Lahir" maxlength="50" readonly required>
        </div>  

        <div class="form-group">
        <label for=""><b> NPSN :</b></label>
        <input style="text-transform:uppercase" type="text" value="<?=$this->input->get('npsn');?>" name="npsn" class="form-control" placeholder="NPSN SEKOLAH ASAL" maxlength="50" readonly required>
        </div>  

        <div class="form-group">
        <label for=""><b>NAMA SEKOLAH ASAL (Menggunakan Huruf Kapital) :</b></label>
        <input  type="text" name="nama_sekolah" class="form-control" placeholder="NAMA SEKOLAH ASAL" maxlength="50" required>

        </div>  
        <button type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;">TAMBAH SEKOLAH</button><br><br>

        </div>    

        </div>
    
         
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