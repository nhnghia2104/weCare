<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdersManage extends CI_Controller {

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
		// $this->load->view('admin/product_view');
		$this->load->model('Orders_model');
		$data = $this->Orders_model->getListOrders();
		$data = array('dataProduct' => $data);
		$this->load->view('admin/orders_view', $data, FALSE);
		// $this->load->view('admin/addSuccess_View');
	}

	public function detail($id) {
		$this->load->model('Orders_model');
		$data = $this->Orders_model->getOrderByID($id);
		$data = array('dataProduct' => $data);
		$this->load->view('admin/ordersDetail_view', $data, FALSE);
	}

	public function listOrderDetails()
	{
		$id = $_POST['id'];
		$this->load->model('Orders_model');
		$data = $this->Orders_model->getListOrderDetails($id);
		// $data = array('dataProduct' => $data);
		$data = json_encode($data);
		echo $data;
	}

	public function listOrderStatus()
	{
		$this->load->model('Orders_model');
		$data = $this->Orders_model->getListOrderStatus();
		// $data = array('dataProduct' => $data);
		$data = json_encode($data);
		echo $data;
	}

	public function  updateOrder() {
		$id = $_POST['id'];
		$status = $_POST['status'];
		$paid = $_POST['paid'];
		$this->load->model('Orders_model');
		if ($this->Orders_model-> updateOrder($id, $paid, $status) > 0) {
			$url = array( 'url' => base_url() .'index.php/admin/ordersmanage');
			$url = json_encode($url);
			echo $url;
		}
	}
	
	

}