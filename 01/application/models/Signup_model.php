<?php defined('BASEPATH') or exit('No direct script access allowed');

class Signup_model extends CI_Model
{
    public $variable;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertCustomer($id, $email, $firstName, $lastName)
    {
        $data = array(
            'id' => $id,
            'email' => $email,
            'firstName ' => $firstName,
            'lastName' => $lastName,
        );
        return $this->db->insert('customer', $data);
    }

    public function insertAccount($firstname, $password, $id)
    {
        $data = array(
            'username' => $firstname,
            'password' => $password,
            'idCustomer' => $id,
        );
        return $this->db->insert('account', $data);
    }

    public function checkEmail($email) {
        $result = $this->db->query('select * from customer where email = "'. $email .'"');
        $result = $result->result_array();
        return $result;
    }

}
