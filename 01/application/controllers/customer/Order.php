<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
    
    public function history()
    {
        $this->load->view('customer/customer_orders_view');
    }
    
    public function view()
    {
        $this->load->view('customer/customer_order_detail_view');
        
    }

    public function tracking() {
        $this->load->view('customer/order_tracking_view');
    }
	
	
}
 