<?php

	class Banks_model extends CI_Model {

		function __construct(){

			parent::__construct();
		}


		function getBanks() {

			$query = $this->db->query('SELECT * FROM Banks');

			if ($query->num_rows() > 0) {
				return $query->result();
			}else
				return NULL;
			}


		}


	?>