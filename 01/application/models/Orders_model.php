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

    public function insertOrders($id, $createAt, $total, $status, $email, $firstName, $lastName, $phone, $city, $address, $note)
    {
        $data = array ( 
            'id' => $id, 
            'createAt' => $createAt,
            'total' => $total,
            'status' => $status, // paid, unpaid, cancel
            'email' => $email,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phone' => $phone,
            'city' => $city,
            'address' => $address,
            'note' => $note,
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

    public function updateOrder($id, $paid, $status) {
        $data = array (
            'status' => $status,
            'paid' => $paid,
        );

        $this->db->where('id', $id);
        
        return $this->db->update('orders', $data);
    }
}