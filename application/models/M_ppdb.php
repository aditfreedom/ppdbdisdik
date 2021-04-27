<?php

class M_ppdb extends CI_Model{

    public function tampil_data_kuota(){
        return $this->db->get('kuota');
     }

     public function tampildatapengguna(){
        return $this->db->query("SELECT * FROM pengguna WHERE NOT role='0' ");
     }

     public function tampilsiswa($nisn){
        return $this->db->query("SELECT * FROM datasiswa LEFT JOIN data_sd ON
        datasiswa.id_sekolah = data_sd.id_sekolah WHERE nisn='$nisn' OR nik='$nisn'");
     }

     public function tampildatapengguna1($username,$password){
        $result = $this->db->query("SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
        return $result->num_rows();

     }

    public function tambahkuota($data)
    {
        $this->db->insert('kuota',$data);
    }

    public function hapuskuota($id)
    {   
        $this->db->delete('kuota',$id);  
    }
    public function editkuota($id)
    {
        return $this->db->get_where('kuota',$id);  
    }

    public function updatekuota($where,$data)
    {   $this->db->where($where);
        $this->db->update('kuota',$data); 
    }

    public function updatedatapengguna($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }

    public function updateformuliruser($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }

    public function tambahuser($data)
    {
        $this->db->insert('pengguna', $data);
    }

    public function tampil_approval(){
        $query = $this->db->query("SELECT * from pengguna where approve_formulir = 'Antrian' OR approve_formulir = 'Diterima' OR approve_formulir = 'Ditolak'");
        return $query;
    }

    public function tampilinfolulus(){
        $query = $this->db->query("SELECT * from pengguna where approve_lulus = 'Lulus'");
        return $query;
    }

    public function tampil_lulus(){
        $query = $this->db->query("SELECT * from pengguna where (approve_lulus = 'Antrian' OR approve_lulus = 'Lulus' OR approve_lulus = 'Tidak Lulus') AND approve_formulir = 'Diterima' ");
        return $query;
    }

    public function tampilapprovalformulir($id){
        $query = $this->db->query("SELECT approve_formulir from pengguna where id = '$id' ");
        return $query;
    }

    public function tampilpengguna($id)
    {
        return $this->db->get_where('pengguna',$id);  
    }


    public function tampiliddaftarulang($id)
    {
        return $this->db->get_where('daftarulang',$id);  
    }

    public function hitungidlulus($where){
        $result = $this->db->query("SELECT*FROM daftarulang where id='$where'");
        return $result->num_rows();
    }

    public function tampilpensd(){
        $query = $this->db->query("SELECT kuota FROM kuota WHERE jenis='Zonasi' ");
        return $query;
    }

    public function tampilpensmp(){
        $query = $this->db->query("SELECT kuota FROM kuota WHERE jenis='Afirmasi' ");
        return $query;
    }

    public function tampilpensma(){
        $query = $this->db->query("SELECT kuota FROM kuota WHERE jenis='Pindahan Orang Tua' ");
        return $query;
    }

    public function tampilpindsd(){
        $query = $this->db->query("SELECT kuota FROM kuota WHERE jenis='Jalur Prestasi' ");
        return $query;
    }

    public function tampilpindsmp(){
        $query = $this->db->query("SELECT kuota FROM kuota WHERE jenis='Pindahan SMP' ");
        return $query;
    }

    public function tampilpindsma(){
        $query = $this->db->query("SELECT kuota FROM kuota WHERE jenis='Pindahan SMA' ");
        return $query;
    }
    
    public function hitunguser(){
        $result = $this->db->query("SELECT*FROM pengguna");
        return $result->num_rows();
    }

    public function hitungsdformulir(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE jenis='Peserta Didik Baru SD' AND approve_formulir='Diterima'");
        return $result->num_rows();
    }
    
    public function hitungsmpformulir(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE jenis='Peserta Didik Baru SMP' AND approve_formulir='Diterima'");
        return $result->num_rows();
    }

    public function hitungsmaformulir(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE jenis='Peserta Didik Baru SMA' AND approve_formulir='Diterima'");
        return $result->num_rows();
    }

    public function hitungpindsdformulir(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE jenis='Pindahan SD' AND approve_formulir='Diterima'");
        return $result->num_rows();
    }

    public function hitungpindsmpformulir(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE jenis='Pindahan SMP' AND approve_formulir='Diterima'");
        return $result->num_rows();
    }

    public function hitungpindsmaformulir(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE jenis='Pindahan SMA' AND approve_formulir='Diterima'");
        return $result->num_rows();
    }

    public function hitungpdlulus(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE approve_lulus='Lulus'");
        return $result->num_rows();
    }

    public function hitungpdtidaklulus(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE approve_lulus='Tidak Lulus'");
        return $result->num_rows();
    }

    public function hitungpddaftarulang(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE approve_daftarulang='Diterima'");
        return $result->num_rows();
    }

    public function hitungpdtidakdaftarulang(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE approve_lulus='Ditolak'");
        return $result->num_rows();
    }

    public function hitungformulir(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE (jenis='Peserta Didik Baru SD' OR jenis='Peserta Didik Baru SMP' OR jenis='Peserta Didik Baru SMA') AND approve_formulir='Diterima'");
        return $result->num_rows();
    }

    public function hitungformulirpindahan(){
        $result = $this->db->query("SELECT*FROM pengguna WHERE (jenis='Pindahan SD' OR jenis='Pindahan SMP' OR jenis='Pindahan SMA') AND approve_formulir='Diterima'");
        return $result->num_rows();
    }
   
    public function updateformulir($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }

    public function updatelulus($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }

    public function updatedaftarulanguser($where,$data)
    {   $this->db->where($where);
        $this->db->update('daftarulang',$data); 
    }

    public function updatedaftarulang($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }
    
    public function tambahiddaftarulang($data)
    {
        $this->db->insert('daftarulang', $data);
    }

    public function tampil_daftarulang(){
        $query = $this->db->query("SELECT * from pengguna where (approve_daftarulang = 'Antrian' OR approve_daftarulang = 'Diterima' OR approve_daftarulang = 'Ditolak') AND approve_lulus = 'Lulus' ");
        return $query;
    }

    public function editdaftarulang($id)
    {
        return $this->db->get_where('daftarulang',$id);  
    }


    function cek_login($where){
        return $this->db->get_where('pengguna',$where);
    }
}
?>