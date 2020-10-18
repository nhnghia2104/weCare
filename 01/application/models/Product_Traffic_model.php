<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Traffic_model extends CI_Model {
    public $variable ;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($idProduct, $time)
    {
        $data = array ( 
            'idProduct' => $idProduct,
            'time' => $time,
        );
        return $this->db->insert('product_traffic', $data);
    }
}