<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('select_mod');
		$this->load->model('insert_mod');
		$this->load->model('update_mod');
		$this->load->model('delete_mod');
	}

	public function index() {
		$data['content'] = $this->load->view('content/category', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function category() {
		$data['category']	= $this->select_mod->get_category();
		$data['content'] 	= $this->load->view('content/category', $data, TRUE);
		$this->load->view('template/main', $data);
	}

	function category_detail() {
		$data['content'] = $this->load->view('content/category_detail', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function product() {
		$data['content'] = $this->load->view('content/product', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function product_detail() {
		$data['content'] = $this->load->view('content/product_detail', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function shop() {
		$data['content'] = $this->load->view('content/shop', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function shop_detail() {
		$data['content'] = $this->load->view('content/shop_detail', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function checkout() {
		$data['content'] = $this->load->view('content/checkout', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function invoice() {
		$data['content'] = $this->load->view('content/invoice', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function mail() {
		$data['content'] = $this->load->view('content/mail', '', TRUE);
		$this->load->view('template/main', $data);		
	}

	function account() {
		$data['content'] = $this->load->view('content/account', '', TRUE);
		$this->load->view('template/main', $data);
	}

	function account_profile() {
		$this->load->view('content/account_profile');			
	}

	function account_store() {
		$this->load->view('content/account_store');
	}

	function account_selling() {	
		$this->load->view('content/account_selling');		
	}

	function account_buying() {
		$this->load->view('content/account_buying');
	}

	function account_store_category() {
		$this->load->view('content/account_store_category');
	}

	function account_store_product() {
		$this->load->view('content/account_store_product');	
	}

	function account_store_category_detail() {
		$this->load->view('content/account_store_category_detail');	
	}	

}