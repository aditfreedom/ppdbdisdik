<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hal extends CI_Controller {

    function __construct(){
        parent::__construct();
        $datauser = $this->session->userdata('login'); 
		if (!empty($datauser)) {
			redirect(base_url('home'));
		}
    }

    public function login()
	{
		$this->load->model('M_ppdb');
		$this->load->view('login');	
	}


    public function login_aksi(){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
 
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
 
        if($this->form_validation->run() != FALSE){
             $where = array(
                 'username' => $username,
                 'password' => $password,
             );
 
             $ceklogin = $this->M_ppdb->cek_login($where)->num_rows();
             $cekloginid = $this->M_ppdb->cek_login($where)->result();
             if ($ceklogin > 0) {
                 foreach ($cekloginid as $cek) {
                     $id = $cek->id;
                     $nama_lengkap = $cek->nama_lengkap;
                     $nisn = $cek->nisn;
                     $no_hp = $cek->no_hp;
                     $role = $cek->role;
                     $approve_formulir = $cek->approve_formulir;
                     $approve_lulus = $cek->approve_lulus;
                     $username = $cek->username;
                     $password = $cek->password;
                    }
 
                     
                     $sess_data =  array(
                         'username' => $username,
                         'password' => $password,
                         'id' => $id,
                         'nama_lengkap' => $nama_lengkap,
                         'nisn' => $nisn,
                         'no_hp' => $no_hp,
                         'role' => $role,
                         'approve_formulir' => $approve_formulir,
                         'approve_lulus' => $approve_lulus,
                         'login' => 'Berhasil'              
                        );
 
                //  redirect(base_url('home'));

                 if ($sess_data['role'] == 1){
                    $this->session->set_userdata($sess_data); 
                     redirect(base_url('home')); 
                 }

                 else if ($sess_data['role'] == 2){
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
		$this->load->view('registrasi');
	}

    public function tambahuser(){
		$id_pesertadidik       = $this->input->get('hsh');
		$username           = $this->input->get('nik');
		$password           = $this->input->get('nisn');
	
		
		$data = array(
			'id_pesertadidik' => $id_pesertadidik,
			'username' => $username,
			'password' => $password,
			'role' => "2",
			'approve_formulir' 	=> "Antrian",
			'approve_lulus' 	=> "Antrian",
			'approve_daftarulang' => "Antrian"
		);

		$hitungusername= $this->M_ppdb->tampildatapengguna1($username,$password);

		if ($hitungusername >=1) {
			$this->load->view('username_gagal');   
            $this->load->view('registrasi');     
		}else{
			$this->M_ppdb->tambahuser($data,'pengguna');
			$this->load->view('status');    
            $this->load->view('login');     
		}
		

	}

    public function cariuser(){
		$nisn       = $this->input->get('nisn');
        $data['cariuser'] = $this->M_ppdb->tampilsiswa($nisn,'datasiswa')->result();
        $this->load->view('cariuser',$data);


		

	}


}
