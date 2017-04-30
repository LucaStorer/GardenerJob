<?php
 include('connection.php');


$tablename = $_POST['tablename'];
$id =  $_POST['id'];


       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "DELETE FROM $tablename WHERE ID_CLIENTE = $id";

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



 ?>
