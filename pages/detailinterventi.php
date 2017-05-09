<?php
   include('master.php');
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header"><i class="fa fa-leaf fa-1x"></i> Interventi <small> \ Dettaglio </small>
            <!-- <button type="button" class="btn pull-right btn-primary" onclick="" ><i class="fa  fa-plus-circle"></i> Nuovo</button>-->
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------->

<?php

include('../php/selectDB.php');

 $id = $_GET['recordid'];

$rs_result = selectreqID("V_INTERVENTI",$id);

  while($row = $rs_result->fetch_assoc()) {

$IDINT =  $row["ID"];
$DATA =  $row["DATA"];
$CODICE =  $row["CODICE"];
$CLIENTE =  $row["CLIENTE"];
  };

?>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">

                <h5 class="text-left"> Intervento CODICE: <?  echo $CODICE; ?> </h5>
          <p>     <h5 class="text-left"> <i class="fa fa-calendar-o fa-2x"></i>  <? echo $DATA; ?></h5></p>
          <p>    <h5 class="text-left"> <i class="fa fa-group fa-2x"></i>  <? echo $CLIENTE; ?></h5></p>

            </div>

            <!-- /.panel-heading dataTables-example-->
            <div class="panel-body">

              <?php
              include('attivita.php');

               ?>
            </div>
          </div>
        </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->

</div>
<!-- /#page-wrapper -->

<?php
include('footer.php');
 ?>


<script type = "text/javascript">

function deleterecord() {

  var agree=confirm("ATTENZIONE! Sicuro di voler cancellare il Record? NON SARANNO RECUPERABILI!");
    if (agree)
        {

  $.ajax({
    type: "POST",
                url: "../php/emptydeleteDB.php",
                data: "tablename=clienti&"+"id=1",

    success: function(msg){
           alert( msg );
            location.reload(true);
  // body.append(data);
},
       error: function ( xhr ) {
         alert( msg );
       }


  });

}  else
       {
       return false ;
       }

  };


$(document).ready(function() {

    $('#dtinterventi').DataTable({
      //ordina i risultati
      "order": [[1, "asc"]],
         autoFill: true,
      //abilita il response della tabella
      responsive: true
    });

    $('#dtattivita').DataTable({
      //ordina i risultati
      "order": [[2, "asc"]],
         autoFill: true,
      //abilita il response della tabella
      responsive: true
    });

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
