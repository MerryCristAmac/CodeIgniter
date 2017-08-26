<?php

class mdl_contacts extends CI_Model{
	function addnewcontact($data){
		$this->db->insert('tblcontacts', $data);
	}

	//to populate data from tables

	function getallcontacts(){
		$q=$this->get->('tblcontacts');
		return $q->result();
	}
}