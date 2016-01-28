<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	$this->home();

	}

	public function home() {
		
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('banks_model');

		$data['title'] = 'Cheque Writer';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('words', 'Amount in Words', 'required');

		if ($this->form_validation->run() == FALSE){

			$this->load->view('banks', $data);

	} else {

		$data['name'] = $this->input->post('name');
		$data['amount'] = $this->input->post('amount');
		$data['words'] = $this->input->post('words');
		$data['date'] = $this->input->post('date');
		$this->load->view('banks', $data);

	}

	}

	public function banks() {

		$this->load->model('banks_model');


		$data['title'] = 'List of Banks';
		$data['banks'] = $this->banks_model->getBanks();


		$this->load->view('banks', $data);

	}

}
