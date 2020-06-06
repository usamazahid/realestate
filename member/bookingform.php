<?php 
$pgtitle = "Booking Form";
include('include-header.php');
?>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo $adminurl; ?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $adminurl; ?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<link href="<?php echo $adminurl; ?>/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />

<link href="<?php echo $baseurl; ?>/assets/plugins/int-tel/css/intlTelInput.min.css" rel="stylesheet" type="text/css" />


<style>
    
    
.dt-buttons {
    float: right !important;
    margin-top: -64px;
  }

</style>





</head>
<body class="header-fixed">


<?php
include('include-navbar.php');
?>


<!--=== Breadcrumbs v4 ===-->
<div class="breadcrumbs-v4">
<div class="container">
<span class="page-name">&nbsp;</span>
<h1>Booking <span class="shop-green">Form</span></h1>
</div><!--/end container-->
</div>
<!--=== End Breadcrumbs v4 ===-->


<?php 
$plotinfo = mysql_query("SELECT plotID, plotType, PlotArea, RegisterationFee FROM plotdetails WHERE plotID='$_GET[id]'");
echo mysql_error();
$plotdata = mysql_fetch_array($plotinfo)
?>

<!--=== Registre ===-->
<div class="log-reg-v3 content-md margin-bottom-30">

 <div class="container">

<div class="panel panel-default">
<div class="panel-heading"> <h1>Booking For Plot <?php echo $plotdata[0] ?></h1></div>
<div class="panel-body">

<form action="" method="post">


<?php 



if(isset($_POST['submit'])){

$ClientName = mysql_real_escape_string($_POST['inputname']);
$ClientEmail = mysql_real_escape_string($_POST['inputEmail']);
$ClientCNIC = mysql_real_escape_string($_POST['inputCNIC']);
$ClientAddress = mysql_real_escape_string($_POST['inputAddress']);
$ClientPhone = mysql_real_escape_string($_POST['inputPhone']);
$NomineeName = mysql_real_escape_string($_POST['inputnomineename']);
$NomineeCNIC = mysql_real_escape_string($_POST['inputnomineeCNIC']);
$NomineeAddress = mysql_real_escape_string($_POST['inputnomineeAddress']);
$RegisterationFee = mysql_real_escape_string($_POST['RegisterationFee']);

$res = mysql_query("INSERT INTO bookedPlot SET BlockID='$_GET[id]', PlotID='".$plotdata[0]."', status='0', BookedBy='".$uid."', Name='".$ClientName."', Email='".$ClientEmail."', CNIC='".$ClientCNIC."', Address='".$ClientAddress."', Phone='".$ClientPhone."', NomineeName='".$NomineeName."', NomineeCNIC='".$NomineeCNIC."', NomineeAddress='".$NomineeAddress."', RegisterationFee='".$RegisterationFee."' ");
echo mysql_error();

if($res){
echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
Withdraw Request ofRequested  Successfully!
</div>";




$lastentry = mysql_fetch_array(mysql_query("SELECT max(serial) FROM bookedplot"));
echo "<script>window.open('$baseurl/feevoucher/?id=$lastentry[0]')</script>";
echo "<script>window.location.replace('$baseurl/transactionhistory', '_blank');</script>";


echo "<div class=\"alert alert-info alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
Withdraw ID
</div>";

}else{
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
Some Problem Occurs, Please Try Again. 
</div>";
echo mysql_error();
}
}
?>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="plottype">Plot Type</label>
      <input type="text" class="form-control" id="plotType" value="<?php echo $plotdata[1] ?>" readonly>
    </div>

    <div class="form-group col-md-3">
      <label for="plotarea">Plot Area</label>
      <input type="text" class="form-control" id="plotarea" value="<?php echo $plotdata[2] ?> sq.yds." readonly>
    </div>
        <div class="form-group col-md-3">
      <label for="plotarea">Registration Fee</label>
      <input type="text" class="form-control" id="plotarea" name="RegisterationFee" value="<?php echo $plotdata[3] ?>" readonly>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">Name</label>
      <input type="text" class="form-control" id="inputname" name="inputname" placeholder="Full Name" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="Email" class="form-control" name="inputEmail"  placeholder="abc@example.com" required>
    </div>
   
  </div>
  <div class="form-group">
    <div class="col-md-12">
    <label for="inputCNIC">CNIC</label>
    <input type="text" class="form-control" name="inputCNIC" placeholder="#####-#######-#" required>
</div>
  </div>
<div class="form-row">
  <div class="form-group">
    <div class="col-md-12">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St" required>
</div>
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="inputCity" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputphone">Phone</label>
      <input type="tel" class="form-control" name="inputPhone" id="telephone" placeholder="" required>
      <span id="valid-msg" class="hide">✓ Valid</span>
      <span id="error-msg" class="hide"></span>

    </div>

  </div>
