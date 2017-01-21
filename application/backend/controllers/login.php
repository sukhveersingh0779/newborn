<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('user_id')){   
		$master_body['content'] = 'dashboard';
		$this->load->view('index',$master_body);
	  }else{
		   $this->load->view('loginbar');
	  }
    }
	
	public function admin_login(){
		 $username=$this->input->post('username');
			$password=$this->input->POST('password');
			$this->load->model('loginmodel');
			$login_id=$this->loginmodel->login_valid($username,$password);
			if($login_id&&$username!=""&&$password!=""){      //credentials valid, valid user.
				$this->session->set_userdata('user_id',$login_id);
				$master_body['content'] = 'dashboard';  
				$this->load->view('index',$master_body);       //echo "data matched";
			}
			else{
				$this->session->set_flashdata('login_error','Invalid Username/Password');
				return redirect('login');                   //authentication failed.
			}
	}
	
	public function admin_logout(){
			//session_destroy();
			$this->session->unset_userdata('user_id');
			return redirect('login');
	}
	
	public function lost_password_request(){ 
			$this->load->view('lost_password');
	}
	
	public function lost_password_update(){
			return redirect('login');
	}
	
	
	
	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */

?>
