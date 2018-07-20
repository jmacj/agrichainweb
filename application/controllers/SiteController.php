<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteController extends BaseController {


	public function index() {

		if(parent::current_user()) {

			$this->dashboard();
		} else {

			$this->landing();
		}
	}


	public function register() {

		if(parent::current_user()) {

			$this->dashboard();
		} else {

			parent::guest_page('users/register_user', null, 'AgriChain | Register');
		}

	}


	public function login() {

		if(parent::current_user()) {

			$this->dashboard();
		} else {
		
			parent::login_page();
		}
	}


	public function landing() {

		$data = [];
		parent::guest_page('index', $data);
	}

	public function auth() {
		if($this->input->server("REQUEST_METHOD") === "POST") {
			$this->output->set_content_type("application/json");
			if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
				$this->output->set_status_header(200);
				$data = ['message' => 'awesome'];
			}
			else{
				$this->output->set_status_header(400);
				$data = ['message' => 'Invalid'];
			}
			echo json_encode($data);
			return $this->output->set_output(json_encode($data, JSON_PRETTY_PRINT));
		}
	}

}
