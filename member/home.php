<?php 
$pgtitle = "Dashboard";
include('include-header.php');
?>

</head>
<body class="header-fixed">


<?php
include('include-navbar.php');
?>


<!--=== Breadcrumbs v4 ===-->
<div class="breadcrumbs-v4">
<div class="container">
<span class="page-name">&nbsp;</span>
<h1>Account  <span class="shop-green">Dashboard</span></h1>
</div><!--/end container-->
</div>
<!--=== End Breadcrumbs v4 ===-->




<!--=== Registre ===-->
<div class="log-reg-v3 content-md margin-bottom-30">
<div class="container">
<div class="row">





<div class="row">
	

<div class="col-md-4 col-xs-12">
<a href="<?php echo $baseurl; ?>/ProjectMap" class="btn btn-primary btn-block btn-lg"> <i class="fa fa-map-marker fa-5x"></i><br> Project Map</a>
</div>

	


	
<div class="col-md-4 col-xs-12">
<a href="<?php echo $baseurl; ?>/TransactionHistory" class="btn btn-success btn-block btn-lg"> <i class="fa fa-dollar fa-5x"></i><br> Transaction History</a>
</div>
	


	
<div class="col-md-4 col-xs-12">
<a href="<?php echo $baseurl; ?>/EditProfile" class="btn btn-info btn-block btn-lg"> <i class="fa fa-user fa-5x"></i><br> My Profile</a>
</div>

</div>




<div style="margin-top:30px;"></div>

<div class="row">
	


</div>







<?php 


//echo date("d M Y ----- h:i:s A");


 ?>







</div><!--/end row-->
</div><!--/end container-->
</div>
<!--=== End Registre ===-->

<div style="margin-top:230px;"></div>
<?php
include("include-footer.php");
?>
</body>
</html>