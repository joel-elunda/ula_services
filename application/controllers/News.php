<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
	public function index() {
		$this -> load -> view('header.php');
		$this -> load -> view('news.php');
		$this -> load -> view('footer.php');
	}
}
