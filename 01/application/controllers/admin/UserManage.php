<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserManage extends CI_Controller
{
	public function index()
	{

		$this->load->view('admin/customer_view');
		// $this->load->view('admin/addSuccess_View');
	}

	public function info()
	{
		$this->load->view('admin/customer_info_view');
	}

	public function getListCustomers()
	{
		$this->load->model('User_model');
		$data = $this->User_model->getListCustomers();
		$data = json_encode($data);
		echo $data;
	}

	public function getDetailCustomer()
	{
		$id =  (isset($_POST['id'])) ? $_POST['id'] : '';
		$this->load->model('User_model');
		$data = $this->User_model->getDetailCustomer($id);
		$data = json_encode($data);
		echo $data;
	}

	public function getActivityOfCustomer()
	{
		$id =  (isset($_POST['id'])) ? $_POST['id'] : '';
		$this->load->model('User_model');
		$data = $this->User_model->getActivityOfCustomer($id);
		$data = json_encode($data);
		echo $data;
	}

	public function insertCustomer()
	{
		$id = (isset($_POST['id'])) ? $_POST['id'] : '';
		$email = (isset($_POST['email'])) ? $_POST['email'] : '';
		$firstName = (isset($_POST['firstName'])) ? $_POST['firstName'] : '';
		$lastName = (isset($_POST['lastName'])) ? $_POST['lastName'] : '';
		$phone = (isset($_POST['phone'])) ? $_POST['phone'] : '';
		$city = (isset($_POST['city'])) ? $_POST['city'] : '';
		$address = (isset($_POST['address'])) ? $_POST['address'] : '';
		$avatar = (isset($_POST['avatar'])) ? $_POST['avatar'] : '';
		$dateCreated = (isset($_POST['dateCreated'])) ? $_POST['dateCreated'] : '';

		if ($id == '' || $email == '' || $firstName == '' || $lastName == '' || $address == '' || $phone == '' || $city == '' ||  $dateCreated == '') {
			echo json_encode("error");
		} else {
			$this->load->model('User_model');
			$this->User_model->insertCustomer($id, $email, $firstName, $lastName, $phone, $city, $address, $avatar, $dateCreated);
			echo $id;
		}
	}

	public function updateShipping_Address()
	{
		$id =  (isset($_POST['idCustomer'])) ? $_POST['idCustomer'] : '';
		$value =  (isset($_POST['value'])) ? $_POST['value'] : '';
		if ($id != '') {
			$this->load->model('User_model');
			if ($this->User_model->updateShipping_Address($id, $value) > 0) {
				echo 'success';
			}
			else {
				echo 'error';
			}
		
		}
		else {
			echo 'error';
		}
	}

	public function signin()
	{
		$username = (isset($_POST['username'])) ? $_POST['username'] : '';
		$password = (isset($_POST['password'])) ? $_POST['password'] : '';
		// echo $username;
		$this->load->model('User_model');
		$info = $this->User_model->checkAccount($username, $password);
		if ($info != null) {
			$idCustomer = $info[0]['idCustomer'];
			$id = uniqid();
			$token = md5($id);
			date_default_timezone_set('Asia/Bangkok');
			$created = date('Y-m-d H:i:s');
			$done = $this->User_model->generateToken($id, $idCustomer, $token, $created);
			if ($done != null) {
				echo json_encode(array('token' => $token,'customer_id' => $idCustomer));
			}
			else {
				echo 'create token failed';
			}
		} else {
			echo "unknown";
		}
	}

	public function getInfoToken() {
		$token =  (isset($_POST['token'])) ? $_POST['token'] : '';
		$this->load->model('User_model');
		$data = $this->User_model->getInfoToken($token);
		$data = json_encode($data);
		echo $data;
	}


}
