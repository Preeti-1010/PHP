<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}

		public function index()
		{
		//$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		//$this->load->view('admin/footer');
		}

		public function profile()
		{
		$this->load->view('admin/examples/header');
		$this->load->view('admin/examples/profile');
		$this->load->view('admin/examples/footer');
		}

		public function login()
		{
		
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_rules('uemail', 'Useremail', 'valid_email|required');
		$this->form_validation->set_rules('upwd', 'UserPassword', 'min_length[6]|alpha_numeric|required');
		if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('admin/examples/login');
			}
		  else
			{
			$logindata = array(
				'username' => $this->input->post('uname') ,
				'useremail' => $this->input->post('uemail') ,
				'userpass' => $this->input->post('upwd')
			);
			if ($logindata == TRUE)
				{
				$result = $this->user_model->login_detail($logindata);
				if ($result == TRUE)
					{
					$this->session->set_flashdata('success_msg', 'Thankyou for login.');
					$this->load->view('admin/examples/login');
					}
				  else
					{
					$this->session->set_flashdata('error_msg', 'Invalid Details');
					$this->load->view('admin/examples/login');
					}
				}
			}
		}

		public function register()
		{
		$this->load->view('admin/examples/register');
		}

		public function addquestion()
		{
			$this->form_validation->set_rules('field', 'radio', 'required');
			$this->form_validation->set_rules('ques', 'question', 'required');
			if($this->input->post('field') == 'technical'){
				$this->form_validation->set_rules('technical', 'option', 'required');
			}else{
				$this->form_validation->set_rules('nontechnical', 'option', 'required');
			}

			if($this->form_validation->run() == FALSE){

				$this->load->view('admin/examples/header');
				$this->load->view('admin/examples/addquestion');
				$this->load->view('admin/examples/footer');
			}else{
				if($this->input->post('nontechnical')){
					$category = $this->input->post('nontechnical');
				}else{
					$category = $this->input->post('technical');
				}
				$listques = array(
					'question' => $this->input->post('ques'),
					'category' => $category
				);
				if ($listques == TRUE){
				$result = $this->admin_model->addquestion($listques);
					if ($result == TRUE){
						$this->session->set_flashdata('success_msg', 'Question is Saved.');
						$this->load->view('admin/examples/header');
						$this->load->view('admin/examples/addquestion');
						$this->load->view('admin/examples/footer');
					}
				  else{
						$this->session->set_flashdata('error_msg', 'Incorrect Details');
						$this->load->view('admin/examples/header');
						$this->load->view('admin/examples/addquestion');
						$this->load->view('admin/examples/footer');
					}
				}
			}
		}

		public function editquestion()
		{
			$q_id = $this->uri->segment(3);
			$data['edit_question'] = $this->admin_model->editquestion($q_id);

				if($this->input->post('nontechnical')){
					$category = $this->input->post('nontechnical');
				}else{
					$category = $this->input->post('technical');
				}
				$updateques = array(
					'question' => $this->input->post('ques'),
					'category' => $category
				);
				if ($updateques == TRUE){
				$result = $this->admin_model->updatequestion($updateques, $q_id);
					if ($result == TRUE){
						$this->session->set_flashdata('success_msg', 'Question is Updated.');
					}
				  else{
						$this->session->set_flashdata('error_msg', 'No Changes Done!');
						
					}
						$this->load->view('admin/examples/header');
						$this->load->view('admin/examples/editquestion', $data);
						$this->load->view('admin/examples/footer');
				}
		}
		
		public function deletequestion()
		{
			$data['question'] = $this->admin_model->allquestion();
			$id = $this->uri->segment(3);
			$result = $this->admin_model->deletequestion($id);
					if ($result == TRUE){
						$this->session->set_flashdata('success_msg', 'Question is Deleted.');
					}
				  else{
						$this->session->set_flashdata('error_msg', 'Oops not deleted');
						
					}
			$this->load->view('admin/examples/header');
			$this->load->view('admin/examples/allquestionlist', $data);
			$this->load->view('admin/examples/footer');
		}

		public function allquestionlist()
		{
		$data['question'] = $this->admin_model->allquestion();
		$this->load->view('admin/examples/header');
		$this->load->view('admin/examples/allquestionlist', $data);
		$this->load->view('admin/examples/footer');
		}
	}