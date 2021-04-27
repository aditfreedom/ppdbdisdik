<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 rounded" style="background:#007580">
          <div class="col">
          <br>
            <h1 class="m-0 text-light text-bold">PENGISIAN FORMULIR</h1>
            <footer class="blockquote-footer text-light"><b>Mohon Diisi Formulir Pendaftaran Dengan Lengkap Dan Benar</b></footer>
            <hr>
            <a href="" class="btn btn-light" style="width:20%;">1. Pengisian Data Diri</a>&nbsp;&nbsp;<a href="<?=base_url('user/sekolahtujuan/'.$id_pesertadidik)?>" style="width:20%;" class="btn btn-danger" >2. Pilih Sekolah Tujuan</a>
            &nbsp;<a href=""  style="width:20%;" class="btn btn-danger">3. Upload Berkas</a>&nbsp;&nbsp;<a href="" style="width:20%;" class="btn btn-danger">4. Finalisasi Pendaftaran</a>
            <br><br>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container">
    <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA DIRI</b></a><br><br>
    <form action="<?=base_url('user/updateformulir')?>" method="post">
    <?php foreach ($isi_formulir as $data) : ?>
    <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA CALON PESERTA DIDIK : </b></label>
        <input type="text" name="nama_siswa" value="<?php echo $data->nama_siswa;?>" class="form-control" maxlength="50" placeholder="Nama Lengkap" required>
        </div>  
        <?php endforeach ;?>

        <div class="form-group">
        <label for=""><b>ASAL SEKOLAH :</b></label>
        <select class="form-control selectpicker" data-size="5" name="id_sekolah" data-style="btn-info" data-live-search="true">
        <?php foreach ($isi_formulir2 as $data) : ?>
        <option value="<?php echo $data->id_sekolah;?>"><?php echo $data->nama_sekolah;?></option>
        <?php endforeach ;?>
        <?php foreach ($isi_formulir3 as $data) : ?>
        <option value="<?php echo $data->id_sekolah;?>"><?php echo $data->nama_sekolah;?></option>
        <?php endforeach ;?>
        </select>
        </div>  


        <?php foreach ($isi_formulir as $data) : ?>
        <div class="form-group">
        <label for=""><b>TEMPAT LAHIR :</b></label>
        <input type="text" name="tempat_lahir" value="<?php echo $data->tempat_lahir;?>" class="form-control" placeholder="Tempat Lahir" maxlength="50" required>
        </div>  
        <?php endforeach ;?>


        <div class="form-group">
        <label for=""><b>JENIS KELAMIN :</b></label>
        <select class="form-control" name="jk">
        <?php foreach ($isi_formulir as $data) : ?>
            <?php if($data->jk =="L"){
                  $jk="Laki-Laki";
                }else {
                  $jk="Perempuan";
                }?>
        <option value="<?php echo $data->jk;?>"><?=$jk?></option>
        <?php endforeach ;?>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
        </select>
        </div>  
        </div>    
        </div>
    
    
    <?php foreach ($isi_formulir as $data) : ?>
    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>NIK :</b></label>
        <input type="text" name="nik" value="<?php echo $data->nik;?>" class="form-control" placeholder="NIK" maxlength="16" required>
        </div>  

        <div class="form-group">
        <label for=""><b>NISN :</b></label>
        <input type="text" name="nisn" value="<?php echo $data->nisn;?>" class="form-control"placeholder="NISN" maxlength="10" required>
        </div>  

        <div class="form-group">
        <label for=""><b>TANGGAL LAHIR :</b></label>
        <input type="date" name="tanggal_lahir" value="<?php echo $data->tanggal_lahir;?>" class="form-control" required>
        </div>  
        </div>    
        </div>


  </div><br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA TEMPAT TINGGAL</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>ALAMAT JALAN : </b></label>
        <input type="text" name="alamat_jalan" value="<?php echo $data->alamat_jalan;?>" class="form-control" placeholder="Nama Jalan" maxlength="190" required>
        </div>  

        <div class="form-group">
        <label for=""><b>DESA KELURAHAN :</b></label>
        <input type="text" name="desa_kelurahan" value="<?php echo $data->desa_kelurahan;?>" class="form-control" placeholder="Nama Desa" maxlength="200" required>
        </div>  

        <div class="form-group">
        <label for=""><b>DUSUN :</b></label>
        <input type="text" name="nama_dusun" value="<?php echo $data->nama_dusun;?>" class="form-control" placeholder="Nama Dusun" maxlength="200" required>
        </div>  
        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>RT :</b></label>
        <input type="number" name="rt" value="<?php echo $data->rt;?>" class="form-control" placeholder="Rt" maxlength="5" required>
        </div>  

        <div class="form-group">
        <label for=""><b>RW :</b></label>
        <input type="number" name="rw" value="<?php echo $data->rw;?>" class="form-control" placeholder="Rw" maxlength="5" required>
        </div>  

        <div class="form-group" hidden>
        <label for=""><b>NO HP/WA/TELP</b></label>
        <input type="text" name="id_pesertadidik" value="<?php echo $data->id_pesertadidik;?>"  class="form-control" placeholder="Salah Satu Saja" maxlength="14" required>
        </div>  
        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA ORANG TUA</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA IBU KANDUNG : </b></label>
        <input type="text" name="nama_ibu_kandung" value="<?php echo $data->nama_ibu_kandung;?>" class="form-control" placeholder="Nama Ibu Kandung" maxlength="190" required>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN IBU KANDUNG :</b></label>
        <input type="text" name="pekerjaan_ibu_kandung" value="<?php echo $data->pekerjaan_ibu_kandung;?>" class="form-control" placeholder="Pekerjaan Ibu Kandung" maxlength="50" required>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN IBU KANDUNG :</b></label>
        <select class="form-control" name="penghasilan_ibu_kandung" required>
        <option value="<?php echo $data->penghasilan_ibu_kandung;?>"><?php echo $data->penghasilan_ibu_kandung;?></option>
        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
        <option value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000</option>
        <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
        <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>     
        <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>     
        </select>        
        </div>  
        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA AYAH : </b></label>
        <input type="text" name="nama_ayah" value="<?php echo $data->nama_ayah;?>" class="form-control" placeholder="Nama Ayah" maxlength="190" required>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN AYAH :</b></label>
        <input type="text" name="pekerjaan_ayah" value="<?php echo $data->pekerjaan_ayah;?>" class="form-control" placeholder="Pekerjaan Ayah" maxlength="50" required>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN AYAH :</b></label>
        <select class="form-control" name="penghasilan_ayah" required>
        <option value="<?php echo $data->penghasilan_ayah;?>"><?php echo $data->penghasilan_ayah;?></option>
        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
        <option value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000</option>
        <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
        <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>     
        <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>     
        </select>        
        </div>  
        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA WALI</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA WALI : </b></label>
        <input type="text" name="nama_wali" value="<?php echo $data->nama_wali;?>" placeholder="Nama Wali" class="form-control" maxlength="190" required>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN WALI :</b></label>
        <input type="text" name="pekerjaan_wali" value="<?php echo $data->pekerjaan_wali;?>" placeholder="Pekerjaan Wali" class="form-control" maxlength="50" required>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN WALI :</b></label>
        <select class="form-control" name="penghasilan_wali" required>
        <option value="<?php echo $data->penghasilan_wali;?>"><?php echo $data->penghasilan_wali;?></option>
        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
        <option value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000</option>
        <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
        <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>     
        <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>     
        </select>        
        </div>  
        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA LAINNYA</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NO KIP : </b></label>
        <input type="text" name="no_kip" value="<?php echo $data->no_kip;?>"  class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div>  

        <div class="form-group">
        <label for=""><b>NO PKH :</b></label>
        <input type="text" name="no_pkh" value="<?php echo $data->no_pkh;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div>  

        <div class="form-group" hidden>
        <label for=""><b>ID PD :</b></label>
        <input type="text" name="id_pesertadidik" value="<?php echo $data->id_pesertadidik;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <div class="form-group" hidden>
        <label for=""><b>KODE WIL :</b></label>
        <input type="text" name="kode_wilayah" value="<?php echo $data->kode_wilayah;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <div class="form-group" hidden>
        <label for=""><b>LINTANG :</b></label>
        <input type="text" name="lintang" value="<?php echo $data->lintang;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <div class="form-group" hidden>
        <label for=""><b>BUJUR :</b></label>
        <input type="text" name="bujur" value="<?php echo $data->bujur;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <div class="form-group" hidden>
        <label for=""><b>KHUSUS :</b></label>
        <input type="text" name="kebutuhan_khusus" value="<?php echo $data->kebutuhan_khusus;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <?php endforeach ;?>

       
        <button type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;">SIMPAN DATA</button><br><br>
        </form>

    </div>


    </section>
</div>
<br>