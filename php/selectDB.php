<?php

function selectreq($tablename)
{

include('connectionDB.php');


  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

//  $sql = "SELECT ID,DATE_FORMAT(`DATA`,'%d/%m/%Y') as DATA,`KMTOT`,`LITRI`,`KM`,`EURO`,`EURO_LITRO`,`LITRI_100KM` FROM HISTORY ORDER BY `KMTOT` DESC ";
$sql = "SELECT * FROM $tablename WHERE `DELETE` = 0";

  $rs_result = $conn->query($sql);

  return $rs_result;
}

function selectDelete($tablename)
{

include('connectionDB.php');


  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

//  $sql = "SELECT ID,DATE_FORMAT(`DATA`,'%d/%m/%Y') as DATA,`KMTOT`,`LITRI`,`KM`,`EURO`,`EURO_LITRO`,`LITRI_100KM` FROM HISTORY ORDER BY `KMTOT` DESC ";
$sql = "SELECT * FROM $tablename WHERE `DELETE` = 1";

  $rs_result = $conn->query($sql);

  return $rs_result;
}



 ?>
