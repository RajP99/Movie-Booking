<?php

$servername = 'localhost';
$user = 'root';
$pass = 'raj';
$dbname = 'theatre';

$link = mysqli_connect($servername, $user, $pass, $dbname);

if($link === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$query = "SELECT * FROM users
WHERE (email = '$email');";
$sql_data = $link -> query($query);

if (mysqli_num_rows($sql_data) != 0){ 
  echo "<h1> Email already exists, please login <h1>";
} else {
  if ($email != "" AND $password!= ""){
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    $insert = $link->query($sql);

    if($insert =true){
      echo "<h1> Successfully signed up! <h1> ";
      echo "<script>window.location.href='booking.html';</script>";
    }else{
      die("Error: {$connection->Success}: {$connection->Error}");
    }
  } else {
    echo("<h1> You cannot enter a blank email or password <h1>");
  }
}

mysqli_close($link);
?>

