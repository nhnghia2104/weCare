<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_model extends CI_Model {
    public $variable ;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertOrders($id, $createAt, $total, $idPayment, $status ,$paid, $payDate, $note, $idCustomer, $timeline, $shipping_address, $shipping_option_id, $tracking) {
		$data = array ( 
            'id' => $id,
            'createAt' => $createAt,
            'total ' => $total,
            'idPayment' => $idPayment,
            'status' => $status,
            'paid' => $paid,
            // 'payDate' => $payDate,
            'note' => $note,
			'idCustomer' => $idCustomer,
            'timeline' => $timeline,
            'shipping_address' => $shipping_address,
            'shipping_option_id' => $shipping_option_id,
            'tracking' => $tracking
        );
        return $this->db->insert('orders', $data);
	}
    public function insertOrdersDetail($id, $idOrder, $idProduct, $amount,$price,$discount, $totalSalePrice)
    {
        $data = array ( 
            'id' => $id,
            'idOrder' => $idOrder,
            'idProduct ' => $idProduct ,
            'amount' => $amount,
            'price' => $price,
            'discount' => $discount,
            'total' => $totalSalePrice
        );
        return $this->db->insert('ordersdetail', $data);
    }

    public function getListOrders() {
        $result = $this->db->query("CALL `getListOrders`();");
        $result = $result->result_array();
        return $result;
    }

    public function getOrderByID($id) {
        $result = $this->db->query("CALL `getOrderByID`('". $id ."');");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getListOrderDetails($id) {
        $result = $this->db->query("CALL `getListOrderDetails`('". $id ."');");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getListOrderStatus()
    {
        $result = $this->db->query("SELECT * FROM `orderstatus`");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function updateOrder($id, $paid, $status, $payDate,$timeline,$tracking) {
        $data = array (
            'status' => $status,
            'paid' => $paid,
            'payDate' => $payDate,
            'timeline' => $timeline,
            'tracking' => $tracking,
        );

        $this->db->where('id', $id);
        
        return $this->db->update('orders', $data);
    }

    public function removeOrder($id) {
        $this->db->where('id', $id);
        return $this->db->delete('orders');
    }

    public function getCountOrdersWithStatus() {
        $result = $this->db->query('CALL `getCountOrdersWithStatus`();');
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getEarningOverview()
    {
        $result = $this->db->query('CALL `getEarningOverview`();');
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getEarningAnalyse() {
        $result = $this->db->query('CALL `getEarningAnalyse`();');
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getEarningOfYear($year) {
        $result = $this->db->query("CALL `getEarningOfYear`('". $year ."');");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }


}