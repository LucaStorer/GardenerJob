<?php
 include('connection.php');

 // data insert code starts here.
if(isset($_POST['updatecliente']))
{

        $idrecord =  $_POST['idrecord'];
       $nome = $_POST['nome'];
        $riferimento = $_POST['riferimento'];
        $tipo = $_POST['tipo'];

       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "UPDATE clienti SET NOME='$nome', RIFERIMENTO='$riferimento', TIPO_CLIENTE='$tipo' WHERE ID = $idrecord";

       if (mysqli_query($conn, $sql)) {
          // echo "New record created successfully";

          ?>
 <script>
 alert('Cliente modificato con Successo');
        window.location='../pages/clienti.php'
       </script>
 <?php
       } else {
        ?>
  <script>
  alert('Errore modifica Cliente');
  alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
        window.location='../pages/clienti.php'
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
    if(isset($_POST['deletecliente']))
    {

    $idrecord =  $_POST['idrecord'];


           // Create connection
           $conn = mysqli_connect($servername, $username, $password, $dbname);
           // Check connection
           if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
           }

        //   $sql = "DELETE FROM $tablename WHERE ID_CLIENTE = $id";
       $sql = "UPDATE clienti SET `DELETE` = 1 WHERE ID = $idrecord";



           if (mysqli_query($conn, $sql)) {
              // echo "New record created successfully";

              ?>
     <script>
     alert('Cliente eliminato');
            window.location='../pages/clienti.php'
           </script>
     <?php
           } else {
            ?>
      <script>
      alert('Errore eliminazione');
      alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
            window.location='../pages/clienti.php'
            </script>
      <?php
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }

           mysqli_close($conn);

    }

 ?>
