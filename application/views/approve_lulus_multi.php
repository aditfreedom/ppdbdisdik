<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">APPROVAL KELULUSAN MULTI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Approval Kelulusan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <!-- <p align="right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Data</button><br><br></p> -->

    <table class="table table-hover" id="example3">
          <thead class="text-center">
            <tr>
              <th scope="col">NISN</th>
              <th scope="col">NAMA LENGKAP</th>
              <th scope="col">SEKOLAH ASAL</th>
              <th scope="col">JENIS PENERIMAAN</th>
              <th scope="col">STATUS KELULUSAN</th>
              <th scope="col" ><input type="checkbox" name="checkbox33" id="cb"></th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	        foreach ($lulus_multi as $data) : ?>
		<tr class="nomor text-center">
            <td><?php echo $data->nisn;?></td>
            <td><?php echo $data->nama_siswa;?></td>
            <td><?php echo $data->nama_sekolah;?></td>
            <td><?php echo $data->nama;?></td>
    <?php
    $approval= $data->approve_lulus;
      if ($approval=="Antrian") {
        $class="btn-warning";
      }elseif($approval=="Lulus"){
        $class="btn-info";
      }
      else{
        $class="btn-danger";
      }    
    ?>
            <td><a class="font-weight-bold text-uppercase <?= $class;?> rounded-pill" href="#" role="button">&nbsp&nbsp<?php echo $data->approve_lulus?>&nbsp&nbsp</a></td>
            <form action="<?=base_url('admin/updatelulusmulti')?>" method="post">
            <td><input type="checkbox" name="checked[]"  id="checked[]" value="<?php echo $data->id;?>"/></td>	            
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
            </tbody>
        </table>

        <div class="form-group">
            <label for="">Approve Kelulusan</label>
            <select class="form-control form-control" name="approve_lulus">
              <option>Antrian</option>
              <option>Lulus</option>
              <option>Tidak Lulus</option>
              </select>
          </div>
          <button type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;"> SIMPAN DATA</button><br><br>
          </form>

    </div>
   
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kuota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'home/tambahkuota'; ?>">
      <div class="form-group">
        <label for="">Jenis Penerimaan</label>
        <select class="form-control form-control" name="jenis">
          <option>Peserta Didik Baru SD</option>
          <option>Peserta Didik Baru SMP</option>
          <option>Peserta Didik Baru SMA</option>
          <option>Pindahan SD</option>
          <option>Pindahan SMP</option>
          <option>Pindahan SMA</option>
          </select>
      </div>
        <div class="form-group">
        <label for="">Kuota Penerimaan</label>
        <input type="text" name="kuota" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>


