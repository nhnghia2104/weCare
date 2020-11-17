<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddProduct extends CI_Controller {

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
		$this->load->model('Product_model');
		$data = $this->Product_model->getCategory();
		$data = array('dataController' => $data);
		$this->load->view('admin/addProduct_view', $data, FALSE);
	}

	public function insertProduct() {

		// Solve Image
		$target_dir = "FilesUpload/";
		$target_file = $target_dir . basename($_FILES["product-image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["product-image"]["tmp_name"]);
		  if($check !== false) {
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
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" &&  $imageFileType != "webp")  {
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


		$id = uniqid();

		$name = $this->input->post('product-name');

		$category = $this->input->post('product-category');

		$price = $this->input->post('product-price');		
		
		$description = $this->input->post('product-description');

		$image = base_url().$target_file;

		$status = $this->input->post('product-status');

		$discount = $this->input->post('product-discount');

		$style = $this->input->post('product-style');

		$inventory = $this->input->post('product-inventory');

		$detail = $this->input->post('product-detail');

		$idAdmin = $this->input->post('product-idAdmin');

		if ($name == '' || $category == 0 || $price == '' || $uploadOk == 0) {
			//  Fail
		}
		else {
			$this->load->model('Product_model');

			if ($this->Product_model->insertProduct($id, $name, $category ,$description, $price, $image,$status,$discount,$style,$inventory, $detail, $idAdmin) > 0) {
				// $this->load->view('admin/addSuccess_View');
				echo "ngon";
			}
		}

		// $this->load->view('admin/product_view');
		
		
	}

	public function insertProduct_Ajax() {

		// $image = "product-image";

		// $this->load->model('Product_model');

		// $this->Product_model->insertProduct($id, $name, $category ,$description, $price, $image);

		// $this->db->insert('product', $data);
		echo "hhihihi";
		$target_dir = "FilesUpload/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["file"]["tmp_name"]);
		  if($check !== false) {
			// echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		  } else {
			// echo "File is not an image.";
			$uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["product-image"]["size"] > 5000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
			echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
		  } else {
			echo "Sorry, there was an error uploading your file.";
		  }
		}
		
	}
}