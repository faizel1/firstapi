<?php defined('BASEPATH') or exit('No direct script access allowed');


class Validation extends MY_Controller
{
    //
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layout,....
     */
    protected $data = array();

    
    
        public function __construct(){
    
            parent::__construct();
            $this->load->model('Validation_Model');
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
               
                }
    
    
            public function index()
            {
    
    
              $this->login();
    
       
            }
    
    
    public function login(){
     
    
        if(!isset($_POST['loginbtn'])){
        $this->load->view('login');}
    
        
        if(isset($_POST['loginbtn'])){
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    
            if ($this->form_validation->run() == FALSE)
            {
    
                 $this->load->view('login');
            }
            else
            {
    
                                       
            $array=array("email"=>$_POST['email'],
    
            "password"=>$_POST['password']
            );
            $sql=$this->Validation_Model->getonedata( $array,"user");
            
            if(count($sql)>0){    
            
                foreach($sql as $key){
                    $_SESSION['username']=$key->fullname;
                    $_SESSION['id']=$key->id;
                }
                $_SESSION['user']='set';
                redirect('Home');
               
                }
                else{
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
    
                    $this->load->view('login',$data);
    
                }
            }  
    
    }}
    
    
            
            public function register(){
    
                if(!isset($_POST['registerbtn'])){
                    $this->load->view('register');
    
                }
    
    
                if(isset($_POST['registerbtn'])){
                       
                    $this->form_validation->set_rules('username', 'Username', 'required');
                    $this->form_validation->set_rules('password', 'Password', 'required');
                    $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
    
                    if ($this->form_validation->run() == FALSE)
                    {
    
                         $this->load->view('register');
                    }
                    else
                    {
                        
        $array=array(
    
            "fullname"=>$_POST['username'],
            "email"=>$_POST['email'],
            "password"=>$_POST['password']
            );
        
        
            $sql=$this->Validation_Model->adddata( $array,"user");
            $data['success_msg'] = 'registerd successfully, now you can login.'; 
    
                        redirect('Validation/login',$data);
                }
    
                }
    
        }
       
            
            }
            