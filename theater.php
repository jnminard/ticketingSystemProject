<?php
session_start();

 require_once 'header.php';
  
  if (!$loggedin){ die("</div></body></html>");}
  
 
  if (isset($_POST['submit1'])){ 
    $result = $_POST['pliststring'];
    $result1 = $_POST['rliststring'];
    $resultQ = queryMysql("UPDATE auditorium SET SeatsPurchased = '$result', SeatsRestricted = '$result1' WHERE AuditoriumID = ". $_SESSION['auditoriumID'] ."");
    
  }
    
      
  $querySP  = "SELECT SeatsPurchased FROM auditorium WHERE AuditoriumID = ". $_SESSION['auditoriumID'] . "";
  $resultSP = queryMysql($querySP);
  $numSP    = $resultSP->num_rows;
  $rowsSP = $resultSP->fetch_assoc();
  $varSP = $rowsSP["SeatsPurchased"];
  
  //echo"$varSP";
  $querySR  = "SELECT SeatsRestricted FROM auditorium WHERE AuditoriumID = ". $_SESSION['auditoriumID'] ."";
  $resultSR = queryMysql($querySR);
  $numSR    = $resultSR->num_rows;
  $rowsSR = $resultSR->fetch_assoc();
  $varSR = $rowsSR["SeatsRestricted"];
  //echo"$varSR";
?>
<div id='logo1' class='center'><?= $resultStringSP.$_SESSION['selectTheater'];?></div>
<div id='logo4' class='center'><?= $_SESSION['movie'];?></div>
<div id='logo5' class='center'><?= date('h:i a', strtotime($_SESSION['timeStart']))." to ".date('h:i a', strtotime($_SESSION['timeEnd']));?></div>
<div id='logo6' class='center'><?= $_SESSION['date'];?></div>
<?php
echo <<<_THEATER


<div id='logo' class='center'><?= $selectTheater; ?></div>

<table id='theaterTable'>
        <tr><td id='left'>
<div id="rowAL">

<a id='A01' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A01</a>
<a id='A02' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A02</a>
<a id='A03' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A03</a>
<a id='A04' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A04</a>
<a id='A05' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A05</a>
<a id='A06' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A06</a>
<a id='A07' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A07</a>
<a id='A08' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A08</a>
<a id='A09' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A09</a>
<a id='A10' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A10</a>
<a id='A11' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A11</a>
<a id='A12' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A12</a>
       </div> </td><td style="color:#f8f8f8;">----------</td><td id='right'>
<div id="rowAR">           
<a id='A13' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A13</a>
<a id='A14' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A14</a>
<a id='A15' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A15</a>
<a id='A16' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A16</a>
<a id='A17' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A17</a>
<a id='A18' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A18</a>
<a id='A19' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A19</a>
<a id='A20' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A20</a>
<a id='A21' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A21</a>
<a id='A22' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A22</a>
<a id='A23' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A23</a>
<a id='A24' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>A24</a>   
        
        
</div>
        </td></tr><tr><td id='left'>
        
<div id="rowBL">
        
<a id='B01' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B01</a>
<a id='B02' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B02</a>
<a id='B03' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B03</a>
<a id='B04' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B04</a>
<a id='B05' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B05</a>
<a id='B06' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B06</a>
<a id='B07' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B07</a>
<a id='B08' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B08</a>
<a id='B09' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B09</a>
<a id='B10' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B10</a>
<a id='B11' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B11</a>
<a id='B12' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B12</a>   
</div>
    </td><td></td><td id='right'>
        <div id="rowBR">
<a id='B13' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B13</a>
<a id='B14' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B14</a>
<a id='B15' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B15</a>
<a id='B16' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B16</a>
<a id='B17' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B17</a>
<a id='B18' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B18</a>
<a id='B19' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B19</a>
<a id='B20' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B20</a>
<a id='B21' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B21</a>
<a id='B22' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B22</a>
<a id='B23' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B23</a>
<a id='B24' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>B24</a>
        
  
</div>
        </td></tr>
       <tr><td id='left'>
