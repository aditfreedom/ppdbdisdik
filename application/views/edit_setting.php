<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT SETTING</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Edit Setting Maintenance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($data_setting as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/updatesetting'; ?>">
    <div class="form-group" hidden>
        <input type="text" name="id_setting" class="form-control" value="<?php echo $data->id_setting;?>">
        </div>
        <div class="form-group">
        <label for="">Tipe Setting</label>
        <input type="text" name="tipe_setting" class="form-control" value="<?php echo $data->tipe_setting;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">Status</label>
        <select name="status" id="" class="form-control">
          <option selected disabled value="<?php echo $data->status;?>"><?php echo $data->status;?></option>
          <option value="0">0</option>
          <option value="1">1</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary form-control font-weight-bold">SIMPAN PENGATURAN</button>
      </div>
        </form>
	<?php endforeach ;?>
    </section>
</div>