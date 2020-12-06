<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

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
		$this->load->view('search_view');
	}

	public function searchActiveProduct()
	{
		$key = $_POST['key'];
		$this->load->model('Product_model');
		$data = $this->Product_model->searchActiveProduct($key);
		echo json_encode($data);
	}

	public function find()
	{
		$key = (isset($_POST['key'])) ? $_POST['key'] : '';
		header('Location: ' . base_url() . 'index.php/search?key=' . $key);
	}
}
