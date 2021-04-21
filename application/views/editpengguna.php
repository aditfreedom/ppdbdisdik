<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT DATA PENGGUNA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Edit Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">

    <?php foreach ($editpengguna as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/updatedatapengguna'; ?>">
    <div hidden class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Nama Lengkap</label>
        <input readonly type="text" name="nama" class="form-control" value="<?php echo $data->nama_lengkap;?>">
        </div>
    <div hidden class="form-group">
        <label for="">Jenis Penerimaan</label>
        <select readonly class="form-control form-control" name="jenis">
          <option selected hidden><?php echo $data->jenis;?></option>
          <option>Peserta Didik Baru SD</option>
          <option>Peserta Didik Baru SMP</option>
          <option>Peserta Didik Baru SMA</option>
          <option>Pindahan SD</option>
          <option>Pindahan SMP</option>
          <option>Pindahan SMA</option>
          </select>
      </div>
        <div hidden class="form-group">
        <label for="">NISN</label>
        <input readonly type="text" name="nisn" class="form-control" value="<?php echo $data->nisn;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Alamat</label>
        <input readonly type="text" name="alamat" class="form-control" value="<?php echo $data->alamat;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Sekolah Asal</label>
        <input readonly type="text" name="sekolah_asal" class="form-control" value="<?php echo $data->sekolah_asal;?>">
        </div>
        <div hidden class="form-group">
        <label for="">No HP</label>
        <input readonly type="text" name="no_hp" class="form-control" value="<?php echo $data->no_hp;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Foto</label><br>
        <input  type="hidden" name="foto" class="form-control" value="<?php echo $data->foto;?>">
        <img src="<?php echo base_url();?>asset/foto/<?php echo $data->foto;?>" class="border border-dark rounded" width="150px">
        </div>
        <div hidden class="form-group">
        <label for="">Bukti Transfer</label><br>
        <input  type="hidden" name="bukti_tf" class="form-control" value="<?php echo $data->bukti_tf;?>">
        <img src="<?php echo base_url();?>asset/buktitf/<?php echo $data->bukti_tf;?>" class="border border-dark rounded" width="150px">
        </div>
        <div class="form-group">
        <label for="">Username</label>
        <input readonly type="text" name="username" class="form-control" value="<?php echo $data->username;?>">
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $data->password;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="role" class="form-control" value="<?php echo $data->role;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Approve Formulir</label>
        <select class="form-control form-control" name="approve_formulir">
          <option selected hidden><?php echo $data->approve_formulir;?></option>
          <option>Antrian</option>
          <option>Ditolak</option>
          <option>Diterima</option>
          </select>
      </div>
      <div class="form-group">
      <input  type="hidden" name="approve_lulus" class="form-control" value="<?php echo $data->approve_lulus;?>">
      </div>  
      <div class="form-group">
      <input  type="hidden" name="approve_daftarulang" class="form-control" value="<?php echo $data->approve_daftarulang;?>">
      </div>  

        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>         
        </form>
	<?php endforeach ;?>



    </section>
</div>
<br>