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
		// $data = $this->Orders_model->getListOrders();
		// $data = array('dataProduct' => $data);
		$data = (isset($_GET['filter'])) ? $_GET['filter'] : '' ;
		$data = array('action' => $data);
		$this->load->view('admin/orders_view',$data,NULL);
		// $this->load->view('admin/addSuccess_View');
	}

	public function insertOrders() {
		$id = $_POST['id'];
		$createAt = $_POST['createAt'];
		$total = $_POST['total'];
		$idPayment = $_POST['idPayment'];
		$status = $_POST['status'];
		$paid = $_POST['paid'];
		$payDate = $_POST['payDate'];
		$note = (isset($_GET['note'])) ? $_GET['note'] : '';
		$idCustomer = $_POST['idCustomer'];
		$timeline = $_POST['timeline'];
		$data = $_POST['productList'];
		$shipping_address = $_POST['shipping_address'];
		$shipping_option_id = $_POST['shipping_option_id'];

		$data = json_decode($data, true);

		$complete = 1;

		$this->load->model('Orders_model');
		if ($this->Orders_model->insertOrders($id, $createAt, $total, $idPayment, $status ,$paid, $payDate, $note, $idCustomer, $timeline, $shipping_address,$shipping_option_id) > 0) {}
		else {
			$complete = 0;
		}

		foreach ($data as $key => $value) {
			
			$idDetail = uniqid();
			$idOrder = $id;
			$idProduct = $value['id'];
			$amount = $value['count'];
			$price = $value['price'];
			$discount = $value['discount'];
			$totalSalePrice = $price * $amount * ( 1 - $discount);

			$this->load->model('Product_model');
			$stock = $this->Product_model->checkStock($idProduct);
			if ($stock[0]['inventory'] < $amount) {
				$send = array(	'status' => 'error',
								'id' => $idProduct,
								'alert' => 'Sorry, ' .$stock[0]['DisplayName'].' is currently out of stock');
				$send = json_encode($send);
				echo $send;
				$this->load->model('Orders_model');
				$this->Orders_model->removeOrder($idOrder);
				$complete = 0;
				break;
			}
			else {
				$this->load->model('Orders_model');
				if ($this->Orders_model->insertOrdersDetail($idDetail, $idOrder, $idProduct, $amount,$price,$discount,$totalSalePrice) > 0) {
					$complete = 1;
				}
				else {
					$complete = 0;
					break;
				}
			}
		}

		if ($complete == 1) {
			$send = array('status' => 'complete','id' => $idOrder);
			$send = json_encode($send);
			echo $send;
		}
	}

	public function detail() {
		// $this->load->model('Orders_model');
		// $data = $this->Orders_model->getOrderByID($id);
		// $data = array('dataProduct' => $data);
		$this->load->view('admin/ordersDetail_view');
	}

	public function orderDetail() {
		$id = $_POST['id'];
		$this->load->model('Orders_model');
		$data = $this->Orders_model->getOrderByID($id);
		echo json_encode($data);
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
		$payDate = $_POST['payDate'];
		$timeline = $_POST['timeline'];

		if ($status == '4') {
			$paid = 1;
		}
		$this->load->model('Orders_model');
		if ($this->Orders_model-> updateOrder($id, $paid, $status, $payDate, $timeline) > 0) {
			$url = array( 'url' => base_url() .'index.php/admin/ordersmanage');
			$url = json_encode($url);
			echo $url;
		}
	}

	public function requestOrderList_Ajax() {
		$this->load->model('Orders_model');
		$data = $this->Orders_model->getListOrders();
		$data = json_encode($data);
		echo $data;
	}
	
	public function requestCountOrdersWithStatus() {
		$this->load->model('Orders_model');
		$data = $this->Orders_model->getCountOrdersWithStatus();
		$data = json_encode($data);
		echo $data;
	}

	public function requestEarningOverview()
	{
		$this->load->model('Orders_model');
		$data = $this->Orders_model->getEarningOverview();
		$data = json_encode($data);
		echo $data;
	}

}