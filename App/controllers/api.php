<?php

class  Api extends Controller {
    private $api;
	
	function __construct()
	{
		parent::__construct();        
	}
    function index(){
        $data = array('jeff' => 'name', 'fish' => 'Getto');
        $this->view->Json($data);
    }
}

 ?>