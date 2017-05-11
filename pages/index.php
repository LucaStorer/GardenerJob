
  <?php

  include('master.php');

  include('../php/selectDB.php');

  $rs_result = selectreq("V_ROW_TOT");
  while($row = $rs_result->fetch_assoc())
  {

    ?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><i class="fa fa-dashboard fa-fw"></i> Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-leaf fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge"><? echo $row["interventi"]; ?></div>
                  <div>Interventi</div>
                </div>
              </div>
            </div>
            <a href="interventi.php">
              <div class="panel-footer">
                <span class="pull-left">Dettaglio</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-group fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge"><? echo $row["clienti"]; ?></div>
                  <div>Clienti</div>
                </div>
              </div>
            </div>
            <a href="clienti.php">
              <div class="panel-footer">
                <span class="pull-left">Dettaglio</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-yellow">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-flask fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge"><? echo $row["prodotti"]; ?></div>
                  <div>Prodotti</div>
                </div>
              </div>
            </div>
            <a href="prodotti.php">
              <div class="panel-footer">
                <span class="pull-left">Dettaglio</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="panel panel-red">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-pied-piper fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge"><? echo $row["risorse"]; ?></div>
                  <div>Risorse</div>
                </div>
              </div>
            </div>
            <a href="risorse.php">
              <div class="panel-footer">
                <span class="pull-left">Dettaglio</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php
  
};
include('footer.php');
?>

</body>

</html>
