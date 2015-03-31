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

			echo json_encode($arr);
		else :
			echo FALSE;			
		endif;
	}

}