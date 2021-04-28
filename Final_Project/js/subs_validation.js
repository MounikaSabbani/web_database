// Email address Validation
function validateForm() {
  var v_email = document.forms["myForm"]["mail"].value;
  
  if (v_email!=""){
 		if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z]*$/.test(myForm.mail.value))
 		{
    		return (true)
  		}
    	
    	alert("You have entered an invalid email address!")
    	return (false)
	}
} 
