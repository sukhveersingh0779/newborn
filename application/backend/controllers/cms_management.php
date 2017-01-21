   
<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class cms_management extends CI_Controller {

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
		$master_body['content'] = 'dashboard';  
		$this->load->view('index',$master_body); 
    }
    
    public function position_request()
	{
		$this->load->model('cms_mgmt_model');
		$record = $this->cms_mgmt_model->get_position_data();
		$master_body['content'] = 'position';  
		$master_body['position_data'] = $record;  
		$this->load->view('index',$master_body); 
    }
    
    public function position_add()
	{
		$page=$this->input->post('position_name');
		$posarray=$this->input->post();
		$posarray['status'] = 1;
		$order_array = array('top'=>1,'left'=>2,'right'=>3,'footer'=>4);
		$posarray['order'] = ($order_array[$page]!='') ? $order_array[$page] : 0;
		$this->load->model('cms_mgmt_model');
		if($this->cms_mgmt_model->check_position_entry($posarray)){
		  $this->session->set_flashdata('pos_add', 'Position with that name already exist.');
		}
		else{
			$response = $this->cms_mgmt_model->position_add_data($posarray);
		    ($response)?$this->session->set_flashdata('pos_add', 'Position added successfully.'):$this->session->set_flashdata('pos_add', 'Failed to add position.');
		}
		redirect('cms_management/position_request');
    }
    
    public function pages_request()
	{
		$this->load->model('cms_mgmt_model');
		$record = $this->cms_mgmt_model->get_pages_data();
		$master_body['content'] = 'pages_list';  
		$master_body['pages_data'] = $record;  
		$this->load->view('index',$master_body);
    }
    
    public function pages_add_view()
	{
		
		$master_body['content'] = 'page_add';  
		$this->load->view('index',$master_body);
    }
    
    public function pages_add(){
		$post = $this->input->post();
		$post['created_at'] = time();
		$post['modified_at'] = time();
		$this->load->model('cms_mgmt_model');
		$response = $this->cms_mgmt_model->page_add_data($post);
		($response)?$this->session->set_flashdata('page_add', 'Page added successfully.'):$this->session->set_flashdata('page_add', 'Failed to add page.');
		redirect('cms_management/pages_request');
	}
    
    public function link_page_request()
	{
		$this->load->model('cms_mgmt_model');
		$pos_data = $this->cms_mgmt_model->get_position_data();
		$page_data = $this->cms_mgmt_model->get_pages_data();
		$link_page_data = $this->cms_mgmt_model->get_link_pages_data();
		$link_pos_page_data['position_data'] = $pos_data;
		$link_pos_page_data['page_data'] = $page_data;
		$link_pos_page_data['link_page_data'] = $link_page_data;
		$master_body['content'] = 'link_pages_list';  
		$master_body['link_pos_page_data'] = $link_pos_page_data;  
		$this->load->view('index',$master_body);
    }
    
    public function link_page_add(){
		$post = $this->input->post();
		$post['status'] = 1;
		$post['order'] = 1;
		$this->load->model('cms_mgmt_model');
		$response = $this->cms_mgmt_model->lnk_page_add_data($post);
		($response)?$this->session->set_flashdata('lnk_page_add', 'Link Page added successfully.'):$this->session->set_flashdata('lnk_page_add', 'Failed to add Link Page.');
		redirect('cms_management/link_page_request');
	}
}
?>
