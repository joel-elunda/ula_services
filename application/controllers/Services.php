<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	
	public function index() {
		$this -> load -> view('header.php');
		$this -> load -> view('services.php');
		$this -> load -> view('footer.php');
	}
}
