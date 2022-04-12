<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT KUOTA MANUAL</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Edit Kuota Manual</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($kuotamanual as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/updatekuotamanual'; ?>">
        <div class="form-group" hidden>
        <input type="text" name="id_kuota" class="form-control" value="<?php echo $data->id_kuota;?>">
        </div>
        <div class="form-group" hidden>
        <input type="text" name="id_sekolah" class="form-control" value="<?php echo $data->id_sekolah;?>">
        </div>
        <div class="form-group">
        <label for="">Total Penerimaan</label>
        <input type="text" name="total" class="form-control" value="<?php echo $data->total;?>" >
        </div>
        <div class="form-group">
        <label for="">Sisa Zonasi</label>
        <input type="text" name="sisa_zonasi" class="form-control" value="<?php echo $data->sisa_zonasi;?>" >
        </div>
        <div class="form-group">
        <label for="">Sisa Afirmasi</label>
        <input type="text" name="sisa_afirmasi" class="form-control" value="<?php echo $data->sisa_afirmasi;?>" >
        </div>
        <div class="form-group">
        <label for="">Sisa Pindahan</label>
        <input type="text" name="sisa_pindahan" class="form-control" value="<?php echo $data->sisa_pindahan;?>" >
        </div>
        <div class="form-group">
        <label for="">Sisa Prestasi</label>
        <input type="text" name="sisa_prestasi" class="form-control" value="<?php echo $data->sisa_prestasi;?>" >
        </div>
        <div class="form-group">
        <label for="">Sisa Umum</label>
        <input type="text" name="sisa_umum" class="form-control" value="<?php echo $data->sisa_umum;?>" >
        </div>
        <div class="form-group">
        <label for="">Total Yang Sudah Masuk</label>
        <input type="text" name="total_in" class="form-control" value="<?php echo $data->total_in;?>" >
        </div>
       
        <button type="submit" class="btn btn-primary form-control font-weight-bold">SIMPAN</button>
      </div>
        </form>
	<?php endforeach ;?>
    </section>
</div>