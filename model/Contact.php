<?php

class Contact {
	public $id;
	public $name;
	public $phone;
	
	public function __construct($id, $name, $phone)  /*defining constructor for the class*/
    {  
    	$this->id = $id;
        $this->name = $name;
	    $this->phone = $phone;
    } 
}

?>