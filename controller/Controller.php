<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();							/*creates a new object of class Model*/

    } 
	
	public function invoke()
	{
		
		if (isset($_POST['addCon']))
		{
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			try {
				$this->model->addContact($name, $phone);	/*throws an exception if the phone number already exists in db*/
			} catch (Exception $e) {						
				$err = $e->getMessage();
			}
			
			$contacts = $this->model->getContacts();
			include 'view/contactList.php';
		}
		else if (isset($_POST['delete']))
		{
			$name = $_POST['namey'];
			$phone = $_POST['phoney'];
			$this->model->delContact($name, $phone);
			$contacts = $this->model->getContacts();
			include 'view/contactList.php';
		}
		else{
			$contacts = $this->model->getContacts();
			include 'view/contactList.php';
		}	
	}
}

?>