function validateForm() {

  var v_username = document.forms["loginForm"]["USERNAME"].value;
  var v_password = document.forms["loginForm"]["PASSWORD"].value;
  
  if (v_username=="" && v_password=="")   { 
      alert("Please enter your username and password");
      return false;
    } 

} 
