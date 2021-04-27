<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {

    function __construct(){
        parent::__construct();
        $datauser = $this->session->userdata('login'); 
		if (empty($datauser)) {
			redirect(base_url());
		}
    }

    // public function login()
	// {
	// 	$this->load->model('M_ppdb');
	// 	$this->load->view('login');	
	// }


    public function index()
	{
		$this->load->model('M_ppdb');
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebaruser',$sess_data);
		$this->load->view('homeuser');
		$this->load->view('template/footer');


	}

    public function isi_formulir($id){
		$sess_data = $this->session->userdata();
		$data['isi_formulir'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();
        $data['isi_formulir2'] = $this->M_ppdb->tampilpengguna2($id,'pengguna')->result();
        $data['isi_formulir3'] = $this->M_ppdb->tampilpengguna3('pengguna')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebaruser',$sess_data);
		$this->load->view('isi_formulir',$data);
		$this->load->view('template/footer');
	}

    public function sekolahtujuan($id){
		$sess_data = $this->session->userdata();
		$data['sekolahtujuan'] = $this->M_ppdb->tampilwilayah('data_wilayah')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebaruser',$sess_data);
		$this->load->view('sekolahtujuan',$data);
		$this->load->view('template/footer');
	}

    public function updateformulir(){
        $sess_data = $this->session->userdata();
        $id_pesertadidik        = $this->input->post('id_pesertadidik');
		$id_sekolah             = $this->input->post('id_sekolah');
        $kode_wilayah           = $this->input->post('kode_wilayah');
		$nama_siswa             = $this->input->post('nama_siswa');
        $tempat_lahir           = $this->input->post('tempat_lahir');
		$tanggal_lahir          = $this->input->post('tanggal_lahir');
		$jk                     = $this->input->post('jk');
		$nik                    = $this->input->post('nik');
		$nisn                   = $this->input->post('nisn');
		$alamat_jalan           = $this->input->post('alamat_jalan');
		$desa_kelurahan         = $this->input->post('desa_kelurahan');
		$rt                     = $this->input->post('rt');
		$rw                     = $this->input->post('rw');
		$nama_dusun             = $this->input->post('nama_dusun');
		$nama_ibu_kandung       = $this->input->post('nama_ibu_kandung');
		$pekerjaan_ibu_kandung  = $this->input->post('pekerjaan_ibu_kandung');
		$penghasilan_ibu_kandung= $this->input->post('penghasilan_ibu_kandung');
		$nama_ayah              = $this->input->post('nama_ayah');
		$pekerjaan_ayah         = $this->input->post('pekerjaan_ayah');
		$penghasilan_ayah       = $this->input->post('penghasilan_ayah');
		$nama_wali              = $this->input->post('nama_wali');
		$pekerjaan_wali         = $this->input->post('pekerjaan_wali');
		$penghasilan_wali       = $this->input->post('penghasilan_wali');
        $kebutuhan_khusus       = $this->input->post('kebutuhan_khusus');
		$no_kip                 = $this->input->post('no_kip');
		$no_pkh                 = $this->input->post('no_pkh');
		$lintang                = $this->input->post('lintang');
		$bujur                  = $this->input->post('bujur');

    
        $data = array(
            'id_sekolah' => $id_sekolah,
			'kode_wilayah' => $kode_wilayah,
			'nama_siswa' => $nama_siswa,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jk' => $jk,
			'nik' => $nik,
			'nisn' => $nisn,
			'alamat_jalan' => $alamat_jalan,
			'desa_kelurahan' => $desa_kelurahan,
			'rt' => $rt,
			'rw' => $rw,
			'nama_dusun' => $nama_dusun,
			'nama_ibu_kandung' => $nama_ibu_kandung,
			'pekerjaan_ibu_kandung' => $pekerjaan_ibu_kandung,
			'penghasilan_ibu_kandung' => $penghasilan_ibu_kandung,
			'nama_ayah' => $nama_ayah,
			'pekerjaan_ayah' => $pekerjaan_ayah,
			'penghasilan_ayah' => $penghasilan_ayah,
			'nama_wali' => $nama_wali,
			'pekerjaan_wali' => $pekerjaan_wali,
			'penghasilan_wali' => $penghasilan_wali,
			'kebutuhan_khusus' => $kebutuhan_khusus,
			'no_kip' => $no_kip,
			'no_pkh' => $no_pkh,
			'lintang' => $lintang,
			'bujur' => $bujur
        );
    
        $where = array(
            'id_pesertadidik' => $id_pesertadidik
        );
        $this->M_ppdb->updateformulirsiswa($where,$data,'datasiswa');
		$this->load->view('berhasil_update_formulir');

    }


    public function kirimfoto(){
        $id                = $this->input->post('id');
        $nama              = $this->input->post('nama');
        $tptlahir              = $this->input->post('tptlahir');
        $tgllahir              = $this->input->post('tgllahir');
        $jenis             = $this->input->post('jenis');
        $nisn              = $this->input->post('nisn');
        $alamat            = $this->input->post('alamat');
        $sekolah_asal      = $this->input->post('sekolah_asal');
        $namaayah              = $this->input->post('namaayah');
        $namaibu              = $this->input->post('namaibu');
        $no_wa              = $this->input->post('no_wa');
        $akte          = $this->input->post('akte');
        $akte_baru      = $_FILES['akte_baru']['name'];
        $no_hp             = $this->input->post('no_hp');
        $foto             = $this->input->post('foto');
        $bukti_tf          = $this->input->post('bukti_tf');
        $bukti_tfbaru      = $_FILES['buktitf_baru']['name'];
        $username          = $this->input->post('username');
        $password          = $this->input->post('password');
        $role              = $this->input->post('role');
        $approve_formulir       = $this->input->post('approve_formulir');
        $approve_lulus          = $this->input->post('approve_lulus');
        $approve_daftarulang    = $this->input->post('approve_daftarulang');

    
        $config['upload_path']          = 'asset/buktitf/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|JPG|JPEG';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
         
        if (! $this->upload->do_upload('buktitf_baru')) {
            $this->load->view('errorformulir');
        }else{
            $bukti_tfbaru=$this->upload->data('file_name');
        }
    
        if ($bukti_tfbaru == null) {
            $bukti_tfbaru = $bukti_tf;
        }

        $config2['upload_path']          = 'asset/akte/';
        $config2['allowed_types']        = 'gif|jpg|jpeg|png|JPG|JPEG';;
        $config2['max_size']             = 0;
        $config2['max_width']            = 0;
        $config2['max_height']           = 0;
    
        $this->load->library('upload', $config2);
        $this->upload->initialize($config2);
         
        if (! $this->upload->do_upload('akte_baru')) {
            $this->load->view('errorformulir');
        }else{
            $akte_baru=$this->upload->data('file_name');
        }
    
        if ($akte_baru == null) {
            $akte_baru = $akte;
        }
    
        $data = array(
            'nama_lengkap' => $nama,
            'tptlahir' => $tptlahir,
            'tgllahir' => $tgllahir,
            'namaayah' => $namaayah,
            'namaibu' => $namaibu,
            'no_wa' => $no_wa,
            'akte' => $akte_baru,
            'jenis' => $jenis,
            'nisn' => $nisn,
            'alamat' =>$alamat,
            'sekolah_asal' =>$sekolah_asal,
            'no_hp' =>$no_hp,
            'foto' =>$foto,
            'bukti_tf' =>$bukti_tfbaru,
            'username' =>$username,
            'password' =>$password,
            'role' =>$role,
            'approve_formulir' =>$approve_formulir,
            'approve_lulus' =>$approve_lulus,
            'approve_daftarulang' =>$approve_daftarulang
        );
    
        $where = array(
            'id' => $id
        );
        $this->M_ppdb->updateformuliruser($where,$data,'pengguna');
        redirect(base_url('user/isi_formulir/'.$id));    


    }

    public function cetak_kartu($id){
		$sess_data = $this->session->userdata();
		$id =    array ('id' => $id);
		$data['cetak_kartu'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   
		$data2 = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   

        foreach($data2 as $dataku){
            $dataku22=$dataku->approve_formulir;
        }

             if($dataku22=="Diterima"){
                $this->load->view('template/header');
                $this->load->view('template/sidebaruser',$sess_data);
                $this->load->view('cetak_kartu',$data);
                $this->load->view('template/footer');
             }else{
                $this->load->view('template/header');
                $this->load->view('template/sidebaruser',$sess_data);
                $this->load->view('cetak_kartu_pending',$data);
                $this->load->view('template/footer');
             }
        }

        public function registrasi_ulang($id){
            $sess_data = $this->session->userdata();
            $id =    array ('id' => $id);
            // $data['registrasi_ulang'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result(); 
            $data['registrasi_ulang'] = $this->M_ppdb->editdaftarulang($id,'daftarulang')->result();  
            $data2 = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   
    
            foreach($data2 as $dataku){
                $dataku22=$dataku->approve_lulus;
                $dataku23=$dataku->approve_formulir;
            }


    
                 if($dataku22=="Lulus"){
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser',$sess_data);
                    $this->load->view('registrasi_ulang',$data);
                    $this->load->view('template/footer');
                 }elseif ($dataku22=="Antrian") {
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser',$sess_data);
                    $this->load->view('keputusan_lulus');
                    $this->load->view('template/footer');
                }
                 else{
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser',$sess_data);
                    $this->load->view('tidak_lulus');
                    $this->load->view('template/footer');
                 }
            }
        
	
            public function updatelulususer(){
                $id_daftarulang            = $this->input->post('id_daftarulang');
                $id                        = $this->input->post('id');
                $tingkat                        = $this->input->post('tingkat');
                $nama_lengkap                        = $this->input->post('nama_lengkap');
                $nama_panggilan                        = $this->input->post('nama_panggilan');
                $nisn                        = $this->input->post('nisn');
                $tpt_lahir                        = $this->input->post('tpt_lahir');
                $tgl_lahir                        = $this->input->post('tgl_lahir');
                $agama                        = $this->input->post('agama');
                $suku                        = $this->input->post('suku');
                $jk                        = $this->input->post('jk');
                $goldar                        = $this->input->post('goldar');
                $anak_ke                        = $this->input->post('anak_ke');
                $dari_saudara                        = $this->input->post('dari_saudara');
                $alamat                        = $this->input->post('alamat');
                $jarak                        = $this->input->post('jarak');
                $desa                        = $this->input->post('desa');
                $kecamatan                        = $this->input->post('kecamatan');
                $kabupaten                        = $this->input->post('kabupaten');
                $provinsi                        = $this->input->post('provinsi');
                $nama_ayah                        = $this->input->post('nama_ayah');
                $tptlahir_ayah                        = $this->input->post('tptlahir_ayah');
                $tgllahir_ayah                        = $this->input->post('tgllahir_ayah');
                $pendidikan_ayah                        = $this->input->post('pendidikan_ayah');
                $pekerjaan_ayah                        = $this->input->post('pekerjaan_ayah');
                $penghasilan_ayah                        = $this->input->post('penghasilan_ayah');
                $alamat_ayah                        = $this->input->post('alamat_ayah');
                $desa_ayah                        = $this->input->post('desa_ayah');
                $kecamatan_ayah                        = $this->input->post('kecamatan_ayah');
                $kabupaten_ayah                        = $this->input->post('kabupaten_ayah');
                $provinsi_ayah                        = $this->input->post('provinsi_ayah');
                $hp_ayah                        = $this->input->post('hp_ayah');
                $nama_ibu                        = $this->input->post('nama_ibu');
                $tptlahir_ibu                        = $this->input->post('tptlahir_ibu');
                $tgllahir_ibu                        = $this->input->post('tgllahir_ibu');
                $pendidikan_ibu                        = $this->input->post('pendidikan_ibu');
                $pekerjaan_ibu                        = $this->input->post('pekerjaan_ibu');
                $penghasilan_ibu                        = $this->input->post('penghasilan_ibu');
                $alamat_ibu                        = $this->input->post('alamat_ibu');
                $desa_ibu                        = $this->input->post('desa_ibu');
                $kecamatan_ibu                        = $this->input->post('kecamatan_ibu');
                $kabupaten_ibu                        = $this->input->post('kabupaten_ibu');
                $provinsi_ibu                        = $this->input->post('provinsi_ibu');
                $hp_ibu                        = $this->input->post('hp_ibu');
                $sekolah_asal                        = $this->input->post('sekolah_asal');
                $npsn                        = $this->input->post('npsn');
                $alamat_sekolah                        = $this->input->post('alamat_sekolah');
                $kabupaten_sekolah                        = $this->input->post('kabupaten_sekolah');
                $provinsi_sekolah                        = $this->input->post('provinsi_sekolah');
                $penyakit                        = $this->input->post('penyakit');
                $olah_raga                        = $this->input->post('olah_raga');
                $seni                        = $this->input->post('seni');
                $tari                        = $this->input->post('tari');
                $lukis                        = $this->input->post('lukis');
                $drama                        = $this->input->post('drama');
                $sastra                        = $this->input->post('sastra');
                $organisasi                        = $this->input->post('organisasi');
                $prestasi                        = $this->input->post('prestasi');
                $alasan                        = $this->input->post('alasan');
                $tentang_sekolah                        = $this->input->post('tentang_sekolah');
          
               
        
                $data2 = array(
                    'id' => $id, 'tingkat' => "$tingkat", 'nama_lengkap' => "$nama_lengkap", 'nama_panggilan' => "$nama_panggilan", 'nisn' => "$nisn",
                    'tpt_lahir' => "$tpt_lahir", 'tgl_lahir' => "$tgl_lahir",'agama' => "$agama", 'suku' => "$suku", 'jk' => "$jk", 'goldar' => "$goldar",
                    'anak_ke' => "$anak_ke", 'dari_saudara' => "$dari_saudara", 'alamat' => "$alamat", 'jarak' => "$jarak", 'desa' => "$desa", 'kecamatan' => "$kecamatan",
                    'kabupaten' => "$kabupaten",'provinsi' => "$provinsi",'nama_ayah' => "$nama_ayah",'tptlahir_ayah' => "$tptlahir_ayah",'tgllahir_ayah' => "$tgllahir_ayah",
                    'pendidikan_ayah' => "$pendidikan_ayah",'pekerjaan_ayah' => "$pekerjaan_ayah", 'penghasilan_ayah' => "$penghasilan_ayah",'alamat_ayah' => "$alamat_ayah",
                    'desa_ayah' => "$desa_ayah",'kecamatan_ayah' => "$kecamatan_ayah",'kabupaten_ayah' => "$kabupaten_ayah",'provinsi_ayah' => "$provinsi_ayah",'hp_ayah' => "$hp_ayah",
                    'nama_ibu' => "$nama_ibu",'tptlahir_ibu' => "$tptlahir_ibu",'tgllahir_ibu' => "$tgllahir_ibu",
                    'pendidikan_ibu' => "$pendidikan_ibu",'pekerjaan_ibu' => "$pekerjaan_ibu", 'penghasilan_ibu' => "$penghasilan_ibu",'alamat_ibu' => "$alamat_ibu",
                    'desa_ibu' => "$desa_ibu",'kecamatan_ibu' => "$kecamatan_ibu",'kabupaten_ibu' => "$kabupaten_ibu",'provinsi_ibu' => "$provinsi_ibu",'hp_ibu' => "$hp_ibu",
                    'sekolah_asal' => "$sekolah_asal",'npsn' => "$npsn", 'alamat_sekolah' => "$alamat_sekolah", 'kabupaten_sekolah' => "$kabupaten_sekolah", 'provinsi_sekolah' => "$provinsi_sekolah",
                    'penyakit' => "$penyakit",'olah_raga' => "$olah_raga", 'seni' => "$seni",'tari' => "$tari",'lukis' => "$lukis", 'drama' => "$drama", 'sastra' => "$sastra",
                    'organisasi' => "$organisasi",'prestasi' => "$prestasi",'alasan' => "$alasan",'tentang_sekolah' => "$tentang_sekolah"
                ); 

                $where = array(
                    'id_daftarulang' => $id_daftarulang
                );
                
                $this->M_ppdb->updatedaftarulanguser($where,$data2,'daftarulang');
                redirect(base_url('user/registrasi_ulang/'.$id));    
            }
    
            public function cetakdaftarulang($id){
                $sess_data = $this->session->userdata();
                $id =    array ('id' => $id);
                $data['cetakdaftarulang'] = $this->M_ppdb->editdaftarulang($id,'daftarulang')->result();


                $data2 = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   
    
                foreach($data2 as $dataku){
                    $dataku22=$dataku->approve_lulus;
                }
    
    
        
                     if($dataku22=="Lulus"){
                        $this->load->view('template/header');
                        $this->load->view('template/sidebaruser',$sess_data);
                        $this->load->view('cetakdaftarulang',$data);
                        $this->load->view('template/footer');
                     }elseif ($dataku22=="Antrian") {
                        $this->load->view('template/header');
                        $this->load->view('template/sidebaruser',$sess_data);
                        $this->load->view('keputusan_cetak');
                        $this->load->view('template/footer');
                    }
                     else{
                        $this->load->view('template/header');
                        $this->load->view('template/sidebaruser',$sess_data);
                        $this->load->view('keputusan_cetak');
                        $this->load->view('template/footer');
                     }

            }

            public function cetakformulirdaftarulanguser(){
                // membaca data dari form
                $nama_lengkap    = $this->input->post('nama_lengkap');
                $nama_panggilan  = $this->input->post('nama_panggilan');
                $tingkat		 = $this->input->post('tingkat');
                $nisn	         = $this->input->post('nisn');
                $goldar	         = $this->input->post('goldar');
                $anak_ke         = $this->input->post('anak_ke');
                $dari_saudara    = $this->input->post('dari_saudara');
                $jarak	         = $this->input->post('jarak');
                $tpt_lahir	     = $this->input->post('tpt_lahir');
                $tgl_lahir       = $this->input->post('tgl_lahir');
                $agama	         = $this->input->post('agama');
                $suku	         = $this->input->post('suku');
                $jk		         = $this->input->post('jk');
                $alamat	         = $this->input->post('alamat');
                $desa	         = $this->input->post('desa');
                $kabupaten       = $this->input->post('kabupaten');
                $provinsi        = $this->input->post('provinsi');
                $nama_ayah	     = $this->input->post('nama_ayah');
                $pendidikan_ayah	= $this->input->post('pendidikan_ayah');
                $penghasilan_ayah	= $this->input->post('penghasilan_ayah');
                $hp_ayah	        = $this->input->post('hp_ayah');
                $tptlahir_ayah      = $this->input->post('tptlahir_ayah');
                $tgllahir_ayah      = $this->input->post('tgllahir_ayah');
                $pekerjaan_ayah     = $this->input->post('pekerjaan_ayah');
                $alamatayah        = $this->input->post('alamat_ayah');
                $desa_ayah          = $this->input->post('desa_ayah');
                $kabupaten_ayah     = $this->input->post('kabupaten_ayah');
                $provinsi_ayah      = $this->input->post('provinsi_ayah');
                $nama_ibu	     = $this->input->post('nama_ibu');
                $pendidikan_ibu	= $this->input->post('pendidikan_ibu');
                $penghasilan_ibu	= $this->input->post('penghasilan_ibu');
                $hp_ibu	        = $this->input->post('hp_ibu');
                $tptlahir_ibu      = $this->input->post('tptlahir_ibu');
                $tgllahir_ibu      = $this->input->post('tgllahir_ibu');
                $pekerjaan_ibu     = $this->input->post('pekerjaan_ibu');
                $alamat_ibu        = $this->input->post('alamat_ibu');
                $desa_ibu          = $this->input->post('desa_ibu');
                $kabupaten_ibu     = $this->input->post('kabupaten_ibu');
                $provinsi_ibu      = $this->input->post('provinsi_ibu');
                $sekolah_asal	   = $this->input->post('sekolah_asal');
                $npsn		       = $this->input->post('npsn');
                $almt_sekolah    = $this->input->post('alamat_sekolah');
                $kabupaten_sekolah		= $this->input->post('kabupaten_sekolah');
                $provinsi_sekolah		= $this->input->post('provinsi_sekolah');
                $penyakit	         = $this->input->post('penyakit');
                $olah_raga	         = $this->input->post('olah_raga');
                $seni	         = $this->input->post('seni');
                $tari	         = $this->input->post('tari');
                $lukis	         = $this->input->post('lukis');
                $drama	         = $this->input->post('drama');
                $sastra	         = $this->input->post('sastra');
                $organisasi	         = $this->input->post('organisasi');
                $prestasi	         = $this->input->post('prestasi');
                $alasan	         = $this->input->post('alasan');
                $tentang_sekolah	         = $this->input->post('tentang_sekolah');
    
    
    
                
                // memanggil dan membaca template dokumen yang telah kita buat
                $document = file_get_contents("formulir_pendaftaran_ulang.rtf");
                
                // isi dokumen dinyatakan dalam bentuk string
                $document = str_replace("#NAMA_LENGKAP", $nama_lengkap, $document);
                $document = str_replace("#NAMA_PANGGILAN", $nama_panggilan, $document);
                $document = str_replace("#TINGKAT", $tingkat, $document);
                $document = str_replace("#NISN", $nisn, $document);
                $document = str_replace("#GOLDAR", $goldar, $document);
                $document = str_replace("#ANAK_KE", $anak_ke, $document);
                $document = str_replace("#DARI_SAUDARA", $dari_saudara, $document);
                $document = str_replace("#JARAK", $jarak, $document);
                $document = str_replace("#TPTLAHIR", $tpt_lahir, $document);
                $document = str_replace("#TGLLAHIR", $tgl_lahir, $document);
                $document = str_replace("#AGAMA", $agama, $document);
                $document = str_replace("#SUKU", $suku, $document);
                $document = str_replace("#JK", $jk, $document);
                $document = str_replace("#ALAMAT", $alamat, $document);
                $document = str_replace("#DESA", $desa, $document);
                $document = str_replace("#KABUPATEN", $kabupaten, $document);
                $document = str_replace("#PROVINSI", $provinsi, $document);
                $document = str_replace("#NAMA_AYAH", $nama_ayah, $document);
                $document = str_replace("#PENDIDIKAN_AYAH", $pendidikan_ayah, $document);
                $document = str_replace("#PENGHASILAN_AYAH", $penghasilan_ayah, $document);
                $document = str_replace("#NOTEL", $hp_ayah, $document);
                $document = str_replace("#TPT_AYAH", $tptlahir_ayah, $document);
                $document = str_replace("#TGL_AYAH", $tgllahir_ayah, $document);
                $document = str_replace("#PEKERJAAN", $pekerjaan_ayah, $document);
                $document = str_replace("#TPTTINGGAL_AYAH", $alamatayah, $document);
                $document = str_replace("#KEL", $desa_ayah, $document);
                $document = str_replace("#KAB", $kabupaten_ayah, $document);
                $document = str_replace("#KAU", $provinsi_ayah, $document);
    
    
                $document = str_replace("#MOTHER", $nama_ibu, $document);
                $document = str_replace("#KUG", $pendidikan_ibu, $document);
                $document = str_replace("#KEK", $penghasilan_ibu, $document);
                $document = str_replace("#HP", $hp_ibu, $document);
                $document = str_replace("#KUH", $tptlahir_ibu, $document);
                $document = str_replace("#KUK", $tgllahir_ibu, $document);
                $document = str_replace("#KUB", $pekerjaan_ibu, $document);
                $document = str_replace("#KEH", $alamat_ibu, $document);
                $document = str_replace("#KEF", $desa_ibu, $document);
                $document = str_replace("#KAF", $kabupaten_ibu, $document);
                $document = str_replace("#KAG", $provinsi_ibu, $document);
                $document = str_replace("#HH", $sekolah_asal, $document);
                $document = str_replace("#HK", $npsn, $document);
                $document = str_replace("#HN", $almt_sekolah, $document);
                $document = str_replace("#HJ", $kabupaten_sekolah, $document);
                $document = str_replace("#HY", $provinsi_sekolah, $document);
                $document = str_replace("#PENYAKIT", $penyakit, $document);
                $document = str_replace("#OLAH_RAGA", $olah_raga, $document);
                $document = str_replace("#SENI", $seni, $document);
                $document = str_replace("#TARI", $tari, $document);
                $document = str_replace("#LUKIS", $lukis, $document);
                $document = str_replace("#DRAMA", $drama, $document);
                $document = str_replace("#SASTRA", $sastra, $document);
                $document = str_replace("#ORGANISASI", $organisasi, $document);
                $document = str_replace("#PRESTASI", $prestasi, $document);
                $document = str_replace("#ALASAN", $alasan, $document);
                $document = str_replace("#TENTANG_SEKOLAH", $tentang_sekolah, $document);
    
    
                
    
    
    
                
                // header untuk membuka file output RTF dengan MS. Word
                
                header("Content-type: application/msword");
                header("Content-disposition: inline; filename=formulir_pendaftaran_ulang.doc");
                header("Content-length: ".strlen($document));
                echo $document;
    
            }


    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('hal/login'));    
    }

}
