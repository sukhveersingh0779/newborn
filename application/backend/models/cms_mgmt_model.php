

<?php
class cms_mgmt_model extends CI_Model{

	  
	 public function check_position_entry($data){
		$result=$this->db->where(array('position_name'=>$data['position_name'],'order'=>$data['order']))
	               ->get('position');
		return ($result->num_rows()) ? $result->row()->id : false;
	  }
	  
	 public function position_add_data($data){
		return $this->db->insert('position',$data);
	  }
	  
	 public function get_position_data(){
		$query=$this->db->select('*')
							->from('position')
							//->limit($limit,$offset)
							->order_by('id','DESC')
                            ->get();
						return $query->result();
	  }
	  
	 public function page_add_data($data){
		return $this->db->insert('pages',$data);
	  }
	  
	 public function get_pages_data(){
		$query=$this->db->select('*')
							->from('pages')
							//->limit($limit,$offset)
							->order_by('id','DESC')
                            ->get();
						return $query->result();
	  }
	 
	 public function lnk_page_add_data($data){
		return $this->db->insert('link_pages',$data);
	  }
	  
     public function get_link_pages_data(){
		//$query = $this->db->query("select pos_table.position_name,page_table.page_name,lnk_table.* from position as pos_table left join pages as page_table on pos_table.page_table == page_table.page_table left join link_pages as lnk_table on pos_table.lnk_table == lnk_table.lnk_table and lnk_table.page_table == page_table.page_table");
	 //$query = $this->db->query("SELECT a.* as position,b.* as pages,c.* as link_pages FROM position a INNER JOIN pages c ON a.id = c.position_code INNER JOIN course c ON b.id  = c.page_code ");
	$query = $this->db->query("select pos.position_name,pg.page_name,lnp.*   from pages pg, position pos,link_pages lnp where lnp.page_code=pg.id and lnp.position_code=pos.id");
	 //echo "hello";
	  //echo "<pre>";
	  //print_r($query);die;
	  return $query->result();
	  }
	  
}

?>
