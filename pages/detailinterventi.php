<?php
include('master.php');
?>

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <p>
        <h1 class="page-header"><button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='interventi.php'">< </button> <i class="fa fa-leaf fa-1x"></i> Interventi <small> \ Dettaglio </small>
          <!-- <button type="button" class="btn pull-right btn-primary" onclick="" ><i class="fa  fa-plus-circle"></i> Nuovo</button>-->
        </p>
      </h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>

  <!------------------------------------------------------------------------------------------------------------------------------------------------------->

  <?php


  include('../php/selectDB.php');

  $id = $_GET['recordid'];
  $idat = $_GET['idatt'];

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

          if ($idat == 0){
            include('emptydetailprodotti.php');

          }else{
            include('detailprodotti.php');
          }

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



function deleterecordAttProd(ID_ATT,ID_PROD) {

  var agree=confirm("ATTENZIONE! Sicuro di voler cancellare il Record? NON SARANNO RECUPERABILI!");
  if (agree)
  {

    //alert("tablename=attivitaprodotto&"+"idattivita="+ID_ATT+"&idprodotto="+ID_PROD);

    console.log("tablename=attivitaprodotto&"+"idattivita="+ID_ATT+"&idprodotto="+ID_PROD);

    $.ajax({
      type: "POST",
      url: "../php/prodottoDB.php",
      data: "tablename=attivitaprodotto&"+"idattivita="+ID_ATT+"&idprodotto="+ID_PROD,

      success: function(msg){
        alert( msg );
        location.reload(true);
        // body.append(data);
      },
      error: function ( xhr ) {
        alert( xhr );
      }


    });

  }  else
  {
    return false ;
  }

};

function deleterecord(ID_INT,ID_ATT) {

  var agree=confirm("ATTENZIONE! Sicuro di voler cancellare il Record? NON SARANNO RECUPERABILI!");
  if (agree)
  {

    $.ajax({
      type: "POST",
      url: "../php/attivitaDB.php",
      data: "tablename=attivita&"+"idintervento="+ID_INT+"&idattivita="+ID_ATT,

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

  /*if (<? echo $idat; ?> == 0){
  var TableProd = document.getElementById("tableProdotti");
  var selAttivita = document.getElementById("selAttivita");

  TableProd.style.visibility = 'hidden';      // Hide
  selAttivita.style.visibility = 'visible';
  // Show
}else{

var TableProd = document.getElementById("tableProdotti");
var selAttivita = document.getElementById("selAttivita");

selAttivita.style.visibility = 'hidden';      // Hide
TableProd.style.visibility = 'visible';     // Show

}*/

$('#dtinterventi').DataTable({
  //ordina i risultati
  "order": [[1, "asc"]],
  autoFill: true,
  //abilita il response della tabella
  responsive: true
});

$('#dtattivita').DataTable({

  //ordina i risultati
  "order": [[4, "asc"]],
  autoFill: true,
  //abilita il response della tabella
  responsive: true
});

$('#dtprodotti').DataTable({
  //ordina i risultati
  "order": [[2, "asc"]],
  autoFill: true,
  //abilita il response della tabella
  responsive: true
});

//evento che intercetta la selezione della riga
var table = $('#dtattivita').DataTable();
$('#dtattivita tbody').on('click', 'tr', function () {

  //var Row = document.getElementById("ID_ATTIVITA_SEL");
  //  var Cells = Row.getElementsByTagName("td");
  //  alert(Cells[0].innerText);

  var idattsel = this.cells[2].innerText;
  //alert(idattsel);
  var myDiv = document.getElementById("idint");


  myDiv.value=idattsel;

  //  alert(myDiv.value);
  //  document.cookie = "idattivitasel="+data[1];

  window.location="detailinterventi.php?recordid=<?echo $id; ?>&idatt="+  myDiv.value;


});

});

$('input[name="dateinizio"]').daterangepicker({
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

$('input[name="datefine"]').daterangepicker({
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

//evento che intercetta la finestra modale in modifica per passare i parametri
$('#exampleModal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('idrecord') // Extract info from data-* attributes
  var titolo = button.data('titolo')
  var descrizione = button.data('descrizione')
  var dateinizio = button.data('dateinizio')
  var datefine = button.data('datefine')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)

  //  modal.find('.modal-title').text('New message to ' + recipient)
  //  modal.find('.modal-body input').val(recipient)

  modal.find('input[name="idrecord"]').val(id)
  modal.find('input[name="titolo"]').val(titolo)
  modal.find('input[name="descrizione"]').val(descrizione)
  modal.find('input[name="dateinizio"]').val(dateinizio)
  modal.find('input[name="datefine"]').val(datefine)


});




</script>

</body>
</html>
