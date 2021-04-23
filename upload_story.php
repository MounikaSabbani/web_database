<?php

include 'dbconnection.php';

$sname = $_POST['STORY_NAME'];
$aname = $_POST['AUTHOR_NAME'];
$age = $_POST['AGE_GROUP'];
$content = $_POST['STORY_CONTENT'];
$genre = $_POST['STORY_GENRE'];
$pubyear = $_POST['PUB_YEAR'];
$ratings = $_POST['STORY_RATINGS'];




$image = addslashes(file_get_contents($_FILES['STORY_IMAGE']['tmp_name']));


// get id
$sql = "SELECT MAX(RECORD_ID) AS RECORD_ID, MAX(STORY_ID) AS STORY_ID FROM STORIES";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$newid = $row['RECORD_ID'] + 1;
$sid = $row['STORY_ID'] + 1;

// insert records into the database in phpmyadmin
$sql1 = "INSERT INTO STORIES (RECORD_ID, STORY_ID, STORY_NAME, AUTHOR_NAME, AGE_GROUP, STORY_CONTENT, STORY_IMAGE, STORY_GENRE, PUB_YEAR, STORY_RATINGS, STORY_REVIEWS, STORY_STATUS) 
VALUES ('".$newid."', '".$sid."','".$sname."', '".$aname."', '".$age."', '".$content."', '".$image."', '".$genre."','".$pubyear."', '".$ratings."', '".$reviews."', '".$status."')";


if (mysqli_query($conn, $sql1)) {
    echo "You have successfully uploaded your story! <br>";
    echo "Please wait for the admin to review your story..!";
    echo "<a href=\"javascript:history.go(-1)\">Upload more stories</a>";
    
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>
