<?php 
session_start();
echo "
    <html>
      <head>    
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        <title>Contact Details</title>
      </head>
      <body>
      <br>
      <br>
      <p class='text-center'>Thanks <strong> ". $_SESSION['title'] . " " . ucfirst($_SESSION['fname']) . " " . ucfirst($_SESSION['lname']) ."</p> </strong> ";
      echo "<p class='text-center'>You have subbmitted the following details: </p>";
      echo "<p class='text-center'>Date of Birth : <strong>" . $_SESSION['birthday'] ."</p> </strong> ";
      echo "<p class='text-center'>Telephone : <strong>" . $_SESSION['mobile'] ."</p> </strong> ";
      echo "<p class='text-center'>File Uploaded : <strong>" . $_SESSION['user_file'] ."</p> </strong>";
      echo "<p class='text-center'>Message : <strong>" . $_SESSION['message'] ."</p> </strong>";
      echo "
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
      </body>
    </html>";
?>