<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipes extends CI_Controller {
	
	public function index() {
		$this -> load -> view('recipes.php');
		$this -> load -> view('footer.php');
	}
}
