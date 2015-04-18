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

	function get_product($category_id=NULL, $product_id=NULL) {
		$this->db->select('tb_product.*, tb_shop.shop_name');
		$this->db->from('tb_product');

		if($category_id != NULL) $this->db->where('category_id', $category_id);
		if($product_id != NULL) $this->db->where('product_id', $product_id);

		$this->db->join('tb_shop', 'tb_product.shop_id = tb_shop.shop_id', 'inner');
		
       	$result = $this->db->get();

        if($product_id != NULL){
            return $var = ($result->num_rows() > 0)? $result->row_array() : FALSE ;    
        }else{
            return $var = ($result->num_rows() > 0)? $result->result_array() : FALSE ;
        }     	
	}

	function get_product_review($product_id=NULL) {
		$this->db->select('tb_product_rate.*, tb_user.name, tb_user.avatar');
		$this->db->from('tb_product_rate, tb_user');
		$this->db->where('tb_product_rate.user_id', 'tb_user.user_id', FALSE);
       	
       	if($product_id != NULL) $this->db->where('product_id', $product_id);

       	$result = $this->db->get();
       	return $var = ($result->num_rows() > 0)? $result->result_array() : FALSE ;
	}

	function get_product_rate_total($product_id=NULL) {      		
		$result = $this->db->query("SELECT CAST(tb_product_rate.rate as UNSIGNED) as rate FROM tb_product_rate 
									WHERE product_id='$product_id' ");

       	return $var = ($result->num_rows() > 0)? $result->row_array() : FALSE ;    	
	}

	function get_rate_5_star($product_id=NULL) {
		$result = $this->db->query("SELECT COUNT(tb_product_rate.rate) as rate FROM tb_product_rate WHERE product_id='$product_id' AND rate='5' ");
       	return $var = ($result->num_rows() > 0)? $result->row_array() : 0 ;
	}

	function get_rate_4_star($product_id=NULL) {
		$result = $this->db->query("SELECT COUNT(tb_product_rate.rate) as rate FROM tb_product_rate WHERE product_id='$product_id' AND rate='4' ");
       	return $var = ($result->num_rows() > 0)? $result->row_array() : 0 ; 		
	}

	function get_rate_3_star($product_id=NULL) {
		$result = $this->db->query("SELECT COUNT(tb_product_rate.rate) as rate FROM tb_product_rate WHERE product_id='$product_id' AND rate='3' ");
       	return $var = ($result->num_rows() > 0)? $result->row_array() : 0 ; 		
	}

	function get_rate_2_star($product_id=NULL) {
		$result = $this->db->query("SELECT COUNT(tb_product_rate.rate) as rate FROM tb_product_rate WHERE product_id='$product_id' AND rate='2' ");
       	return $var = ($result->num_rows() > 0)? $result->row_array() : 0 ;
	}

	function get_rate_1_star($product_id=NULL) {
		$result = $this->db->query("SELECT COUNT(tb_product_rate.rate) as rate FROM tb_product_rate WHERE product_id='$product_id' AND rate='1' ");
       	return $var = ($result->num_rows() > 0)? $result->row_array() : 0 ;	
	}

	function get_product_discussion($product_id=NULL) {
		$this->db->select('tb_product_discussion.*, tb_user.name, tb_user.avatar');
		$this->db->from('tb_product_discussion, tb_user');
		$this->db->where('tb_product_discussion.user_id', 'tb_user.user_id', FALSE);
       	
       	if($product_id != NULL) $this->db->where('product_id', $product_id);

       	$result = $this->db->get();
       	return $var = ($result->num_rows() > 0)? $result->result_array() : FALSE ;		
	}

	function get_product_related($product_id=NULL) {
		$this->db->select('tb_product.*, tb_shop.shop_name');
		$this->db->from('tb_product');
		$this->db->where('tb_product.product_id !=', $product_id);

		// get category_id by product_id
		$query 			= $this->db->query("SELECT category_id FROM tb_product WHERE product_id='$product_id' ");
		$hasil 			= $query->row_array();
		$category_id 	= $hasil['category_id'];

		if($category_id != NULL) $this->db->where('category_id', $category_id);

		$this->db->join('tb_shop', 'tb_product.shop_id = tb_shop.shop_id', 'inner');
		
       	$result = $this->db->get();
        return $var = ($result->num_rows() > 0)? $result->result_array() : FALSE ;
	}

	function get_product_image($product_id=NULL) {
		$this->db->select('tb_product_image.*');
		$this->db->from('tb_product_image');		

       	if($product_id != NULL) $this->db->where('tb_product_image.product_id', $product_id);

       	$result = $this->db->get();
       	return $var = ($result->num_rows() > 0)? $result->result_array() : FALSE ;		
	}

	function get_shop_courier($product_id=NULL) {
		$this->db->select('tb_shop_courier.*, tb_courier.*');
		$this->db->from('tb_shop_courier, tb_courier');
		$this->db->where('tb_shop_courier.courier_id', 'tb_courier.courier_id', FALSE);

		// get shop_id by product_id
		$query 		= $this->db->query("SELECT shop_id FROM tb_product WHERE product_id='$product_id' ");
		$hasil 		= $query->row_array();
		$shop_id 	= $hasil['shop_id'];

		if($shop_id != NULL) $this->db->where('tb_shop_courier.shop_id', $shop_id);

		$result = $this->db->get();
		return $var = ($result->num_rows() > 0)? $result->result_array() : FALSE ;
	}

	function get_courier_services($courier_id=NULL) {
		$this->db->select('tb_courier_services.*');
		$this->db->from('tb_courier_services');

		if($courier_id != NULL) $this->db->where('tb_courier_services.courier_id', $courier_id);

		$result = $this->db->get();
		return $var = ($result->num_rows() > 0)? $result->result_array() : FALSE ;	
	}


}