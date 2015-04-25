<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('select_mod');
		$this->load->model('insert_mod');
		$this->load->model('update_mod');
		$this->load->model('delete_mod');
	}

	function get_category($id=NULL) {
		$arr = array();
		$data = $this->select_mod->get_category();

		if($data != FALSE) :
			foreach($data as $row) :
				$temp = array(
					'category_id'		=> $row['category_id'],
					'category_name'		=> $row['category_name'],
					'category_img'		=> $row['category_img'],
				);
				array_push($arr, $temp);
			endforeach;

			// $arr = $data;  --> kalo mw pake ini lebih simple, gak perlu foreach dlu
			echo json_encode($arr);
		else :
			echo FALSE;			
		endif;
	}

	function get_product($category_id=NULL, $product_id=NULL) {
		$arr = array();
		$data = $this->select_mod->get_product($category_id, $product_id);

		if($data != FALSE) :
			$arr = $data;
			echo json_encode($arr);
		else :
			echo FALSE;			
		endif;
	}

	function get_courier_services() {
		$courier_id = $this->input->post('courier_id');
		$data 		= $this->select_mod->get_courier_services($courier_id);

		echo '<select name="layanan"><option value="">-- Paket Pengiriman --</option>';
		foreach($data as $row) :
			echo '<option value="'.$row['id'].'">'.$row['service_name'].'</option>';
		endforeach;		
		echo '</select>';
	}

}