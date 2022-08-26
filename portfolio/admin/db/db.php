




<?php 
 
  $servername="localhost";
  $username="root";
  $passord="";
  $dbname="portfolio";
    $con=mysqli_connect($servername,$username,$passord,$dbname);
  if(!$con)
  {
  	die("<h2>Connection failed.. connect to developer</h2>" .mysqli_connect_error());
  }
 


?>