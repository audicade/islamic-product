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

}