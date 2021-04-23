<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = $_POST["mail"];
         $subject = "This is subject";
         
         $message = "<b>Your subscription is successful</b>";
         
         
         $header = "From:kandem@iu.edu \r\n";
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>