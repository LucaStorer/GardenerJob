<?php
 include('connectionDB.php');

 // data insert code starts here.
if(isset($_POST['insertintervento']))
{


       $data = $_POST['date'];
        //$riferimento = $_POST['riferimento'];
        $idcliente = $_POST['idcliente'];



        ?>
      <script>
      alert($idcliente);

      </script>
      <?php


       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "INSERT INTO interventi (DATA, ID_CLIENTE)
       VALUES ('$data','$idcliente')";

       if (mysqli_query($conn, $sql)) {
          // echo "New record created successfully";

          ?>
 <script>
 alert('Cliente aggiunto con Successo');
        window.location='../pages/interventi.php'
       </script>
 <?php
       } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?>
  <script>
  alert('Errore inserimento intervento');
    //    window.location='../pages/interventi.php'
        </script>
  <?php
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }

       mysqli_close($conn);

     }else{
       ?>
     <script>
  //   alert('altro bottone...');
      // window.location='../pages/clienti.php'
       </script>
     <?php

     }

//-------------------------------------------------------------------------------------

 // data insert code starts here.
if(isset($_POST['updateintervento']))
{

        $idrecord =  $_POST['idrecord'];
        $data = $_POST['date'];
         $codice = $_POST['codice'];
         $idcliente = $_POST['idcliente'];

       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "UPDATE interventi SET DATA='$data', CODICE='$codice', ID_CLIENTE='$idcliente' WHERE ID = $idrecord";

       if (mysqli_query($conn, $sql)) {
          // echo "New record created successfully";

          ?>
 <script>
 alert('Intervento modificato con Successo');
        window.location='../pages/interventi.php'
       </script>
 <?php
       } else {
        ?>
  <script>
  alert('Errore modifica Intervento');
  alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
        window.location='../pages/interventi.php'
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

     // data insert code starts here.
    if(isset($_POST['deleteintervento']))
    {

    $idrecord =  $_POST['idrecord'];


           // Create connection
           $conn = mysqli_connect($servername, $username, $password, $dbname);
           // Check connection
           if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
           }

        //   $sql = "DELETE FROM $tablename WHERE ID_CLIENTE = $id";
       $sql = "UPDATE interventi SET `DELETE` = 1 WHERE ID = $idrecord";



           if (mysqli_query($conn, $sql)) {
              // echo "New record created successfully";

              ?>
     <script>
     alert('Intervento eliminato');
            window.location='../pages/interventi.php'
           </script>
     <?php
           } else {
            ?>
      <script>
      alert('Errore eliminazione');
      alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
            window.location='../pages/interventi.php'
            </script>
      <?php
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }

           mysqli_close($conn);

    }

 ?>
