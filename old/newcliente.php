<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
            <!--<a class="navbar-brand" href="index.html">

            Gardener Job
            </a>-->

            <a class="navbar-brand" href="index.html">
                <img alt="Brand" src="../media/brend.png" height="30">
            </a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
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
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="clienti.php"><i class="fa fa-group fa-fw"></i> Clienti</a>
                    </li>
                    <li>
                        <a href="risorse.html"><i class="fa fa-pied-piper fa-fw"></i> Risorse</a>
                    </li>
                    <li>
                        <a href="prodotti.html"><i class="fa fa-flask fa-fw"></i> Prodotti</a>
                    </li>
                    <li>
                        <a href="interventi.html"><i class="fa fa-leaf fa-fw"></i> Interventi</a>
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
                <h1 class="page-header"><i class="fa fa-group fa-1x"></i> Clienti <small> \ Nuovo</small></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!------------------------------------------>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        Nuovo Cliente
                    </div>

                    <!-- /.panel-heading dataTables-example-->
                    <div class="panel-body">
                        <form role="form" data-dpmaxz-eid="1" action="">

                            <div class="form-group">
                                <label class="control-label">Nome *</label>
                                <input type="text" class="form-control" id="name" placeholder="Nominativo del cliente" data-dpmaxz-eid="2" required>
                                <label class="control-label">Riferimento *</label>
                                <input type="text" class="form-control" id="riferimento" placeholder="Persona di riferimento" data-dpmaxz-eid="3" required>

                            </div>
                            <button type="submit" class="btn btn-default" data-dpmaxz-eid="4">Salva</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>



                        <!------------------------------------------>
                    </div>
                    <!-- /#page-wrapper -->
                </div>
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


                        $('#dataTables-example').DataTable({

                            //ordina i risultati
                            "order": [[1, "desc"]],
                            //abilita il response della tabella
                            responsive: true

                        });

                        //evento che intercetta la selezione della riga
                        var table = $('#dataTables-example').DataTable();
                        $('#dataTables-example tbody').on('click', 'tr', function () {
                            var data = table.row(this).data();
                            //  alert('You clicked on ' + data[1] + '\'s row');
                        });
                    });
                </script>


</body>

</html>
