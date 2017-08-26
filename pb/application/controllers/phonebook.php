<?php

class phonebook extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_contacts');
	}

	public function index(){
		$d['contacts']= $this->mdl_contacts->getallcontacts();
		$this->load->view("v_dashboard", $d);
	}

	public function aboutMe(){
		$this->load->view("aboutMe");
	}

	public function ContactNo(){
		$this->load->view("ContactNo");
	}

	public function addcontact(){
		$this->load->view('v_addcontact');
	}

	public function savecontact(){
		$data = array(
			"fullname"=>$_POST['fullname'],
			"contactno"=> $_POST['contactno'],
			);

		$this->mdl_contacts->addnewcontact($data);

		redirect (base_url());
	}
}