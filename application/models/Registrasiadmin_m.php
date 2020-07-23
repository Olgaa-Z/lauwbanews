<?php

class Registrasiadmin_m extends CI_Model{
    
    function registrasi($data){
        $this->db->insert('user', $data);
    }
    
    function login($data){
        return $this->db->get_where('user',$data)->result();
    }
    
    
}
