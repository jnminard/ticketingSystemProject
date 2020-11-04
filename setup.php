<!DOCTYPE html>
<html>
  <head>
      <script src = "https://cdn.socket.io/socket.io-1.4.5.js></script>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php
  require_once 'functions.php';

  createTable('members',
              'user VARCHAR(16),
              pass VARCHAR(16),
              secret VARCHAR(16),
              INDEX(user(6))');

  createTable('profiles',
              'user VARCHAR(16),
              text VARCHAR(4096),
              INDEX(user(6))');

  createTable('Movie',
              'MovieID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	      Title VARCHAR (40),
              ReleaseDate DATE,
	      Duration REAL,
	      Story VARCHAR (280),
	      Language VARCHAR (40),
	      Rating INTEGER');

  createTable('MovieTheater',
	      'TheaterID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	      TheaterName VARCHAR (40),
	      TheaterAddress VARCHAR (40),
	      TheaterPhone VARCHAR (10),
	      TheaterEmail VARCHAR (40)');

  createTable('AuditoriumInfo',
              'AuditoriumType INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	      Type VARCHAR (40),
	      TicketPrice REAL');
  
  createTable('Genre',
              'GenreID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              GenreName VARCHAR (40)'); 

  createTable('Customer',
              'CustomerID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	      CustomerName VARCHAR (40),
              CustomerNumber VARCHAR (10)');

  createTable('Auditorium',
              'AuditoriumID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	      TheaterID INTEGER, 
	      AuditoriumType VARCHAR (40),
	      AuditoriumNumber INTEGER,
	      SeatsAvailable INTEGER,
              SeatsRestricted VARCHAR (1000),
              SeatsPurchased VARCHAR(1000)');

  createTable('MovieGenre',
              'MovieID INTEGER,
	      GenreID INTEGER');
  
  createTable('MovieTimes',
       	      'MovieShowing INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	      MovieID INTEGER, 
	      AuditoriumID INTEGER,
	      MovieDate Date,
	      TimeStart TIME,
	      TimeEnd TIME');
  
  createTable('Bookings',
              'MovieShowing INTEGER,
	      CustomerID INTEGER, 
	      SeatNumber VARCHAR (40),
	      BookingPurchasedDate DATE');

  
  
  
  
?>

    <br>...done.
  </body>
</html>
