<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

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
		// header('Location: http://localhost:8080/01/index.php/admin/Product/');
		$this->load->view('checkout_view');
		// $data = $_POST['json'];
		// $decoded = json_decode($data, true);
		// var_dump($decoded);
	}

	public function complete() {
		$data = $_POST['dataSend'];
		$data = json_decode($data, true);
		
		// echo "<pre>";
		// var_dump($data);

		$idOrder = uniqid();
		date_default_timezone_set('Asia/Bangkok');
		$createAt = date('Y-m-d H:i:s');

		$status = 1; 
		$email = $data['email'];
		$firstName = $data['firstName'];
		$lastName = $data['lastName'];
		$phone = $data['phone'];
		$city = $data['city'];
		$address = $data['address'];
		$note = $data['note'];

		$total = $data['totalPrice'];

		$complete = 1;

		$this->load->model('Orders_model');
		if ($this->Orders_model->insertOrders($idOrder, $createAt, $total, $status, $email, $firstName, $lastName, $phone, $city, $address, $note) > 0) {}
		else {
			$complete = 0;
		}

		foreach ($data['productList'] as $key => $value) {
			$idDetail = uniqid();
			$idOrder = $idOrder;
			$idProduct = $value['id'];
			$amount = $value['count'];
			$price = $value['price'];
			$discount = $value['discount'];
			$totalSalePrice = $price * $amount * ( 1 - $discount);
			$this->load->model('Orders_model');
			if ($this->Orders_model->insertOrdersDetail($idDetail, $idOrder, $idProduct, $amount,$price,$discount,$totalSalePrice) > 0) {}
			else {
				$complete = 0;
			}
		}

		if ($complete == 1) {
			echo "ngon";
		}
		else {
			echo "toang";
		}

	}

	
}
 