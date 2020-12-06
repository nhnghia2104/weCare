<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {

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
		$this->load->view('customer/customer_review_view');
	}
	
	public function writeNew()
	{
		$this->load->view('customer/customer_writeReview_view');
	}

	
	public function listReviewOfCustomer()
	{
		$id = $_POST['id'];
		$this->load->model('User_model');
		$data = $this->User_model->listReviewOfCustomer($id);
		echo json_encode($data);
	}

	public function listShouldReviewOfCustomer()
	{
		$id = $_POST['id'];
		$this->load->model('User_model');
		$data = $this->User_model->listShouldReviewOfCustomer($id);
		echo json_encode($data);
	}
	
}
 