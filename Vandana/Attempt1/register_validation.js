function validateForm() {
  var v_username = document.forms["registerForm"]["UserName"].value;
  var v_password = document.forms["registerForm"]["Password"].value;
  var v_conf_password = document.forms["registerForm"]["ConfirmPassword"].value;
  

  
  if (v_username == "" && v_password == "" && v_conf_password == ""){
    alert("You have not entered any values, please enter them!");
    return false;
  }

  // alerts when the password & confirm password do not match
  if (v_password != v_conf_password){
      alert('Password and Confirm Password do not match! Enter again!');

      return false;
      } 


} 
