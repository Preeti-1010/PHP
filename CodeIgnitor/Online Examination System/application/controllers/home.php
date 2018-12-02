<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{

	function __construct()
		{
		parent::__construct();
		}

	public function index()
		{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
		}

	public function category()
		{
		$this->load->view('header');
		$this->load->view('category');
		$this->load->view('footer');
		}

	public function technical()
		{
		$this->load->view('header');
		$this->load->view('Technical');
		$this->load->view('footer');
		}

	public function nontechnical()
		{
		$data['type'] = $this->user_model->question_cat();
		//echo "<pre>"; print_r($cat['type'][7]->id);die;
		$this->load->view('header');
		$this->load->view('Nontechnical',$data);
		$this->load->view('footer');
		}

	public function about()
		{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
		}

	public function Registration()
		{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]|alpha_numeric');
		$this->form_validation->set_rules('phone_no', 'Phone No.', 'required|max_length[10]|numeric');
		if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('header');
			$this->load->view('Reg');
			$this->load->view('footer');
			}
		  else
			{
			$now = date('Y-m-d H:i:s');
			$alldata = array(
				'regtime' => $now,
				'username' => $this->input->post('name') ,
				'useremail' => $this->input->post('email') ,
				'userpass' => $this->input->post('pwd') ,
				'userphone' => $this->input->post('phone_no')
			);
			if ($alldata == TRUE)
				{
				$this->user_model->register($alldata);
				$this->session->set_flashdata('success_msg', 'You are Successfully Registered!');
				$this->load->view('header');
				$this->load->view('Reg');
				$this->load->view('footer');
				}
			  else
				{
				$this->session->set_flashdata('error_msg', 'You are already Registered,Try again.');
				$this->load->view('header');
				$this->load->view('Reg');
				$this->load->view('footer');
				}
			}
		}

	public function Login()
		{
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_rules('uemail', 'Useremail', 'valid_email|required');
		$this->form_validation->set_rules('upwd', 'UserPassword', 'min_length[6]|alpha_numeric|required');
		if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			}
		  else
			{
			
			$logindata = array(
				'username' => $this->input->post('uname'),
				'useremail' => $this->input->post('uemail'),
				'userpass' => $this->input->post('upwd')
			);
			if ($logindata == TRUE)
				{
					//alldata
				$result = $this->user_model->login_detail($logindata);
				if ($result == TRUE)
					{
					$this->session->set_userdata('login_id',$result); 
					//echo "<pre>"; print_r($this->session->userdata('login_id')[0]->username);die;
					$this->session->set_flashdata('success_msg', 'Thankyou for login.');
					}
				  else
					{
					$this->session->set_flashdata('error_msg', 'Invalid Details');
					}
					$this->load->view('header');
					$this->load->view('index');
					$this->load->view('footer');
				}
			}
		}

	public function news()
		{
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
		}

	public function contact()
		{
		$this->form_validation->set_rules('c_name', 'Name', 'required');
		$this->form_validation->set_rules('c_email', 'Email', 'valid_email|required');
		$this->form_validation->set_rules('c_phone', 'Contact No', 'min_length[10]|numeric|required');
		$this->form_validation->set_rules('c_msg', 'Message', 'required');
		if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('footer');
			}
		  else
			{
			$from_email = "preeti@qtriangle.in";
			$to_email = $this->input->post('c_email');
			$this->email->from($from_email, 'Your Name');
			$this->email->to($to_email);
			$this->email->subject('Feedback Query');
			$this->email->message('Hello', $to_email, 'Thankyou for Contacting us..We will reply for your query soon.');
			if ($this->email->send())
				{
				$this->session->set_flashdata("email_sent", "Thankyou for your feedback.");
				redirect($_SERVER['HTTP_REFERER']);
				}
			  else
				{
				$this->session->set_flashdata("email_sent", "Error in sending Email.");
				redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}

	public function testinfo()
	{	
		
		$this->load->view('header');
		$this->load->view('testinfo');
		$this->load->view('footer');
	}

	public function test()
	{
		$catId = $this->uri->segment(3);
		$data['question'] = $this->user_model->fetch_question($catId);
		if ($this->input->post()){
			$checkanswer = $this->input->post('check_ans');
			$this->form_validation->set_rules('check_ans[]', 'one option in each question', 'required');
			if ($this->form_validation->run() == FALSE){

				$this->load->view('header');
				$this->load->view('nontech_test', $data);
				$this->load->view('footer');

			} else{
				$result=array();
				foreach($data['question'] as $key => $questionData){

					if (array_key_exists($questionData['question']['question_id'], $checkanswer)){
						$rightChoice = '';
						$isWrong = '0';
						$isRight = '1';
						$now = date("d-m-y h:i:sa");
						$detail = $this->session->userdata('login_id');
						foreach($questionData['options'] as $options){
							if ($options->is_right_choice == 1){
								$rightChoice = $options->choice_id;
								$rightChoiceAnswer = $options->choice; 
								$answerId = $checkanswer[$questionData['question']['question_id']];
								break;
							}
						}
						if ($checkanswer[$questionData['question']['question_id']] == $rightChoice){

							$selected_data = array(
								'user_id' => $detail[0]->user_id,
								'question_id' => $questionData['question']['question_id'],
								'choice_id' => $rightChoice,
								'is_right' => $isRight,
								'answer_time' => $now
							);
							
							$this->user_model->storeAns($selected_data);
							
						} else {
						  		
							$selected_data = array(
								'user_id' => $detail[0]->user_id,
								'question_id' => $questionData['question']['question_id'],
								'choice_id' => $rightChoice,
								'is_right' => $isWrong,
								'answer_time' => $now
							);
							$this->user_model->storeAns($selected_data);
							
							}
							$result[]=array(
								'question_id' =>$questionData['question']['question_id'],
								'question_text'=>$questionData['question']['question'],
								
								'right_answer' =>$rightChoiceAnswer,
								'answer_id' => $this->user_model->getAnswer($answerId)
							);
					}else{
						$this->session->set_flashdata('error_msg', 'Please Attempt every Question. ' . "\n");
					}

				}
				$data['result'] = $result;
				//echo "<pre>"; print_r($data['result'][0]['question_id']);die;
				$this->load->view('header');
				$this->load->view('result', $data);
				$this->load->view('footer');
				}
		} else {
			$this->load->view('header');
			$this->load->view('nontech_test', $data);
			$this->load->view('footer');
			}
		}

	public function news_letter()
		{
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required');
		if ($this->form_validation->run() == FALSE)
			{
			redirect($_SERVER['HTTP_REFERER']);
			}
		  else
			{
			$from_email = "preeti@qtriangle.in";
			$to_email = $this->input->post('email');
			$this->email->from($from_email, 'Your Name');
			$this->email->to($to_email);
			$this->email->subject('Subscription');
			$this->email->message('Hello', $to_email, 'Thankyou for subscribing us..We will update you the latest information.');
			if ($this->email->send())
				{
				$this->session->set_flashdata("email_sent", "Email sent successfully.");
				redirect($_SERVER['HTTP_REFERER']);
				}
			  else
				{
				$this->session->set_flashdata("email_sent", "Error in sending Email.");
				redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}

	public function whatsapp_chat()
		{
		$this->load->view('whatsapp_feat');
		}

	public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('login_id');  
        $this->load->view('header');
        $this->load->view('login');  
        $this->load->view('footer');
    }  
}

?>