<div class="form-row">
  <div class="form-group col-md-12">
    <hr>
  </div> 
</div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnomineename">Nominee Name</label>
      <input type="text" class="form-control" id="inputnomineename" name="inputnomineename" placeholder="Full Name" required>
    </div>

 <div class="form-group col-md-6">
    <label for="inputnomineeCNIC">Nominee CNIC</label>
    <input type="text" class="form-control" name="inputnomineeCNIC" placeholder="#####-#######-#" required>

  </div>
   
  </div>

  <div class="form-row">
  
    <div class="form-group col-md-12">
    <label for="inputnomineeAddress">Nominee Address</label>
    <input type="text" class="form-control" name="inputnomineeAddress" placeholder="1234 Main St" required>

  </div>
  </div>

<div class="form-row">
  <div class="form-group">
    <div class="col-md-12">
     
  <button type="submit" name="submit" class="btn btn-primary">Book Now</button>
    </div>
  </div>
 </div>
</form>


</div>
</div>
</div>
</div>

   
<div class="container">
<div class="row">


<div class="shop-product">

<div class="row">
<div class="col-md-12">


<!-- BEGIN EXAMPLE TABLE PORTLET-->
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet light bordered">
<div class="portlet-title">
<div class="caption font-dark">
<span class="caption-subject bold uppercase"> Booking History</span>
</div>
<div class="tool"> </div>
</div>
<div class="portlet-body">
<table class="table table-striped table-bordered table-hover" id="sample_1">
<thead>



<tr>
<th> SL# </th>
<th> Plot No </th>
<th> Ploty Type </th>
<th> Area</th>
<th> Booked For </th>
<th> CNIC </th>
<th> Status </th>
<th> Processed on </th>
<th> Print Slip</th>
</tr>

</thead><tbody>

<?php


$i = 1;
$ddaa = mysql_query("SELECT plotdetails.plotID, plotdetails.PlotType, plotdetails.PlotArea, bookedplot.Name, bookedplot.CNIC, bookedplot.Status, bookedplot.BookingDate, bookedplot.serial FROM plotdetails INNER JOIN bookedplot ON plotdetails.plotid = bookedplot.plotid WHERE bookedplot.BookedBy='".$uid."' ORDER BY bookedplot.serial DESC");
echo mysql_error();
while ($data = mysql_fetch_array($ddaa))

{



$sl = str_pad($i, 4, '0', STR_PAD_LEFT);



if($data[5]==0){
    $status = "<b class='btn btn-info btn-xs'> Awaiting Review </b>";
        $ptm = "<i>Awaiting Review</i>";
}elseif($data[5]==1){
    $status = "<b class='btn btn-success btn-xs'> SUCCESS </b>"; 
    
}elseif($data[5]==2){
    $status = "<b class='btn btn-warning btn-xs'> REFUNDED </b>"; 
}else{
    $status = "<b class='btn btn-danger btn-xs'> UNKNOWN </b>"; 
}


echo "                                
<tr>

<td>$sl</td>
<td>$data[0]</td>
<td>$data[1]</td>
<td>$data[2]</td>
<td>$data[3]</td>
<td>$data[4]</td>
<td>$status</td>
<td>$data[6]</td>
<td><a href='feevoucher/?id=$data[7]'  target='_blank'> <i class='fa fa-print fa-2x'></i></a></td>




</tr>";

$i++;
}


?>                                           

</tbody>
</table>
</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
<!-- END EXAMPLE TABLE PORTLET-->

</div>








</div>










<div style="margin-top:100px;"></div>




</div><!--/end row-->
</div><!--/end container-->
</div>
<!--=== End Registre ===-->

<?php
include("include-footer.php");
?>


        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo $adminurl; ?>/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo $adminurl; ?>/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo $adminurl; ?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>


         <script src="<?php echo $baseurl; ?>/assets/plugins/int-tel/js/intlTelInput.min.js" type="text/javascript"></script>



         <script src="<?php echo $baseurl; ?>/assets/plugins/int-tel/js/intlTelInput-jquery.min.js" type="text/javascript"></script>


        <!-- END PAGE LEVEL PLUGINS -->
        
         <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo $adminurl; ?>/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
    function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}







var input = document.querySelector("#telephone"),
  errorMsg = document.querySelector("#error-msg"),
  validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
var iti = window.intlTelInput(input, {
  utilsScript: "assets/plugins/int-tel/js/utils.js?1562189064761",
  preferredCountries: [ "pk", "sa" ],
});

var reset = function() {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
  validMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
      validMsg.classList.remove("hide");
    } else {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
    }
  }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);

</script>



</body>
</html>