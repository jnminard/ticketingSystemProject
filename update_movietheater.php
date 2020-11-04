<?php

  require_once 'header.php';
   $theaterName = $theaterAddress = $theaterPhone = $theaterEmail = "";
  if (!$loggedin) die("</div></body></html>");
  
  
  if (isset($_GET['theater_venue'])){ 
      
   $_SESSION['theatervenue'] = $_GET['theater_venue'];
   
  }
  
  if(isset($_POST['submit']))
  {    
    
     
      $theaterName = htmlentities($_POST['theaterName']);
      $theaterAddress = htmlentities($_POST['theaterAddress']);
      $theaterPhone = htmlentities($_POST['theaterPhone']);
      $theaterEmail = htmlentities($_POST['theaterEmail']);
    
    $result = queryMysql("INSERT INTO movietheater VALUES(NULL, '$theaterName', '$theaterAddress','$theaterPhone','$theaterEmail')");
    $query  = "SELECT * FROM movietheater WHERE TheaterName='$theaterName' and TheaterAddress='$theaterAddress'";
    $result = queryMysql($query);
    $num    = $result->num_rows;
    
    for ($j = 0 ; $j < $num ; ++$j)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);

      

        
          echo "Theater ID: &quot;" . $row['TheaterID'] . "&quot added.";
          echo "<br>";
          echo "Theater Name: &quot;" . $row['TheaterName']. "&quot added.";
          echo "<br>";
          echo "Theater Address: &quot;" . $row['TheaterAddress']. "&quot added.";
          echo "<br>";
          echo "Theater Phone: &quot;" . $row['TheaterPhone']. "&quot added.";
          echo "<br>";
          echo "Theater Email: &quot;" . $row['TheaterEmail']. "&quot added.";
          echo "<br>";
   }
  }
 
 echo <<<_LOGGEDIN
       
    <h1>Add Theaters</h1>

<form action="update_movietheater.php" method="post">
 <fieldset>
  <legend>To add booking information, please fill in all required data and press the SUBMIT button:</legend>

  <label for="theaterName">Theater Name:</label>
  <input type="text" id="theaterName" name="theaterName"><br>
  
  <label for="theaterAddress">Theater Address:</label>
  <input type="text" id="theaterAddress" name="theaterAddress"><br>
  
  <label for="theaterPhone">Theater Phone:(10 digits only)</label>
  <input type="text" id="theaterPhone" name="theaterPhone"><br>
  
  <label for="theaterEmail">Theater Email:</label>
  <input type="text" id="theaterEmail" name="theaterEmail"><br>
  
  <input type="submit" name='submit' value="SUBMIT">
  
  <input type="reset" name='reset' value="RESET">
 </fieldset>
</form>
  
        
   
_LOGGEDIN;
  
?>  
  </div><br>
  </body>
</html>

