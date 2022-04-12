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
            <div class="small-box bg-info">
              <div class="inner">
              
                <h3><?php echo $pendaftarzonasi;?></h3>
                <p>Pendaftar Zonasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $pendaftarafirmasi;?></h3>


                <p>Pendaftar Afirmasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $pendaftarpindahan;?></h3>


                <p>Pendaftar Pindahan</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $pendaftarprestasi;?></h3>


                <p>Pendaftar Prestasi</p>
              </div>
              <div class="icon">
                  <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $pendaftarumum;?></h3>


                <p>Pendaftar Umum</p>
              </div>
              <div class="icon">
                  <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          
          


        </div>
          
          <!-- ./col -->
        </div>
        
        <hr>
        <h1 class="text-bold">REKAPITULASI PROGRESS DATA</h1>
        <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col" style="width:10%;">NO</th>
              <th scope="col">KECAMATAN</th>
              <th scope="col">ZONASI</th>
              <th scope="col">AFIRMASI</th>
              <th scope="col">PINDAHAN ORANG TUA</th>
              <th scope="col">PRESTASI</th>
              <th scope="col">UMUM</th>
            </tr>
          </thead>


          <tbody>
            <?php $i = 1;
            foreach ($kecamatan as $data) :
            ?>
              <tr class="nomor text-center">
                <td scope="row"><?php echo $i; ?></td>
                <td><a href="<?php echo base_url('home/tampil_sekolah_wilayah/') . $data['kode_wilayah']; ?>"><?= $data['nama_wilayah']; ?></a></td>
                <td><?=$data['zonasi'];?></td>
                <td><?=$data['afirmasi'];?></td>
                <td><?=$data['pindahan'];?></td>
                <td><?=$data['prestasi'];?></td>
                <td><?=$data['umum'];?></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
    </section>
    
    </div>
</div>
<!-- Button trigger modal -->



</div>

