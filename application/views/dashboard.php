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
              <li class="breadcrumb-item"><a href="#">PPDB BIREUEN</a></li>
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
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pensd as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>
                <p>Kuota Zonasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pensmp as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>

                <p>Kuota Afirmasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pensma as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>


                <p>Kuota Pindahan Orang Tua</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

                    <!-- ./col -->
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($pensma as $data) : ?>
                <h3><?php echo $data->kuota;?></h3>
                <?php endforeach ;?>
                <p>Kuota Jalur Prestasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
              <h3><?php echo $hitungsdformulir?></h3>
                <p>Calon PD Telah Approval</p>
              </div>
              <div class="icon">
                <i class="fa fa-tasks"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $hitungpdlulus?></h3>
                <p>Calon PD Yang Lulus</p>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3><?php echo $hitungpdtidaklulus?></h3>
                <p>Calon PD Yang Tidak Lulus</p>
              </div>
              <div class="icon">
                <i class="fa fa-times"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $hitungpddaftarulang?></h3>
                <p>Calon PD Daftar Ulang</p>
              </div>
              <div class="icon">
                <i class="fa fa-times"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $hitungpdtidakdaftarulang?></h3>
                <p>Calon PD Tidak Daftar Ulang</p>
              </div>
              <div class="icon">
                <i class="fa fa-times"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        
       

          <!-- ./col -->
        </div>
          
          <!-- ./col -->
        </div>
        
        
    </section>
    
    </div>
</div>
<!-- Button trigger modal -->



</div>

