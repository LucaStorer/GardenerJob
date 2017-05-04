<?php
   include('master.php');
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header"><i class="fa fa-trash-o fa-1x"></i> Cestino
             <button type="button" class="btn pull-right btn-danger" onclick="location.href='../php/emptydeleteDB.php';"><i class="fa fa-trash-o"></i> Svuota Cestino
              </button></h1>

            <!--  <button type="button" class="btn pull-right btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuovo</button> -->
</h1>
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
                              <strong>
                                <div class="fontColor">
                                    <?  echo $row["NOME"]; ?>
                                </div>
                                </strong>
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


//include('../php/selectDB.php');

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
                  <strong>
                    <div class="fontColor">
                        <?  echo $row["NOME"]; ?>
                    </div>
                    </strong>
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
                                          <strong>
                                            <div class="fontColor">
                                                <?  echo $row["NOME"]; ?>
                                            </div>
                                            </strong>
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

</div>
<!-- /#page-wrapper -->

<script>
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
    $('#dtinteventi').DataTable({
        responsive: true
    });
});


</script>
