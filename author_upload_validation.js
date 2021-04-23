function validateForm() {
  var v_storyname = document.forms["uploadForm"]["STORY_NAME"].value;
  var v_author = document.forms["uploadForm"]["AUTHOR_NAME"].value;
  var v_agegroup = document.forms["uploadForm"]["AGE_GROUP"].value;
  var v_storycontent = document.forms["uploadForm"]["STORY_CONTENT"].value;
  var v_pubyear = document.forms["uploadForm"]["PUB_YEAR"].value;
  var v_ratings = document.forms["uploadForm"]["STORY_RATINGS"].value;
  var v_genre = document.forms["uploadForm"]["STORY_GENRE"].value;
  
  var fileInput = document.getElementById('file');
  var filePath = fileInput.value;
  // Allowing file types
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
              
  if (!allowedExtensions.exec(filePath)) {
      alert('Invalid file type! Accepts only jpg, jpeg, png or gif extensions!');
      fileInput.value = '';
      return false;
      } 
 

  if (v_storyname == "" && v_author == "" && v_agegroup == "" && v_storycontent == "" && v_pubyear == "" && v_ratings == "" && v_genre == ""){
    alert("You have not entered any values, please enter them!");
    return false;
  }


  if (v_ratings!="")   { 
    if (v_ratings > 5) {
      alert("Maximum user rating is 5.0, please query for a rating in the range of 0.0 to 5.0");
      return false;
    } 
  }

} 
