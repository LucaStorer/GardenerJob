<?php
$rs_resultAT = selectreqID("V_ATTIVITA",$id);
?>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        Attività <button type="button" class="btn pull-right btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Aggiungi</button>
      </div>

      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dtattivita" >

          <thead>
            <tr>
              <th style="width:20px">

              </th>
              <th style="width:20px">

              </th>
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
                  <a href="#" onclick="deleterecord(<? echo $IDINT; ?> ,<? echo $rowAT["ID_ATTIVITA"]; ?>);return false;">
                    <p class="text-center">
                      <i class="fa fa-times fa-fw"></i>
                    </p>
                  </a>

                </td>

                <td>
                  <a href="#" data-toggle="modal"
                  data-target="#exampleModal"
                  data-idint="<? echo $IDINT; ?>"
                  data-idrecord="<? echo $rowAT["ID_ATTIVITA"]; ?>"
                  data-titolo="<? echo $rowAT["TITOLO"]; ?>"
                  data-descrizione="<? echo $rowAT["DESCRIZIONE"]; ?>"
                  data-dateinizio="<? echo $rowAT["DATA_INIZIO"]; ?>"
                  data-datefine="<? echo $rowAT["DATA_FINE"]; ?>">
                  <p class="text-center">
                    <i class="fa fa-edit fa-fw"></i>
                  </p>
                </a>

              </td>
              <td id="ID_ATTIVITA_SEL">
                <? echo $rowAT["ID_ATTIVITA"]; ?>
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

<?php
include('modalattivita.php');
?>
