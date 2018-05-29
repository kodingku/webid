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
	public function smartHome(){
		$data['main_view'] = "front/smarthome";
		$this->load->view('layout/main',$data);
	}
	public function soho(){
		$data['main_view'] = "front/soho";
		$this->load->view('layout/main',$data);
	}
	public function web(){
		$data['main_view'] = "front/web";
		$this->load->view('layout/main',$data);
	}
	public function dataCenter(){
		$data['main_view'] = "front/datacenter";
		$this->load->view('layout/main',$data);
	}
	public function gudangApp(){
		$data['main_view'] = "front/gudangApp";
		$this->load->view('layout/main',$data);
	}
	public function broadcasting(){
		$data['main_view'] = "front/broadcasting";
		$this->load->view('layout/main',$data);
	}
	
	public function kontak(){
		$data['main_view'] = "front/kontak";
		$this->load->view('layout/main',$data);
	}
	
}