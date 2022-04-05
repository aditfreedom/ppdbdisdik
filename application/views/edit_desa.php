<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT DESA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Edit Desa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
		<form method="post" action="<?php echo base_url().'home/update_desa'; ?>">
    <?php foreach ($edit_desa as $data) : ?>
        <div class="form-group" hidden>
        <input type="text" name="id_desa" class="form-control" value="<?php echo $data->id_desa;?>">
        </div>
        <?php endforeach ;?>
        <div class="form-group">
        <label for="">Kecamatan</label>
        <select class="form-control selectpicker" data-size="5" name="kode_wilayah" data-style="btn-info" data-live-search="true">
              <?php foreach ($edit_desa as $data) : ?>
              <option value="<?= $data->kode_wilayah;?>"><?= $data->nama_wilayah; ?></option>
              <?php endforeach; ?>
              <?php foreach ($kecamatan as $data) : ?>
              <option value="<?= $data->kode_wilayah;?>"><?= $data->nama_wilayah; ?></option>
              <?php endforeach; ?>
        </select>        
        </div>
        
        <?php foreach ($edit_desa as $data) : ?>
        <div class="form-group" >
        <label for="">Nama Desa</label>
        <input type="text" name="nama_desa" class="form-control" value="<?php echo $data->nama_desa;?>">
        </div>
        <?php endforeach ;?>
       
        <button type="submit" class="btn btn-primary form-control font-weight-bold">UBAH DATA</button>
      </div>
        </form>
	
    </section>
</div>