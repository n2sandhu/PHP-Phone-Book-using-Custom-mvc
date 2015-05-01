function validate(){
	var name = document.getElementById('name').value;
	var phone = document.getElementById('phone').value;
	if (name == "" || phone == "") {  						/*if any of the fields are left empty*/
		alert('Fill in all the fields');
		return false;
	}
	else{
		var i;
		for(i=0; i<phone.length;i++)
		{
			if(phone.charAt(i)<'0' || phone.charAt(i)>'9')	/*pops an alert if number contains any character besides digits*/
			{
				alert('Invalid Number. Phone number must consist of digits with no spaces');
				document.getElementById('phone').focus();
				return false;
			}
		} 	
	}
	if(!(phone.length==10)){								/*pops an alert if number contains digits lesser than or more than 10*/	
		alert('Phone number must consist of 10 digits');
		return false;
	}
}
