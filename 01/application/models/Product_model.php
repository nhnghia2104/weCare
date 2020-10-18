<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    public $variable ;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertProduct($id, $name, $category ,$description, $price, $image,$status=1,$discount=0,$style)
    {
        $data = array ( 
            'ID' => $id,
            'DisplayName' => $name,
            'IDCategory ' => $category,
            'Description' => $description,
            'Price' => $price,
            'Image' => $image,
            'status' => $status,
            'discount' => $discount,
            'style' => $style
        );
        return $this->db->insert('product', $data);
        // return $this->db->insert_id();
    }

    public function updateProduct($id, $name, $category ,$description, $price, $image,$status,$discount,$style)
    {
        $data = array ( 
            'DisplayName' => $name,
            'IDCategory ' => $category,
            'Description' => $description,
            'Price' => $price,
            'Image' => $image,
            'status' => $status,
            'discount' => $discount,
            'style' => $style,
        );

        $this->db->where('ID', $id);
        
        return $this->db->update('product', $data);
    }

    public function removeProduct($id)
    {
        $this->db->where('id', $id);
        
        return $this->db->delete('product');
    }

    public function getCategory()
    {
        $result = $this->db->query('SELECT * FROM `category`');

        $result = $result->result_array();
        
        return $result;
    }

    public function getProduct() {
        $result = $this->db->query('CALL `getProduct`();');
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getProductByID($id) {
        $result = $this->db->query("CALL `getProductByID`('". $id ."');");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getProductActive() {
        $result = $this->db->query('CALL `getProductActive`();');
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function increaseView($id) {
		return $this->db->query("UPDATE `product` SET `view` = `view` + 1 WHERE `product`.`ID` = '" . $id ."'");
    }
    
    public function getReviewOfProductByID($id) {
        $result = $this->db->query("CALL `getReviewOfProductByID`('". $id ."');");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }
    public function getStyleOptions() {
        $result = $this->db->query("SELECT * FROM `product_style`");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }
    
}