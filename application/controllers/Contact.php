<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index() {
		$this -> load -> view('header.php');
		$this -> load -> view('contact.php');
		$this -> load -> view('footer.php');
	}
}
