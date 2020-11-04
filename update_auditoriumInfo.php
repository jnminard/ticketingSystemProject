<?php

  require_once 'header.php';
   $type = $ticketPriceID = "";
  if (!$loggedin) die("</div></body></html>");
  
  
  if (isset($_GET['theater_venue'])){ 
      
   $_SESSION['theatervenue'] = $_GET['theater_venue'];
   
  }
  
  if(isset($_POST['submit']))
  {    
    
     
      $type = htmlentities($_POST['type']);
      $ticketPriceID = htmlentities($_POST['ticketPriceID']);
    
    $result = queryMysql("INSERT INTO auditoriuminfo VALUES(NULL, '$type', $ticketPriceID)");
    $query  = "SELECT * FROM auditoriuminfo WHERE Type='$type'";
    $result = queryMysql($query);
    $num    = $result->num_rows;
    
    for ($j = 0 ; $j < $num ; ++$j)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);

      

        
          echo "Auditorium Type: &quot;" . $row['AuditoriumType'] . "&quot added.";
          echo "<br>";
          echo "Type: &quot;" . $row['Type']. "&quot added.";
          echo "<br>";
          echo "The Ticket Price ID: &quot;" . $row['TicketPriceID']. "&quot added.";
          echo "<br>";
         
    }
  }

  
    
      
  
  
 echo <<<_LOGGEDIN
  
        
    <h1>Add Auditorium Information</h1>

<form action="update_auditoriumInfo.php" method="post">
 <fieldset>
  <legend>To add auditorium information, please fill in all required data and press the SUBMIT button:</legend>

  <label for="type">Type (2D, 3D, etc):</label>
  <input type="text" id="type" name="type"><br>

  <label for="ticketPriceID">Ticket Price ID:</label>
  <input type="text" id="ticketPriceID" name="ticketPriceID"><br>
  
  <input type="submit" name='submit' value="SUBMIT">
  <input type="reset" name='reset' value="RESET">
 </fieldset>
</form>
  
        
   
_LOGGEDIN;
  
?>  
  </div><br>
  </body>
</html>

