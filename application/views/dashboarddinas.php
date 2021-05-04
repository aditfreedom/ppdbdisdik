
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>PROGRESS DATA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
    <section class="content">
      <div class="container-fluid">
        <br>      

        <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NPSN</th>
              <th scope="col">NAMA SEKOLAH</th>
              <th scope="col">TOTAL KUOTA</th>
              <th scope="col">TOTAL PENDAFTAR</th>
              <th scope="col">SISA PENDAFTAR ZONASI</th>
              <th scope="col">SISA PENDAFTAR AFIRMASI</th>
              <th scope="col">SISA PENDAFTAR PINDAHAN</th>
              <th scope="col">SISA PENDAFTAR PRESTASI</th>
            </tr>
          </thead>


            <tbody>
          <?php $i = 1; 
          foreach ($tampilsekolah as $data) :
	        ?>
		      <tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
            <td><?=$data->npsn;?></td>
            <td><?=$data->nama_sekolah;?></td>
            <td><?=$data->total;?></td>
            <td><?=$data->total_in;?></td>
            <td><?=$data->sisa_zonasi;?></td>
            <td><?=$data->sisa_afirmasi;?></td>
            <td><?=$data->sisa_pindahan;?></td>
            <td><?=$data->sisa_prestasi;?></td>
		      </tr>
          <?php $i++;?>
          <?php endforeach; ?>
          </tbody>
          </table>



        </div>        
    </section>
    
    </div>
</div>
<!-- Button trigger modal -->



</div>



