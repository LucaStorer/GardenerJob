<?php
 include('connectionDB.php');

 // data insert code starts here.
if(isset($_POST['insertrisorsa']))
{

       $nome = $_POST['nome'];
      $tipo = $_POST['tipo'];

       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "INSERT INTO risorse (NOME,  TIPO)
       VALUES ('$nome', '$tipo')";

       if (mysqli_query($conn, $sql)) {
          // echo "New record created successfully";

          ?>
 <script>
 alert('Risorsa aggiunta con Successo');
        window.location='../pages/risorse.php'
       </script>
 <?php
       } else {
        ?>
  <script>
  alert('Errore inserimento Risorsa');
        window.location='../pages/risorse.php'
        </script>
  <?php
  // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }

       mysqli_close($conn);

     }else{
       ?>
     <script>
  //   alert('altro bottone...');
    //   window.location='../pages/risorse.php'
       </script>
     <?php

     }

//-------------------------------------------------------------------------------------

 // data insert code starts here.
if(isset($_POST['updaterisorsa']))
{

        $idrecord =  $_POST['idrecord'];
       $nome = $_POST['nome'];
            $tipo = $_POST['tipo'];

       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "UPDATE risorse SET NOME='$nome', TIPO='$tipo' WHERE ID = $idrecord";

       if (mysqli_query($conn, $sql)) {
          // echo "New record created successfully";

          ?>
 <script>
 alert('Risorsa modificata con Successo');
        window.location='../pages/risorse.php'
       </script>
 <?php
       } else {
        ?>
  <script>
  alert('Errore modifica Risorsa');
  alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
        window.location='../pages/risorse.php'
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
    if(isset($_POST['deleterisorsa']))
    {

    $idrecord =  $_POST['idrecord'];


           // Create connection
           $conn = mysqli_connect($servername, $username, $password, $dbname);
           // Check connection
           if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
           }

        //   $sql = "DELETE FROM $tablename WHERE ID_CLIENTE = $id";
       $sql = "UPDATE risorse SET `DELETE` = 1 WHERE ID = $idrecord";



           if (mysqli_query($conn, $sql)) {
              // echo "New record created successfully";

              ?>
     <script>
     alert('Risorsa eliminata');
            window.location='../pages/risorse.php'
           </script>
     <?php
           } else {
            ?>
      <script>
      alert('Errore eliminazione');
      alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
            window.location='../pages/risorse.php'
            </script>
      <?php
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }

           mysqli_close($conn);

    }

 ?>
