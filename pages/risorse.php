<?php
include('master.php');
?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">

          <h1 class="page-header"><i class="fa fa-pied-piper  fa-1x"></i> Risorse
            <!--  <button type="button" class="btn pull-right btn-success" onclick="location.href='newcliente.php';"><i class="fa fa-plus-circle"></i> Nuovo
          </button></h1> -->

          <button type="button" class="btn pull-right btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuovo</button>
        </h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------->

    <?php


    include('../php/selectDB.php');

    $rs_result = selectreq("risorse");
    ?>

    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-red">
          <div class="panel-heading">
            Anagrafica Risorse
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dtrisorse" >

              <thead>
                <tr>
                  <th style="width:20px"></th>
                  <!--<th>ID</th>-->
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

                      <a href="#" data-toggle="modal"
                      data-target="#exampleModal"
                      data-idrecord="<? echo $row["ID"]; ?>"
                      data-nome="<? echo $row["NOME"]; ?>"
                      data-tipo="<? echo $row["TIPO"]; ?>">
                      <p class="text-center">
                        <i class="fa fa-edit fa-fw"></i>
                      </p>
                    </a>
                  </td>
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

</div>
<!-- /#page-wrapper -->

</div>

<!-------------------------- NUOVO CLIENTE -------------------------------->
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

        <!--------------------------------- FORM NUOVO CLIENTE ---------------->

        <div class="panel panel-red">
          <div class="panel-heading">
            Nuovo risorse
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <form role="form" data-dpmaxz-eid="1" action="../php/risorsaDB.php" name="insertrisorsa" method="post">

              <div class="form-group">
                <label class="control-label">Nome *</label>
                <input type="text" class="form-control" name="nome" placeholder="Nominativo della risorsa" data-dpmaxz-eid="2" required>

                <label class="control-label">Tipo</label>
                <select class="form-control" name="tipo" data-dpmaxz-eid="4" required="">
                  <option value="DIPENDENTE">DIPENDENTE</option>
                  <option value="ESTERNO">ESTERNO</option>
                </select>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block" data-dpmaxz-eid="5" name="insertrisorsa">Salva</button>
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



<!-------------------------- MODIFICA CLIENTE -------------------------------->
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

        <!--------------------------------- FORM MODIFICA CLIENTE ---------------->

        <div class="panel panel-red">
          <div class="panel-heading">
            Modifica risorse
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <form role="form" data-dpmaxz-eid="0" action="../php/risorsaDB.php" name="updaterisorsa" method="post">

              <div class="form-group">

                <input type="text" class="from-control" name="idrecord" id="idrecord" hidden data-dpmaxz-eid="1">
                <label class="control-label">Nome *</label>
                <input type="text" class="form-control" name="nome" placeholder="Nominativo della risorsa" data-dpmaxz-eid="2" id="nome" required>
                <label class="control-label">Tipo</label>
                <select class="form-control" name="tipo" data-dpmaxz-eid="4" id="tipo" required="">
                  <option value="DIPENDENTE">DIPENDENTE</option>
                  <option value="ESTERNO">ESTERNO</option>
                </select>
              </div>
              <button type="submit" class="btn btn-default btn-success pull-right" data-dpmaxz-eid="5" name="updaterisorsa">Aggiorna</button>
              <button type="submit" class="btn pull-left btn-danger"  data-dpmaxz-eid="6" name="deleterisorsa"><i class="fa fa-trash-o"></i> ELIMINA</button>
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

<?php
include('footer.php');
?>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function () {


  $('#dtrisorse').DataTable({

    //ordina i risultati
    "order": [[1, "asc"]],
    //abilita il response della tabella
    responsive: true

  });

  //evento che intercetta la selezione della riga
  var table = $('#dtrisorse').DataTable();
  $('#dtrisorse tbody').on('click', 'tr', function () {
    var data = table.row(this).data();
    //  alert('You clicked on ' + data[1] + '\'s row');
  });


  $('[data-toggle="tooltip"]').tooltip();
});

//evento che intercetta la finestra modale in modifica per passare i parametri
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('idrecord') // Extract info from data-* attributes
  var nome = button.data('nome')
  var tipo = button.data('tipo')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //  modal.find('.modal-title').text('New message to ' + recipient)
  //  modal.find('.modal-body input').val(recipient)
  modal.find('input[name="idrecord"]').val(id)
  modal.find('input[name="nome"]').val(nome)
  modal.find('select[name="tipo"]').val(tipo)
})


</script>


</body>

</html>
