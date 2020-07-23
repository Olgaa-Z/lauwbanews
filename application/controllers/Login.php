 <?php
class Login extends CI_Controller{

    public function __construct() {
        parent::__construct();
        if ($this->session->has_userdata('username')){
            redirect('Berita');
        }
    }

    function index() {     
        $this->load->view('login_admin');
        
    }

function select() {
            //menampilkan semua data dari tabel berita
            $response = array();
            $data['data'] = array();
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $result = $this->Model_m->login($username,md5($password))->result();

            if (sizeof($result) > 0) {
                foreach ($result as $value) {
                    $response['username'] = $value->username;
                    array_push($data['data'], $response);
                }

                $data['status'] = 0;
                $data['response'] = 'Data Ditemukan';

                die(json_encode($data));
            } else {
                $response['status'] = 1;
                $response['response'] = 'Tidak data yang ditampilkan';

                die(json_encode($response));
            }
        }

        function login() {

            $this->load->view('login_admin');
        }

        function proses_login() {
            $username = $this->input->post('in_username');
            $pass = $this->input->post('in_password');
            $kondisi = array(
            'username' => $username,
            'password' => $pass
        );
            
        $result = $this->Model_m->login($username, $pass);
        print_r($result);
        if (sizeof($result) > 0) {
            $data = array('username' => $username);
            $this->session->set_userdata($data);
            redirect('Home');
        } else {
            redirect('Login');
        }
    }


}

        

