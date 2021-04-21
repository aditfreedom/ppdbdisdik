<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DASHBOARD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pensd as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>
                <p>Kuota Penerimaan SD</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pensmp as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>

                <p>Kuota Penerimaan SMP</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pensma as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>


                <p>Kuota Penerimaan SMA</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
             <!-- ./col -->
             <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pindsd as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>

                <p>Kuota pindahan SD</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
                    <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pindsmp as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>

                <p>Kuota pindahan SMP</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

                       <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pindsma as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>

                <p>Kuota pindahan SMA</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $hitungsdformulir?></h3>
                <p>Calon PD SD Telah Bayar Formulir</p>
              </div>
              <div class="icon">
                <i class="fa fa-money-check-alt"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $hitungsmpformulir?></h3>


                <p>Calon PD SMP Telah Bayar Formulir</p>
              </div>
              <div class="icon">
                <i class="fa fa-money-check-alt"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $hitungsmaformulir?></h3>


                <p>Calon PD SMA Telah Bayar Formulir</p>
              </div>
              <div class="icon">
                <i class="fa fa-money-check-alt"></i>
              </div>
            </div>
          </div>
             <!-- ./col -->
             <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $hitungpindsdformulir?></h3>

                <p>Pindahan SD Telah Bayar Formulir</p>
              </div>
              <div class="icon">
                <i class="fa fa-money-check-alt"></i>
              </div>
            </div>
          </div>
                    <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $hitungpindsmpformulir?></h3>


                <p>Pindahan SMP Telah Bayar Formulir</p>
              </div>
              <div class="icon">
                <i class="fa fa-money-check-alt"></i>
              </div>
            </div>
          </div>

                       <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $hitungpindsmaformulir?></h3>


                <p>Pindahan SMA Telah Bayar Formulir</p>
              </div>
              <div class="icon">
                <i class="fa fa-money-check-alt"></i>
              </div>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-2 col-2">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $hitunguser?></h3>

                <p>Jumlah User Terdaftar</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-2 col-2">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $hitungformulir?></h3>

                <p>Total Calon PD Bayar Formulir</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-2">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $hitungformulirpindahan?><sup style="font-size: 20px"></sup></h3>

                <p>Total Pindahan Bayar Formulir</p>
              </div>
              <div class="icon">
                <i class="fa fa-money-check-alt"></i>
                
              </div>
            </div>

            

            

    
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3><?php echo $hitungpdlulus?></h3>

                <p>Jumlah Calon PD Lulus</p><br>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3><?php echo $hitungpdtidaklulus?></h3>

                <p>Jumlah Calon PD Tidak Lulus</p><br>
              </div>
              <div class="icon">
                <i class="fa fa-times"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>

        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $hitungpddaftarulang?></h3>

                <p>Jumlah PD Telah Daftar Ulang</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-check"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $hitungpdtidakdaftarulang?></h3>

                <p>Jumlah PD Tidak Daftar Ulang</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-times"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
          
          <!-- ./col -->
        </div>
        
        
    </section>
    
    </div>
</div>
<!-- Button trigger modal -->



</div>

