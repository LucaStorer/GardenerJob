<?php
include('connectionDB.php');


if(isset($_POST['tablename']))
{

  $tablename = $_POST['tablename'];
  $idattivita = $_POST['idattivita'];
  $idprodotto = $_POST['idprodotto'];


  deleterecordATTPROD($tablename,$idattivita,$idprodotto);

  echo "Associazione prodotto eliminata con successo";
  return;

}

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


}


if(isset($_POST['insertattprodotti']))
{

  $idint=$_POST['idint'];
  $idat = $_POST['idat'];
  $idprod =  $_POST['idprod'];



  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO attivita_prodotti (ID_ATTIVITA, ID_PRODOTTO)
  VALUES ('$idat','$idprod')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

    ?>
    <script>
    alert('Prodotto aggiunto con Successo');
    window.location='../pages/detailinterventi.php?recordid=<?echo $idint; ?>&idatt=<?echo $idat; ?>'
    </script>
    <?php
  } else {
    ?>
    <script>
    alert('Errore inserimento Prodotto');
    window.location='../pages/detailinterventi.php?recordid=<?echo $idint; ?>&idatt=<?echo $idat; ?>'
    </script>
    <?php
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}else{


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


}

//-------------------------------------------------------------------------------------

function deleterecordATTPROD($tablename,$ID_ATTIVITA,$ID_PRODOTTO)
{
  include('connectionDB.php');


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //   $sql = "DELETE FROM $tablename WHERE ID_CLIENTE = $id";
  $sql = "UPDATE `attivita_prodotti`  SET `DELETE` = 1 WHERE `ID_ATTIVITA` = $ID_ATTIVITA and  `ID_PRODOTTO` = $ID_PRODOTTO";

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
