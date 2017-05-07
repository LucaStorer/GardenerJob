<?php
   include('master.php');
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header"><i class="fa fa-leaf fa-1x"></i> Interventi
             <button type="button" class="btn pull-right btn-primary" onclick="" ><i class="fa  fa-plus-circle"></i> Nuovo</button>
            </h1>

            <!--  <button type="button" class="btn pull-right btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuovo</button> -->

        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------->

<?php



include('../php/selectDB.php');

 $id = $_GET['recordid'];

$rs_result = selectreqID("V_INTERVENTI",$id);
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
   <button type="button" class="btn pull-default btn-info" onclick="" ><i class="fa  fa-plus-circle"></i> Dettagli</button>
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
include('footer.php');
 ?>


<script type = "text/javascript">

function emptyfunc() {

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
});



</script>

</body>
</html>
