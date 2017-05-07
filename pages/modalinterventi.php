<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../media/favicon.ico">
    <link rel="icon" type="image/png" href="../media/icon.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="180x180" href="../media/icon.png">

    <title>Gardener Job</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div id="wrapper">
<!----------------------------------- BODY --------------------------------------------------->






  </div>
  <!-- /#page-wrapper -->


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

      <div class="panel panel-primary">
          <div class="panel-heading">
              Modifica Cliente
          </div>

          <!-- /.panel-heading dataTables-example-->
          <div class="panel-body">
              <form role="form" data-dpmaxz-eid="0" action="../php/interventoDB.php" name="updatecliente" method="post">

                  <div class="form-group">

                      <input type="text" class="from-control" name="idrecord" id="idrecord" hidden data-dpmaxz-eid="1">
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
                  <button type="submit" class="btn btn-default btn-success pull-right" data-dpmaxz-eid="5" name="updatecliente">Aggiorna</button>
                      <button type="submit" class="btn pull-left btn-danger"  data-dpmaxz-eid="6" name="deletecliente"><i class="fa fa-trash-o"></i> ELIMINA</button>
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



      <!-- /#wrapper -->
      <!-- jQuery -->
      <script src="../vendor/jquery/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

      <!-- Metis Menu Plugin JavaScript -->
      <script src="../vendor/metisMenu/metisMenu.min.js"></script>

      <!-- DataTables JavaScript -->
      <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
      <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
      <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="../dist/js/sb-admin-2.js"></script>

      <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

      <!-- Page-Level Demo Scripts - Tables - Use for reference -->
      <script>
          $(document).ready(function () {





          



              $('[data-toggle="tooltip"]').tooltip();



          });




  //evento che intercetta la finestra modale in modifica per passare i parametri
          $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('idrecord') // Extract info from data-* attributes
    var nome = button.data('nome')
    var riferimento = button.data('riferimento')
      var tipo = button.data('tipo')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
  //  modal.find('.modal-title').text('New message to ' + recipient)
  //  modal.find('.modal-body input').val(recipient)
    modal.find('input[name="idrecord"]').val(id)
    modal.find('input[name="nome"]').val(nome)
    modal.find('input[name="riferimento"]').val(riferimento)
    modal.find('select[name="tipo"]').val(tipo)
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

      </script>




  </body>

  </html>
