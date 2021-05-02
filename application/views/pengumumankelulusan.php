<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2 rounded" style="background:#007580">
          <div class="col">
          <br>
            <h1 class="m-0 text-light text-bold">APPROVAL FORMULIR DAN KELULUSAN</h1>
            <footer class="blockquote-footer text-light"><b>Approval Formulir dan Pengumuman Kelulusan</b></footer>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container">
    <?php foreach ($status as $data) : ?>
      <?php
      if ($data->approve_lulus == "Lulus") {
          $lulus="";
          $tidaklulus="hidden";
          $antrian="hidden";
      }  

      if ($data->approve_lulus == "Tidak Lulus") {
        $lulus="hidden";
        $tidaklulus="";
        $antrian="hidden";
    }  

    if ($data->approve_lulus == "Antrian") {
      $lulus="hidden";
      $tidaklulus="hidden";
      $antrian="";
  }  
      ?>
	  <?php endforeach ;?> 


        <div class="alert alert-warning alert-dismissible fade show" role="alert" <?=$antrian;?>>
          <strong>Saat Ini Belum Ada Pengumuman Kelulusan, Harap Cek Secara Berkala</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="alert alert-danger alert-dismissible fade show" role="alert" <?=$tidaklulus;?>>
          <strong>Maaf! Anda Tidak Lulus Seleksi PPDB 2021/2022, Harap Untuk Memilih Sekolah Lain Di Menu <br>
          <ul>
          <li> Isi Formulir > Poin 3. Sekolah Tujuan</li>
          </ul>
           </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="alert alert-success alert-dismissible fade show" role="alert" <?=$lulus;?>>
          <strong>Selamat! Anda Lulus Seleksi PPDB 2021/2022, Harap Bawa Berkas Berikut Ke Sekolah Tujuan :</strong>
          <ul>
          <li>Foto Copy KK</li>
          <li>Foto Copy KTP Orang Tua</li>
          <li>Foto Copy Akte Kelahiran</li>
          <li>Foto Copy Kartu NISN</li>
          <li>Print Out Formulir Pendaftaran (Klik Untuk Download)</li>
          </ul>
          <b>Disatukan Di Dalam MAP Biru</b>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      
  <br>
    </section>
</div>
</div>
<br>