

<!-------------------------- NUOVO ATTIVITA -------------------------------->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">

        <!--------------------------------- FORM NUOVO ATTIVITA ---------------->

        <div class="panel panel-info">
          <div class="panel-heading">
            Nuovo Attivita
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <form role="form" data-dpmaxz-eid="1" action="../php/attivitaDB.php" name="insertattivita" method="post">

              <input type="text" class="from-control" name="idint" id="idint"  data-dpmaxz-eid="1" value="<?echo $IDINT; ?>">

              <div class="form-group">
                <label class="control-label">Titolo *</label>
                <input type="text" class="form-control" name="titolo" placeholder="titolo dell'attività" data-dpmaxz-eid="2" required>
              </div>

              <div class="form-group">
                <label class="control-label">Descrizione</label>
                <input type="text" class="form-control" name="descrizione" placeholder="descrizione dell'attività" data-dpmaxz-eid="3">
              </div>

              <div class="form-group">
                <!--http://www.daterangepicker.com  -->
                <label class="control-label">Data Inizio</label>
                <div class="input-group input-append dateinizio" id="dateinizio">
                  <input type="text" class="form-control" name="dateinizio" />
                  <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>

              <div class="form-group">
                <!--http://www.daterangepicker.com  -->
                <label class="control-label">Data Fine</label>
                <div class="input-group input-append datefine" id="datefine">
                  <input type="text" class="form-control" name="datefine" />
                  <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>

              <button type="submit" class="btn btn-default btn-info btn-block" data-dpmaxz-eid="5" name="insertattivita">Salva</button>
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

<!-------------------------- MODIFICA INTERVENTO -------------------------------->
<!-- Modal -->
<div class="modal fade" id="exampleModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">

        <!--------------------------------- FORM MODIFICA INTERVENTO ---------------->

        <div class="panel panel-info">
          <div class="panel-heading">
            Modifica attivita
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">

            <form role="form" data-dpmaxz-eid="0" action="../php/attivitaDB.php" name="updateattivita" method="post">

              <input type="text" class="from-control" name="idint" id="idint"  data-dpmaxz-eid="1" value="<?echo $IDINT; ?>">
              <input type="text" class="from-control" name="idrecord" id="idrecord"  data-dpmaxz-eid="1">

              <div class="form-group">
                <label class="control-label">Titolo *</label>
                <input type="text" class="form-control" name="titolo" placeholder="titolo dell'attività" data-dpmaxz-eid="2" required>
              </div>

              <div class="form-group">
                <label class="control-label">Descrizione</label>
                <input type="text" class="form-control" name="descrizione" placeholder="descrizione dell'attività" data-dpmaxz-eid="3">
              </div>

              <div class="form-group">
                <!--http://www.daterangepicker.com  -->
                <label class="control-label">Data Inizio</label>
                <div class="input-group input-append dateinizio" id="dateinizio">
                  <input type="text" class="form-control" name="dateinizio" id="dateinizio" />
                  <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>

              <div class="form-group">
                <!--http://www.daterangepicker.com  -->
                <label class="control-label">Data Fine</label>
                <div class="input-group input-append datefine" id="datefine">
                  <input type="text" class="form-control" name="datefine" id="datefine" />
                  <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>

              <button type="submit" class="btn btn-default btn-info pull-right" data-dpmaxz-eid="5" name="updateattivita">Aggiorna</button>
              <!--      <button type="submit" class="btn pull-left btn-danger"  data-dpmaxz-eid="6" name="deleteattivita"><i class="fa fa-trash-o"></i> ELIMINA</button> -->
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
