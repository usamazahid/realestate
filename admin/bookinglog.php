<?php
include ('include/header.php');
?>

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        
        
        
        </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        
        
    
<?php
include ('include/sidebar.php');
?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> WITHDRAW MONEY - LOG <small></small></h3>
                    <hr>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
<?php

if(isset($_GET['success'])) {
$id = $_GET['success'];
mysql_query("UPDATE wd SET status='1' WHERE id='".$id."'");
//echo mysql_error();
}




?>                  
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                                                      <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <!--i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">AAA</span-->
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>

                                        
                                        
<tr>
    <th>ID</th>
<th> Plot No </th>
<th> Ploty Type </th>
<th> Area</th>
<th> Registeration Fee</th>
<th> Booked For </th>
<th> CNIC </th>
<th> Booked By</th>
<th> Requested on </th>
<th> Status</th>
</tr>

</thead><tbody>

<?php
$stts = "";
$ddaa = mysql_query("SELECT plotdetails.plotID, plotdetails.PlotType, plotdetails.PlotArea, plotdetails.RegisterationFee, bookedplot.Name, bookedplot.CNIC, bookedplot.BookingDate, bookedplot.serial, bookedplot.bookedby, bookedplot.status FROM plotdetails INNER JOIN bookedplot ON plotdetails.plotID = bookedplot.plotID where bookedplot.status != '0' ORDER BY bookedplot.BookingDate");




    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {

$userdet = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE mid='".$data[8]."'"));

if($data[9]==1){
$stts = "<b class=\"btn green btn-xs\">Success </b>";
}elseif($data[9]==2){
$stts = "<b class=\"btn red btn-xs\">Refunded</b>";
}

 echo "                                
 <tr>
 <td>$data[7]</td>
    <td>$data[0]</td>
 <td>$data[1]</td>
  <td>$data[2]</td>
   <td>$data[3]</td>
    <td>$data[4]</td>
    <td>$data[5]</td>
    <td>$userdet[0]</td>
    <td>$data[6]</td>
   <td>$stts</td>


</tr>";
    
    }
    

    
?>
                
            

                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                            
                        </div>
                    </div><!-- ROW-->
                    
                    
                    
                    
                    
            
            
        
                    
                    
                    
                    
                    
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        
      <?php
 include ('include/footer.php');
 ?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        
         <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
 
 </body>
</html>