<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct() {
        parent::__construct();
        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function fetchall()
	{
		$url = 'https://reqres.in/api/users';
		$headers = array(

			'Content-Type:application/json'
	
		);
	
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	//	curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
		$featuredJobs = curl_exec($ch);
		$charu=json_decode($featuredJobs);
		echo "<pre>";
		print_r($charu->data);
	}

	public function fetchsingleuser($ab)
	{
		$url = "https://reqres.in/api/users/".$ab;
		$headers = array(

			'Content-Type:application/json'
	
		);
	
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	//	curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
		$featuredJobs = curl_exec($ch);
		$charu=json_decode($featuredJobs);
		echo "<pre>";
		print_r($charu->data);
	}



	public function addnew()
	{
		$url = 'https://reqres.in/api/users';
		$headers = array(

			'Content-Type:application/json'
	
		);
	$fields=array('name'=>'viney','job'=>'coder');
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
		$featuredJobs = curl_exec($ch);
		$charu=json_decode($featuredJobs);
		echo "<pre>";
		print_r($charu);
	}

	public function update($ab)
	{
		$ab=2;
		$url = "https://reqres.in/api/users/".$ab;
		$headers = array(

			'Content-Type:application/json'
	
		);
	$fields=array('name'=>'viney','job'=>'coder');
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
		$featuredJobs = curl_exec($ch);
		$charu=json_decode($featuredJobs);
		echo "<pre>";
		print_r($charu);
	}




	public function delete($ab){
		
		$url = "https://reqres.in/api/users/".$ab;
		$headers = array(

			'Content-Type:application/json'
	
		);
	
		 $ch = curl_init($url);
		 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		 $featuredJobs = curl_exec($ch);
		 $charu=json_decode($featuredJobs);
		 echo "<pre>";
		 
		print_r($charu);
	}
	



public function items(){
	$this->load->view('items');
	
	
		
}
public function logout(){
	$this->session->sess_destroy();
	return redirect('login');

	
}

public function reg(){
	$this->load->library('user_agent');
 
	$data['name']=$this->input->post('name');
	$data['phone']=$this->input->post('phone');
	$data['email']=$this->input->post('email');
	$data['password']=md5($this->input->post('password'));
	$data['ip'] = $this->input->ip_address();
	$data['os']=$this->agent->platform();
	$data['role']='user';
	
	
	$this->load->model('welcomemodel');
	$abc=$this->welcomemodel->insert($data);
	if($abc==true){
		$ab['two']= '<script>alert("account created successfully")</script>';
		
		$this->load->view('login',$ab);
		
		
	}else{
		$ab['one']= '<script>alert("email or phone no. already exist")</script>';
		$this->load->view('register',$ab);
		
	}

}

public function login(){
	$this->load->view('login');

}
public function loginuser(){
	$this->load->helper('date');
	date_default_timezone_set('Asia/Kolkata'); 
	$currentDate =time();
	$datestring = '%Y-%m-%d - %h:%i %a';
	$time = time();
	$better_date= mdate($datestring, $time).'<br>'; 
	$data['format']=date("Y-m-d H:i:s").'<br>'; 
	$data['email']=$this->input->post('email');
	$data['password']=md5($this->input->post('password'));
	$this->load->model('welcomemodel');
	$abc=$this->welcomemodel->fetchdetails($data);
	if($abc==true){
		$newar=array('name'=>$abc['name'],'email'=>$abc['email'],'role'=>$abc['role']);
	
	
	$this -> session -> set_userdata($newar);
	
if($abc['role']=='user'){
	//$this->load->view('dashboarduser');
	return redirect('dashboarduser');


}	else{
	//$this->load->view('dashboardadmin');
	return redirect('dashboardadmin');


}
}else{
	$ab['one']='<script>alert("wrong credentials")</script>';
	
	$this->load->view('login',$ab);

	
}
}
public function dashboardadmin(){
	$tyt=$this->session->userdata();
	$this->load->model('welcomemodel');
	$abc['all']=$this->welcomemodel->alluser($tyt);
	$aaa=$this->welcomemodel->totaluser($tyt);
	$abc['flash']=$aaa;
	
	$this->load->view('dashboardadmin',$abc);
	
	
	
}

public function dashboarduser(){
	$tyt=$this->session->userdata();
	$this->load->model('welcomemodel');
	$abc=$this->welcomemodel->totaluser($tyt);
	$this->load->view('dashboarduser',$abc);
	
	
}






public function buyprop(){
	$abc=$this->session->userdata('email');
	$def=$this->session->userdata('phone');
	
	if($abc==true || $def==true){
		print_r($_POST);
		$this->load->view('logout');
	}else{
		return redirect('register');

	}
	
	
}

public function register(){
	$this->load->view('register');
	
	
}






	
}
