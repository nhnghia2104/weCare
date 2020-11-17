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

    public function insertProduct($id, $name, $category ,$description, $price, $image,$status=1,$discount=0,$style,$inventory, $detail, $idAdmin, $dateCreated)
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
            'style' => $style,
            'inventory' => $inventory,
            'details' => $detail,
            'createBy' => $idAdmin,
            'dateCreated' => $dateCreated
        );
        return $this->db->insert('product', $data);
        // return $this->db->insert_id();
    }

    public function updateProduct($id, $name, $category ,$description, $price, $image,$status,$discount,$style,$inventory,$detail)
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
            'inventory' => $inventory,
            'details' => $detail
        );

        $this->db->where('ID', $id);
        
        return $this->db->update('product', $data);
    }

    public function updateStatus($id, $status) {
        $data = array ( 
            'status' => $status,
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

    public function getProductActiveWithCategory($category) {
        $result = $this->db->query('CALL `getProductActiveWithCategory`("'. $category .'");');
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function increaseView($id) {
		return $this->db->query("UPDATE `product` SET `view` = `view` + 1 WHERE `product`.`ID` = '" . $id ."'");
    }

    public function increaseAddToCartValue($id) {
        return $this->db->query("UPDATE `product` SET `addToCart` = `addToCart` + 1 WHERE `product`.`ID` = '" . $id ."'");
    }
    
    public function getReviewOfProductByID($id) {
        $result = $this->db->query("CALL `getReviewOfProductByID`('". $id ."');");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }
    public function insertReview($idProduct, $date, $displayName, $vote, $head, $content) {
        $data = array ( 
            'idProduct' => $idProduct,
            'date' => $date,
            'displayName ' => $displayName,
            'vote' => $vote,
            'head' => $head,
            'content' => $content,
        );
        return $this->db->insert('reviews', $data);
    }
    public function getListFeedbackByID($id) {
        $result = $this->db->query("CALL `getListFeedbackByID`('". $id ."');");
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

    public function checkStock($id) {
        $result = $this->db->query("SELECT `product`.`inventory`, `product`.`DisplayName` FROM `product` WHERE `product`.`ID` = '". $id ."'");
        $result = $result->result_array();
        return $result;
    }

    public function getCountProductWithStatus() {
        $result = $this->db->query("CALL `getCountProductWithStatus`();");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getMostViewProduct() {
        $result = $this->db->query("CALL `getMostViewProduct`();");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getBestSellerProduct() {
        $result = $this->db->query("CALL `getBestSeller`();");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    

    public function getAnalyseListProductPaid() {
        $result = $this->db->query("CALL `analyseListProductPaid`();");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function getCounterOfProduct($id)
    {
        $result = $this->db->query("CALL `counterOfProduct`('".$id."');");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }
    
    public function getEarningsOfProduct($id)
    {
        $result = $this->db->query("CALL `getEarningsOfProduct`('".$id."');");
        $result = $result->result_array();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }
}