<div id="rowCL">

<a id='C01' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade"  href=>C01</a>
<a id='C02' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C02</a>
<a id='C03' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C03</a>
<a id='C04' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C04</a>
<a id='C05' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C05</a>
<a id='C06' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C06</a>
<a id='C07' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C07</a>
<a id='C08' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C08</a>
<a id='C09' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C09</a>
<a id='C10' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C10</a>
<a id='C11' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C11</a>
<a id='C12' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C12</a>
       </div> </td><td></td><td id='right'>
<div id="rowCR">           
<a id='C13' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C13</a>
<a id='C14' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C14</a>
<a id='C15' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C15</a>
<a id='C16' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C16</a>
<a id='C17' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C17</a>
<a id='C18' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C18</a>
<a id='C19' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C19</a>
<a id='C20' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C20</a>
<a id='C21' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C21</a>
<a id='C22' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C22</a>
<a id='C23' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C23</a>
<a id='C24' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>C24</a>   
        
        
</div>
        </td></tr><tr><td id='left'>
        
<div id="rowDL">
        
<a id='D01' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D01</a>
<a id='D02' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D02</a>
<a id='D03' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D03</a>
<a id='D04' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D04</a>
<a id='D05' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D05</a>
<a id='D06' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D06</a>
<a id='D07' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D07</a>
<a id='D08' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D08</a>
<a id='D09' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D09</a>
<a id='D10' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D10</a>
<a id='D11' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D11</a>
<a id='D12' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D12</a>   
</div>
    </td><td></td><td id='right'>
        <div id="rowDR">
<a id='D13' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D13</a>
<a id='D14' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D14</a>
<a id='D15' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D15</a>
<a id='D16' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D16</a>
<a id='D17' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D17</a>
<a id='D18' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D18</a>
<a id='D19' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D19</a>
<a id='D20' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D20</a>
<a id='D21' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D21</a>
<a id='D22' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D22</a>
<a id='D23' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D23</a>
<a id='D24' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>D24</a>
        
  
</div>
        </td></tr>
       <tr><td id='left'>
<div id="rowEL">

<a id='E01' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E01</a>
<a id='E02' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E02</a>
<a id='E03' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E03</a>
<a id='E04' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E04</a>
<a id='E05' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E05</a>
<a id='E06' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E06</a>
<a id='E07' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E07</a>
<a id='E08' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E08</a>
<a id='E09' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E09</a>
<a id='E10' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E10</a>
<a id='E11' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E11</a>
<a id='E12' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E12</a>
       </div> </td><td></td><td id='right'>
<div id="rowER">           
<a id='E13' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E13</a>
<a id='E14' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E14</a>
<a id='E15' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E15</a>
<a id='E16' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E16</a>
<a id='E17' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E17</a>
<a id='E18' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E18</a>
<a id='E19' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E19</a>
<a id='E20' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E20</a>
<a id='E21' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E21</a>
<a id='E22' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E22</a>
<a id='E23' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E23</a>
<a id='E24' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>E24</a>   
        
        
</div>
        </td></tr><tr><td id='left'>
        
<div id="rowFL">
        
<a id='F01' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F01</a>
<a id='F02' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F02</a>
<a id='F03' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F03</a>
<a id='F04' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F04</a>
<a id='F05' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F05</a>
<a id='F06' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F06</a>
<a id='F07' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F07</a>
<a id='F08' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F08</a>
<a id='F09' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F09</a>
<a id='F10' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F10</a>
<a id='F11' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F11</a>
<a id='F12' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F12</a>   
</div>
    </td><td></td><td id='right'>
        <div id="rowFR">
<a id='F13' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F13</a>
<a id='F14' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F14</a>
<a id='F15' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F15</a>
<a id='F16' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F16</a>
<a id='F17' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F17</a>
<a id='F18' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F18</a>
<a id='F19' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F19</a>
<a id='F20' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F20</a>
<a id='F21' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F21</a>
<a id='F22' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F22</a>
<a id='F23' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F23</a>
<a id='F24' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>F24</a>
        
  
</div>
        </td></tr>
       <tr><td id='left'>
