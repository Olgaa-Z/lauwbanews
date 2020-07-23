<?php

class Model_m extends CI_Model
{

    function select_database(){
        return $this->db->query("select * from berita")->result();
    }

    function select_berita(){
        $query = $this->db->query("SELECT * FROM berita order by tgl_berita desc limit 10");
        return $query->result();
    }

    function insert_database($data){
        $this->db->insert('berita', $data);
    }

    function select_edit($id){
        return $this->db->query("Select * FROM berita WHERE id_berita='$id'")->result();
    }

    function edit_database($id,$data){
        $this->db->where('id_berita',$id);
        $this->db->update('berita',$data);
    }

    function delete($id){
        $this->db->where('id_berita',$id);
        $this->db->delete('berita');
    }

    function login($username,$password)
    {
        $query=$this->db->query("select * from user where email = '$username' and password='$password'");
        return $query;
    }


    public function getListBerita()
    {
        $this->db->select('*');

        $this->db->from('berita');
        $this->db->order_by('tgl_berita', 'desc');
        
        return $this->db->get()->result();
    }
	
	public function getListVideo()
    {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->order_by('tgl_video', 'desc');
        
        return $this->db->get()->result();
    }
	
	public function getBeritaPopuler()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('viewer_berita', 'desc');
        
        return $this->db->get()->result();
    }

    public function getDetailBerita($idBerita)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id_berita', $idBerita);
        
        return $this->db->get()->result();
    }

    public function cariBerita($judul)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->like('judul_berita', $judul);

        return $this->db->get()->result();
    }
}
