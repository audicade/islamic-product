<?php 
class BisnisModel extends CI_Model
{

    public function uploadTesti($namaBerkas){
        $data = [
            
            "nama_pelanggan" => $this->input->post('namaP', true),
            "url_testimoni" => $namaBerkas,
         ];
        $this->db->insert('testimoni', $data);
    }
    public function getTesti(){
        //preparing query                            
        $result = $this->db->get('testimoni');
        return $result;
    }

}