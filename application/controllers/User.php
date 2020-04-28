<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

        // public function __construct()
        // {
        //       parent::__construct();
        //       $this->load->library('form_validation');
        // }
        public function index()
        {
            $data['user'] = $this->db->get_where('user',['email'=>
            $this->session->userdata('email')])->row_array();
             echo 'Selamat Datang ' . $data['user']['name'];
        }
}