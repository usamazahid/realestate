<?php
include ('include/header.php');
require_once("../member/anotifier.php");
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
                    <h3 class="page-title"> BOOKING - Pending Request <small></small></h3>
                    <hr>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
<?php

if(isset($_GET['success'])) {
$id = $_GET['success'];
$plotnumber = $_GET['plotid'];
$booked = $_GET['bookedby'];
$email = $_GET['bookemail'];
echo $email;
mysql_query("UPDATE bookedplot SET status='1' WHERE serial='".$id."'");
echo mysql_error();
///////////////////------------------------------------->>>>>>>>>Send Email AND SMS

$txt = "Congratulations your Request has been Approved.<br/><br/><br/>

<b>Your plot Number is $plotnumber</b><br/><br/>

We are looking forward a long and mutually prosperous relationship.<br/>";


abiremail($email, "Registration Completed Successfully", $booked, $txt);

///////////////////------------------------------------->>>>>>>>>Send Email AND SMS


}

if(isset($_GET['refund'])) {
$id = $_GET['refund'];
$plotnumber = $_GET['plotid'];
$booked = $_GET['bookedby'];
$email = $_GET['bookemail'];
mysql_query("UPDATE bookedplot SET status='2' WHERE serial='".$id."'");
echo mysql_error();
///////////////////------------------------------------->>>>>>>>>Send Email AND SMS

$txt = "Sorry your Request has been Rejected.<br/><br/><br/>

<b>Your plot Number is $plotnumber</b><br/><br/>

Please Generate a ticket or contact your administrator.<br/>";


abiremail($email, "Registration Failed for Plot# $plotnumber", $booked, $txt);

///////////////////------------------------------------->>>>>>>>>Send Email AND SMS

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
<th> Action</th>
</tr>

</thead><tbody>

<?php

$ddaa = mysql_query("SELECT plotdetails.plotID, plotdetails.PlotType, plotdetails.PlotArea, plotdetails.RegisterationFee, bookedplot.Name, bookedplot.CNIC, bookedplot.BookingDate, bookedplot.serial, bookedplot.bookedby, bookedplot.email FROM plotdetails INNER JOIN bookedplot ON plotdetails.plotid = bookedplot.plotid where bookedplot.status = '0' ORDER BY bookedplot.BookingDate");




    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {

$userdet = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE mid='".$data[8]."'"));

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
   <td>
<a href=\"?success=$data[7]&plotid=$data[0]&bookedby=$data[8]&bookemail=$data[9]\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-check\"></i> ACCEPT </a>
<a href=\"?refund=$data[7]&plotid=$data[0]&bookedby=$data[8]&bookemail=$data[9]\" class=\"btn btn-danger btn-xs\"> <i class=\"fa fa-repeat\"></i> REJECT </a>
</td>


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