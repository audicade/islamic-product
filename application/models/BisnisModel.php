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
    public function getAgen($nama){
        $result = $this->db->query("SELECT no_telp FROM agen WHERE nama_agen='". $nama ."'");
        return $result;
    }
    public function getAgent(){
        $queryAgent = " SELECT * FROM `agen` ";
        $agent = $this->db->query($queryAgent)->result_array();

        return $agent;
    }

    public function hapusDataAgent($id)
    {
        $this->db->delete('agen', ['id_agen' => $id]);
    }

    public function getAgentById($id)
   {
       return $this->db->get_where('agen', ['id_agen' => $id])->row_array();
   }

    public function ubahAgent()
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

}