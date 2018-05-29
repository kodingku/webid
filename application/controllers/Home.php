<?php 

/**
* class for main layout
*/
class Home extends CI_Controller
{
	
	public function index(){

		$data['main_view'] = "front/display";
		$this->load->view("layout/main",$data);
	}
	
	public function profileManajemen(){
		$data['main_view'] = "front/profileManajemen";
		$this->load->view('layout/main',$data);
	}
	
}