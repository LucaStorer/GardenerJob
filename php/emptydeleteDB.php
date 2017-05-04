<?php

 //include('connectionDB.php');

if (delterecord('clienti')) {

  if (delterecord('risorse')) {

    if (delterecord('prodotti')) {

      if (delterecord('interventi')) {
          echo "Svuotato con successo";
          return "Svuotato con successo";
      }else{
        echo "ERRORE INTERVNETI";
        return "ERRORE INTERVNETI";
      }
    }else{
      echo "ERRORE PRODOTTI";
      return "ERRORE PRODOTTI";
    }
  }else{
    echo "ERRORE RISORSE";
    return "ERRORE RISORSE";
  }
}else{
echo "ERRORE CLIENTI";
return "ERRORE CLIENTI";
//return "ERROR";

}

 function delterecord($tablename)
 {
 include('connectionDB.php');

   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }



   $sql = "DELETE FROM $tablename WHERE `DELETE` = 1";

   if (mysqli_query($conn, $sql)) {

  //   echo "New record created successfully";
return true;

   } else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

return false;
   }

   mysqli_close($conn);

}

?>
