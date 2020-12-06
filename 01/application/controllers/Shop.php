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
		// $category = (isset($_GET['src'])) ? $_GET['src'] : '' ;

		// $this->load->model('Product_model');

		// $data = $category == '' ? $this->Product_model->getProductActive() : $this->Product_model->getProductActiveWithCategory($category);
		// $data = array('product' => $data);
		// $this->load->view('shop_view_2',$data, FALSE);

		$this->load->view('shop_view_2');
	}

	public function sale()
	{
		$this->load->view('shop_sale_view');
	}

	public function getProductActive_ajax() {
		$this->load->model('Product_model');
		$data = $this->Product_model->getProductActive();
		echo json_encode($data);
	}

	public function getProductActiveWithCategory_ajax() {
		$category = $_POST['src'];
		$this->load->model('Product_model');
		$data = $this->Product_model->getProductActiveWithCategory($category);
		echo json_encode($data);
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
	}

	public function addToCartValue()
	{
		$id = $_POST['id'];
		$this->load->model('Product_model');
		$this->Product_model->increaseAddToCartValue($id);
	}
}
 