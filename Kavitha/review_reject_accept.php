<?php
include 'dbconnection.php';
$status = $_POST['status']; 
$storyID = $_POST['StoryID']; 



$sql1 = "UPDATE STORIES SET STORY_STATUS = '".$status."' WHERE STORY_ID =".$storyID;
    

if (mysqli_query($conn, $sql1)) {
    echo "The status has been successfully updated for story - ";
    echo $storyID;
    echo "<a href=\"book_admin.php\">GO BACK to Admin View</a>";
   
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
