<?php

$servername = 'localhost';
$user = 'root';
$pass = 'raj';
$dbname = 'theatre';

$link = new mysqli($servername, $user, $pass, $dbname);

$takenSeats = array();
$emptySeats = array();

if ($_POST['seat'] == null || $_POST['showtime'] == null){
	echo "<script language='javascript'>alert('You must select a showtime and at least one seat');</script>";
	echo "<script>history.go(-1);</script>";
	return false;
}

$movies = "SELECT movie FROM movies";
$result = $link->query($movies);
$moviesArr=array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $moviesArr[]=$row['movie'];
    }
}
$chosenMovie = $moviesArr[0];

$users = "SELECT email FROM users";
$result = $link->query($users);
$emailsArr=array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $emailsArr[]=$row['email'];
    }
}
$chosenEmail = $emailsArr[0];

$showtime = $_POST['showtime'];

if ($showtime === "6:30"){

	foreach($_POST['seat'] as $chosen){
		$query = "SELECT * FROM earlier
		WHERE (movie = '$chosenMovie' AND seat = '$chosen');";
		$sql_data = $link -> query($query);

		if (mysqli_num_rows($sql_data) != 0){

			$takenSeats[] = $chosen;

		} else {	
			$emptySeats[] = $chosen;
		}
	}

	if (sizeof($takenSeats) > 0){
		echo "<script type='text/javascript'> alert(".json_encode($takenSeats).") </script>";
		echo "<script>history.go(-1);</script>";
		return false;
	} else {
		for ($i = 0; $i < sizeof($emptySeats); $i++){

			$sql = "INSERT INTO earlier (email, movie, seat) VALUES ('$chosenEmail','$chosenMovie','$emptySeats[$i]')";
			$insert = $link->query($sql);

			if($insert = false){
				die("Error: {$connection->Success}: {$connection->Error}");
			}
		}


		echo "Your tickets for the movie ".$chosenMovie. " have been successfully reserved and sent to " .$chosenEmail;
		return true;	 
	} 
} else {
	foreach($_POST['seat'] as $chosen){

		$query = "SELECT * FROM later
		WHERE (movie = '$chosenMovie' AND seat = '$chosen');";
		$sql_data = $link -> query($query);

		if (mysqli_num_rows($sql_data) != 0){

			$takenSeats[] = $chosen;

		} else {	
			$emptySeats[] = $chosen;
		}
	}

	if (sizeof($takenSeats) > 0){
		echo "<script type='text/javascript'> alert("."Sorry but the seats, ".json_encode($takenSeats)." have been taken.".") </script>";
		echo "<script>history.go(-1);</script>";
		return false;
	} else {
		for ($i = 0; $i < sizeof($emptySeats); $i++){

			$sql = "INSERT INTO later (email, movie, seat) VALUES ('$chosenEmail','$chosenMovie','$emptySeats[$i]')";
			$insert = $link->query($sql);

			if($insert = false){
				die("Error: {$connection->Success}: {$connection->Error}");
			}
		}


		echo "Your tickets for the movie ".$chosenMovie. " have been successfully reserved and sent to " .$chosenEmail;
		return true;	 
	}

}

mysqli_close($link);
?>

