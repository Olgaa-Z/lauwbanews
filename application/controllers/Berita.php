<?php
class Berita extends Ci_Controller{

    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('Model_m');
    //     if (!$this->session->has_userdata('username')) {
    //         redirect('Login');
    //     }
    // }

	function form(){
		$this->load->view('form_tambah_berita');
	}

	function index() {     
        $this->load->view('berita_v');
        
    }

    function delete($id){
    	$this->Model_m->delete($id);
    	redirect('Berita');
    }

    function insert(){
         $nm_file = time() . '.png';   
         $config['upload_path'] = './assets/gambar/';
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;   
         $config['overwrite'] = TRUE;
         $this->upload->initialize($config);

        //gambar == name dari form

         if ($this->upload->do_upload('gambar'))
             {   
             $gambar = $this->upload->data();   
             $data = array(      
             //judul_berita diambil dari $row dan database 
                 'judul_berita' => $this->input->post('judul'),
                 'isi_berita' => $this->input->post('isi'), 
                 'kategori_berita' => $this->input->post('kategori'),      
                 'gambar' => $gambar['file_name']);
             $this->Model_m->insert_database($data);
         
         }else {   

             $error = array(   
                 'error' => $this->upload->display_errors());  
             echo json_encode($error);
         
         } 
         redirect('Berita');
    }





    function edit($id){
    	$data['berita'] = $this->Model_m->select_edit($id);
    	$this->load->view('form_edit_berita', $data);
    }

    function editform(){
        $id_berita = $this->input->post('id_berita');
        $nm_file = $this->input->post('nm_foto');
        $config['upload_path'] = './assets/gambar/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                'judul_berita' => $this->input->post('judul'),
                'isi_berita' => $this->input->post('isi'),
                'kategori_berita' => $this->input->post('isi'),
                'gambar' => $gambar['file_name']
            );
        } else {
            $data = array(
                'judul_berita' => $this->input->post('judul'),
                'isi_berita' => $this->input->post('isi'),
                'kategori_berita' => $this->input->post('isi')
               
            );  
        }
        
        $this->Model_m->edit_database($id_berita, $data);
        redirect('Berita');
    }
}
