<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hal extends CI_Controller {

    function __construct(){
        parent::__construct();
        $datauser = $this->session->userdata('login'); 
		$role=$this->session->userdata('role');
		if ($datauser== "Berhasil") {
			redirect(base_url('user'));
		}
		if($role=="2"){
			redirect(base_url('user'));
		}

    }

    public function login()
	{
		$this->load->model('M_ppdb');

		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
			$this->load->view('login');	
		}
	}


    public function login_aksi(){
        $username = addslashes($this->input->post('username',true));
        $password = addslashes($this->input->post('password',true));
 
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
 
        if($this->form_validation->run() != FALSE){
            
 
             $ceklogin = $this->M_ppdb->cek_login_user($username,$password)->num_rows();
             $cekloginid = $this->M_ppdb->cek_login_user($username,$password)->result();
             if ($ceklogin == 1) {
                 foreach ($cekloginid as $cek) {
                     $id = $cek->id_pesertadidik;
                     $nama_lengkap = $cek->nama_siswa;
                     $role = $cek->role;
                     $status = $cek->status;
                     $username = $cek->username;
                     $password = $cek->password;
                    }
 

                     $sess_data =  array(
                         'username' => $username,
                         'password' => $password,
                         'id_pesertadidik' => $id,
                         'nama_siswa' => $nama_lengkap,
                         'role' => $role,
                         'status' => $status,
                         'login' => 'Berhasil'              
                        );
 
                //  redirect(base_url('home'));

                if ($sess_data['role'] == "2"){
                    $this->session->set_userdata($sess_data); 
                    redirect(base_url('user')); 
                 }
                 else{
                    $this->load->view('gagallogin');
                }
                 
             }else{
                 $this->load->view('error');
             }
 
        }else{
         $this->load->view('error');
 
        }
     }

     public function registrasi()
	{
		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
			$this->load->view('registrasi');
		}
	}

	public function getsiswaapi()
	{
		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
			$this->load->view('getsiswaapi');
		}
	}

    public function tambahuser(){
		$id_pesertadidik    = addslashes($this->input->get('hsh'));
		$username           = addslashes($this->input->get('nik'));
		$password           = addslashes($this->input->get('nisn'));
	
		
		$data = array(
			'id_pesertadidik' => $id_pesertadidik,
			'username' => $username,
			'password' => $password,
			'role' => "2",
			'approve_formulir' 	=> "Antrian",
			'approve_lulus' 	=> "Antrian",
			'approve_daftarulang' => "Antrian",
            'status' => 0

		);

		$hitungusername= $this->M_ppdb->tampildatapengguna1($username,$password);

		if ($hitungusername >=1) {
			$this->load->view('username_gagal');   
		}else{
            $hitungusernamedata= $this->M_ppdb->tampildatasiswa($username,$password);
           
                $this->M_ppdb->tambahuser($data,'pengguna');
                $this->load->view('status');  
  
		}
		

	}

    public function tambahnonisn(){
		$id_pesertadidik        = $this->input->post('id_pesertadidik');
		$id_sekolah             = $this->input->post('id_sekolah');
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
		$no_kip                 = $this->input->post('no_kip');
		$no_pkh                 = $this->input->post('no_pkh');
		
        $data = array(
			'id_pesertadidik' => $id_pesertadidik,
            'id_sekolah' => $id_sekolah,
			'kode_wilayah' => "0",
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
			'kebutuhan_khusus' => "Tidak Ada",
			'no_kip' => $no_kip,
			'no_pkh' => $no_pkh,
			'lintang' => "0",
			'bujur' => "0",
		);

		$data2 = array(
			'id_pesertadidik' => $id_pesertadidik,
			'username' => $nik,
			'password' => $nisn,
			'role' => "2",
			'approve_formulir' 	=> "Antrian",
			'approve_lulus' 	=> "Antrian",
			'approve_daftarulang' => "Antrian",
            'status' => 0
		);

		$hitungusername= $this->M_ppdb->tampildatapengguna1($nik,$nisn);

		if ($hitungusername >=1) {
			$this->load->view('username_gagal');   
		}else{
            $hitungusernamedata= $this->M_ppdb->tampildatasiswa($nik,$nisn);
            if ($hitungusernamedata>=1) {
                $this->load->view('username_gagal');   
            }else {
                $this->M_ppdb->tambahuser($data2,'pengguna');
                $this->M_ppdb->tambahdatasiswa($data,'datasiswa');
                $this->load->view('status');    
            }   
		}
		

	}


    public function cariuser(){
		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
			$nisn       = addslashes($this->input->get('nisn'));
			$data['cariuser'] = $this->M_ppdb->tampilsiswa($nisn,'datasiswa')->result();
	
			if ($data['cariuser']==null) {
				$this->load->view('data_tidak_ditemukan');    
			}else {
				$this->load->view('cariuser_tabel',$data);
			}
		}
	}

	public function cariuser_final(){

		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
		
			$nisn       = $this->input->get('nisn');
			$data['cariuser'] = $this->M_ppdb->tampilsiswa($nisn,'datasiswa')->result();
	
			if ($data['cariuser']==null) {
				$this->load->view('data_tidak_ditemukan');    
			}else {
				$this->load->view('cariuser',$data);
			}
	
		}
	}

		

	public function getdataapi(){
		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
		
			$nisn       = $this->input->get('nisn');
			$npsn       = $this->input->get('npsn');
	
			$source = "https://pelayanan.data.kemdikbud.go.id/vci/index.php/CPelayananData/getSiswa?kode_wilayah=061200&token=DA7739A2-2CA0-4080-8C29-BE809824A3DC&nisn={$nisn}&npsn={$npsn}";
	
			$data = file_get_contents($source);
			$datajson = json_decode($data);
	
			$dataarray['datajson']=$datajson;
	
			// var_dump($dataarray);
			$this->load->view('tanpanisn',$dataarray);
	
		
	}




		
		

        // $data['cariuser'] = $this->M_ppdb->tampilsiswa($nisn,'datasiswa')->result();
        // if ($data['cariuser']==null) {
        //     $this->load->view('data_tidak_ditemukan');    
        // }else {
        //     $this->load->view('cariuser',$data);
        // }

	}

	public function getdataapi_sekolah(){
		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
				$nisn       = $this->input->get('nisn');
				$npsn       = $this->input->get('npsn');

				$source = "https://pelayanan.data.kemdikbud.go.id/vci/index.php/CPelayananData/getSiswa?kode_wilayah=061200&token=DA7739A2-2CA0-4080-8C29-BE809824A3DC&nisn={$nisn}&npsn={$npsn}";

				$data = file_get_contents($source);
				$datajson = json_decode($data);

				$dataarray['datajson']=$datajson;

				// var_dump($dataarray);
				$this->load->view('inputsekolahapi',$dataarray);
		}

		
		

        // $data['cariuser'] = $this->M_ppdb->tampilsiswa($nisn,'datasiswa')->result();
        // if ($data['cariuser']==null) {
        //     $this->load->view('data_tidak_ditemukan');    
        // }else {
        //     $this->load->view('cariuser',$data);
        // }

	}

	public function addsekolahapi(){
		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
            $this->load->view('addsekolahapi');
		}

	}


    public function tanpanisn(){
        $data['joinsekolah'] = $this->M_ppdb->joinsekolah()->result();

		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
			$this->load->view('tanpanisn',$data);
		}


	}

	
    public function tambahsekolah(){
		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
			$this->load->view('tambahsekolah');
		}
		

	}

	public function insertsekolah(){
		$id_sekolah        		= $this->input->post('id_sekolah');
		$npsn		            = $this->input->post('npsn');
		$nama_sekolah           = $this->input->post('nama_sekolah');
       
		
        $data = array(
			'id_sekolah' => $id_sekolah,
            'npsn' => $npsn,
			'nama_sekolah' => $nama_sekolah
		);

		$hitungnpsn= $this->M_ppdb->tampilsekolahnpsn($npsn);

		if ($hitungnpsn >= 1) {
			$this->load->view('sekolah_ada'); 
		}else{
			$this->M_ppdb->updatesd($data,'data_sd');
			$this->load->view('sekolah_sukses'); 
		}
	}


	public function progress_data()
	{


		$data['tampilsekolah'] = $this->M_ppdb->tampilsekolah()->result();
		$data['kecamatan'] = $this->M_ppdb->tampilkuotawilayah();

		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
			$this->load->view('progress_hal',$data);
		}

	}



	public function tampil_sekolah_wilayah($id)
	{
		$data['tampil_sekolah_wilayah'] = $this->M_ppdb->tampil_sekolah_wilayah($id)->result();
		$data['tampil_sekolah_wilayah2'] = $this->M_ppdb->tampil_sekolah_wilayah2($id)->result();


		$this->load->view('tampil_sekolah_wilayah_hal',$data);
	}

}
