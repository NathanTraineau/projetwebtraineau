<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
    
     protected $table ='user';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
  
    
 	$this->db->set('username', $data['username'])
 	->set('password', $data['password'])
        ->set('firstname', $data['firstname'])
 	->set('lastname', $data['lastname'])
 	->set('fbpseudo', $data['fbpseudo'])
 	->set('tel', $data['tel'])
 	->insert($this->table);

}


}