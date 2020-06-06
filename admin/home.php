<?php
include ('include/header.php');
?>

</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo">


<?php
include ('include/sidebar.php');
?>

 

		
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                   
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Dashboard
                        <small>Statistics</small>
                    </h3>
                    <!-- END PAGE TITLE-->

					<hr>


<?php

$numuser = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM bookedplot"));
$numuserP = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM bookedplot WHERE status='1'"));
$numuserU = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM bookedplot WHERE status='2'"));


$to = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM ticket_main WHERE status='0'"));
$tu = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM ticket_main WHERE status='2'"));

?>



<!-- START -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="dashboard-stat blue">
<div class="visual">
<i class="fa fa-users"></i>
</div>
<div class="details">
<div class="number"><?php echo $numuser[0]; ?></div>
<div class="desc"> TOTAL  BOOKINGS </div>
</div>
</div>
</div>
<!-- END -->




<!-- START -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="dashboard-stat purple">
<div class="visual">
<i class="fa fa-users"></i>
</div>
<div class="details">
<div class="number"> <?php echo $numuserP[0]; ?></div>
<div class="desc">TOTAL ACCEPTED REQUESTES </div>
</div>
</div>
</div>
<!-- END -->


<!-- START -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="dashboard-stat yellow">
<div class="visual">
<i class="fa fa-users"></i>
</div>
<div class="details">
<div class="number"> <?php echo $numuserU[0]; ?></div>
<div class="desc">TOTAL REJECTED REQUESTES </div>
</div>
</div>
</div>
<!-- END -->











<!-- START -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="dashboard-stat blue">
<div class="visual">
<i class="fa fa-ticket"></i>
</div>
<div class="details">
<div class="number"> <?php echo $to[0]; ?></div>
<div class="desc">OPEN TICKET</div>
</div>
</div>
</div>
<!-- END -->

<!-- START -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="dashboard-stat purple">
<div class="visual">
<i class="fa fa-ticket"></i>
</div>
<div class="details">
<div class="number"> <?php echo $tu[0]; ?></div>
<div class="desc">USER RESPONSE ON TICKET</div>
</div>
</div>
</div>
<!-- END -->







					
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            


<?php
 include ('include/footer.php');
 ?>


</body>
</html>