function validateForm() {
  var v_name = document.forms["searchForm"]["BOOK_NAME"].value;
  var v_author = document.forms["searchForm"]["BOOK_AUTHOR"].value;
  var v_userrating = document.forms["searchForm"]["BOOK_RATINGS"].value;
  var v_start_year = document.forms["searchForm"]["start_year"].value;
  var v_end_year = document.forms["searchForm"]["end_year"].value;
  var v_genre = document.forms["searchForm"]["BOOK_GENRE"].value;
  var v_price = document.forms["searchForm"]["BOOK_PRICE"].value;
 
  //console.log(v_price);
  //console.log(typeof(v_price));

  if (v_name =="" && v_author == "" && v_userrating == "" && v_start_year == "" && v_end_year == "" && v_genre == "" && v_price == "-1"){
    alert("Please enter value for at least one filter");
    return false;
  }

  if (v_start_year != "" && v_end_year != ""){
    if (v_start_year > v_end_year) { 
      alert("Start year should be less than End year!"); 
      return false; 
    } 
  } 

  if (v_userrating!="")   { 
    if (v_userrating > 5) {
      alert("Maximum user rating is 5.0, please query for a rating in the range of 0.0 to 5.0");
      return false;
    } 
  }

} 
