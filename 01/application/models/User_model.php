<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public $variable;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getListCustomers()
    {
        $result = $this->db->query('CALL `getListCustomer`();');
        $result = $result->result_array();
        return $result;
    }

    public function getDetailCustomer($id)
    {
        $result = $this->db->query("CALL `getDetailCustomer`('" . $id . "');");
        $result = $result->result_array();
        return $result;
    }

    public function getActivityOfCustomer($id)
    {
        $result = $this->db->query("CALL `getActivityOfCustomer`('" . $id . "');");
        $result = $result->result_array();
        return $result;
    }

    public function insertCustomer($id, $email, $firstName, $lastName, $phone, $city, $address, $avatar, $dateCreated)
    {
        $data = array(
            'id' => $id,
            'email' => $email,
            'firstName ' => $firstName,
            'lastName' => $lastName,
            'phone' => $phone,
            'city' => $city,
            'address' => $address,
            'avatar' => $avatar,
            'dateCreated' => $dateCreated,
        );
        return $this->db->insert('customer', $data);
    }

    public function updateShipping_Address($id, $value)
	{
		$data = array ( 
            'shipping_address' => $value,
        );

        $this->db->where('id', $id);
        
        return $this->db->update('customer', $data);
	}

    public function checkAccount($username, $password)
    {
        $result = $this->db->query("SELECT idCustomer FROM account WHERE username='" . $username . "' AND password='" . $password . "'");
        $result = $result->result_array();
        return $result;
        // var_dump($result);
    }

    public function checkPassword($id, $password)
    {
        $result = $this->db->query("SELECT idCustomer FROM account WHERE idCustomer ='" . $id . "' AND password='" . $password . "'");
        $result = $result->result_array();
        return $result;
    }

    public function updatePassword($id, $newPassword)
    {
        $data = array ( 
            'password' => $newPassword,
        );

        $this->db->where('idCustomer ', $id);
        
        return $this->db->update('account', $data);
    }

    public function generateToken($id, $idCustomer, $token, $created)
    {
        $data = array(
            'id' => $id,
            'idCustomer' => $idCustomer,
            'token' => $token,
            'created' => $created,
        );

        $this->db->where('idCustomer', $idCustomer);
        $this->db->delete('auth_token');

        return $this->db->insert('auth_token', $data);
    }

    public function getInfoToken($token)
    {
        $result = $this->db->query("CALL `getInfoToken`('" . $token . "');");
        $result = $result->result_array();
        return $result;
    }

    public function listCustomerBought($id)
    {
        $result = $this->db->query("CALL `listCustomerBought`('" . $id . "');");
        $result = $result->result_array();
        return $result;
    }

    public function listOrder($id)
    {
        $result = $this->db->query("CALL `getListOrderOfCustomer`('" . $id . "');");
        $result = $result->result_array();
        return $result;
    }

    public function updateCustomer($id, $firstName, $lastName, $email, $phone, $gender, $birthday)
    {
        $data = array ( 
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'phone' => $phone,
            'gender' => $gender,
            'birthday' => $birthday
        );

        $this->db->where('id', $id);
        
        return $this->db->update('customer', $data);
    }

    public function updateCustomerAvatar($id, $avatar)
    {
        $data = array ( 
            'avatar' => $avatar,
        );

        $this->db->where('id', $id);
        
        return $this->db->update('customer', $data);
    }

    public function checkCustomerBoughtProduct($idCustomer,$idProduct)
    {
        $result = $this->db->query("CALL `checkCustomerBoughtProduct`('" . $idCustomer . "', '" . $idProduct . "');");
        $result = $result->result_array();
        return $result;
    }

    public function listReviewOfCustomer($id)
    {
        $result = $this->db->query("CALL `listReviewOfCustomer`('" . $id . "');");
        $result = $result->result_array();
        return $result;
    }
    
    public function listShouldReviewOfCustomer($id)
    {
        $result = $this->db->query("CALL `listShouldReviewOfCustomer`('" . $id . "');");
        $result = $result->result_array();
        return $result;
    }

    public function listAllCustomerReview()
    {
        $result = $this->db->query("CALL `listAllCustomerReview`();");
        $result = $result->result_array();
        return $result;
    }
}
