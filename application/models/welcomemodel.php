<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class welcomemodel extends CI_Model
{
    public $table = 'register';
    

    function insert($data)
    {
        $ab=$this->db->select('*');
        $this->db->from('register');
        $this->db->where('email', $data['email'] );
        $this->db->or_where('phone', $data['phone'] );
        
        $bb=$ab->get();
        $av=$bb->num_rows();
        
        if($av==true){
        return false; 
        }else{
            $this->db->insert($this->table, $data);
            return true;
    
        }
        
    }

function fetchdetails($data){
    
    $ab=$this->db->select('*');
    $this->db->from('register');
    $this->db->where('email', $data['email'] );
    $this->db->where('password', $data['password'] );
    $bb=$ab->get();
     $baby=$bb->row_array();
     if($baby==true){
        $this->db->where('email', $data['email']);
        $this->db->set('lastlogin',$data['format']);   
        $this->db->update('register');
  
     }
        return $baby;


}

function totaluser($tyt){
    
    $ab=$this->db->select('*');
    $this->db->from('register');
    $this->db->where('role', $tyt['role'] );
    
    $bb=$ab->get();
     $baby['totalrow']=$bb->num_rows();
     $ab=$this->db->select('*');
     $this->db->from('register');
     $this->db->where('email', $tyt['email'] );
     $bb=$ab->get();
    
     $cv=$bb->row_array();
     $baby['lastlogin']=$cv['lastlogin'];
      
        return $baby;


}


function alluser($tyt){
    $ab=$this->db->select('*');
    $this->db->from('register');
    $this->db->where('role', 'user' );
  
    $bb=$ab->get();
    $cv=$bb->result_array();
     
    return $cv; 
    
}





}