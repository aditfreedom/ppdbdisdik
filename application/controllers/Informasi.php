<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    public function index()
	{
		$data['kuota'] = $this->M_ppdb->tampil_data_kuota();
		$data2 = $this->M_ppdb->cek_maintenance()->result();

		$status = $data2[0]->status;
		if ($status==1) {
		 $this->load->view('maintenance_page');
		 $this->session->sess_destroy();
		}else{
			$this->load->view('informasi',$data);
		}

		
	}



	public function kelulusan()
	{
		$data['kelulusan'] = $this->M_ppdb->tampilinfolulus()->result();
		$this->load->view('kelulusan',$data);


	}

}

?>