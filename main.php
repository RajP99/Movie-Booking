<?php
$movie=$_GET["movie"];

$info  = array(
	array("pic1.jpg","June 22, 2018","Adventure, Action, Thriller","164","Located off the coast of Costa Rica, the Jurassic World luxury resort provides a habitat for an array of genetically engineered dinosaurs, including the vicious and intelligent Indominus rex. When the massive creature escapes, it sets off a chain reaction that causes the other dinos to run amok. Now, it's up to a former military man and animal expert (Chris Pratt) to use his special skills to save two young brothers and the rest of the tourists from an all-out, prehistoric assault.","Spider-Man","pic5.jpg","John Wick 2","pic6.jpg","Avengers","pic7.jpg","The Nun","pic8.jpg"),

	array("pic2.jpg","November 9, 2018","Comedy, Family, Fantasy","105","In this live-action adaptation of the beloved children's tale by Dr. Seuss, the reclusive green Grinch (Jim Carrey) decides to ruin Christmas for the cheery citizens of Whoville. Reluctantly joined by his hapless dog, Max, the Grinch comes down from his mountaintop home and sneaks into town to swipe everything holiday-related from the Whos. However, the bitter grump finds a hitch in his plans when he encounters the endearing Cindy Lou Who (Taylor Momsen).","Spider-Man","pic5.jpg","John Wick 2","pic6.jpg","Avengers","pic7.jpg","The Nun","pic8.jpg"),

	array("pic3.jpg","July 17, 2013","Comedy, Action, Adventure","96","Veteran lawman Roy Pulsifer (Jeff Bridges) works for the R.I.P.D., a legendary police force charged with finding monstrous spirits who are disguised as ordinary people but are trying to avoid their final judgment by hiding out among the living. When Roy and his new partner, Nick Walker (Ryan Reynolds), uncover a plot that could end all life, they must discover a way to restore the cosmic balance or else watch the tunnel to the afterlife start sending angry souls back to the world of the living.","Spider-Man","pic5.jpg","John Wick 2","pic6.jpg","Avengers","pic7.jpg","The Nun","pic8.jpg"),

	array("pic4.jpg","July 12, 2013","Science-Fiction, Action, Monster","132","Long ago, legions of monstrous creatures called Kaiju arose from the sea, bringing with them all-consuming war. To fight the Kaiju, mankind developed giant robots called Jaegers, designed to be piloted by two humans locked together in a neural bridge. However, even the Jaegers are not enough to defeat the Kaiju, and humanity is on the verge of defeat. Mankind's last hope now lies with a washed-up ex-pilot (Charlie Hunnam), an untested trainee (Rinko Kikuchi) and an old, obsolete Jaeger.","Spider-Man","pic5.jpg","John Wick 2","pic6.jpg","Avengers","pic7.jpg","The Nun","pic8.jpg"),

	array("pic5.jpg","December 12, 2018","Adventure, Action, Superhero","133","Spider-Man centers on student Peter Parker (Tobey Maguire) who, after being bitten by a genetically-altered spider, gains superhuman strength and the spider-like ability to cling to any surface. He vows to use his abilities to fight crime, coming to understand the words of his beloved Uncle Ben: With great power comes great responsibility.","Jurrasic World","pic1.jpg","The Grinch","pic2.jpg","R.I.P.D","pic3.jpg","Pacific Rim","pic4.jpg"),

	array("pic6.jpg","February 10, 2018","Thriller, Action, Crime","122","Retired super-assassin John Wick's plans to resume a quiet civilian life are cut short when Italian gangster Santino D'Antonio shows up on his doorstep with a gold marker, compelling him to repay past favours. Ordered by Winston, the kingpin of secret assassin society The Continental, to respect the organisation's ancient code, Wick reluctantly accepts the assignment to travel to Rome to take out D'Antonio's sister, the ruthless capo atop the Italian Camorra crime syndicate.","Jurrasic World","pic1.jpg","The Grinch","pic2.jpg","R.I.P.D","pic3.jpg","Pacific Rim","pic4.jpg"),

	array("pic7.jpg","April 27th, 2018","Drama, Action, Miscellaneous","149","Iron Man, Thor, the Hulk and the rest of the Avengers unite to battle their most powerful enemy yet -- the evil Thanos. On a mission to collect all six Infinity Stones, Thanos plans to use the artifacts to inflict his twisted will on reality. The fate of the planet and existence itself has never been more uncertain as everything the Avengers have fought for has led up to this moment.","Jurrasic World","pic1.jpg","The Grinch","pic2.jpg","R.I.P.D","pic3.jpg","Pacific Rim","pic4.jpg"),

	array("pic8.jpg","September 6, 2018","Horror, Mystery, Thriller","96","When a young nun at a cloistered abbey in Romania takes her own life, a priest with a haunted past and a novitiate on the threshold of her final vows are sent by the Vatican to investigate. Together, they uncover the order's unholy secret. Risking not only their lives but their faith and their very souls, they confront a malevolent force in the form of a demonic nun.","Jurrasic World","pic1.jpg","The Grinch","pic2.jpg","R.I.P.D","pic3.jpg","Pacific Rim","pic4.jpg")
);


