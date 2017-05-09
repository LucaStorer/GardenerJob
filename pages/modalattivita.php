

  <!-------------------------- NUOVO INTERVENTO -------------------------------->
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

  <!--------------------------------- FORM NUOVO INTERVENTO ---------------->

  <div class="panel panel-info">
      <div class="panel-heading">
          Nuovo Attivita
      </div>

      <!-- /.panel-heading dataTables-example-->
      <div class="panel-body">
          <form role="form" data-dpmaxz-eid="1" action="../php/attivitaDB.php" name="insertattivita" method="post">

              <div class="form-group">


<!--http://www.daterangepicker.com


  <div class="col-lg-6">-->
       <label class="control-label">Data</label>

           <div class="input-group input-append date" id="date">
               <input type="text" class="form-control" name="date" />
               <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
           </div>
</div>


  <div class="form-group">
   <label class="control-label">Cliente</label>

                <!--  <label class="control-label">Cliente</label> -->
                  <select class="form-control" name="idcliente" data-dpmaxz-eid="4" required="">

                    <?php

                    $rs_resultCli = selectreq("clienti");
                    while($rowCli = $rs_resultCli->fetch_assoc()) {
                    ?>
                    <option value="<?echo $rowCli["ID"]; ?>"><?echo $rowCli["NOME"]; ?></option>

                    <?php
                   };
                    ?>
                  </select>
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

  <input type="text" class="from-control" name="idrecord" id="idrecord" hidden data-dpmaxz-eid="1">

                  <div class="form-group">

                    <label class="control-label">Data</label>

                        <div class="input-group input-append date" >
                            <input type="text" class="form-control" name="date"  id="date" data-dpmaxz-eid="2" value="">
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                   </div>
    <div class="form-group">
                   <label class="control-label">Codice</label>
                   <input type="text" class="form-control" name="codice" placeholder="codice" data-dpmaxz-eid="3" id="codice">
</div>

                   <div class="form-group">
                   <label class="control-label">Cliente</label>

                             <!--  <label class="control-label">Cliente</label> -->
                               <select class="form-control" id="idcliente" name="idcliente" data-dpmaxz-eid="4">

                                 <?php

                                 $rs_resultCli = selectreq("clienti");
                                 while($rowCli = $rs_resultCli->fetch_assoc()) {
                                 ?>
                                 <option value="<?echo $rowCli["ID"]; ?>"><?echo $rowCli["NOME"]; ?></option>
                                 <?php
                               };
                               ?>
                               </select>
                           </div>

                  <button type="submit" class="btn btn-default btn-info pull-right" data-dpmaxz-eid="5" name="updateattivita">Aggiorna</button>
                      <button type="submit" class="btn pull-left btn-danger"  data-dpmaxz-eid="6" name="deleteattivita"><i class="fa fa-trash-o"></i> ELIMINA</button>
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
