<?php
class login extends DController {
    
    public function __construct(){
        $message = array();
        $data = array();
      
        parent::__construct();
        
    }
    public function index(){
         $this->login();
    }
    public function login(){
        // $this->load->view('header');  
        Session::init();
        if(Session::get("login")==true){
            header("Location:".BASE_URL."/?url=login/dashboard");
        }
        $this->load->view('cpnael/login');
        // $this->load->view('footer');  
    }
    public function dangky(){
        // $this->load->view('header');  
        Session::init();
        // if(Session::get("login")==true){
        //     header("Location:".BASE_URL."/?url=index");
        // }

        $this->load->view('cpnael/dangky');
        // header("Location:".BASE_URL."/?url=index");
        // $this->load->view('footer');  
    }
    public function dashboard(){
        Session::checkSession();
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/dashboard');
        
        $this->load->view('cpnael/menu');
        $this->load->view('cpnael/footer');

    }
    public function authentication(){
         $username= $_POST['Username'];
        $password= md5($_POST['Password']);
        $table_admin = "tbl_admin";
        $loginmodel = $this->load->model('loginmodel');
        $count = $loginmodel->login($table_admin, $username, $password);
        if($count==0){
            $message['msg']="USER hoặc mật khẩu sai, xin kiểm tra lại";
            header("Location:".BASE_URL."/?url=login");
        }
        else{
           $result= $loginmodel->getlogin($table_admin, $username, $password);
           echo $result[0]['username'];
           echo $result[0]['password'];
           Session::init();
           Session::set('login',true);
           Session::set('username',$result[0]['username']);
           Session::set('username',$result[0]['admin_id']);

            header("Location:".BASE_URL."/?url=login/dashboard");
        }
    }
    public function logout(){
        Session::init();
        unset($_SESSION['login']);
        header("Location:".BASE_URL."/?url=login");
    }
    
   
}   