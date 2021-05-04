<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        font-size: 10px;
      }
      body {
        margin: 0 50px;
      }
      .text-center {
        text-align: center;
      }
      h3 {
        margin: 10px 0;
      }
      hr {
        border-style: dashed;
      }
      .ceklis {
        border: 1px solid black;
        border-collapse: collapse;
      }
      .ceklis td {
        border: 1px solid black;
        padding: 2.5px 5px;
      }
      .frame{
          height: 3.5cm;
          width: 3cm;
          border: 1px solid black;
          border-style: dotted;
          position: absolute;
          top: 170px;
          right: 50px;
          display: flex;
          justify-content: center;
          align-items: center;

      }
      .kop{
          text-align: center;
          border-bottom: 5px solid black;
          padding:15px;
          margin-bottom: 10px;
      }
      .kop *{
          margin:0;
      }
      .kop-logo{
          position: absolute;
          top: 0;
          left: 50px;
          height: 100px;
      }
      h3{
          font-size: 13px;
      }
      h2{
          font-size: 17px;
      }
      h1{
          font-size: 22px;
      }

    </style>
  </head>
  <body  onafterprint="alert('apaman')">
    <div class="kop">
        <img src="./favicon.png" alt="" srcset="" class="kop-logo">
        <h3>PANITIA PENDAFTARAN PESERTA DIDIK BARU</h3>
        <h2>DINAS PENDIDIKAN DAN KEBUDAYAAN</h2>
        <h1>BIDANG PEMBINAAN SEKOLAH DASAR</h1>
        <small>Jalan Banta Ahmad Komplek SKB - SPNF Telp. (0644) 21229 Fax (0644) 34210 Email: <a>disdik.bireuen@gmail.com</a> Kode Pos 24211</small>
        <h3>BIREUEN</h3>
    </div>
    <h3 class="text-center">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</h3>
    <h3 class="text-center">TAHUN PELAJARAN 2020/2021</h3>
    <table style="width: 100%; margin-bottom: 10px" class="table-data">
      <thead>
        <tr>
          <th colspan="3" align="left"><strong>DATA</strong></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>No. Pendaftaran</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td style="padding-bottom: 10px;">Tgl. Pendaftaran</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Asal Sekolah (PAUD)</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Nomor Induk Siswa Nasional (NISN)</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Nama Pesera Didik</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Tempat Lahir</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Anak Ke</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Email Aktif</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Nomor Handphone</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Nomor Induk Kependudukan (NIK)</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Nomor Katu Keluarga (KK)</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Alamat (Nama Desa/Kelurahan)</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Penerima Program Indonesia Pintar (PIP)</td>
          <td>:</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <table style="width: 100%; margin-bottom: 10px" class="table-data">
      <thead>
        <tr>
          <th colspan="3" align="left"><strong>DATA ORANG TUA WALI</strong></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nama Ayah Kandung</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Pekerjaan Ayah</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Nama Ibu Kandung</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Pekerjaan Ibu</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Nama Wali Siswa</td>
          <td>:</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <table style="width: 100%">
      <thead>
        <tr>
          <th colspan="3" align="left"><strong>DATA ORANG TUA WALI</strong></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jalur Pendaftaran</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Kecamatan</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Sekolah Tujuan</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Nama Desa/Kelurahan</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Upload Kartu Keluarga</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>No. Pendaftaran</td>
          <td>:</td>
          <td>No. Pendaftaran</td>
        </tr>
      </tbody>
    </table>

    <br>
    <br>
    <table style="width: 100%; margin-top: 15px;">
      <tr>
        <td align="center">Petugas Pendaftaran</td>
        <td align="center">Orang Tua/Wali Siswa</td>
        <td align="center">Siswa Pendaftar</td>
      </tr>
      <tr>
        <td>&emsp;</td>
      </tr>
      <tr>
        <td>&emsp;</td>
      </tr>
      <tr>
        <td style="padding: 25px"><hr /></td>
        <td style="padding: 25px"><hr /></td>
        <td style="padding: 25px"><hr /></td>
      </tr>
    </table>
    <strong>Kolom Checklist Kelengkapan Dokumen</strong>
    <div
      style="
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding-top: 5px;
      "
    >
      <table class="ceklis" style="width: 28%">
        <tr>
          <td>1</td>
          <td>Akta Kelahiran</td>
          <td>&emsp;&emsp;&emsp;</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Kartu Keluarga</td>
          <td>&emsp;&emsp;&emsp;</td>
        </tr>
      </table>
      <table class="ceklis" style="width: 28%">
        <tr>
          <td>1</td>
          <td>Akta Kelahiran</td>
          <td>&emsp;&emsp;&emsp;</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Kartu Keluarga</td>
          <td>&emsp;&emsp;&emsp;</td>
        </tr>
      </table>
      <table class="ceklis" style="width: 28%">
        <tr>
          <td>1</td>
          <td>Akta Kelahiran</td>
          <td>&emsp;&emsp;&emsp;</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Kartu Keluarga</td>
          <td>&emsp;&emsp;&emsp;</td>
        </tr>
      </table>
    </div>

    <br />
    <strong>Note:</strong>
    <ul>
      <li>
        Semua Persyaratan dimasukkan kedalam:
        <br />
        <table>
          <tr>
            <td><strong>Jalur Zonasi</strong></td>
            <td><strong>: Merah</strong></td>
          </tr>
          <tr>
            <td><strong>Jalur Afirmasi</strong></td>
            <td><strong>: Kuning</strong></td>
          </tr>
          <tr>
            <td><strong>Jalur Pindahan Orang Tua &emsp;</strong></td>
            <td><strong>: Hijau</strong></td>
          </tr>
        </table>
      </li>
      <br>
      <li>Formulir di Print Out Sebanyak 2 Lembar</li>
      <li>Diserahkan Kepada Panitia PPDB di Sekolah Tujuan</li>
    </ul>

    <div class="frame">
        Foto <br>
        3 x 4
    </div>

    <script>
        window.print()
    </script>
  </body>
</html>
