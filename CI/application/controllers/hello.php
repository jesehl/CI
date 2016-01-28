<?php

class Hello extends CI_Controller {

	public function index() {

		echo "This is index";
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');

		

		$this->load->view('one', $banks);
	}

	public function one($name) {


		$this->load->model('hello_model');

		$profile = $this->hello_model->getProfile("jesehl");

		print_r($profile);
		
		$profile = $this->hello_model->getProfile("jes");

		$this->load->view('header');

		$data = array("name" => $name);

		$data['profile'] = $profile;
		$this->load->view('one', $data);
		
	}

	public function form_helper() {

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$banks = array(
                  'bpi'  => 'BPI',
                  'metrobank'    => 'Metrobank',
                );

		$this->load->view('one', $banks);

	}

	public function print_cheque() {


		$details = array(
					'bpi' => 'BPI',
					'metrobank' => 'Metrobank',
			);
		$this->load->view('bpi', $details);



	}



} ?>