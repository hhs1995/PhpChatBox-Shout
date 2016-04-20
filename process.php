<?php 
  include 'database.php';


//check
  if (isset($_POST['submit'])) {
  	$user = $_POST['user'];
  	$message = $_POST['message'];
  }

  //set timezone
  date_default_timezone_set('America/New_York');
  $time = date('h:i:s a',time());

  //validate user input

  if (!isset($user) || $user == '' || !isset($message) || $message == '') {
  	echo "Please fill in your name  and message";
  }
  else{
    $query = "INSERT INTO shouts (user,message,time) VALUES ('$user','$message','$time')";
      
      if (!mysqli_query($con, $query)) {
     	die("Error".mysqli_error($con));
      } 
     else {
     	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
     	exit();
     }
      
  }



 ?>