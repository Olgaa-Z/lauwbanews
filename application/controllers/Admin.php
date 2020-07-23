<?php
class Account extends CI_Controller{
    
    function index() { 
       // $this->load->library('session');
        $this->load->view('registrasi_admin');
        
    }
    
    function insert() { 
        $data = array(     
             'username' => $this->input->post('in_username'),     
             'password' => $this->input->post('in_password') );   
        $this->Registrasi_m->registrasi($data); 
        redirect('Admin/login');
        
    }
    
    function login(){
        $this->load->view('login_v');
           
    }

    function proses_login(){
        $username = $this->input->post('in_username');
        $pass = $this->input->post('in_password');
        $kondisi = array(
            'username'=>$username,
            'password'=>$pass
        );
        $result=$this->Registrasiadmin_m->login($kondisi);
        print_r($result);
        if(sizeof($result)>0){
            $data = array('username'=>$username);
            $this->session->set_userdata($data);
            redirect('Berita');
        }else{
            echo 'login gagal!!';
        }
                
    }
    
    
    
}