$servername = 'localhost';
$user = 'root';
$pass = 'raj';
$dbname = 'theatre';
$link = new mysqli($servername, $user, $pass, $dbname);



$i;

if($movie=="Jurrasic World"){
	$i=0;
	$sql = "INSERT INTO movies (movie) VALUES ('Jurrasic World')";
	$insert = $link->query($sql);

	if($insert = false){
		die("Error: {$connection->Success}: {$connection->Error}");
	}
}elseif ($movie=="The Grinch"){
	$i=1;
	$sql = "INSERT INTO movies (movie) VALUES ('The Grinch')";
	$insert = $link->query($sql);

	if($insert = false){
		die("Error: {$connection->Success}: {$connection->Error}");
	}
}elseif ($movie=="R.I.P.D"){
	$sql = "INSERT INTO movies (movie) VALUES ('R.I.P.D')";
	$insert = $link->query($sql);

	if($insert = false){
		die("Error: {$connection->Success}: {$connection->Error}");
	}
	$i=2;
}elseif ($movie=="Pacific Rim"){
	$sql = "INSERT INTO movies (movie) VALUES ('Pacific Rim')";
	$insert = $link->query($sql);

	if($insert = false){
		die("Error: {$connection->Success}: {$connection->Error}");
	}
	$i=3;
}elseif ($movie=="Spider-Man"){
	$sql = "INSERT INTO movies (movie) VALUES ('Spider-Man')";
	$insert = $link->query($sql);

	if($insert = false){
		die("Error: {$connection->Success}: {$connection->Error}");
	}
	$i=4;
}elseif ($movie=="John Wick 2"){
	$sql = "INSERT INTO movies (movie) VALUES ('John Wick 2')";
	$insert = $link->query($sql);

	if($insert = false){
		die("Error: {$connection->Success}: {$connection->Error}");
	}
	$i=5;
}elseif ($movie=="Avengers"){
	$sql = "INSERT INTO movies (movie) VALUES ('Avengers')";
	$insert = $link->query($sql);

	if($insert = false){
		die("Error: {$connection->Success}: {$connection->Error}");
	}
	$i=6;
}elseif ($movie=="The Nun"){
	$sql = "INSERT INTO movies (movie) VALUES ('The Nun')";
	$insert = $link->query($sql);

	if($insert = false){
		die("Error: {$connection->Success}: {$connection->Error}");
	}
	$i=7;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $movie;?></title>
	<link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>

	<div class="row">
		<div class="column left">
			<p id="blank">Hey</p>
		</div>
		<div class="column middle">
			<h1 id="title">ONTechU CINEMAS</h1>
			<img src="./pictures/logo.png" align="right">  <br><br><br><br><br><br>
			<!--Navigation Bar-->
			<ul>
				<li><a href="HomePage.html">Home</a></li>
				<li><a href="Pricing.html">Pricing</a></li>
				<li><a href="Contact.html">About</a></li>
			</ul>
			<div>
				<table>
					<tr>
						<td rowspan="4">
							<?php
							echo "<table";

							echo "<tr>";
							echo "<td rowspan='4'><img src="."./pictures/".$info[$i][0]."></td>";
							echo "<td><h1 style='color: white;'>$movie</h1></td>";
							echo"</tr>";

							echo"<tr>";
							echo"<td><p>Release: ".$info[$i][1]."</p></td>";
							echo"</tr>";

							echo"<tr>";
							echo"<td><p>Genre: ".$info[$i][2]."</p></td>";
							echo"</tr>";

							echo"<tr>";
							echo"<td><p>Runtime: ".$info[$i][3]." mins</p></td>";
							echo"</tr>";
							echo"</table>";

							echo"<div>
							<fieldset style='border-color: transparent;'>
							<legend>Description</legend>
							<p>".$info[$i][4]."</p>
							<br>
							<center>
							<button type='submit'><a href='login.html'>Book Tickets</a></button>
							</center>
							</fieldset>
							</div>";

							echo"<br>";
							echo"<center>";
							echo"<h2 style='color: white;'>Other recommendations</h2>";
							echo"</center>";
							echo"<center>";
							echo"<table cellpadding= '25px' style='color:white; fontsize:18px'>";
							echo"<tr id='pic'>";
							echo"<td><a href='main.php?movie=".$info[$i][5]."'><img src="."./pictures/".$info[$i][6]."></a><center>".$info[$i][5]."</center></td>";
							echo"<td><a href='main.php?movie=".$info[$i][7]."'><img src="."./pictures/".$info[$i][8]."></a><center>".$info[$i][7]."</center></td>";
							echo"<td><a href='main.php?movie=".$info[$i][9]."'><img src="."./pictures/".$info[$i][10]."></a><center>".$info[$i][9]."</center></td>";
							echo"<td><a href='main.php?movie=".$info[$i][11]."'><img src="."./pictures/".$info[$i][12]."></a><center>".$info[$i][11]."</center></td>";
							echo"</tr>";
							echo"</table>";
							echo"</center>";
							?> 
						</td>						
					</tr>
				</table>
			</div>

		</div>
		<div class="column right">
			<p id="blank">Hey</p>
		</div>

	</div>

</body>
</html>