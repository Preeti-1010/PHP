<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
    parent::__construct();
       //load pagination library
        $this->load->library('pagination');
        //load post model
        $this->load->model('paginate');
        //per page limit
        $this->perPage = 5;

}

public function Go(){
  redirect('user/login');
}


public function demo()
{
    $userdata['userdata'] = $this->user_model->user();
    $this->load->view("demo",$userdata);
}
public function imageupload(){

$this->form_validation->set_rules('uname', 'name', 'required');
$this->form_validation->set_rules('NomineeSignature', '', 'callback_file_check_ns');
if ($this->form_validation->run()  == true) {
            echo "true";
$config['upload_path']          = 'uploads/';
$config['allowed_types']        = 'jpeg|jpg|png'; 
$config['file_name']=rand().$_FILES['NomineeSignature']['name'];
$this->load->library('upload', $config);   
$this->upload->initialize($config);
$this->upload->do_upload('NomineeSignature');
$imagedetails= $this->upload->data();
$JointSignature='uploads/'.$imagedetails['file_name']; 
print_r($imagedetails);die;
  } 
      else
  {

    $this->load->view('images');

  }
}

 public function file_check_ns($str){
   $allowed_mime_type_arr = array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['NomineeSignature']['name']);
        if(isset($_FILES['NomineeSignature']['name']) && $_FILES['NomineeSignature']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check_ns', 'Please select only jpeg,pjpeg,png,x-png,gif');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check_ns', 'Please choose a file to upload.');
            return false;
        }
    }
 
 public function user_reg()
{
    $this->form_validation->set_rules('uname', 'Username', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required');
    $this->form_validation->set_rules('age', 'Age', 'required');
    
    $this->form_validation->set_rules('opt', 'Please choose', 'required');
    $this->form_validation->set_rules('mobile_no', 'Contact', 'required');
    $this->form_validation->set_rules('picture', 'Choose', 'required');

     $this->form_validation->set_error_delimiters(' <div class="alert alert-danger"><button class="close" data-dismiss="alert"></button>', '</div>');
     if ($this->form_validation->run()  == false) {
          
           $this->load->view('demo');
         } 
         else
         {
            $userdata=array(
                'name'=>$this->input->post('uname'),
                'email'=>$this->input->post('email'),
                'pass'=>$this->input->post('pass'),
                'age'=>$this->input->post('age'),
                 'opt'=>$this->input->post('opt'),
                'mobile_no'=>$this->input->post('mobile_no'),
                'image'=>$this->input->post('picture')
               
                );
             //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = 'uploads/'.$uploadData['file_name'];
                    
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

    $email_check=$this->user_model->email_check($userdata['email']);
 
          if($email_check){
            $this->load->model('user_model');
            $this->user_model->register_user($userdata);
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            redirect('demo');    
          }
          else{
           
            $this->session->set_flashdata('error_msg', 'You are already Registered,Try again.');          
            redirect('demo'); 

          }

            $r1= $this->input->post('opt');

            if ($r1==1) {
                 $this->load->model('user_model');
                 $this->user_model->register_user($userdata);
              
              /*redirect('http://www.tutorialspoint.com');*/       
              }
              else if($r1==0){     
             
              $this->load->model('user_model');
            $userresult = $this->user_model->register_user($userdata);
            
             }
  }
  
}

public function send_mail() { 
         $from_email = "your@example.com"; 
         $to_email = $this->input->post('email'); 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('email_form'); 
      } 


public function login(){

$this->form_validation->set_rules('email', 'Email', 'required');           
$this->form_validation->set_rules('pass', 'Password', 'required');

   //validate submitted form data
 if($this->form_validation->run() == true){

  $log= array(
    'email'=> $this->input->post('email'),
    'pass'=> $this->input->post('pass'));
  /*var_dump($log);die;*/
  $this->load->model('user_model');
   $logindata = $this->user_model->fetch_login($log);
   
    if($logindata==true){
/*
      $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'xxx@gmail.com', // change it to yours
  'smtp_pass' => 'xxx', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE);*/
      
      $from_email = "your@example.com"; 
         $to_email = $this->input->post('email'); 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('login'); 
      /*$this->session->set_flashdata('success_msg', 'Welcome');

     $this->load->view('login');*/
    }
  }
  else
  {
     $this->session->set_flashdata('error_msg', 'Invalid Email-Id and Password,Try again.');
  $this->load->view('login');

   }
 }
      

 
 /*
     * Update post content
     */
    public function edit($id= ''){
        $data = array();
        
        //get post data
        $postData = $this->user_model->getRows($id);
     /* echo "<pre/>"; var_dump($postData);die;*/
       

        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
         
            $this->form_validation->set_rules('name', 'enter name', 'required');
            $this->form_validation->set_rules('email', 'enter email', 'required');
            $this->form_validation->set_rules('pass', 'enter pass', 'required');
            $this->form_validation->set_rules('age', 'enter age', 'required');
            $this->form_validation->set_rules('mobile_no', 'enter no', 'required');
            $this->form_validation->set_rules('opt', 'choose  any option', 'required');
            $this->form_validation->set_rules('picture', 'Choose', 'required');
            
            //prepare cms page data
            $postData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'pass' => $this->input->post('pass'),
                'age' => $this->input->post('age'),
                'mobile_no' => $this->input->post('mobile_no'),
                'opt' => $this->input->post('opt'),
                'image'=>$this->input->post('picture')
            );

             //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = 'uploads/'.$uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->user_model->update($postData, $id);

                if($update){
                    $this->session->set_userdata('success_msg', 'Data has been updated successfully.');
                    redirect('/user/index');
                }else{
                 
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }

        
        $data['post'] = $postData;
        $data['name'] = 'Update Post';
        $data['action'] = 'Edit';
        
        //load the edit page view
        $this->load->view('header', $data);
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
    }


     public function index(){
        $data = array();
        
        //get messages from the session
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

        $data['posts'] = $this->user_model->getRows();
        $data['name'] = 'All Data';
        
        //load the list page view
        $this->load->view('header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Delete post data
     */
    public function delete($id){
        //check whether post id is not empty
        if($id){
            //delete post
            $delete = $this->user_model->delete($id);
            
            if($delete){
                $this->session->set_userdata('success_msg', 'Data has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
            }
        }

        redirect('/user/index');
    }
//pagination
/*public function pagination(){
    $data = array();
        
        //get rows count
        $conditions['returnType'] = 'count';
        $totalRec = $this->paginate->getRows($conditions);
        
        //pagination config
        $config['base_url']    = base_url().'index';
        $config['uri_segment'] = 2;
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        //styling
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['next_tag_open'] = '<li class="pg-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="pg-prev">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        //initialize pagination library
        $this->pagination->initialize($config);
        
        //define offset
        $page = ($this->uri->segment(2))?0:$this->uri->segment(2);
        $offset = !$page?0:$page;
       

        //get rows
        $conditions['returnType'] = '';
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        $data['posts'] = $this->paginate->getRows($conditions);
         //$data['links']    =  $this->pagination->create_links();
        //load the list page view
        $this->load->view('index', $data);
}*/

  
}


?>