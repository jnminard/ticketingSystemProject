<?php

  require_once 'header.php';
  
  if (!$loggedin) die("</div></body></html>");
  
  
  if (isset($_GET['theater_venue'])){ 
      
   $_SESSION['theatervenue'] = $_GET['theater_venue'];
   
  }
  $tID =  $aType = $aNumber = $sAvailable = $seatsRestricted = $seatsPurchased = "";
  if(isset($_POST['submit']))
{    
    
   
      $tID = htmlentities($_POST['tID']);
      $aType = htmlentities($_POST['aType']);
      $aNumber = htmlentities($_POST['aNumber']);
      $sAvailable = htmlentities($_POST['sAvailable']);
      $seatsRestricted = htmlentities($_POST['seatsRestricted']);
      $seatsPurchased = htmlentities($_POST['seatsPurchased']);
    
    
     
  
    $result = queryMysql("INSERT INTO auditorium VALUES(NULL,$tID, '$aType', $aNumber, $sAvailable, '$seatsRestricted', '$seatsPurchased')");
    $query  = "SELECT * FROM auditorium WHERE theaterID='$tID' AND auditoriumNumber='$aNumber'";
    $result = queryMysql($query);
    $num    = $result->num_rows;
    
    for ($j = 0 ; $j < $num ; ++$j)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);

      

        
          echo "Auditorium ID: &quot;" . $row['AuditoriumID'] . "&quot added.";
          echo "<br>";
          echo "Theater ID: &quot;" . $row['TheaterID']. "&quot added.";
          echo "<br>";
          echo "Auditorium Type: &quot;" . $row['AuditoriumType']. "&quot added.";
          echo "<br>";
          echo "Auditorium Number: &quot;" . $row['AuditoriumNumber']. "&quot added.";
          echo "<br>";
          echo "Number of seats: &quot;" . $row['SeatsAvailable']. "&quot added.";
          echo "<br>";
          echo "Seats Restricted: &quot;" . $row['SeatsRestricted']. "&quot added.";
          echo "<br>";
          echo "Seats Booked: &quot;" . $row['SeatsPurchased']. "&quot added.";
          echo "<br>";
    }
  }

  
    
      
  
  
 echo <<<_LOGGEDIN
  
        
    <h1>Add Auditorium</h1>

<form action="update_auditorium.php" method="post">
 <fieldset>
  <legend>To add an auditorium, please fill in all required data and press the SUBMIT button:</legend>

  <label for="tID">TheaterID:</label>
  <input type="text" id="tID" name="tID"><br>
  
  <label for="aType">AuditoriumType:</label>
  <input type="text" id="aType" name="aType"><br>
  
  <label for="aNumber">AuditoriumNumber:</label>
  <input type="text" id="aNumber" name="aNumber"><br>
  
  <label for="sAvailable">Seats Available:</label>
  <input type="text" id="sAvailable" name="sAvailable"><br>
  
  <label for="seatsRestricted">Seats Restricted (Input seat followed by a coma: A01,A02,):</label>
  <input type="text" id="seatsRestricted" name="seatsRestricted"><br>
  
  <label for="seatsPurchased">Seats Booked (Input seat followed by a coma: A01,A02,):</label>
  <input type="text" id="seatsPurchased" name="seatsPurchased"><br>
  
  <input type="submit" name='submit' value="SUBMIT">
  <input type="reset" name='reset' value="RESET">
 </fieldset>
</form>
  
        
   
_LOGGEDIN;
  
?>  
  </div><br>
  </body>
</html>
