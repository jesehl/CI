<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_model extends CI_Model {


	public function getProfile($name){

		return array("fullName" => "Jesehl Basco", "age" => 14);
	}

}