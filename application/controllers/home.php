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
		$category_id = $this->uri->segment(3);

		$data['category']	= $this->select_mod->get_category();
		$data['product']	= $this->select_mod->get_product($category_id);
		$data['content'] 	= $this->load->view('content/category_detail', $data, TRUE);
		$this->load->view('template/main', $data);
	}

	function product() {
		$data['product']	= $this->select_mod->get_product();
		$data['content'] 	= $this->load->view('content/product', $data, TRUE);
		$this->load->view('template/main', $data);
	}

	function product_detail() {
		$product_id = $this->uri->segment(3);

		$data['product']	= $this->select_mod->get_product('', $product_id);
		$data['review']		= $this->select_mod->get_product_review($product_id);
		$data['total_rate'] = $this->select_mod->get_product_rate_total($product_id);
		$data['discussion'] = $this->select_mod->get_product_discussion($product_id);
		$data['related']	= $this->select_mod->get_product_related($product_id);
		$data['p_image']	= $this->select_mod->get_product_image($product_id);
		$data['courier']	= $this->select_mod->get_shop_courier($product_id);

		$data['rate_5']		= $this->select_mod->get_rate_5_star($product_id);
		$data['rate_4']		= $this->select_mod->get_rate_4_star($product_id);
		$data['rate_3']		= $this->select_mod->get_rate_3_star($product_id);
		$data['rate_2']		= $this->select_mod->get_rate_2_star($product_id);
		$data['rate_1']		= $this->select_mod->get_rate_1_star($product_id);
		$data['like']		= $this->select_mod->get_product_like($product_id);
		$data['sold']		= $this->select_mod->get_product_sold($product_id);

		$data['content'] 	= $this->load->view('content/product_detail', $data, TRUE);
		$this->load->view('template/main', $data);
	}

	function shop() {
		$data['shop']		= $this->select_mod->get_shop();
		$data['content']	= $this->load->view('content/shop', $data, TRUE);
		$this->load->view('template/main', $data);
	}

	function shop_detail() {
		$shop_id 			= $this->uri->segment(3);		

		$data['shop']		= $this->select_mod->get_shop_detail($shop_id);
		$data['album']		= $this->select_mod->get_product_album($shop_id);
		$data['rate']		= $this->select_mod->get_shop_rate($shop_id);		
		$data['content'] 	= $this->load->view('content/shop_detail', $data, TRUE);
		$this->load->view('template/main', $data);
	}

	function shop_album() {
		$shop_id 			= $this->uri->segment(3);
		$album_id 			= $this->uri->segment(4);

		$data['shop']		= $this->select_mod->get_shop_detail($shop_id);
		$data['album']		= $this->select_mod->get_product_album($shop_id);
		$data['rate']		= $this->select_mod->get_shop_rate($shop_id);
		$data['product']	= $this->select_mod->get_product_per_album($album_id);				
		$data['count']		= $this->select_mod->get_total_product_per_album($album_id);
		$data['content'] 	= $this->load->view('content/shop_album', $data, TRUE);
		$this->load->view('template/main', $data);		
	}

	function search() {
		$product_name		= $this->input->post('product_name');
		$category_name		= $this->input->post('category_name');

		$data['product']	= $this->select_mod->get_product_for_search($product_name, $category_name);
		$data['content'] 	= $this->load->view('content/product_search', $data, TRUE);
		$this->load->view('template/main', $data);		
	}

	/******************************************* untuk user yg sudah login *******************/
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
		$data['content'] = $this->load->view('content/account_store_category', '', TRUE);
		$this->load->view('template/main', $data);		
	}

	function account_store_product() {
		$this->load->view('content/account_store_product');	
	}

	function account_store_category_detail() {
		$data['content'] = $this->load->view('content/account_store_category_detail', '', TRUE);
		$this->load->view('template/main', $data);
	}	

}