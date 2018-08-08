<?php
class User_model extends CI_model{
 
 
 
public function register_user($userdata){
 

return $this->db->insert('registration', $userdata);
 
}

  function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('registration', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('registration');
            return $query->result_array();
        }
    }

 public function update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('registration', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }

    /*
     * Delete post
     */
    public function delete($id){
        $delete = $this->db->delete('registration',array('id'=>$id));
        return $delete?true:false;
    }

public function email_check($email){
 
  $this->db->select('*');
  $this->db->from('registration');
  $this->db->where('email',$email);
  $query=$this->db->get();
 
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
 
} 

public function fetch_login($log)
{
 // var_dump($log);
$this->db->select('*');
  $this->db->from('registration');
  
  $this->db->where('email', $log['email']);
  $this->db->where('pass', $log['pass']); 
  $query=$this->db->get();
   // echo  $this->db->last_query();
    // $user = $query->result();
   // print_r($user);
  if($query->num_rows() > 0)
  {
   return $query->result();
  }
  else
  {  
   return false;
  }
}


public function user()
{
    $this->db->select('*'); //actual field name of id
    $query=$this->db->get('registration');

    return $query->result();
}




}
?>