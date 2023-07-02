<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
	class Page extends CI_Controller {

		public function index()
		{
			$this->load->view('api');
		}
	}
?>
