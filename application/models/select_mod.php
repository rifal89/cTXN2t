<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Select_mod extends CI_Model {

	function __construct() {
		parent::__construct();		
	}

	function get_category($id=NULL) {
		$this->db->select('tb_product_category.*');
		$this->db->from('tb_product_category');

		if($id != NULL) $this->db->where('category_id', $id);		
		
       	$result = $this->db->get();

        if($id != NULL){
            return $var = ($result->num_rows() > 0)? $result->row_array() : FALSE ;    
        }else{
            return $var = ($result->num_rows() > 0)? $result->result_array() : FALSE ;
        }		
	}


}