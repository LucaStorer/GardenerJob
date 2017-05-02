<?php
 include('connectionDB.php');

 // data insert code starts here.
if(isset($_POST['insertprodotto']))
{

       $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $categoria = $_POST['categoria'];
          $in_uso = $_POST['in_uso'];
            $prezzo = $_POST['prezzo'];
              $um = $_POST['um'];

       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "INSERT INTO prodotti (NOME, MARCA, CATEGORIA,IN_USO,PREZZO,UM)
       VALUES ('$nome','$marca', '$categoria', '$in_uso', '$prezzo','$um')";

       if (mysqli_query($conn, $sql)) {
          // echo "New record created successfully";

          ?>
 <script>
 alert('Prodotto aggiunto con Successo');
        window.location='../pages/prodotti.php'
       </script>
 <?php
       } else {
        ?>
  <script>
  alert('Errore inserimento Prodotto');
        window.location='../pages/prodotti.php'
        </script>
  <?php
  // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }

       mysqli_close($conn);

     }else{
       ?>
     <script>
  //   alert('altro bottone...');
       window.location='../pages/prodotti.php'
       </script>
     <?php

     }

//-------------------------------------------------------------------------------------

 // data insert code starts here.
if(isset($_POST['updateprodotto']))
{

        $idrecord =  $_POST['idrecord'];
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $categoria = $_POST['categoria'];
        $in_uso = $_POST['in_uso'];
          $prezzo = $_POST['prezzo'];
            $um = $_POST['um'];

       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "UPDATE prodotti SET NOME='$nome', MARCA='$marca', CATEGORIA='$categoria',IN_USO='$in_uso',PREZZO='$prezzo',UM='$um' WHERE ID = $idrecord";

       if (mysqli_query($conn, $sql)) {
          // echo "New record created successfully";

          ?>
 <script>
 alert('Prodotto modificato con Successo');
        window.location='../pages/prodotti.php'
       </script>
 <?php
       } else {
        ?>
  <script>
  alert('Errore modifica Prodotto');
  alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
        window.location='../pages/prodotti.php'
        </script>
  <?php
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }

       mysqli_close($conn);

     }else{
       ?>
     <script>
  //   alert('altro bottone...');
    //   window.location='../pages/prodotti.php'
       </script>
     <?php

     }

//-------------------------------------------------------------------------------------

     // data insert code starts here.
    if(isset($_POST['deleteprodotto']))
    {

    $idrecord =  $_POST['idrecord'];


           // Create connection
           $conn = mysqli_connect($servername, $username, $password, $dbname);
           // Check connection
           if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
           }


       $sql = "UPDATE prodotti SET `DELETE` = 1 WHERE ID = $idrecord";



           if (mysqli_query($conn, $sql)) {
              // echo "New record created successfully";

              ?>
     <script>
     alert('Prodotto eliminato');
            window.location='../pages/prodotti.php'
           </script>
     <?php
           } else {
            ?>
      <script>
      alert('Errore eliminazione');
      alert('<? echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>');
            window.location='../pages/prodotti.php'
            </script>
      <?php
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }

           mysqli_close($conn);

    }

 ?>
