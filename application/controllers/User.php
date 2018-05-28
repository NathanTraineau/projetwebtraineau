<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index (){
		$this->load->view('user/login');
           
           
    }
    public function registration(){
    	$this->load->view('user/registration');
    }

    public function confirmregistration(){
    	$this->form_validation->set_rules('username','username', 'is_unique[users.username]',
           array(
               'is_unique' => "username already taken"
           )
            );
 			if ($this->form_validation->run() == FALSE)
                {

                        $this->load->view('user/login');
                }
                else
                {
                        define("PREFIXE", "claire");
                        define("SUFFIXE", "marie");
                        $password= md5( sha1(PREFIXE) . $_POST['password'] . sha1(SUFFIXE) );
                        
                       $data=array(
                        "username" => htmlspecialchars($_POST['username']),
                        "firstname"=> htmlspecialchars($_POST['firstname']),
                        "lastname"=> htmlspecialchars($_POST['lastname']),
                        "fbpseudo" => htmlspecialchars($_POST['fbpseudo']),
                        "tel" => htmlspecialchars($_POST['tel']),
                        "password" => $password,
                        );
    					
                       $this->user_model->insert($data);
                       /*
                       set_cookie('username', $data['username'],'3600');
                       $data['myplanning']= $this->planning_model->getall(get_cookie('username'));
	*/
                       $this->load->view('user/myPlanning');
    }



}
}
?>
