<?php
class Admin_model extends CI_model{

	public function addquestion($listques){
		$this->db->insert('question', $listques);
		return $listques;
	}

	public function allquestion(){
		$this->db->select('*');
		$this->db->from('question');
		$query = $this->db->get();
		return $query->result();
	}

	public function editquestion($q_id){
		$this->db->select('*');
		$this->db->from('question');
		$this->db->where('question_id', $q_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function updatequestion($updateques, $q_id){
		extract($updateques);
		/*$this->db->update('question');
		$this->db->set($updateques);
		$this->db->where('question_id', $q_id);
		$query = $this->db->get();
		return $query->result();*/
		$this->db->where('question_id', $q_id);
		$this->db->update('question', $updateques);
        return true;
	}

	public function deletequestion($id){
		$this->db->where('question_id', $id);
		$this->db->delete('question');
	}
	
}
?>