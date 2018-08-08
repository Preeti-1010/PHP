 public function checkuserlogin($data)
 {
  // var_dump($data);
  $this->db->select('*');
  $this->db->from($this->table);
  
        $this->db->where('email', $data['Mebmer_Email']);
        $this->db->where('password', $data['Mebmer_Password']);  
         $this->db->where('active',1);
  //$this->db->where('email',$data['User_Email'], 'password',$data['User_Password'] );
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