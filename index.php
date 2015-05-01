<?php 
	include_once("controller/Controller.php");
	$controller = new Controller();				/*makes a new controller object*/
	$controller->invoke();						/*calls the invoke method using the object of controller class*/
?>