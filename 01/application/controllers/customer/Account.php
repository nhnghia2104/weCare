<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

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
		$this->load->view('customer/customer_orders_view');
    }
    
    public function edit()
    {
        $this->load->view('customer/customer_account_view');
    }

	public function updateCustomer()
	{
		$id = $_POST['id'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];

		$this->load->model('User_model');

		if ($this->User_model->updateCustomer($id, $firstName, $lastName, $email, $phone, $gender, $birthday) > 0) {
			echo json_encode(array('status' => 'success'));
		}
	}

	public function updateAvatar()
	{
		// Solve Image
		$target_dir = "img_user/";
		$target_file = $target_dir . basename($_FILES["product-image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["product-image"]["tmp_name"]);
			if ($check !== false) {
				// echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				// echo "File is not an image.";
				$uploadOk = 0;
			}
		}

		// Check file size
		if ($_FILES["product-image"]["size"] > 5000000) {
			//   echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}

		// Allow certain file formats
		if (
			$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" &&  $imageFileType != "webp"
		) {
			//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			//   echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["product-image"]["tmp_name"], $target_file)) {
				// echo "The file ". htmlspecialchars( basename( $_FILES["product-image"]["name"])). " has been uploaded.";
			} else {
				// echo "Sorry, there was an error uploading your file.";
				$image = "";
			}
		}

		$avatar = base_url() . $target_file;

		$id = $this->input->post('id');
		
		$this->load->model('User_model');

		if ($this->User_model->updateCustomerAvatar($id, $avatar) > 0) {
			header('Location: '.base_url().'index.php/customer/account/edit');
			echo json_encode(array('status' => 'success'));
		}
	}
	
	public function checkCustomerBoughtProduct()
	{
		$idCustomer = $_POST['idCustomer'];
		$idProduct = $_POST['idProduct'];

		$this->load->model('User_model');
		$rs = $this->User_model->checkCustomerBoughtProduct($idCustomer,$idProduct);
		if ($rs != null) {
			echo json_encode(array('status' => 'bought'));
		}
		else {
			echo json_encode(array('status' => 'no data'));
		}
	}


}
 