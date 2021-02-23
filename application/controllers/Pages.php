<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, OPTIONS, GET");
    class Pages extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
   
            $this->load->model('user'); //Load the Model here   
        }
        public function login()
        {
            $password=$this->input->post('password');
            $email=$this->input->post('email');

            if($this->input->post('email') == '' AND $this->input->post('password') =='')
            {
                echo "empty";
            }
            else
            {
                $config=$this->user->login($email);
                var_dump($config->password);
                if($config=='')
                {
                    echo "fail";
                }
                elseif($password ===$config->password)
                {
                    echo "success";
                }
                else
                {
                    echo "fail";
                }
            }
        }
        public function view($page='index')
        {
            {
                if(!file_exists(APPPATH.'views/'.$page.'.php'))
                {
                    show_404();
                }
                $data['title']=ucfirst($page);
                $this->load->view('index.php');
            }
        }
    }