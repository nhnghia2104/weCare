<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('home_view');
	}
	public function insertEmail() {
		$email = $this->input->post('email');
		
		$this->load->model('User_model');

		$this->User_model->insertSignupEmail($email);
		
	}
	public function signin()
	{
		$this->load->view('signin_view');
	}

	public function eliteshop() {
		$this->load->model('Product_model');
		$data = $this->Product_model->getProductActive();
		$data = array('product' => $data);
		$this->load->view('shop_view',$data, FALSE);
	}
}
 