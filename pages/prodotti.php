<?php
include('master.php');
?>


    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">

          <h1 class="page-header"><i class="fa fa-flask fa-1x"></i> Prodotti
            <!--  <button type="button" class="btn pull-right btn-success" onclick="location.href='newcliente.php';"><i class="fa fa-plus-circle"></i> Nuovo
          </button></h1> -->

          <button type="button" class="btn pull-right btn-warning" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuovo</button>
        </h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------->

    <?php


    include('../php/selectDB.php');

    $rs_result = selectreq("prodotti");
    ?>

    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            Anagrafica Prodotti
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dtprodotti" >

              <thead>
                <tr>
                  <th style="width:20px"></th>
                  <!--<th>ID</th>-->
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

                      <a href="#" data-toggle="modal"
                      data-target="#exampleModal"
                      data-idrecord="<? echo $row["ID"]; ?>"
                      data-nome="<? echo $row["NOME"]; ?>"
                      data-marca="<? echo $row["MARCA"]; ?>"
                      data-categoria="<? echo $row["CATEGORIA"]; ?>"
                      data-in_uso="<? echo $row["IN_USO"]; ?>"
                      data-prezzo="<? echo $row["PREZZO"]; ?>"
                      data-um="<? echo $row["UM"]; ?>">
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

</div>

<!-------------------------- NUOVO PRODOTTO -------------------------------->
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

        <!--------------------------------- FORM NUOVO PRODOTTO ---------------->

        <div class="panel panel-yellow">
          <div class="panel-heading">
            Nuovo Prodotto
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <form role="form" data-dpmaxz-eid="1" action="../php/prodottoDB.php" name="insertprodotto" method="post">

              <div class="form-group">
                <label class="control-label">Nome *</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome del prodotto" data-dpmaxz-eid="2" required>
                <label class="control-label">Marca</label>
                <input type="text" class="form-control" name="marca" placeholder="marca" data-dpmaxz-eid="3">
                <label class="control-label">Categoria</label>
                <select class="form-control" name="categoria" data-dpmaxz-eid="4" required="">
                  <option value="DISERBANTE">DISERBANTE</option>
                  <option value="CONCIME">CONCIME</option>
                </select>

                <div class="col-lg-6">

                  <label class="control-label">prezzo €</label>
                  <div class="input-group">
                    <span class="input-group-addon">€</span>
                    <input type=number step=0.01 class="form-control" name="prezzo" placeholder="Euro" data-dpmaxz-eid="2" value="0.0">
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="control-label">U.M.</label>
                  <select class="form-control" name="um" data-dpmaxz-eid="4" placeholder="Unità di misura">
                    <option value="PZ">PZ</option>
                    <option value="KG">KG</option>
                    <option value="L">L</option>
                    <option value="g">g</option>
                  </select>
                </div>
                <label class="control-label">In Uso</label>
                <select class="form-control" name="in_uso" data-dpmaxz-eid="4" required="">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block" data-dpmaxz-eid="5" name="insertprodotto">Salva</button>
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



<!-------------------------- MODIFICA PRODOTTO -------------------------------->
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

        <!--------------------------------- FORM MODIFICA PRODOTTO ---------------->

        <div class="panel panel-yellow">
          <div class="panel-heading">
            Modifica Prodotto
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
            <form role="form" data-dpmaxz-eid="0" action="../php/prodottoDB.php" name="updateprodotto" method="post">

              <div class="form-group">

                <input type="text" class="from-control" name="idrecord" id="idrecord" hidden data-dpmaxz-eid="1">
                <label class="control-label">Nome *</label>
                <input type="text" class="form-control" name="nome" placeholder="Nominativo del prodotto" data-dpmaxz-eid="2" id="nome" required>
                <label class="control-label">Marca</label>
                <input type="text" class="form-control" name="marca" placeholder="marca" id="marca" data-dpmaxz-eid="3">
                <label class="control-label">Categoria</label>
                <select class="form-control" name="categoria" data-dpmaxz-eid="4" id="categoria" required="">
                  <option value="DISERBANTE">DISERBANTE</option>
                  <option value="CONCIME">CONCIME</option>
                </select>

                <div class="col-lg-6">
                  <label class="control-label">prezzo €</label>
                  <div class="input-group">
                    <span class="input-group-addon">€</span>
                    <input type=number step=0.01 class="form-control" name="prezzo" id="prezzo" placeholder="Euro" data-dpmaxz-eid="6">
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="control-label">U.M.</label>
                  <select class="form-control" name="um" id="um" data-dpmaxz-eid="7" placeholder="Unità di misura">
                    <option value="PZ">PZ</option>
                    <option value="KG">KG</option>
                    <option value="L">L</option>
                    <option value="g">g</option>
                  </select>
                </div>

                <label class="control-label">In Uso</label>
                <select class="form-control" name="in_uso" id="in_uso" data-dpmaxz-eid="5" required="">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <button type="submit" class="btn btn-default btn-success pull-right" data-dpmaxz-eid="8" name="updateprodotto">Aggiorna</button>
              <button type="submit" class="btn pull-left btn-danger"  data-dpmaxz-eid="9" name="deleteprodotto"><i class="fa fa-trash-o"></i> ELIMINA</button>
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


  $('#dtprodotti').DataTable({

    //ordina i risultati
    "order": [[1, "asc"]],
    //abilita il response della tabella
    responsive: true

  });

  //evento che intercetta la selezione della riga
  var table = $('#dtprodotti').DataTable();
  $('#dtprodotti tbody').on('click', 'tr', function () {
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
  var marca = button.data('marca')
  var categoria = button.data('categoria')
  var in_uso = button.data('in_uso')
  var prezzo = button.data('prezzo')
  var um = button.data('um')

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //  modal.find('.modal-title').text('New message to ' + recipient)
  //  modal.find('.modal-body input').val(recipient)
  modal.find('input[name="idrecord"]').val(id)
  modal.find('input[name="nome"]').val(nome)
  modal.find('input[name="marca"]').val(marca)
  modal.find('select[name="categoria"]').val(categoria)
  modal.find('select[name="in_uso"]').val(in_uso)
  modal.find('input[name="prezzo"]').val(prezzo)
  modal.find('select[name="um"]').val(um)


})


</script>


</body>

</html>
