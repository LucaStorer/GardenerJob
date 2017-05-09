<?php
   include('master.php');
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-leaf fa-1x"></i> Interventi
              <button type="button" class="btn pull-right btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuovo</button>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------->

<?php

include('../php/selectDB.php');

$rs_result = selectreq("V_INTERVENTI");
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
                          <th style="width:60px">
                          </th>
                          <th style="width:20px">

                          </th>
                          <th>
                              <strong>Data</strong>
                          </th>
                          <th>
                              <strong>Codice</strong>
                          </th>
                          <th>
                              <strong>Cliente</strong>
                          </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while($row = $rs_result->fetch_assoc()) {
                        ?>
                        <tr>
                          <td>
                            <button type="button" class="btn pull-default btn-info btn-xs" onclick="location.href='detailinterventi.php?recordid=<?echo $row["ID"]; ?>';"><i class="fa fa-list-alt"></i> Dettagli</button>
</td>
<td>
                            <a href="#" data-toggle="modal"
                            data-target="#exampleModal"
                            data-idrecord="<? echo $row["ID"]; ?>"
                            data-date="<? echo $row["DATA"]; ?>"
                            data-codice="<? echo $row["CODICE"]; ?>"
                            data-idcliente="<? echo $row["ID_CLIENTE"]; ?>"
                            data-cliente="<? echo $row["CLIENTE"]; ?>">
                              <p class="text-center">
                              <i class="fa fa-edit fa-fw"></i>
                          </p>
                          </a>
                          </td>
                            <td>
                                <div class="fontColor">
                                    <strong>
                                        <?  echo $row["DATA"]; ?>
                                    </strong>
                                </div>
                            </td>
                            <td>  <strong>
                                <?  echo $row["CODICE"]; ?>
                                  </strong>
                            </td>
                            <td>
                                  <?  echo $row["CLIENTE"]; ?>
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
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->

</div>
<!-- /#page-wrapper -->

<?php
include('modalinterventi.php');
include('footer.php');
 ?>

 <script>
     $(document).ready(function () {

       $('#dtinterventi').DataTable({
         //ordina i risultati
         "order": [[2, "desc"]],
        
         //abilita il response della tabella
         responsive: true
       });

         $('[data-toggle="tooltip"]').tooltip();

});

$('input[name="date"]').daterangepicker({
locale: {
//format: 'DD-MM-YYYY'
format: 'YYYY-MM-DD'
},

singleDatePicker: true,
showDropdowns: true
//},
//function(start, end, label) {
//      var years = moment().diff(start, 'years');
//      alert("You are " + years + " years old.");
});

$('input[name="date"]').on('show.daterangepicker', function(ev, picker) {
  console.log($(this).val());

$('input[name="date"]').data('daterangepicker').updateCalendars;

 console.log(picker.startDate.format('YYYY-MM-DD'));

});

//evento che intercetta la finestra modale in modifica per passare i parametri
$('#exampleModal').on('show.bs.modal', function (event) {

var button = $(event.relatedTarget) // Button that triggered the modal
var id = button.data('idrecord') // Extract info from data-* attributes
var date = button.data('date')
var codice = button.data('codice')
var idcliente = button.data('idcliente')
 var cliente = button.data('cliente')
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)

//  modal.find('.modal-title').text('New message to ' + recipient)
//  modal.find('.modal-body input').val(recipient)

modal.find('input[name="idrecord"]').val(id)
modal.find('input[name="date"]').val(date)
modal.find('input[name="codice"]').val(codice)
modal.find('select[name="idcliente"]').val(idcliente)

});

 </script>

</body>
</html>
