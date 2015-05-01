<?php

include_once("model/Contact.php");
include_once("connection.php");

class Model {
	/*function to fetch all the contacts from database ordering by latest entries first*/
	public function getContacts()
	{
		$contacts = array();
		$i =0;
		$allContacts = mysql_query('SELECT * FROM contact_table ORDER BY id DESC');
		while($row = mysql_fetch_object($allContacts))
		{
			$contacts[$i] = $row;
			$i++;
		}
		return $contacts;
	}
	/* function to add contact which accepts two paramenters, name and phone number*/
	public function addContact($name, $phone)
	{
		$count = mysql_num_rows(mysql_query("SELECT * FROM contact_table WHERE phone = '$phone'"));
		if($count>0){
			throw new Exception("ERROR :: Phone number already exists in the contact list", 1); /* throw an exception if the phone number already exists in db*/
		}
		else{
			mysql_query("INSERT INTO contact_table(name,phone) VALUES('$name', '$phone')");
		}
	}
	/* function to delete contact which accepts two paramenters, name and phone number*/
	public function delContact($name, $phone)
	{
		mysql_query("DELETE FROM contact_table WHERE name = '$name' AND phone='$phone'");
	}
}

?>