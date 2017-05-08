

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

  <div class="panel panel-primary">
      <div class="panel-heading">
          Nuovo Cliente
      </div>

      <!-- /.panel-heading dataTables-example-->
      <div class="panel-body">
          <form role="form" data-dpmaxz-eid="1" action="../php/interventoDB.php" name="insertintervento" method="post">

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

                  //  include('../php/selectDB.php');

                    $rs_resultCli = selectreq("clienti");
                    while($rowCli = $rs_resultCli->fetch_assoc()) {
                    ?>
                    <option value="<?echo $rowCli["ID"]; ?>"><?echo $rowCli["NOME"]; ?></option>


                    <?php }; ?>
                  </select>
              </div>


              <button type="submit" class="btn btn-default btn-primary btn-block" data-dpmaxz-eid="5" name="insertintervento">Salva</button>

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

      <div class="panel panel-primary">
          <div class="panel-heading">
              Modifica Intervento
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
              <form role="form" data-dpmaxz-eid="0" action="../php/interventoDB.php" name="updateintervento" method="post">

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

                               //  include('../php/selectDB.php');

                                 $rs_resultCli = selectreq("clienti");
                                 while($rowCli = $rs_resultCli->fetch_assoc()) {
                                 ?>
                                 <option value="<?echo $rowCli["ID"]; ?>"><?echo $rowCli["NOME"]; ?></option>


                                 <?php }; ?>
                               </select>
                           </div>




<!--

                      <label class="control-label">Nome *</label>
                      <input type="text" class="form-control" name="nome" placeholder="Nominativo del cliente" data-dpmaxz-eid="2" id="nome" required>
                      <label class="control-label">Riferimento</label>
                      <input type="text" class="form-control" name="riferimento" placeholder="Persona di riferimento" id="riferimento" data-dpmaxz-eid="3">
                      <label class="control-label">Tipo</label>
                      <select class="form-control" name="tipo" data-dpmaxz-eid="4" id="tipo" required="">
                        <option value="CLIENTE">CLIENTE</option>
                        <option value="PROSPECT">PROSPECT</option>
                      </select>
                  </div>
                -->
                  <button type="submit" class="btn btn-default btn-primary pull-right" data-dpmaxz-eid="5" name="updateintervento">Aggiorna</button>
                      <button type="submit" class="btn pull-left btn-danger"  data-dpmaxz-eid="6" name="deleteintervento"><i class="fa fa-trash-o"></i> ELIMINA</button>
              </form>
          </div>
      </div>

      <!------------------------------------------------------------------------------------------------>

                 </div>
                 <div class="modal-footer">

                  <!--   <button type="button" class="btn pull-left btn-danger" onclick="deleteRecord()"><i class="fa fa-trash-o"></i> ELIMINA</button> -->

                   <button type="button" class="btn btn-primary" data-dismiss="modal">Annulla</button>
                 </div>
               </div>

             </div>
           </div>


          <!---------------------------------------------------------------------->





      <!-- Page-Level Demo Scripts - Tables - Use for reference -->



<!--
  </body>

  </html>
-->
