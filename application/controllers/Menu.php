<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    
        public function __construct()
        {
              parent::__construct();
              is_logged_in();
        }
        public function index()
        {
            $data['title'] = 'ATM';
            $data['user'] = $this->db->get_where('user',['email'=>
            $this->session->userdata('email')])->row_array();
       
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('menu/index', $data);
                $this->load->view('templates/footer');
        
        }
        public function crm()
        {
            $data['title'] = 'CRM';
            $data['user'] = $this->db->get_where('user',['email'=>
            $this->session->userdata('email')])->row_array();
       
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('menu/crm', $data);
                $this->load->view('templates/footer');
        
    }
    public function edc()
    {
        $data['title'] = 'EDC';
        $data['user'] = $this->db->get_where('user',['email'=>
        $this->session->userdata('email')])->row_array();
   
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/edc', $data);
            $this->load->view('templates/footer');
    
    }
    public function chart()
    {
        $data['title'] = 'STATISTIK';
        $data['user'] = $this->db->get_where('user',['email'=>
        $this->session->userdata('email')])->row_array();
   
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/chart', $data);
            $this->load->view('templates/footer');
    
    }

}