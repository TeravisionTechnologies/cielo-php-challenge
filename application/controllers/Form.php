<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{

    /**
     * Form constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');

    }

    /**
     * Return the main view
     */
    public function index()
    {
        $this->load->view('form');
    }

    /**
     * Manage the process to insert the form data
     */
    public function store()
    {
        header('Content-Type: application/json');
        $errors = null;
        $msg = null;
        try {
            $this->load->model('user');
            $this->load->database();
            $this->form_validation->set_rules($this->user->validations());
            if ($this->form_validation->run() == FALSE) {
                $errors = $this->form_validation->error_array();
            } else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'date_of_birth' => $this->input->post('date_of_birth'),
                    'favorite_color' => $this->input->post('favorite_color')
                );
                $this->user->create($data);
                $msg = 'Congratulations! We saved your data successfully.';
            }
        } catch (Exception $e) {
            $errors['general'] = 'Whoops something went wrong!';
        }
        echo json_encode(
            [
                'errors' => $errors,
                'message' => $msg
            ]
        );
    }
}
