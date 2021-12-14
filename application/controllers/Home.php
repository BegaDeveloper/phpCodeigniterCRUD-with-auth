<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Members');
        
    }

    public function index(){
        $this->load->view('inc/header');
        $this->load->view('home');
        $this->load->view('inc/footer');
    }

    public function login(){
        $this->load->view('login');
    }

    //Registration 
    public function register_process(){
        if($this->input->post('reg')){
            $full_name = $this->input->post('full_name');
            $username = $this->input->post('username');
            $e_mail = $this->input->post('e_mail');
            $pass_word = md5($this->input->post('pass_word'));

            $data = array(
                'full_name' => $full_name,
                'username' => $username,
                'e_mail' => $e_mail,
                'pass_word' => $pass_word
            );
            
            $this->Members->get_members($data);
            redirect('home/login', 'refresh');

        } else {
            redirect('login', 'refresh');
        }
    } 

    //Login
    public function login_process(){
        if($this->input->post('log_in')){
            $username = $this->input->post('username');
            $pass_word = md5($this->input->post('pass_word'));

            $data = array(
                'username' => $username,
                'pass_word' => $pass_word
            );

            $list = $this->db->get_where('member', array('username' => $data['username']));
            foreach($list->result() as $user){
                if($data['username'] == $user->username && $data['pass_word'] == $user->pass_word)
                {
                    $_SESSION['username'] = $data['username'];
                    redirect('admin', 'refresh');
                } else  { 
                    echo "<script>alert ('Username or password incorect')</script>";
                    redirect('home/login', 'refresh');
                }
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    //Logout
    public function logout(){
        session_unset();
        session_destroy();
        redirect('home/login', 'refresh');
    }


}