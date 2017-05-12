

<!-------------------------- NUOVO ATTIVITA -------------------------------->
<!-- Modal -->
<div class="modal fade" id="myModalProdotti" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">

        <!--------------------------------- FORM NUOVO ATTIVITA ---------------->

        <div class="panel panel-warning">
          <div class="panel-heading">
            Nuovo Prodotto
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <form role="form" data-dpmaxz-eid="1" action="../php/prodottoDB.php" name="insertattprodotti" method="post">
              <input type="text" class="from-control" name="idint" id="idint"  data-dpmaxz-eid="1" value="<?echo $IDINT; ?>">
              <input type="text" class="from-control" name="idat" id="idat"  data-dpmaxz-eid="1" value="<?echo $idat; ?>">

              <div class="form-group">
                <label class="control-label">Prodotto</label>

                <!--  <label class="control-label">Cliente</label> -->
                <select class="form-control" name="idprod" data-dpmaxz-eid="4" required="">

                  <?php

                  $rs_resultProd = selectreq("prodotti");
                  while($rowProd = $rs_resultProd->fetch_assoc()) {
                    ?>
                    <option value="<?echo $rowProd["ID"]; ?>"><?echo $rowProd["NOME"]; ?> - <?echo $rowProd["MARCA"]; ?></option>

                    <?php
                  };
                  ?>
                </select>


                <!--      <label class="control-label">Titolo *</label>
                <input type="text" class="form-control" name="titolo" placeholder="titolo dell'attività" data-dpmaxz-eid="2" required>
              </div>

              <div class="form-group">
              <label class="control-label">Descrizione</label>
              <input type="text" class="form-control" name="descrizione" placeholder="descrizione dell'attività" data-dpmaxz-eid="3">
            </div>

            <div class="form-group">
            <!--http://www.daterangepicker.com
            <label class="control-label">Data Inizio</label>
            <div class="input-group input-append dateinizio" id="dateinizio">
            <input type="text" class="form-control" name="dateinizio" />
            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
          </div>
        </div>

        <div class="form-group">
        <!--http://www.daterangepicker.com
        <label class="control-label">Data Fine</label>
        <div class="input-group input-append datefine" id="datefine">
        <input type="text" class="form-control" name="datefine" />
        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
      </div>
    </div>
  -->

  <button type="submit" class="btn btn-default btn-warning btn-block" data-dpmaxz-eid="5" name="insertattprodotti">Salva</button>
</form>
</div>
</div>

<!------------------------------------------------------------------------------------------------>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">Annulla</button>
</div>
</div>
</div>
</div>

<!---------------------------------------------------------------------->




<!---------------------------------------------------------------------->
