<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

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
        $this->load->view('signup_view');
    }

    public function insertCustomer()
    {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $this->load->model('Signup_model');
        if ($this->Signup_model->insertCustomer($id, $email, $firstname, $lastname)) {
            echo "success customer";
        } else {
            echo "oh fuck";
        }
    }

    public function insertAccount()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $this->load->model('Signup_model');
        if ($this->Signup_model->insertAccount($email, $password, $id)) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'create account fail'));
        }
    }

    public function checkEmail()
    {
        $email = $_POST['email'];

        if ($email != '') {
            $this->load->model('Signup_model');
            if ($this->Signup_model->checkEmail($email)) {
                echo json_encode("exist");
            } else {
                echo json_encode("non-exist");
            }
        }
    }
}
