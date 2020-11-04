<?php

  require_once 'header.php';
  
  if (!$loggedin) die("</div></body></html>");
  
  
 
    
      
      
  
  
echo <<<_LOGGEDIN
        <div class='center'>
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_auditorium.php'>Update Auditorium</a>
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_auditoriuminfo.php'>Update Auditorium Info</a>
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_bookings.php'>Update Bookings</a>       
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_customer.php'>Update Customer</a>       
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_genre.php'>Update Genre</a>
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_movie.php'>Update Movie</a>       
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_movieGenre.php'>Update Movie Genre</a>      
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_movieTheater.php'>Update Movie Theater</a>      
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_movieTimes.php'>Update Movie Times</a>
          <a data-role='button'  data-icon='edit'
            data-transition="fade" href='update_ticketPricing.php'>Update Ticket Pricing</a>
          
         
        </div>
        
        
_LOGGEDIN;
  
?>  
  </div><br>
  </body>
</html>