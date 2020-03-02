<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
    function __construct(){
        
        parent::__construct();
        $this->load->database();

    }

    

   /*Admin Login*/
  public function userfetch($email,$password){

    $query=$this->db->select('*')
                    ->where('email', $email)
                    ->where('password', $password)
              ->get('admin');
        
        if($query->num_rows() == 1){
            
            $userArr = array();
            foreach($query->result() as $row){
                $userArr[0] = $row->u_id;
                $userArr[1] = $row->name;
                $userArr[2] = $row->email;                
            }
            
            $userData = array(
                'u_id' => $userArr[0],
                'name' => $userArr[1],
                'email' => $userArr[2],
                'logged_in'=> TRUE
            );
            $this->session->set_userdata($userData);
            return $query->result();
        }
        else{
            return false;
        }
  }


  /*Add User*/
    public function insert($adduser)
      {
        $query=$this->db->insert('adduser',$adduser);
      }


      /*view user*/
  public function fetch_user()
    {
        $result=$this->db->select('*')
                        ->from('adduser')
                        ->get();
        return $result->result();
    }

     public function fetch_actualuser()
    {
        $result=$this->db->select('*')
                        ->from('adduser')
                        ->get();
        return $result->result();
    }
}
