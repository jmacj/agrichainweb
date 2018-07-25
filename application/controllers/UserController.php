<?php
defined('BASEPATH') OR exit('No direct script access allowed');


use GuzzleHttp\Client;



class UserController extends BaseController {
	

	public function login_submit() {

		$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'http://agrichainapi.herokuapp.com/',
		    // You can set any number of default request options.
		    'timeout'  => 2.0,
		]);

		if($this->input->server("REQUEST_METHOD") === "POST") {
			
			$response = $client->request('POST', 'user_token', [
				'json' => [
					'auth' => [
						'email' => $this->input->post('email'),
						'password' => $this->input->post('password')
					]
				]
			]);
			foreach ($response->getHeaders() as $name => $values) {
    echo $name . ': ' . implode(', ', $values) . "\r\n";
}
			print_r($response->getReasonPhrase());
		}
	}

}
