<?php 
class BisnisModel extends CI_Model
{

    public function uploadTesti($namaBerkas){
        $data = [
            
            "url_testimoni" => $namaBerkas,
            "highlights" => $this->input->post('namaP', true),
         ];
        $this->db->insert('testimoni', $data);
    }
    public function getTesti(){
        //preparing query                            
        $result = $this->db->get('testimoni');
        return $result;
    }
    public function getTestiP(){
        //preparing query                            
        $result = $this->db->get('testimoni_produk');
        return $result;
    }
    public function getAgen($nama){
        $result = $this->db->query("SELECT no_telp FROM agen WHERE nama_agen='". $nama ."'");
        return $result;
    }
    public function getAgent($type){
        $queryAgent = " SELECT * FROM `agen` WHERE `kode` Like '%".$type."%' ";
        $agent = $this->db->query($queryAgent)->result_array();

        return $agent;
    }

    public function hapusDataAgent($kode)
    {
        $this->db->delete('agen', ['kode' => $kode]);
    }

    public function getAgentById($id)
   {
       return $this->db->get_where('agen', ['id_agen' => $id])->row_array();
   }

    public function updateAgent()
    {
        $data = [
            "kode" => $this->input->post('kodeA', true),
            "nama_agen" => $this->input->post('namaA', true),
            "no_telp" => $this->input->post('noTelpA', true),
            "domisili" => $this->input->post('domisiliA', true),
            
        ];

        $this->db->where('id_agen', $this->input->post('idA'));
        $this->db->update('agen', $data);
    }

    public function insertAgent()
    {
        $data = [
            "kode" => $this->input->post('kodeB', true),
            "nama_agen" => $this->input->post('namaB', true),
            "no_telp" => $this->input->post('noTelpB', true),
            "domisili" => $this->input->post('domisiliB', true),
            
        ];

        $this->db->insert('agen', $data);
    }

    public function getCountAgent() 
   {
      return $this->db->get('agen')->num_rows();
   }
   public function uploadTestiP($namaBerkas){
        $data = [
            
            "nama" => $this->input->post('namaTP', true),
            "url_testimoni" => $namaBerkas,
            "id_produk" => $this->input->post('idTP', true),
         ];
        $this->db->insert('testimoni_produk', $data);
    }

}