<?php

class controller {
    public $load;
    public $model;
    
    function __construct() {
        $this->load = new Load();
        $this->user = new User();
        $this->home();
    }
    
    function home() {
        $data = $this->user->getName('djwillis', 'David', 'Willis', 'djwillis@imail.iu.edu', 'admin');
        $this->load->view('view.php',$data);
    }
    
    
}
?>
