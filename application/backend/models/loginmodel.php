<?php
class Loginmodel extends CI_Model{

	public function login_valid($username,$password){
	$user=$this->db->where(array('username'=>$username,'password'=>$password))
	               ->get('users');
	 if($user->num_rows()){
	 return $user->row()->id; 
      }
  else{
	return false;
      }

	} 

}

?>
