<?php

session_start();
  require_once 'header.php';
  
  
  
  if (!$loggedin) die("</div></body></html>");
?>

<?php

if (isset($_GET['theaters'])){ 
    
    
    $result = $_GET['theaters'];
    $result_explode = explode('|', $result);
    $selectTheater1 = "$result_explode[0]";
    $_SESSION['selectTheater'] = "$selectTheater1";
    $theaterID1 = "$result_explode[1]";
    $_SESSION['theaterID'] = "$theaterID1";
    $selectTheater = $_SESSION['selectTheater'];
?>


<?php
    
}
    
if (!isset($_GET['theaters'])and !isset($_GET['date'])); {
  

  $query  = "SELECT TheaterID, TheaterName FROM movietheater";
  $result = queryMysql($query);
  $num    = $result->num_rows;
  $rows = $result->fetch_All(MYSQLI_ASSOC);
  
?>

<div id='logo2' class='center'><?= $selectTheater;?></div>
<form action="home.php" method="get">
  <select name="theaters" onchange="this.form.submit();">
        <option value="" ><?=  $selectTheater; ?> </option> 
      <?php foreach($rows as $row): ?>
        <option value="<?= $row['TheaterName'].'|'.$row['TheaterID']; ?>" ><?= $row['TheaterName'];?></option>
      <?php endforeach; ?>
  </select>
 </form>

<?php


}

if (!isset($_GET['dates']) and isset($_GET['theaters'])){ 
 
    
    $query  = "SELECT DISTINCT MovieDate FROM movietimes WHERE MovieID IN(SELECT MovieID FROM movietimes WHERE AuditoriumID IN(SELECT AuditoriumID FROM auditorium WHERE TheaterID =". $_SESSION['theaterID'] ."))";
    $result1 = queryMysql($query);
    $num    = $result1->num_rows;
    $rows = $result1->fetch_All(MYSQLI_ASSOC);
    
?>

  <form action="home.php" method="get" >
    <select name="dates" onchange="this.form.submit()">
       <option value="" ><?= $date;?> </option> 
      <?php foreach($rows as $row): ?>
       <option value="<?= $row['MovieDate']; ?>"><?= $row['MovieDate']; ?></option>
      <?php endforeach; ?>
    </select>
  </form>   
<?php 


}
if (isset($_GET['dates'])){ 
   
    $_SESSION['date'] = $_GET['dates'];
    $query  = "SELECT DISTINCT MovieDate FROM movietimes WHERE MovieID IN(SELECT MovieID FROM movietimes WHERE AuditoriumID IN(SELECT AuditoriumID FROM auditorium WHERE TheaterID =". $_SESSION['theaterID'] ."))";
    $result1 = queryMysql($query);
    $num    = $result1->num_rows;
    $rows = $result1->fetch_All(MYSQLI_ASSOC);
    $date = $_SESSION['date'];
    
?>

  
<?php 
    
}
  
  

  if (!isset($_GET['movies']) and isset($_GET['dates'])){ 
  
   
    $date = $_SESSION['date'];
   
    $query  = "SELECT Title, TimeStart, TimeEnd, MovieShowing, AuditoriumID FROM movie NATURAL JOIN movietimes WHERE MovieDate = '$date' and AuditoriumID = ANY(SELECT AuditoriumID FROM auditorium WHERE TheaterID =". $_SESSION['theaterID'] .")";
    $result3 = queryMysql($query);
    $num    = $result3->num_rows;
    $rows = $result3->fetch_All(MYSQLI_ASSOC);
    
    
?>
  <form action="" method="get">
    <select name="movies" onchange="this.form.submit()" >
        <option value="" ><?= $movie; ?> </option> 
      <?php foreach($rows as $row): ?>
       <option value="<?= $row['Title'].'|'.$row['TimeStart'].'|'.$row['TimeEnd'].'|'.$row['MovieShowing'].'|'.$row['AuditoriumID']; ?>"><?= $row['Title'] . " " ?><?= date('h:i a', strtotime($row['TimeStart'])). " to "  ?><?= date('h:i a', strtotime($row['TimeEnd'])); ?></option>
      <?php endforeach; ?>
    </select>
  </form>
<?php

}

if (isset($_GET['movies'])){
    
    $result4 = $_GET['movies'];
    $result_explode1 = explode('|', $result4);
    $movie = "$result_explode1[0]";
    $_SESSION['movie'] = "$movie";
    $timeStart = "$result_explode1[1]";
    $_SESSION['timeStart'] = $timeStart;
    $timeEnd = "$result_explode1[2]";
    $_SESSION['timeEnd'] = $timeEnd;
    $movieShowing = "$result_explode1[3]";
    $_SESSION['movieShowing'] = "$movieShowing";
    $auditoriumID = "$result_explode1[4]";
    $_SESSION['auditoriumID'] = "$auditoriumID";
    
   
    
    $date = $_SESSION['date'];
    $query  = "SELECT Title, TimeStart, TimeEnd, MovieShowing, AuditoriumID FROM movie NATURAL JOIN movietimes WHERE MovieDate = '$date' and AuditoriumID = ANY(SELECT AuditoriumID FROM auditorium WHERE TheaterID =". $_SESSION['theaterID'] .")";
    $result5 = queryMysql($query);
    $num    = $result5->num_rows;
    $rows = $result5->fetch_All(MYSQLI_ASSOC);
   
    
   
    
    
?>
  <form action="" method="get">
    <select name="movies" onchange="this.form.submit()">
        <option value="" ><?= $movie . ' ' . date('h:i a', strtotime($_SESSION['timeStart']))." to ".date('h:i a', strtotime($_SESSION['timeEnd'])); ?> </option> 
      <?php foreach($rows as $row): ?>
       <option value="<?= $row['Title'].'|'.$row['TimeStart'].'|'.$row['TimeEnd'].'|'.$row['MovieShowing'].'|'.$row['AuditoriumID']; ?>"><?= $row['Title'] . " "  ?><?= date('h:i a', strtotime($row['TimeStart'])) . " to "  ?><?= date('h:i a', strtotime($row['TimeEnd'])); ?></option>
      <?php endforeach; ?>
    </select>
  </form>
<?php
}
if (isset($_GET['movies'])){ 
   
?>
   <a href="theater.php">READY TO BUY YOUR TICKETS!</a> 
<?php
print_r($_SESSION);
}
  //<div id='iframediv-container'>  
  //<iframe id='iframetheater-container' src="theater.php" style="padding-top: 26px; border-width:0;" width="1400" height="800" frameborder="0" ;></iframe>
 //</div> 
 

 
 
?>

    </div><br>
  </body>
</html>

