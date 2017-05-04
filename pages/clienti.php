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

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="Brand" src="../media/brend.png" height="30" />
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown USER -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="clienti.php"><i class="fa fa-group fa-fw"></i> Clienti</a>
                        </li>
                        <li>
                            <a href="risorse.php"><i class="fa fa-pied-piper fa-fw"></i> Risorse</a>
                        </li>
                        <li>
                            <a href="prodotti.php"><i class="fa fa-flask fa-fw"></i> Prodotti</a>
                        </li>
                        <li>
                            <a href="interventi.php"><i class="fa fa-leaf fa-fw"></i> Interventi</a>
                        </li>

                        <li>
                            <a href="../pages_original/tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                    </ul>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side  -->

        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header"><i class="fa fa-group fa-1x"></i> Clienti
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

$rs_result = selectreq("clienti");
?>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Anagrafica Clienti
                        </div>

                        <!-- /.panel-heading dataTables-example-->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtclienti" >

                                <thead>
                                    <tr>
                                        <th style="width:20px"></th>
                                        <!--<th>ID</th>-->
                                        <th>
                                            <strong>Cliente</strong>
                                        </th>

                                        <th>
                                          riferimento
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
                                            data-riferimento="<? echo $row["RIFERIMENTO"]; ?>"
                                            data-tipo="<? echo $row["TIPO_CLIENTE"]; ?>">
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
                                              <?  echo $row["RIFERIMENTO"]; ?>
                                        </td>
                                        <td>
                                            <?  echo $row["TIPO_CLIENTE"]; ?>
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

<div class="panel panel-green">
    <div class="panel-heading">
        Nuovo Cliente
    </div>

    <!-- /.panel-heading dataTables-example-->
    <div class="panel-body">
        <form role="form" data-dpmaxz-eid="1" action="../php/clienteDB.php" name="insertcliente" method="post">

            <div class="form-group">
                <label class="control-label">Nome *</label>
                <input type="text" class="form-control" name="nome" placeholder="Nominativo del cliente" data-dpmaxz-eid="2" required>
                <label class="control-label">Riferimento</label>
                <input type="text" class="form-control" name="riferimento" placeholder="Persona di riferimento" data-dpmaxz-eid="3">
                <label class="control-label">Tipo</label>
                <select class="form-control" name="tipo" data-dpmaxz-eid="4" required="">
                  <option value="CLIENTE">CLIENTE</option>
                  <option value="PROSPECT">PROSPECT</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block" data-dpmaxz-eid="5" name="insertcliente">Salva</button>
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

    <div class="panel panel-green">
        <div class="panel-heading">
            Modifica Cliente
        </div>

        <!-- /.panel-heading dataTables-example-->
        <div class="panel-body">
            <form role="form" data-dpmaxz-eid="0" action="../php/clienteDB.php" name="updatecliente" method="post">

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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function () {


            $('#dtclienti').DataTable({

                //ordina i risultati
                "order": [[1, "asc"]],
                //abilita il response della tabella
                responsive: true

            });

            //evento che intercetta la selezione della riga
            var table = $('#dtclienti').DataTable();
            $('#dtclienti tbody').on('click', 'tr', function () {
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


    </script>


</body>

</html>
