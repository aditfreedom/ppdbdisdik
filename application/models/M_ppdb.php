<?php

class M_ppdb extends CI_Model{

    public function tampil_data_kuota($where=NULL){
        if ($where !== NULL) {
            $this->db->where($where);
        }

        $this->db->select('ks.*, ds.*')
                 ->from('kuota_siswa ks')
                 ->join('data_smp ds', 'ds.id_sekolah = ks.id_sekolah');
        $query = $this->db->get();
        return $query->result_array();
     }

     public function tampilsekolah_kuota()
    {
        return $this->db->query("SELECT * FROM data_smp");  
    }

     public function tampildatapengguna(){
        return $this->db->query("SELECT * FROM pengguna
        LEFT JOIN datasiswa ON pengguna.id_pesertadidik = datasiswa.id_pesertadidik
        LEFT JOIN data_sd ON datasiswa.id_sekolah = data_sd.id_sekolah WHERE pengguna.role='2' ");
     }

     public function tampilakunsekolah($id){
        return $this->db->query("SELECT * FROM pengguna WHERE id_pesertadidik ='$id' ");
     }

     public function tampilsiswa($nisn){
        return $this->db->query("SELECT * FROM datasiswa LEFT JOIN data_sd ON
        datasiswa.id_sekolah = data_sd.id_sekolah WHERE nisn='$nisn' OR nik='$nisn'");
     }

     public function tampilsekolah_admin(){
        return $this->db->query("SELECT * FROM pengguna LEFT JOIN data_smp ON
        pengguna.id_pesertadidik = data_smp.id_sekolah WHERE role = 1");
     }

     public function joinsekolah(){
        return $this->db->query("SELECT * FROM data_sd ");
     }

     public function tampilwilayah(){
        return $this->db->query("SELECT * FROM data_wilayah ");
     }

     public function tampildatapengguna1($username,$password){
        $result = $this->db->query("SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
        return $result->num_rows();
     }
     

     public function tampil_data_pengguna($id){
        return $this->db->query("SELECT * FROM pengguna
        LEFT JOIN datasiswa ON pengguna.id_pesertadidik = datasiswa.id_pesertadidik
        LEFT JOIN data_sd ON datasiswa.id_sekolah = data_sd.id_sekolah WHERE pengguna.id='$id' ");
     }

     public function tampil_data_sekolahtujuan($id_pesertadidik){
        $result = $this->db->query("SELECT * FROM sekolah_tujuan WHERE id_pesertadidik='$id_pesertadidik'");
        return $result->num_rows();
     }

     public function tampil_data_berkas($id_pesertadidik){
        $result = $this->db->query("SELECT * FROM upload_berkas WHERE id_pesertadidik='$id_pesertadidik'");
        return $result->num_rows();
     }

     public function tampil_data_finalisasi($id_pesertadidik){
      return $this->db->query("SELECT * FROM pengguna WHERE id_pesertadidik='$id_pesertadidik'");

     }

     public function tampil_data_sekolahtujuan_admin($id_pesertadidik){
        return $this->db->query("SELECT * FROM sekolah_tujuan 
                                LEFT JOIN jenis_pendaftaran ON sekolah_tujuan.jenis_pendaftaran = jenis_pendaftaran.id_jenis
                                LEFT JOIN data_wilayah ON sekolah_tujuan.kode_wilayah = data_wilayah.kode_wilayah
                                LEFT JOIN data_desa ON sekolah_tujuan.id_desa = data_desa.id_desa
                                LEFT JOIN data_smp ON sekolah_tujuan.id_sekolah = data_smp.id_sekolah
                                WHERE id_pesertadidik='$id_pesertadidik'");
     }


     public function uploadberkas($id_pesertadidik){
        return $this->db->query("SELECT * FROM upload_berkas WHERE id_pesertadidik='$id_pesertadidik'");
     }

     

     public function tampildatasiswa($username,$password){
        $result = $this->db->query("SELECT * FROM datasiswa WHERE nik='$username' AND nisn='$password'");
        return $result->num_rows();
     }

    public function tambahkuota($data)
    {
        $this->db->insert('kuota_siswa',$data);
    }

    public function tambahsekolahtujuan($data)
    {
        $this->db->insert('sekolah_tujuan',$data);
    }

    public function tambahberkas($data)
    {
        $this->db->insert('upload_berkas',$data);
    }

    public function hapuskuota($id)
    {   
        $this->db->delete('kuota_siswa',$id);  
    }

    public function hapus_sekolah($id)
    {   
        $this->db->delete('pengguna',$id);  
    }
    
    public function editkuota($id)
    {
        return $this->db->get_where('kuota',$id);  
    }

    public function edit_sekolah($id)
    {
        return $this->db->get_where('pengguna',$id);  
    }

    public function updatekuota($where,$data)
    {   $this->db->where($where);
        $this->db->update('kuota_siswa',$data); 
    }

    public function update_sekolah($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }

    public function updatedatapengguna($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }

    public function updateformuliruser($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }

    public function updateformulirsiswa($where,$data)
    {   $this->db->where($where);
        $this->db->update('datasiswa',$data); 
    }

    public function updatesekolahtujuan($where,$data)
    {   $this->db->where($where);
        $this->db->update('sekolah_tujuan',$data); 
    }

    public function updateberkas($where,$data)
    {   $this->db->where($where);
        $this->db->update('upload_berkas',$data); 
    }

    public function tambahuser($data)
    {
        $this->db->insert('pengguna', $data);
    }

    public function tambahdatasiswa($data)
    {
        $this->db->insert('datasiswa', $data);
    }

    public function tampil_approval($id_sekolah){
        $query = $this->db->query("SELECT * from sekolah_tujuan 
                                    LEFT JOIN pengguna ON sekolah_tujuan.id_pesertadidik = pengguna.id_pesertadidik
                                    LEFT JOIN datasiswa ON sekolah_tujuan.id_pesertadidik = datasiswa.id_pesertadidik
                                    LEFT JOIN data_sd ON datasiswa.id_sekolah = data_sd.id_sekolah
                                    LEFT JOIN jenis_pendaftaran ON sekolah_tujuan.jenis_pendaftaran = jenis_pendaftaran.id_jenis
                                    WHERE sekolah_tujuan.id_sekolah ='$id_sekolah' AND pengguna.role='2'");
        return $query;
    }

    public function tampilinfolulus(){
        $query = $this->db->query("SELECT * from pengguna where approve_lulus = 'Lulus'");
        return $query;
    }

    public function tampil_lulus($id_sekolah){
        $query = $this->db->query("SELECT * from sekolah_tujuan 
        LEFT JOIN pengguna ON sekolah_tujuan.id_pesertadidik = pengguna.id_pesertadidik
        LEFT JOIN datasiswa ON sekolah_tujuan.id_pesertadidik = datasiswa.id_pesertadidik
        LEFT JOIN data_sd ON datasiswa.id_sekolah = data_sd.id_sekolah
        LEFT JOIN jenis_pendaftaran ON sekolah_tujuan.jenis_pendaftaran = jenis_pendaftaran.id_jenis
        WHERE sekolah_tujuan.id_sekolah ='$id_sekolah' AND pengguna.role='2' AND pengguna.approve_formulir='Diterima'");
        return $query;
    }

    public function tampil_daftarulang($id_sekolah){
        $query = $this->db->query("SELECT * from sekolah_tujuan 
        LEFT JOIN pengguna ON sekolah_tujuan.id_pesertadidik = pengguna.id_pesertadidik
        LEFT JOIN datasiswa ON sekolah_tujuan.id_pesertadidik = datasiswa.id_pesertadidik
        LEFT JOIN data_sd ON datasiswa.id_sekolah = data_sd.id_sekolah
        LEFT JOIN jenis_pendaftaran ON sekolah_tujuan.jenis_pendaftaran = jenis_pendaftaran.id_jenis
        WHERE sekolah_tujuan.id_sekolah ='$id_sekolah' AND pengguna.role='2' AND pengguna.approve_lulus='Lulus'");
        return $query;
    }

    public function tampilapprovalformulir($id){
        $query = $this->db->query("SELECT approve_formulir from pengguna where id = '$id' ");
        return $query;
    }

   

    public function tampilpengguna_lulus($id)
    {
        return $this->db->query("SELECT * FROM pengguna
        LEFT JOIN datasiswa ON pengguna.id_pesertadidik = datasiswa.id_pesertadidik
        WHERE pengguna.id='$id' ");  
    }

    public function tampilpengguna_daftarulang($id)
    {
        return $this->db->query("SELECT * FROM pengguna
        LEFT JOIN datasiswa ON pengguna.id_pesertadidik = datasiswa.id_pesertadidik
        WHERE pengguna.id='$id' ");  
    }

    public function tampilpengguna_upload($id)
    {
        return $this->db->query("SELECT * FROM pengguna
        LEFT JOIN datasiswa ON pengguna.id_pesertadidik = datasiswa.id_pesertadidik
        LEFT JOIN data_sd ON datasiswa.id_sekolah = data_sd.id_sekolah
        LEFT JOIN upload_berkas ON pengguna.id_pesertadidik = upload_berkas.id_pesertadidik
        LEFT JOIN sekolah_tujuan ON pengguna.id_pesertadidik = sekolah_tujuan.id_pesertadidik
        WHERE pengguna.id='$id' ");  
    }

    public function tampilupload($id)
    {
        return $this->db->query("SELECT * FROM upload_berkas WHERE id_pesertadidik='$id' ");  
    }

    public function tampilpengguna($id)
    {
        return $this->db->query("SELECT * FROM pengguna
        LEFT JOIN datasiswa ON pengguna.id_pesertadidik = datasiswa.id_pesertadidik
        LEFT JOIN data_sd ON datasiswa.id_sekolah = data_sd.id_sekolah WHERE pengguna.id_pesertadidik='$id' ");  
    }

    public function tampilpengguna2($id)
    {
        return $this->db->query("SELECT * FROM datasiswa LEFT JOIN data_sd ON
        data_sd.id_sekolah = datasiswa.id_sekolah WHERE id_pesertadidik='$id'");  
    }

    public function tampilpengguna3()
    {
        return $this->db->query("SELECT * FROM datasiswa LEFT JOIN data_sd ON
        data_sd.id_sekolah = datasiswa.id_sekolah");  
    }

    public function tampiliddaftarulang($id)
    {
        return $this->db->get_where('daftarulang',$id);  
    }

    public function hitungidlulus($where){
        $result = $this->db->query("SELECT*FROM daftarulang where id='$where'");
        return $result->num_rows();
    }

    public function tampilkuota($datauser){
        $query = $this->db->query("SELECT * FROM kuota_siswa
        LEFT JOIN jenis_pendaftaran ON kuota_siswa.id_kuota = jenis_pendaftaran.id_jenis
        LEFT JOIN data_smp ON kuota_siswa.id_sekolah = data_smp.id_sekolah
        WHERE kuota_siswa.id_sekolah='$datauser'");
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
   
    public function updateformulir($approve_formulir,$id)
    {   $this->db->query("UPDATE pengguna SET approve_formulir='$approve_formulir' WHERE id = '$id'");
    }

    public function updatefinalisasi($status,$id_pesertadidik)
    {   $this->db->query("UPDATE pengguna SET status='$status' WHERE id_pesertadidik = '$id_pesertadidik'");
    }

    public function updatelulus($approve_lulus,$id)
    {   $this->db->query("UPDATE pengguna SET approve_lulus='$approve_lulus' WHERE id = '$id'");
    }

    public function updatedaftarulanguser($where,$data)
    {   $this->db->where($where);
        $this->db->update('daftarulang',$data); 
    }

    public function updatedaftarulang($approve_daftarulang,$id)
    {   $this->db->query("UPDATE pengguna SET approve_daftarulang='$approve_daftarulang' WHERE id = '$id'");
    }
    
    public function tambahiddaftarulang($data)
    {
        $this->db->insert('daftarulang', $data);
    }

  

    public function editdaftarulang($id)
    {
        return $this->db->get_where('daftarulang',$id);  
    }


    function cek_login($username,$password){
        return $this->db->query("SELECT * FROM pengguna LEFT JOIN
        datasiswa ON pengguna.id_pesertadidik = datasiswa.id_pesertadidik
        LEFT JOIN data_sd ON datasiswa.id_sekolah = data_sd.id_sekolah
        where username='$username' AND password='$password'");
    }

    function cek_login_dinas($username,$password){
        return $this->db->query("SELECT * FROM pengguna
        where username='$username' AND password='$password'");
    }

    function getData($table, $where=NULL){
        if ($where !== NULL) {
            $this->db->where($where);
        }

        $query = $this->db->get($table);
        return $query->result_array();
    }

    function updateData($tbl, $data, $where){
        $this->db->where($where);
        return $this->db->update($tbl, $data);
    }

    function tambahData($table, $data){
        $insert = $this->db->insert($table, $data);
        return $insert;
    }

    function hapusData($table, $where){
        $insert = $this->db->delete($table, $where);
        return $insert;
    }

    function getZonasi($where=NULL){
        if ($where !== NULL) {
            $this->db->where($where);
        }

        $this->db->select('z.*, s.*, d.nama_desa as desa, w.nama_wilayah as kecamatan')
                 ->from('zonasi z')
                 ->join('data_smp s', 's.id_sekolah=z.id_sekolah')
                 ->join('data_desa d', 'd.id_desa = z.id_desa')
                 ->join('data_wilayah w', 'w.kode_wilayah = d.kode_wilayah');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>