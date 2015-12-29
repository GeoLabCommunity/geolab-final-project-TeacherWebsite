<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class signup extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('insert_model');
		}

		public function index() 
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('first_name', 'მომხმარებლის სახელი', 'trim|required');
			$this->form_validation->set_rules('last_name', 'გვარი', 'trim|required');
			$this->form_validation->set_rules('email', 'ელექტრონული ფოსტა', 'trim|required|valid_email');
			$this->form_validation->set_rules('password1', 'პაროლი', 'required|min_length[6]');
			$this->form_validation->set_rules('password2', 'გამეორებული პაროლი', 'required|matches[password1]');
			$this->form_validation->set_rules('address', 'მისამართი', 'required');
			$this->form_validation->set_rules('phone', 'საკონტაქტო ნომერი', 'trim|required');
			$data['title'] = 'მასწავლებლების საიტი';
			if ( $this->form_validation->run() === FALSE)
			{
				$this->load->view('signup', $data);
			}
			else
			{
				//Setting values for tabel columns
			$data = array(
				'First_Name' => $this->input->post('first_name'),
				'Last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'Password' => $this->input->post('password2'),
				'Adress' => $this->input->post('address'),
				'Phone' => $this->input->post('phone'),
				'About_Me' => $this->input->post('aboutme'),
				);
			//Transfering data to Model
			$this->insert_model->form_insert($data);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			$this->load->view('insert_view', $data);
			}
		}
		public function login()
		{
			$data['title'] = 'მასწავლებლების საიტი';
			$this->load->view('login', $data);
		}


	}


 ?>