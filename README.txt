GROUP 16 - THEATRE BOOKING SYSTEM

***DATABASE INFORMATION***
Create a database called "theatre", 
The account information to connect to the database is:  
$user = 'user';
$pass = '12345';

There are four tables that need to be created:

1. CREATE TABLE movies (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 movie VARCHAR(50)
);

2. CREATE TABLE users (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 email VARCHAR(50),
 password VARCHAR(255)
);

3. CREATE TABLE earlier (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 email VARCHAR(50),
 movie VARCHAR(50),
 seat INT(20)
);

4. CREATE TABLE later (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 email VARCHAR(50),
 movie VARCHAR(50),
 seat INT(20)
);


Start the program by running the HomePage.html file on the server

***PROGRAM DESCRIPTIONS***

HomePage.html - The starting page of the program, it contains the html for the layout of the page
		and also embedded JavaScript for the pictures powerpoint
main.php - This file contains both php and html. The php is used when the user clicks on a movie, the movie is stored in the movies database. The php also
	   retrieves the information for the movie such as the title, runtime, etc and stores it in a variable.
	   The html is used to make the layout of the page and display all relevent movie information
Pricing.html - This file contains all of the product pricing for the theatre
Contact.html - This slide contains simple contact information such as phone numbers and addresses, as well as social media
		links, and a google maps that uses JavaScript
Login.html, login.php, Register.html, register.php - There programs are taken from Assignment 3. These programs allow the user to login if they have an account, or register if they do not.
			  			     Once the user logs/registers in, they are sent to the booking.html page
Booking.html - This file contains the layout for the seat booking, it makes the user select a seat and a showtime, 
		and then sends them to seats.php
Seats.php - This file checks if the user submitted seats are already taken for the chosen movie and showtime, if they are taken the user is told to select
	    other seats. If the seats are not taken, they are submitted to the database along with the users email and movie selection
Seats.js - This file is taken from Assignment 2. Once the user clicks on a seat, the program shows the user the
	   cost by using this file
Seats.css - Contains the styling for the booking.html page
Style.css - Contains the styling for every page of the project besides the booking.html