<div id="rowGL">

<a id='G01' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G01</a>
<a id='G02' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G02</a>
<a id='G03' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G03</a>
<a id='G04' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G04</a>
<a id='G05' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G05</a>
<a id='G06' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G06</a>
<a id='G07' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G07</a>
<a id='G08' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G08</a>
<a id='G09' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G09</a>
<a id='G10' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G10</a>
<a id='G11' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G11</a>
<a id='G12' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G12</a>
       </div> </td><td></td><td id='right'>
<div id="rowGR">           
<a id='G13' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G13</a>
<a id='G14' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G14</a>
<a id='G15' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G15</a>
<a id='G16' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G16</a>
<a id='G17' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G17</a>
<a id='G18' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G18</a>
<a id='G19' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G19</a>
<a id='G20' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G20</a>
<a id='G21' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G21</a>
<a id='G22' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G22</a>
<a id='G23' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G23</a>
<a id='G24' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>G24</a>   
        
        
</div>
        </td></tr><tr><td id='left'>
        
<div id="rowHL">
        
<a id='H01' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H01</a>
<a id='H02' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H02</a>
<a id='H03' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H03</a>
<a id='H04' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H04</a>
<a id='H05' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H05</a>
<a id='H06' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H06</a>
<a id='H07' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H07</a>
<a id='H08' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H08</a>
<a id='H09' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H09</a>
<a id='H10' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H10</a>
<a id='H11' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H11</a>
<a id='H12' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H12</a>   
</div>
    </td><td></td><td id='right'>
        <div id="rowHR">
<a id='H13' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H13</a>
<a id='H14' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H14</a>
<a id='H15' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H15</a>
<a id='H16' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H16</a>
<a id='H17' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H17</a>
<a id='H18' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H18</a>
<a id='H19' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H19</a>
<a id='H20' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H20</a>
<a id='H21' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H21</a>
<a id='H22' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H22</a>
<a id='H23' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H23</a>
<a id='H24' data-role='button' data-mini='true' data-inline='true'
            data-transition="fade" href=>H24</a>
        
  
</div>
        </td></tr>
 </table> 
<div style='display: block; text-align: center'>
 <form action="theater.php" method="POST" style='
    text-align:center;
    margin-left: 45%;
    margin-right:45%;
    width: 10%;'>
   <label for="howMany">How Many Tickets:</label>
   <input type="number" id="howMany" name="howMany" value=0 readonly>
   <label for="total">Total:</label>
   <input type="text" id="total" name="total" value=0 readonly>
   <input type="hidden" id="pseat" name="pliststring" value="">
   <input type="hidden" id="rseat" name="rliststring" value="">
   <input type="submit" name="submit1" value="Submit">
 </form> 
</div>
<script>
        
var seatP = "";  
var seatR = ""; 
seatP = '<?php echo $varSP;?>;';  
seatR = '<?php echo $varSR;?>;';  
seatP = seatP.slice(11, -4);
seatR = seatR.slice(11, -4);
seatP = seatP.split(',');  
seatR = seatR.split(',');  
//alert(seatP[0]);
//alert(seatR[0]);
//alert(seatR[1]);
        
var seatadd1;
var seatadd2;
var seatminus1;
var seatminus2;
var tempMinus;
var tempPlus;
var seat_id;
var anchors1;
var rowId;


