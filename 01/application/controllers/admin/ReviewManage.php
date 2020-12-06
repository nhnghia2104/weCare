<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReviewManage extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/customer/reviews_manage_view');
		// $this->load->view('admin/addSuccess_View');
    }

    public function listAllCustomerReview()
    {
        $this->load->model('User_model');
		$data = $this->User_model->listAllCustomerReview();
		$data = json_encode($data);
		echo $data;
    }
    
}
