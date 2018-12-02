<?php
class User_model extends CI_model{

public function register($alldata){
	$this->db->insert('user', $alldata);
	return $alldata;
}

public function login_detail($logindata){
	$this->db->select('*'); 
	$this->db->from('user');
	$this->db->where('useremail', $logindata['useremail']);
	$this->db->where('userpass' ,$logindata['userpass']);
	$query = $this->db->get();

	if($query->num_rows() > 0){
		return $query->result();
	}
	else{
		return false;
	}
}


public function fetch_question($catId){
		$this->db->select('*');
		$this->db->from('question');
		$this->db->where('category', $catId);
		$fetch_ques = $this->db->get();
		$questionData = array();

		if($fetch_ques->num_rows()>0){
			foreach ($fetch_ques->result_array() as $question) {
				$this->db->select('question_choice.*')
				->from('question')
				->join('question_choice', 'question.question_id = question_choice.question_id')
				->where('question.question_id', $question['question_id']);

				$options = $this->db->get()->result();
				$questionData[] = array(
					'question' => $question,
					'options' => $options
				);
			}
			//echo "<pre>"; print_r($questionData);die;
			return $questionData;

		}else{
			return false;
		}
	}

public function storeAns($selected_data){
	//echo "<pre>"; print_r($selected_data);die;
	$this->db->insert('user_question_answer', $selected_data);
	return $selected_data;
	//echo "<pre>"; print_r($store_Ans);die;
}
public function getAnswer($answerId){
	return $this->db->get_where('question_choice', array('choice_id' => $answerId))->result();

	}

public function question_cat(){

	$this->db->select('*');
	$this->db->from('question_type');
	$type = $this->db->get();
	return $type->result();
	
}

}

?>