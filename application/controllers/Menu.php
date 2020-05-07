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

            $data['atm']= $this->db->get('atm')->result_array();
            
            $this->form_validation->set_rules('tid','TID','required');
            $this->form_validation->set_rules('description','Description','required');
            $this->form_validation->set_rules('tanggal','Tanggal','required');
            $this->form_validation->set_rules('time','Waktu','required');
            
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('menu/index', $data);
                $this->load->view('templates/footer');
            }else{
                $data = [
                    'tid' => $this->input->post('tid'),
                    'description' => $this->input->post('description'),
                    'tanggal' => $this->input->post('tanggal'),
                    'time' => $this->input->post('time')
                ];
                $this->db->insert('atm',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil Ditambahkan 
                </div>');
                redirect('menu','refresh');
            }
        
        }
        public function crm()
        {
            $data['title'] = 'CRM';
            $data['user'] = $this->db->get_where('user',['email'=>
            $this->session->userdata('email')])->row_array();

            $data['crm']= $this->db->get('crm')->result_array();
            
            $this->form_validation->set_rules('tid','TID','required');
            $this->form_validation->set_rules('description','Description','required');
            $this->form_validation->set_rules('tanggal','Tanggal','required');
            $this->form_validation->set_rules('time','Waktu','required');
            
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('menu/crm', $data);
                $this->load->view('templates/footer');
            }else{
                $data = [
                    'tid' => $this->input->post('tid'),
                    'description' => $this->input->post('description'),
                    'tanggal' => $this->input->post('tanggal'),
                    'time' => $this->input->post('time')
                ];
                $this->db->insert('crm',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil Ditambahkan 
                </div>');
            redirect('menu/crm','refresh');
            }
    }
    public function edc()
    {
        $data['title'] = 'EDC';
        $data['user'] = $this->db->get_where('user',['email'=>
        $this->session->userdata('email')])->row_array();

        $data['edc']= $this->db->get('edc')->result_array();
            
            $this->form_validation->set_rules('tid','TID','required');
            $this->form_validation->set_rules('description','Description','required');
            $this->form_validation->set_rules('tanggal','Tanggal','required');
            $this->form_validation->set_rules('time','Waktu','required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/edc', $data);
            $this->load->view('templates/footer');
        }else{
            $data = [
                'tid' => $this->input->post('tid'),
                'description' => $this->input->post('description'),
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('time')
            ];
            $this->db->insert('edc',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan 
            </div>');
        redirect('menu/edc','refresh');
        }
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