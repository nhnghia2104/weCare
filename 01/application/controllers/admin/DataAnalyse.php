<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataAnalyse extends CI_Controller
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
		// $this->load->view('admin/product_view');
		// $this->load->model('Product_model');
		// $data = $this->Product_model->getAnalyseListProductPaid();
		// $data = array('data' => $data);
		$data = (isset($_GET['filter'])) ? $_GET['filter'] : '' ;
		$data = array('filter' => $data);
		echo $data;
		$this->load->view('admin/product_analyse_view', $data, NULL);
		// $this->load->view('admin/addSuccess_View');
	}

	public function getAnalyseListProductPaid()
	{
		$this->load->model('Product_model');
		$data = $this->Product_model->getAnalyseListProductPaid();
		$data = json_encode($data);
		echo $data;
	}

	public function Products_Overview()
	{
		$data = (isset($_GET['filter'])) ? $_GET['filter'] : '' ;
		$data = array('filter' => $data);
		$this->load->view('admin/data_analyse/product_analyse_view',$data,FALSE);
	}

	public function Products_Performance()
	{
		$this->load->view('admin/data_analyse/product_performance_view');
	}

	public function Earnings_Analyse() {
		$this->load->view('admin/data_analyse/earnings_analyse_view');
	}

	public function getCounterOfProduct()
	{
		$id = $_POST['id'];

		$this->load->model('Product_model');
		$result = $this->Product_model->getCounterOfProduct($id);
		$result = json_encode($result);
		echo $result;
	}

	public function getEarningsOfProduct()
	{
		$id = (isset($_POST['id'])) ? $_POST['id'] : '';

		if ($id == '') {
			echo "toang";
		} else {

			$this->load->model('Product_model');
			$result = $this->Product_model->getEarningsOfProduct($id);
			$result = json_encode($result);
			echo $result;
		}
	}

	public function getEarningAnalyse() {
		$this->load->model('Orders_model');
		$result = $this->Orders_model->getEarningAnalyse();
		$result = json_encode($result);
		echo $result;
	}

	public function getEarningOfYear() {
		$year = $_POST['year'];
		$this->load->model('Orders_model');
		$result = $this->Orders_model->getEarningOfYear($year);
		$result = json_encode($result);
		echo $result;
	}
}
