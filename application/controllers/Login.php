<?php 
class Login extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('M_login');
    }

    public function index(){
        $this->load->view('form_login');
    }
    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->M_login->cek_admin($username,$password)->num_rows();
        if ($cek > 0){
            $data_Session = array(
                'nama' => $username,
                'status' => "login"
             );
            $this->session->set_userdata($data_Session);
            echo "Anda telah berhasil login";
        }else{
            echo "Username dan password salah !";
        }
    }
}
?>