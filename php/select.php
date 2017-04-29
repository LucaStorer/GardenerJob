<?php

function selectreq($tablename)
{

include('connection.php');

  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

//  $sql = "SELECT ID,DATE_FORMAT(`DATA`,'%d/%m/%Y') as DATA,`KMTOT`,`LITRI`,`KM`,`EURO`,`EURO_LITRO`,`LITRI_100KM` FROM HISTORY ORDER BY `KMTOT` DESC ";
$sql = "SELECT * FROM $tablename";

  $rs_result = $conn->query($sql);

  return $rs_result;
}


 ?>
