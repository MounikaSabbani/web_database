function validateForm() {

  var v_agegroup = document.forms["searchForm"]["AGE_GROUP"].value;

  var v_pubyear = document.forms["searchForm"]["PUB_YEAR"].value;

  var v_genre = document.forms["searchForm"]["STORY_GENRE"].value;
  



  if (v_pubyear!="")   { 
    if (v_pubyear < 2009) {
      alert("You can find books from the year 2009 onwards..");
      return false;
    } 
  }

} 
