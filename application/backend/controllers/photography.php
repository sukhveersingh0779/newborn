   
<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class photography extends CI_Controller {

	/**
	 * photography Page for this controller.
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
		$master_body['content'] = 'dashboard';  
		$this->load->view('index',$master_body); 
    }
    
    public function photography_request()
	{
		redirect('photography');
    }
    
    
}
?>
