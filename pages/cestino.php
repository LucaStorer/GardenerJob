<?php
include('master.php');
?>

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">

      <h1 class="page-header"><i class="fa fa-trash-o fa-1x"></i> Cestino
        <button type="button" class="btn pull-right btn-danger" onclick="emptyfunc()"  name="empty"><i class="fa fa-trash-o"></i> Svuota Cestino
        </button></h1>

        <!--  <button type="button" class="btn pull-right btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuovo</button> -->

      </div>
      <!-- /.col-lg-12 -->
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------->

    <?php

    include('../php/selectDB.php');

    $rs_result = selectDelete("clienti");
    ?>

    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-green">
          <div class="panel-heading">
            Clienti
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dtclienti" >

              <thead>
                <tr>
                  <th>
                    ID
                  </th>
                  <th>
                    <strong>Cliente</strong>
                  </th>

                  <th>
                    riferimento
                  </th>
                  <th>
                    Tipo
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php
                while($row = $rs_result->fetch_assoc()) {
                  ?>
                  <tr>

<td>
    <?  echo $row["ID"]; ?>
</td>
                    <td>

                      <div class="fontColor">
                        <strong>
                          <?  echo $row["NOME"]; ?>
                        </strong>
                      </div>

                    </td>
                    <td>
                      <?  echo $row["RIFERIMENTO"]; ?>
                    </td>
                    <td>
                      <?  echo $row["TIPO_CLIENTE"]; ?>
                    </td>
                  </tr>
                  <?php
                };
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <?php
    $rs_result = selectDelete("risorse");
    ?>

    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-red">
          <div class="panel-heading">
            Risorse
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dtrisorse" >

              <thead>
                <tr>
                  <th>
                    ID
                  </th>
                  <th>
                    <strong>nome</strong>
                  </th>
                  <th>
                    Tipo
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php
                while($row = $rs_result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td>
                        <?  echo $row["ID"]; ?>
                    </td>
                    <td>
                      <div class="fontColor">
                        <strong>
                          <?  echo $row["NOME"]; ?>
                        </strong>
                      </div>
                    </td>
                    <td>
                      <?  echo $row["TIPO"]; ?>
                    </td>
                  </tr>
                  <?php
                };
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <!------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <?php
    $rs_result = selectDelete("prodotti");
    ?>

    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            Prodotti
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dtprodotti" >

              <thead>
                <tr>
                  <th>
                    ID
                  </th>
                  <th>
                    <strong>Prodotto</strong>
                  </th>

                  <th>
                    marca
                  </th>
                  <th>
                    categoria
                  </th>
                  <th>
                    In uso
                  </th>
                  <th>
                    Prezzo €
                  </th>
                  <th>
                    U.M.
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php
                while($row = $rs_result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td>
                        <?  echo $row["ID"]; ?>
                    </td>
                    <td>
                      <div class="fontColor">
                        <strong>
                          <?  echo $row["NOME"]; ?>
                        </strong>
                      </div>

                    </td>
                    <td>
                      <?  echo $row["MARCA"]; ?>
                    </td>
                    <td>
                      <?  echo $row["CATEGORIA"]; ?>
                    </td>
                    <td>
                      <?  echo $row["IN_USO"]; ?>
                    </td>
                    <td>
                      <?  echo $row["PREZZO"]; ?>
                    </td>
                    <td>
                      <?  echo $row["UM"]; ?>
                    </td>

                  </tr>
                  <?php
                };
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <?php

    $rs_result = selectDelete("V_INTERVENTI");
    ?>

    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            Interventi
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dtinterventi" >

              <thead>
                <tr>
                  <th>
                    ID
                  </th>
                  <th>
                    <strong>DATA</strong>
                  </th>
                  <th>
                    <strong>Cliente</strong>
                  </th>
                  <th>
                    riferimento
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php
                while($row = $rs_result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td>
                        <?  echo $row["ID"]; ?>
                    </td>
                    <td>
                      <div class="fontColor">
                        <strong>
                          <?  echo $row["DATA"]; ?>
                        </strong>
                      </div>

                    </td>
                    <td>  <strong>
                      <?  echo $row["CLIENTE"]; ?>
                    </strong>
                  </td>
                  <td>
                    <?  echo $row["RIFERIMENTO"]; ?>
                  </td>

                </tr>
                <?php
              };
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<!------------------------------------------------------------------------------>

<?php
$rs_resultAT = selectDelete("attivita");
?>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
      <!--  Attività <button type="button" class="btn pull-right btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Aggiungi</button> -->
      </div>

      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dtattivita" >

          <thead>
            <tr>
              <th>
                ID
              </th>
              <th>
                <strong>Titolo</strong>
              </th>
              <th>
                Descrizione
              </th>
              <th>
                <strong>Data Inizio</strong>
              </th>
              <th>
                Data Fine
              </th>
            </tr>
          </thead>
          <tbody>

            <?php
            while($rowAT = $rs_resultAT->fetch_assoc()) {
              ?>
              <tr>
              <td>
                <? echo $rowAT["ID"]; ?>
              </td>
              <td>

                <div class="fontColor">
                  <strong>
                    <?  echo $rowAT["TITOLO"]; ?>
                  </strong>
                </div>

              </td>
              <td>
                <?  echo $rowAT["DESCRIZIONE"]; ?>

              </td>
              <td>
                <?  echo $rowAT["DATA_INIZIO"]; ?>
              </td>
              <td>
                <?  echo $rowAT["DATA_FINE"]; ?>
              </td>
            </tr>
            <?php
          };
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<!------------------------------------------------------------------------------>

</div>
<!-- /#page-wrapper -->


<?php
include('footer.php');
?>

<script type = "text/javascript">

function emptyfunc() {

  var agree=confirm("ATTENZIONE! Sicuro di voler cancellare il Record? NON SARANNO RECUPERABILI!");
  if (agree)
  {

    $.ajax({
      type: "POST",
      url: "../php/emptydeleteDB.php",
      data: "tablename=clienti&"+"id=1",

      success: function(msg){
        alert( msg );
        location.reload(true);
        // body.append(data);
      },
      error: function ( xhr ) {
        alert( msg );
      }


    });

  }  else
  {
    return false ;
  }

};

$(document).ready(function() {



  $('#dtclienti').DataTable({
    responsive: true
  });
  $('#dtrisorse').DataTable({
    responsive: true
  });
  $('#dtprodotti').DataTable({
    responsive: true
  });
  $('#dtinterventi').DataTable({
    responsive: true
  });
  $('#dtattivita').DataTable({
    responsive: true
  });
});



</script>
</body>
</html>
