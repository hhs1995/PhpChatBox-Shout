<?php 
 $con = mysqli_connect("localhost","root","","shoutit");
  if (mysqli_connect_errno()) {
  	echo "connection failed due to".$mysqli_connect_error();
  }
 ?>