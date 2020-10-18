<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public $variable ;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertSignupEmail($m)
    {
        $data = array ( 'email' => $m );
        $this->db->insert('customeremail', $data);
        return $this->db->insert_id();
    }
}