<?php
 include 'database.php';
?>
<?php
  $query = "SELECT * FROM shouts"; 
  $shouts =  mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shout Box</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div id="container">
 	<header>
 		<h1>Shout Box</h1>
 	</header>
 	<div id="shouts">
 		<ul>
 		  <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
 		  	<li class="shout"><span><?php echo "$row[time]"; ?></span>-<strong><?php echo "$row[user]"; ?></strong>: <?php echo "$row[message]"; ?></li>
 		  <?php endwhile; ?>
 		</ul>
 	</div>
 	<div id="input">
 	<form action="process.php" method="POST">
     Name:	<input type="text" name="user" placeholder="Enter Your name" />
 	 Message :<input type="text" name="message" placeholder="Enter Your Message" />
 	 <br>
 	<input class="shout-btn" type="submit" name="submit"value="Shout IT Now!"></input>
 	</form>
 	</div>
 </div>
</body>
</html>