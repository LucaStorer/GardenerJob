<?php
$rs_resultATPR = selectreqID("V_ATTIVITA_PRODOTTI",$idat);
?>
<div class="row"  >
  <div class="col-lg-12">
    <div class="panel panel-warning">
      <div class="panel-heading">
        Prodotti <button type="button" class="btn pull-right btn-warning btn-xs" data-toggle="modal" data-target="#myModalProdotti"><i class="fa fa-plus-circle"></i> Aggiungi</button>
      </div>

      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dtprodotti" >

          <thead>
            <tr>
              <th style="width:20px">

              </th>

              <!--  <th style="width:20px">

            </th>-->

            <th>
              ID
            </th>
            <th>
              <strong>Nome</strong>
            </th>
            <th>
              marca
            </th>
            <th>
              categoria
            </th>
            <th>
              in uso
            </th>
            <th>
              Prezzo
            </th>
            <th>
              U.M.
            </th>
          </tr>
        </thead>
        <tbody>

          <?php
          while($rowATPR = $rs_resultATPR->fetch_assoc()) {
            ?>
            <tr>

              <td>
                <a href="#" onclick="deleterecordAttProd(<? echo $idat; ?> ,<? echo $rowATPR["ID_PRODOTTO"]; ?>);return false;">
                  <p class="text-center">
                    <i class="fa fa-times fa-fw"></i>
                  </p>
                </a>

              </td>

              <!--  <td>
              <a href="#" data-toggle="modal"
              data-target="#prodottiModal"
              data-idatt="<? echo $IDATT; ?>"
              data-nome="<? echo $rowATPR["NOME"]; ?>"
              data-marca="<? echo $rowATPR["MARCA"]; ?>"
              data-categoria="<? echo $rowATPR["CATEGORIA"]; ?>"
              data-prezzo="<? echo $rowATPR["PREZZO"]; ?>"
              data-um="<? echo $rowATPR["UM"]; ?>"
              data-inuso="<? echo $rowATPR["IN_USO"]; ?>">
              <p class="text-center">
              <i class="fa fa-edit fa-fw"></i>
            </p>
          </a>

        </td> -->


        <td>
          <?  echo $rowATPR["ID_PRODOTTO"]; ?>
        </td>

        <td>
          <div class="fontColor">
            <strong>
              <?  echo $rowATPR["NOME"]; ?>
            </strong>
          </div>
        </td>
        <td>
          <?  echo $rowATPR["MARCA"]; ?>

        </td>
        <td>
          <?  echo $rowATPR["CATEGORIA"]; ?>
        </td>
        <td>
          <?  echo $rowATPR["IN_USO"]; ?>
        </td>
        <td>
          <?  echo $rowATPR["PREZZO"]; ?>
        </td>
        <td>
          <?  echo $rowATPR["UM"]; ?>
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



<?php
include('modalprodotti.php');
?>
