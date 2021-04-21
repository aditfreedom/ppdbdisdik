<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1 class="m-0 text-info text-bold">PENGISIAN FORMULIR</h1>
            <footer class="blockquote-footer"><b>Mohon Diisi Formulir Pendaftaran Dengan Lengkap Dan Benar</b></footer>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($isi_formulir as $data) : ?>
      <?php echo form_open_multipart('user/updateformulir');?>
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div class="form-group">
        <label for="">Nama Lengkap Calon Peserta Didik</label>
        <input  type="text" name="nama" class="form-control" value="<?php echo $data->nama_lengkap;?>">
        </div>

        <div class="form-group">
        <label for="">Tempat Lahir Calon Peserta Didik</label>
        <input  type="text" name="tptlahir" class="form-control" value="<?php echo $data->tptlahir;?>">
        </div>

        <div class="form-group">
        <label for="">Tanggal Lahir Calon Peserta Didik</label>
        <input  type="date" name="tgllahir" class="form-control"value="<?php echo $data->tgllahir;?>">
        </div>

    <div  class="form-group">
        <label for="">Jenis Penerimaan</label>
        <select class="form-control selectpicker" data-live-search="true" name="jenis">
          <option selected><?php echo $data->jenis;?></option>
          <option>Zonasi</option>
          <option>Afirmasi</option>
          <option>Pindahan Orang Tua</option>
          <option>Jalur Prestasi</option>
          </select>
      </div>
        <div class="form-group">
        <label for="">NISN (Nomor Induk Sekolah Nasional)</label>
        <input  type="text" name="nisn" placeholder="Nomor Induk Sekolah Nasional" class="form-control" value="<?php echo $data->nisn;?>">
        </div>
        <div  class="form-group">
        <label for="">Kecamatan Tempat Tinggal</label>
        <select class="form-control selectpicker" data-live-search="true" name="alamat">
        <option selected><?php echo $data->alamat;?></option>
          <option>Kota Juang</option>
          </select>
      </div>
        <div  class="form-group">
        <label for="">Desa Tempat Tinggal</label>
        <select class="form-control selectpicker" data-live-search="true" name="namaayah">
        <option selected><?php echo $data->namaayah;?></option>
          <option>Kampung Baru</option>
          <option>Karang Rejo</option>
          <option>Pulo Kiton</option>
          </select>
      </div>
        <div class="form-group">
        <label for="">Sekolah Asal</label>
        <input  type="text" name="sekolah_asal" class="form-control" value="<?php echo $data->sekolah_asal;?>">
        </div>
        <div  class="form-group">
        <label for="">Sekolah Tujuan</label>
        <select class="form-control selectpicker" data-live-search="true" name="namaibu">
          <option>SMPN 1 Bireuen</option>
          </select>
      </div>
        <div class="form-group">
        <label for="">No HP Orang Tua</label>
        <input  type="text" name="no_hp" class="form-control" placeholder="Hanya salah satu saja" maxlength="15" value="<?php echo $data->no_hp;?>">
        </div>
        <div class="form-group">
        <label for="">No WA Aktif Orang Tua</label>
        <input  type="text" name="no_wa" class="form-control" placeholder="Hanya salah satu saja" maxlength="15" value="<?php echo $data->no_wa;?>">
        </div>
        <div class="form-group" hidden>
        <label for="">Foto</label><br>
        <input  type="hidden" name="foto" class="form-control" value="<?php echo $data->foto;?>">
        <img src="<?php echo base_url();?>asset/foto/<?php echo $data->foto;?>" class="border border-dark rounded" width="150px">
        </div>
        <br> 
        <div class="form-group">
        <label for="">UPLOAD FOTO SURAT KETERANGAN KURANG MAMPU (KHUSUS AFIRMASI)</label><br>
        <input  type="hidden" name="akte" class="form-control" value="<?php echo $data->akte;?>">
        <img src="<?php echo base_url();?>asset/akte/<?php echo $data->akte;?>" class="border border-dark rounded" width="150px"><br><br>
        <input type="file" name="akte_baru" class="form-control">
        </div> <br><br>

        <div class="form-group">
        <label for="">UPLOAD FOTO SERTIFIKAT PRESTASI (KHUSUS JALUR PRESTASI)</label><br>
        <input  type="hidden" name="bukti_tf" class="form-control" value="<?php echo $data->bukti_tf;?>">
        <img src="<?php echo base_url();?>asset/buktitf/<?php echo $data->bukti_tf;?>" class="border border-dark rounded" width="150px"><br><br>
        <input type="file" name="buktitf_baru" class="form-control">
        </div>
        <div class="form-group">
        <input type="hidden" name="username" class="form-control" value="<?php echo $data->username;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="password" class="form-control" value="<?php echo $data->password;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="role" class="form-control" value="<?php echo $data->role;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="approve_formulir" class="form-control" value="<?php echo $data->approve_formulir;?>">
        </div>
      <div class="form-group">
      <input  type="hidden" name="approve_lulus" class="form-control" value="<?php echo $data->approve_lulus;?>">
      </div>  
      <div class="form-group">
      <input  type="hidden" name="approve_daftarulang" class="form-control" value="<?php echo $data->approve_daftarulang;?>">
      </div>  
        <button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-save"></i> Simpan</button>         
        </form>
	<?php endforeach ;?>
  <br>
  <div class="row">
  <div class="col">
  <p align="center"><a class="btn btn-success" href="<?=base_url('user')?>" style="width:50%;" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a></p>     
  </div>
  <div class="col">
  <p align="center"><a class="btn btn-success" href="<?=base_url('user/cetak_kartu/'.$id)?>" style="width:50%;" role="button">Selanjutnya <i class="fa fa-arrow-right"></i></a></p>
  </div>
  </div>


    </section>
</div>
<br>