anchors1=document.getElementsByTagName('a');
for (i = 0; i < anchors1.length; i++){
  for (j = 0; j < seatP.length; j++){
   if(anchors1[i].innerHTML == seatP[j]){
     anchors1[i].innerHTML = "-.-";
   }
  }
  for (k = 0; k < seatR.length; k++){
   if(anchors1[i].innerHTML == seatR[k]){
       anchors1[i].innerHTML = "X.X";
   }
  }
  if(anchors1[i].innerHTML == "X.X" || anchors1[i].innerHTML == "-.-" ){
     $(anchors1[i]).css("background-color","#ff6439");
  }
}
var change;
$(anchors1).click(function() {
  rowId = $(this).parent().attr('id');
  if(rowId == 'rowAL' || rowId =='rowAR' || rowId =='rowBL' || rowId =='rowBR'||rowId == 'rowCL' || rowId =='rowCR' || rowId =='rowDL' || rowId =='rowDR'||rowId == 'rowEL' || rowId =='rowER' || rowId =='rowFL' || rowId =='rowFR'|| rowId =='rowGL' || rowId =='rowGR'|| rowId =='rowHR'||rowId == 'rowHL'){
  //alert(rowId);
  seat_id=document.getElementById(rowId);
    var anchors=seat_id.getElementsByTagName('a');
    var itemHtml = $(this).html();
    var itemId = $(this).attr('id');
    var theColorIs = $(this).css("background-color"); 
    if(theColorIs == "rgb(255, 100, 57)"){
        //alert(theColorIs);
        return;}
    
    var itemIndex = parseInt(itemId.substring(1, itemId.length))-1;
    if(itemIndex>11)
    {
      itemIndex = itemIndex - 12;
    }
    var isNmbr = itemHtml.substring(1, itemHtml.length);
    if($.isNumeric(isNmbr)|| itemHtml == "X.X")
    {
        //alert(itemIndex);
        $(this).html("-.-");
        
        document.getElementById("howMany").stepUp(1); 
        
        if(itemIndex > 0 && itemIndex < 11)
        {//alert(1);
          change = getSeatItemIndexPlus1("a", itemIndex);
             if(change != "-.-" ){seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML = "X.X";}
          change = getSeatItemIndexMinus1("a", itemIndex);
             if(change != "-.-" ){seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML = "X.X";}
          
        }
        else if(itemIndex == 0)
        {//alert(2);
         change = seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML;
         if(change != "-.-" ){seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML = "X.X";}
         
        }
        else if(itemIndex == 11)
        {//alert(3);
         change = seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML;
           if(change != "-.-" ){seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML = "X.X";}
         
        }
      saveP();
      saveR(); 
    } 
    else if(itemIndex > 1 && itemIndex < 10 && itemHtml == "-.-")
    {//alert(4);
      
      document.getElementById("howMany").stepDown(1); 
      $(this).html($(this).attr('id'));
      
      seatadd1 = seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML;
      seatadd2 = seat_id.getElementsByTagName("a")[itemIndex+2].innerHTML;
      seatminus1 = seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML;
      seatminus2 = seat_id.getElementsByTagName("a")[itemIndex-2].innerHTML;
     // alert(seatminus2 + seatminus1+seatadd1+seatadd2);
      tempPlus = seat_id.getElementsByTagName("a")[itemIndex+1].id;
      //alert(tempPlus);
      if(seatadd1 == "-.-" || seatminus1 == "-.-")
      {//alert(5);
        seat_id.getElementsByTagName("a")[itemIndex].innerHTML = "X.X";
        
       // alert("changBack1");
      }
      
      if(seatadd1 == "X.X" && seatadd2 != "-.-")
      {//alert("6");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex+1].id;
        seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML = tempPlus;
        
      }
        
      
      if(seatminus1 == "X.X" && seatminus2 != '-.-')
      {//alert("7");
        tempMinus = seat_id.getElementsByTagName("a")[itemIndex-1].id;
        seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML = tempMinus;
        
      }   
      saveP();
      saveR();
    }
    else if(itemIndex == 0 && itemHtml == "-.-")
    { document.getElementById("howMany").stepDown(1); 
      //alert(8);
      $(this).html($(this).attr('id'));
      seatadd1 = seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML;
      seatadd2 = seat_id.getElementsByTagName("a")[itemIndex+2].innerHTML;
      if(seatadd1 == "X.X" && seatadd2 != "-.-")
      {//alert("changBack2");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex+1].id;
        seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML = tempPlus;
        
      }
      
      if(seatadd1 == "-.-")
      {//alert("9");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex+1].id;
        seat_id.getElementsByTagName("a")[itemIndex].innerHTML = 'X.X';
      }
      saveP();
      saveR();
            
    }

    else if(itemIndex == 1 && itemHtml == "-.-")
    { document.getElementById("howMany").stepDown(1); 
      // alert(10);
      $(this).html($(this).attr('id'));
      seatminus1 = seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML;
      seatadd1 = seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML;
      seatadd2 = seat_id.getElementsByTagName("a")[itemIndex+2].innerHTML;
      if(seatminus1 == "X.X")
      {//alert("11");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex-1].id;
        seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML = tempPlus;
        saveP();
        saveR();
      }
      if(seatminus1 == "--.--")
      {//alert("12");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex].id;
        seat_id.getElementsByTagName("a")[itemIndex].innerHTML = "X.X";
        
        
      }
      if(seatadd1 == "X.X" && seatadd2 != "-.-")
      {//alert("13");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex+1].id;
        seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML = tempPlus;
        
      }
      if(seatadd1 == "--.--" && seatadd2 != "-.-")
      {//alert("14");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex+1].id;
        seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML = tempPlus;
        
      }
      saveP();
      saveR();      
    }

    else if(itemIndex == 11 && itemHtml == "-.-")
    { document.getElementById("howMany").stepDown(1); 
      //alert('15');
      $(this).html($(this).attr('id'));
      seatminus1 = seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML;
      seatminus2 = seat_id.getElementsByTagName("a")[itemIndex-2].innerHTML;
      if(seatminus1 == "X.X" && seatminus2 != "-.-")
      {//alert("16");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex-1].id;
        seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML = tempPlus;
        
      }
      
      if(seatminus1 == "--.--")
      {//alert("17");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex-1].id;
        seat_id.getElementsByTagName("a")[itemIndex].innerHTML = 'X.X';
      }
      saveP();
      saveR();
            
    }

    else if(itemIndex == 10 && itemHtml == "-.-")
    { document.getElementById("howMany").stepDown(1); 
      //alert('18');
      $(this).html($(this).attr('id'));
      seatadd1 = seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML;
      seatminus1 = seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML;
      seatminus2 = seat_id.getElementsByTagName("a")[itemIndex-2].innerHTML;
      if(seatadd1 == "X.X")
      {//alert("19");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex+1].id;
        seat_id.getElementsByTagName("a")[itemIndex+1].innerHTML = tempPlus;
        
      }
      if(seatadd1 == "-.-")
      {//alert("20");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex].id;
        seat_id.getElementsByTagName("a")[itemIndex].innerHTML = "X.X";
        
        
      }
      if(seatminus1 == "X.X" && seatminus2 != "-.-")
      {//alert("21");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex-1].id;
        seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML = tempPlus;
        
      }
      if(seatminus1 == "-.-" && seatminus2 != "-.-")
      {//alert("22");
        tempPlus = seat_id.getElementsByTagName("a")[itemIndex-1].id;
        seat_id.getElementsByTagName("a")[itemIndex-1].innerHTML = tempPlus;
      }
      saveP();
      saveR();
            
    }}

});

function saveP(){
  anchors2=document.getElementsByTagName('a');
  var c = ",";
  var P = '';
    for (i = 0; i < anchors2.length; i++){
       if(anchors2[i].innerHTML == "-.-"){
        P += anchors2[i].id + c;
       }
    }
     //alert(P);
  document.getElementById("pseat").value = P;
  return;
}
        
function saveR(){
  anchors3=document.getElementsByTagName('a');
  var d = ",";
  var R = '';
    for (i = 0; i < anchors3.length; i++){
       if(anchors3[i].innerHTML == "X.X"){
        R += anchors3[i].id + d;
       }
       
    }
     //alert(R);
  document.getElementById("rseat").value = R; 
  return;
}
</script>
 
_THEATER;

  ?>


    </body>
</html>
