<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Controller {
    
    public function footer() {
        $this -> load -> view('footer.php');
    }
}
