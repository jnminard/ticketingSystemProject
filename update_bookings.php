<?php

  require_once 'header.php';
   $movieShowing = $customerID = $seatNumber = $bookingPurchasedDate = "";
  if (!$loggedin) die("</div></body></html>");




  if(isset($_POST['submit']))
  {


      $movieShowing = htmlentities($_POST['movieShowing']);
      $customerID = htmlentities($_POST['customerID']);
      $seatNumber = htmlentities($_POST['seatNumber']);
      $bookingPurchasedDate = htmlentities($_POST['bookingPurchasedDate']);

    $result = queryMysql("INSERT INTO bookings VALUES($movieShowing, $customerID, '$seatNumber','$bookingPurchasedDate')");
    $query  = "SELECT * FROM bookings WHERE CustomerID=$customerID and MovieShowing=$movieShowing";
    $result = queryMysql($query);
    $num    = $result->num_rows;

    for ($j = 0 ; $j < $num ; ++$j)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);




          echo "Movie Showing: &quot;" . $row['MovieShowing'] . "&quot added.";
          echo "<br>";
          echo "Customer ID: &quot;" . $row['CustomerID']. "&quot added.";
          echo "<br>";
          echo "Seat Number: &quot;" . $row['SeatNumber']. "&quot added.";
          echo "<br>";
          echo "Booking Date: &quot;" . $row['BookingPurchasedDate']. "&quot added.";
          echo "<br>";
   }
  }

 echo <<<_LOGGEDIN

    <h1>Add Booking Information</h1>

<form action="update_bookings.php" method="post">
 <fieldset>
  <legend>To add booking information, please fill in all required data and press the SUBMIT button:</legend>

  <label for="movieShowing">Movie Showing:</label>
  <input type="text" id="movieShowing" name="movieShowing"><br>

  <label for="customerID">Customer ID:</label>
  <input type="text" id="customerID" name="customerID"><br>

  <label for="seatNumber">Seat Number:</label>
  <input type="text" id="seatNumber" name="seatNumber"><br>

  <label for="bookingPurchasedDate">Booking Purchased Date (yyyy-mm-dd):</label>
  <input type="text" id="bookingPurchasedDate" name="bookingPurchasedDate"><br>

  <input type="submit" name='submit' value="SUBMIT">

  <input type="reset" name='reset' value="RESET">
 </fieldset>
</form>



_LOGGEDIN;

?>
  </div><br>
  </body>
</html>
