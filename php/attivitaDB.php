<?php
include('connectionDB.php');

if(isset($_POST['tablename']))
{

  $tablename = $_POST['tablename'];
  $idintervento = $_POST['idintervento'];
  $idattivita = $_POST['idattivita'];

  deleterecordINTATT($tablename,$idintervento,$idattivita);

  echo "Attivita Eliminata con successo";
  return;

}



// data insert code starts here.
if(isset($_POST['insertattivita']))
{

  $idintervento = $_POST['idint'];
  $titolo = $_POST['titolo'];
  $descizione = $_POST['descrizione'];
  $datainizio = $_POST['dateinizio'];
  $datefine = $_POST['datefine'];

  $idattivita = insertattivita($titolo,$descizione,$datainizio,$datefine);
  echo $idattivita;
  if($idattivita <> -1)
  {

    if(insertINTATT($idintervento,$idattivita)){

      ?>
      <script>
      alert('Attività aggiunta con Successo');
      window.location='../pages/detailinterventi.php?recordid=<?echo $idintervento; ?>'
      </script>
      <?php
    }
  }else{
    ?>
    <script>
    alert('Errore inserimento attività');
    window.location='../pages/detailinterventi.php?recordid=<?echo $idintervento; ?>'
    </script>
    <?php
  }

}

function insertattivita($titolo,$descizione,$datainizio,$datefine)
{
  include('connectionDB.php');


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO attivita (TITOLO, DESCRIZIONE,DATA_INIZIO,DATA_FINE)
  VALUES ('$titolo','$descizione','$datainizio','$datefine')";

  if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";

    $rowid = mysqli_insert_id($conn);
    return $rowid;


  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    return -1;
  }

  mysqli_close($conn);

}

function insertINTATT($idintervento,$idattivita)
{
  include('connectionDB.php');


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO interventi_attivita (ID_INTERVENTO, ID_ATTIVITA)
  VALUES ('$idintervento','$idattivita')";

  if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    return true;

  } else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    return false;
  }

  mysqli_close($conn);

}
//-------------------------------------------------------------------------------------

// data insert code starts here.
if(isset($_POST['updateattivita']))
{

  $idintervento = $_POST['idint'];
  $idrecord =  $_POST['idrecord'];
  $titolo = $_POST['titolo'];
  $descrizione = $_POST['descrizione'];
  $dateinizio = $_POST['dateinizio'];
  $datefine = $_POST['datefine'];


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "UPDATE attivita SET TITOLO='$titolo', DESCRIZIONE='$descrizione', DATA_INIZIO='$dateinizio' , DATA_FINE='$datefine' WHERE ID = $idrecord";

  if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";

    ?>
    <script>
    alert('attivita modificata con Successo');
    window.location='../pages/detailinterventi.php?recordid=<?echo $idintervento; ?>'
    </script>
    <?php
  } else {
    ?>
    <script>
    alert('Errore modifica attivita');
    alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
    window.location='../pages/detailinterventi.php?recordid=<?echo $idintervento; ?>'
    </script>
    <?php
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}else{
  ?>
  <script>
  //   alert('altro bottone...');
  //   window.location='../pages/clienti.php'
  </script>
  <?php

}

//-------------------------------------------------------------------------------------

function deleterecordINTATT($tablename,$ID_INTERVENTO,$ID_ATTIVITA)
{
  include('connectionDB.php');


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //   $sql = "DELETE FROM $tablename WHERE ID_CLIENTE = $id";
  $sql = "UPDATE `interventi_attivita`  SET `DELETE` = 1 WHERE `ID_INTERVENTO` = $ID_INTERVENTO and  `ID_ATTIVITA` = $ID_ATTIVITA";

  if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";


  } else {
    ?>
    <script>
    alert('Errore eliminazione');
    alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
    //    window.location='../pages/interventi.php'
    </script>
    <?php
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}

?>
