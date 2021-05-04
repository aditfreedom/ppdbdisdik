<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 rounded" style="background:#5B5EA6">
          <div class="col">
          <br>
            <h1 class="m-0 text-light text-bold">APPROVAL KELULUSAN</h1>
            <footer class="blockquote-footer text-light"><b>Konfirmasi Kelulusan Peserta Didik</b></footer>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container">

    <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>APPROVE KELULUSAN</b></a><br><br>
    <form action="<?=base_url('admin/updatelulus')?>" method="post">
    <?php foreach ($lulus as $data) : ?>
        <div class="form-group">
            <label for="">Approve Formulir</label>
            <select class="form-control form-control" name="approve_lulus">
              <option selected hidden><?php echo $data->approve_lulus;?></option>
              <option>Antrian</option>
              <option>Lulus</option>
              <option>Tidak Lulus</option>
              </select>
          </div>
          <div class="form-group" hidden>
            <label for=""><b>ID :</b></label>
            <input type="text" name="id" value="<?php echo $data->id;?>" class="form-control" required>
            </div> 
        <?php endforeach ;?>


       
        <button type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;"> SIMPAN DATA</button><br><br>
        </form>

    </div>


    </section>
</div>
<br>