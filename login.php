<?php
$servername = 'localhost';
$user = 'root';
$pass = 'raj';
$dbname = 'theatre';

$link = new mysqli($servername, $user, $pass, $dbname);

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$query = "SELECT * FROM users
WHERE (email = '$email' AND password = '$password');";
$sql_data = $link -> query($query);

if (mysqli_num_rows($sql_data) != 0){ 
  echo "<h1> Successfully logged in! <h1>";
  echo "<script>window.location.href='booking.html';</script>";
} else {
  echo "<h1> Email and password do not match, please try again or sign up <h1>";
}
mysqli_close($link);
?>

