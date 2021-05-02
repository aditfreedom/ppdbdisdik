<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 rounded" style="background:#007580">
        <div class="col">
          <br>
          <h1 class="m-0 text-light text-bold">PENGISIAN FORMULIR</h1>
          <footer class="blockquote-footer text-light"><b>Mohon Diisi Formulir Pendaftaran Dengan Lengkap Dan Benar</b></footer>
          <hr>
          <a href="<?= base_url('user/isi_formulir/' . $id_pesertadidik) ?>" class="btn btn-danger" style="width:20%;">1. Pengisian Data Diri</a>&nbsp;&nbsp;<a href="<?= base_url('user/sekolahtujuan/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-danger">2. Pilih Sekolah Tujuan</a>
          &nbsp;<a href="<?= base_url('user/upload_berkas/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-light">3. Upload Berkas</a>&nbsp;&nbsp;<a href="<?= base_url('user/finalisasi/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-danger">4. Finalisasi Pendaftaran</a>
          <br><br>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
  <?php foreach ($tampil_admin as $data) : ?>
          <?php
            if ($data->jenis_pendaftaran == 1) {
              $zonasi="";
              $afirmasi="hidden";
              $pindahan="hidden";
              $prestasi="hidden";
            }
            if ($data->jenis_pendaftaran == 2) {
              $zonasi="hidden";
              $afirmasi="";
              $pindahan="hidden";
              $prestasi="hidden";
            }
            if ($data->jenis_pendaftaran == 3) {
              $zonasi="hidden";
              $afirmasi="hidden";
              $pindahan="";
              $prestasi="hidden";
            }
            if ($data->jenis_pendaftaran == 4) {
              $zonasi="hidden";
              $afirmasi="hidden";
              $pindahan="hidden";
              $prestasi="";
            }
            ?>
      <?php endforeach; ?>

      <?php foreach ($status as $data) : ?>
      <?php
      if ($data->status == 1) {
          $disabled="disabled";
      }else {
        $disabled="";
      }
      ?>
      <?php endforeach; ?>

            <div class="container alert alert-primary alert-dismissible fade show" role="alert">
            <?php foreach ($berkas as $data) : ?>
              <p class="mb-1"><b>FILE YANG TELAH DIUPLOAD :</b>
                    <ul class="mb-0" <?=$zonasi;?>>
                        <li>File 1 : <a href="<?= base_url('asset/file/'.$data->up_zonasi1) ?>"> <b><?=$data->up_zonasi1;?></b></a></li>
                        <li>File 2 : <a href="<?= base_url('asset/file/'.$data->up_zonasi1) ?>"> <b><?=$data->up_zonasi2;?></b></a></li>
                    </ul>
                    <ul class="mb-0" <?=$afirmasi;?>>
                        <li>File 1 : <a href="<?= base_url('asset/file/'.$data->up_afirmasi1) ?>"> <b><?=$data->up_afirmasi1;?></b></a></li>
                        <li>File 2 : <a href="<?= base_url('asset/file/'.$data->up_afirmasi1) ?>"> <b><?=$data->up_afirmasi2;?></b></a></li>
                    </ul>
                    <ul class="mb-0" <?=$pindahan;?>>
                        <li>File 1 : <a href="<?= base_url('asset/file/'.$data->up_pindahan1) ?>"> <b><?=$data->up_pindahan1;?></b></a></li>
                        <li>File 2 : <a href="<?= base_url('asset/file/'.$data->up_pindahan1) ?>"> <b><?=$data->up_pindahan2;?></b></a></li>
                    </ul>
                    <ul class="mb-0" <?=$prestasi;?>>
                        <li>File 1 : <a href="<?= base_url('asset/file/'.$data->up_prestasi1) ?>"> <b><?=$data->up_prestasi1;?></b></a></li>
                        <li>File 2 : <a href="<?= base_url('asset/file/'.$data->up_prestasi1) ?>"> <b><?=$data->up_prestasi2;?></b></a></li>
                    </ul>
              </p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
          <?php endforeach; ?>
      <a href="#" class="btn rounded-pill text-left text-light" style="width:100%;background:#325288;"><b>MOHON UPLOAD BERKAS YANG DIBUTUHKAN</b></a><br><br>      

      <?php echo form_open_multipart('user/updateberkas');?>
          <div class="form-group" hidden>
              <label for=""><b>JENIS :</b></label>
              <?php foreach ($tampil_admin as $data) : ?>
              <input  class="form-control" type="text" name="jenis_pendaftaran" value="<?=$data->jenis_pendaftaran;?>">
              <?php endforeach; ?>
            </div>
            <div class="form-group" <?=$zonasi;?>>
              <label for=""><b>UPLOAD KK (PDF) :</b></label>
              <?php foreach ($berkas as $data) : ?>
              <input hidden class="form-control" type="text" name="up_zonasi1_lama" value="<?=$data->up_zonasi1;?>">
              <?php endforeach; ?>
              <input <?=$disabled;?> class="form-control" type="file" name="up_zonasi1" accept="application/pdf" >
              <br>
              <label for=""><b>UPLOAD KARTU NISN (PDF) :</b></label>
              <?php foreach ($berkas as $data) : ?>
              <input hidden class="form-control" type="text" name="up_zonasi2_lama" value="<?=$data->up_zonasi2;?>">
              <?php endforeach; ?>
              <input <?=$disabled;?> class="form-control" type="file" name="up_zonasi2" accept="application/pdf">



            </div>

            <div class="form-group" <?=$afirmasi;?>>
              <label for=""><b>UPLOAD KIP/PKH DAN KK (DIGABUNG DALAM 1 PDF) :</b></label>
              <?php foreach ($berkas as $data) : ?>
              <input hidden class="form-control" type="text" name="up_afirmasi1_lama" value="<?=$data->up_afirmasi1;?>">
              <?php endforeach; ?>
              <input <?=$disabled;?> class="form-control" type="file" name="up_afirmasi1" accept="application/pdf">
              <br>
              <label for=""><b>UPLOAD KARTU NISN (PDF) :</b></label>
              <?php foreach ($berkas as $data) : ?>
              <input hidden class="form-control" type="text" name="up_afirmasi2_lama" value="<?=$data->up_afirmasi2;?>">
              <?php endforeach; ?>
              <input <?=$disabled;?> class="form-control" type="file" name="up_afirmasi2" accept="application/pdf">
            </div>

            <div class="form-group" <?=$pindahan;?>>
              <label for=""><b>UPLOAD SURAT PINDAH DINAS ORANG TUA DAN KK (DIGABUNG DALAM 1 PDF) :</b></label>
              <?php foreach ($berkas as $data) : ?>
              <input hidden class="form-control" type="text" name="up_pindahan1_lama" value="<?=$data->up_pindahan1;?>">
              <?php endforeach; ?>
              <input <?=$disabled;?> class="form-control" type="file" name="up_pindahan1" accept="application/pdf">
              <br>
              <label for=""><b>UPLOAD KARTU NISN (PDF) :</b></label>
              <?php foreach ($berkas as $data) : ?>
              <input hidden class="form-control" type="text" name="up_pindahan2_lama" value="<?=$data->up_pindahan2;?>">
              <?php endforeach; ?>
              <input <?=$disabled;?> class="form-control" type="file" name="up_pindahan2" accept="application/pdf">
            </div>

            <div class="form-group" <?=$prestasi;?>>
              <label for=""><b>UPLOAD SK PRESTASI DARI SEKOLAH DAN KK (DIGABUNG DALAM 1 PDF) :</b></label>
              <?php foreach ($berkas as $data) : ?>
              <input hidden class="form-control" type="text" name="up_prestasi1_lama" value="<?=$data->up_prestasi1;?>">
              <?php endforeach; ?>
              <input <?=$disabled;?> class="form-control" type="file" name="up_prestasi1" accept="application/pdf">
              <br>
              <label for=""><b>UPLOAD KARTU NISN (PDF) :</b></label>
              <?php foreach ($berkas as $data) : ?>
              <input hidden class="form-control" type="text" name="up_prestasi2_lama" value="<?=$data->up_prestasi2;?>">
              <?php endforeach; ?>
              <input <?=$disabled;?> class="form-control" type="file" name="up_prestasi2" accept="application/pdf">
            </div>
            <br>
            <button <?=$disabled;?> type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;">UPLOAD FILE</button><br><br>
      </form>






    </div>
  </section>
<br>