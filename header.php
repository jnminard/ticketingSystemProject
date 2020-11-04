<?php
session_start();

echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
     <meta http-equiv="refresh">
    <meta http-equiv="Expires" content="-1">
     
    <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css?id=5230'>
   
    <script src='javascript.js'></script>
    <script src='jquery-2.2.4.min.js'></script>
    <script src='jquery.mobile-1.4.5.min.js'></script>
    <link rel='stylesheet' href='styles.css?id=5231' type='text/css'>
   <style>
table {
  
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #dddddd;

}
#left {
  text-align:right;
  
}

#right {
   text-align:justify;
   
}
</style>

_INIT;

  require_once 'functions.php';
  
  $selectTheater = $_SESSION['selectTheater'];
  $date = $_SESSION['date'];
  $movie = $_SESSION['movie'];
  $theaterID = $_SESSION['theaterID'];
  $timeStart = $_SESSION['timeStart'];
  $timeStart = $_SESSION['timeEnd'];
  $movieShowing = $_SESSION['movieShowing'];
  $auditoriumID = $_SESSION['auditoriumID'];
    
  if (!isset($_GET['theaters']) and !isset($_GET['dates']) and !isset($_GET['movies'])){ 
  $selectTheater = "Choose a theater!";
  $date = "When do you want to go?";  
  $movie = "Choose a movie!";
  $theaterID = "";
  $timeStart = '';
  $timeStart = '';
  $movieShowing = '';
  $auditoriumID = '';
  }
  
  if (isset($_GET['theaters']) and !isset($_GET['dates']) and !isset($_GET['movies'])){ 
  
  $date = "When do you want to go?";  
  $movie = "Choose a movie!";
  $theaterID = "";
  }
  
  if (isset($_GET['dates']) and !isset($_GET['movies'])){ 
  
  $movie = "Choose a movie!";
  $theaterID = "";
  }
  
  $userstr = 'Welcome Guest';
  
  
  if (isset($_SESSION['user']))
  { 
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";}
  
 
  else $loggedin = FALSE;

echo <<<_MAIN
    <title>TheaterProject: $userstr</title>
  </head>
  <body>
    <div data-role='page'>
      <div data-role='header'>
        <div id='logo' class='center'>TheaterProject</div>
        <div class='username'>$userstr</div>
      </div>
      <div data-role='content'>

_MAIN;
$sql = "SELECT secret FROM members where user='$user'";
$result1 = queryMysql($sql);
$result='';

  
 $row = $result1->fetch_assoc();
   
    $result = $row["secret"];
  



  if ($loggedin and $result != 'NULL' and $_SESSION['pass'] == $result)
   { 
echo <<<_LOGGEDINADMIN
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition="fade" href='home.php?view=$user'>Home</a>
          <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="fade" href='updateDB.php'>Edit DB</a>
          <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="fade" href='profile.php'>Edit Profile</a>
          <a data-role='button' data-inline='true' data-icon='action'
            data-transition="fade" href='logout.php'>Log out</a>
         
          <a data-role='button' data-inline='true' data-icon='user'
            data-transition="fade" href='theater.php'>Theater</a>
        </div>
        
        
_LOGGEDINADMIN;
    }
      
      elseif($loggedin)
      {
      
echo <<<_LOGGEDIN
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition="fade" href='home.php?view=$user'>Home</a>
         
          <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="fade" href='profile.php'>Edit Profile</a>
          <a data-role='button' data-inline='true' data-icon='action'
            data-transition="fade" href='logout.php'>Log out</a>
         
          <a data-role='button' data-inline='true' data-icon='user'
            data-transition="fade" href='theater.php'>Theater</a>
        </div>
        
       
_LOGGEDIN;
      }
  else
  {
echo <<<_GUEST
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition="fade" href='index.php'>Home</a>
          <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="fade" href='signup.php'>Sign Up</a>
          <a data-role='button' data-inline='true' data-icon='check'
            data-transition="fade" href='login.php'>Log In</a>
        </div>
        <p class='info'>(You must be logged in to use this app)</p>
        
_GUEST;
  }
  
?>
