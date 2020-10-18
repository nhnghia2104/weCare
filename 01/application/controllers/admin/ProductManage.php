<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductManage extends CI_Controller {

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
		$this->load->model('Product_model');
		$data = $this->Product_model->getProduct();
		$data = array('dataProduct' => $data);
		$this->load->view('admin/product_view', $data, FALSE);
		// $this->load->view('admin/addSuccess_View');
		

	}

	public function cancel() {
		header('Location: http://localhost:8080/01/index.php/admin/Productmanage/');
	}

	public function editProduct($id)
	{
		// $this->load->view('admin/editProduct_view');
		// echo $id;
		$this->load->model('Product_model');

		$dataCategory = $this->Product_model->getCategory();

		$dataProduct = $this->Product_model->getProductByID($id);

		$data = array(
			'dataProduct' => $dataProduct,
			'dataCategory' => $dataCategory
		);

		// echo "<pre>";
        // var_dump($data);

		$this->load->view('admin/editProduct_view', $data, FALSE);
	}

	public function deleteProduct($id)
	{
		$this->load->model('Product_model');

		if ($this->Product_model->removeProduct($id) > 0 ) {
			header('Location: http://localhost:8080/01/index.php/admin/Productmanage/');
		}
		else {

		};
	}

	public function updateProduct()
	{
		$id = $this->input->post('id');

		$name = $this->input->post('product-name');

		$categoryID = $this->input->post('product-category');

		$price = $this->input->post('product-price');		
		
		$description = $this->input->post('product-description');

		$image = $this->input->post('product-image2');

		$status = $this->input->post('product-status');

		$discount = $this->input->post('product-discount');

		$discount = $discount / 100;

		$style = $this->input->post('product-style');
		

		if (basename($_FILES["product-image"]["name"]) == null) {
			
		}
		else {

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
			move_uploaded_file($_FILES["product-image"]["tmp_name"], $target_file);
			$image = base_url().$target_file;
		}

		$this->load->model('Product_model');

		if ($this->Product_model->updateProduct($id, $name, $categoryID ,$description, $price, $image, $status, $discount, $style) > 0 ) {
			header('Location: http://localhost:8080/01/index.php/admin/Productmanage/');
		}
		else {

		}

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

		$discount = $this->input->post('product-discount');

		$discount = $discount / 100;

		$style = $this->input->post('product-style');

		if ($name == '' || $category == 0 || $price == '' || $uploadOk == 0 || $style == '' || $discount == 0) {
			echo "failed";
		}
		else {
			$this->load->model('Product_model');

			if ($this->Product_model->insertProduct($id, $name, $category ,$description, $price, $image,1,$discount,$style) > 0) {
				// $this->load->view('admin/addSuccess_View');
				header('Location: http://localhost:8080/01/index.php/admin/Productmanage/');
				// $this->index();
			}
			else {
				$this->load->view('admin/addError_View');
			}
		}
		
	}

	public function requestCategory()
	{
		$this->load->model('Product_model');
		$data = $this->Product_model->getCategory();
		$data = array('category' => $data);
		$data = json_encode($data);
		echo $data;
		// echo "<pre>";
        // echo $data;
	}

	public function getReviewOfProductByID_Ajax() {
		$id = $_POST['id'];

		$this->load->model('Product_model');
		$result = $this->Product_model->getReviewOfProductByID($id);
		$result = json_encode($result);
		echo $result;
	}

	public function requestStyleOptions_Ajax() {
		$this->load->model('Product_model');
		$result = $this->Product_model->getStyleOptions();
		$result = json_encode($result);
		echo $result;
	}

	public function requestProductList_Ajax()
	{
		$this->load->model('Product_model');
		$data = $this->Product_model->getProduct();
		$data = json_encode($data);
		echo $data;
	}

}