<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$category = (isset($_GET['src'])) ? $_GET['src'] : '' ;

		$this->load->model('Product_model');

		$data = $category == '' ? $this->Product_model->getProductActive() : $this->Product_model->getProductActiveWithCategory($category);
		$data = array('product' => $data);
		$this->load->view('shop_view',$data, FALSE);
	}

	public function detail($id) {
		$this->load->model('Product_model');

		$dataProduct = $this->Product_model->getProductByID($id);

		$data = array(
			'dataProduct' => $dataProduct,
		);
		// echo "<pre>";
		// var_dump($data);
		$this->load->view('detail_view', $data, FALSE);
	}

	function increaseView_Ajax() {
		$id = $_POST['id'];

		$this->load->model('Product_model');
		$this->Product_model->increaseView($id);

		date_default_timezone_set('Asia/Bangkok');
		$time = date('Y-m-d H:i:s');
		$this->load->model('Product_Traffic_model');
		$this->Product_Traffic_model->insert($id,$time);
	}

	public function addToCartValue()
	{
		$id = $_POST['id'];
		$this->load->model('Product_model');
		$this->Product_model->increaseAddToCartValue($id);
	}
}
 