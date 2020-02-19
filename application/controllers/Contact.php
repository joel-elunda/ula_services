<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	// private $name = NULL;
	// private $phone = NULL;
	// private $email = NULL;
	// private $message = NULL;

	public function index() {
		$this -> load -> view('header.php');
		$this -> load -> view('contact.php');
		$this -> load -> view('footer.php');
	}


	public function user_infos() {
		
		$user = array(
			$this -> input -> post('name'),
		    $this -> input -> post('phone'),
		    $this -> input -> post('email'),
		    $this -> input -> post('message')
		);

		return $user;
	}


	
}
