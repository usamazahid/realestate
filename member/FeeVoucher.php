<?php 
$pgtitle = "Test";
include('include-header.php');
?>
<style type="text/css"> 
  body{
    background: #e0e0e0;
  }
  @page {
    size: landscape;
    margin: 0;
  }
  *{
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    color:#333;
    font-size: 10px;
  }
  h1, h2, h3, h4, h5, h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
  }
  h2{
    font-size: 25px;
  }
  h3{
    font-size: 25px;
  }

  .borders {
    border-left: 1px dashed #ccc;
    border-right: 1px dashed #ccc;
  }
  .header{
    height: 100px;
    width: 100%;
    text-align: center;
    vertical-align: middle;
    line-height: 100px;
  }
  .payment-details{
    margin: 20px 0px;
  }
  .container{
    height: 500px;
    width: 30%;

    float: left;
    padding: 1%;
  }
  .text-left{
    text-align: left;
    width: 50%;
    float: left;
    display: inline-block;
  }
  .text-right{
    text-align: right;
    width: 50%;
    display: inline-block;
  }
  .text-center{
    text-align: center;
    width: 50%;
    float: left;
    display: inline-block;
  }


</style>

</head>
<body>
  <?php 
  $userdet = mysql_fetch_array(mysql_query("SELECT serial, PlotID, BookingDate, Name, CNIC, Address, Phone, Email, NomineeName, NomineeCNIC, NomineeAddress, RegisterationFee FROM bookedplot WHERE serial='$_GET[id]'"));
  $plotdet = mysql_fetch_array(mysql_query("SELECT PlotType, PlotArea FROM plotdetails WHERE PlotID='".$userdet[1]."'"));
  ?>
  <div class="header">

  </div>
  <div class="wrapper">
    <div class="container">
      <div class="invoice-title">
        <div class="text-left">
          <h2>Invoice</h2>
        </div>
        <div class="text-right">
          <h3>Order# <?php echo "$_GET[id]" ?></h3>
        </div>
       Customer Copy 
      </div>
      <hr/>
      <div class="payment-details">
        <div class="text-left">

          <strong>Applicant:</strong><br>
          <?php echo "$userdet[3]" ?><br>
          <?php echo "$userdet[4]" ?><br>
          <?php echo "$userdet[5]" ?><br>
          <?php echo "$userdet[6]" ?>

          
        </div>
        <div class="text-right">

          <strong>Nominee:</strong><br>
          <?php echo "$userdet[8]" ?><br>
          <?php echo "$userdet[9]" ?><br>
          <?php echo "$userdet[10]" ?>
        </div>  
      </div>
      <div class="payment-details">
        <div class="text-left">


          <strong>Payment Method:</strong><br>
          Bank Deposit<br>
          <?php echo "$userdet[7]" ?><br>
          
          
        </div>
        <div class="text-right">


          <strong>Order Date:</strong><br>
          <?php echo "$userdet[2]" ?><br><br><br>
          
        </div>  
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Booking summary</strong></h3>
        </div>
        <div class="panel-body">
          <div class="text-left">

            <strong>Plot#:</strong><br><br>
            <strong>Plot Type:</strong><br><br>
            <strong>Plot Area:</strong><br><br>
            <strong>Registeration Fee:</strong><br><br>
          </div>
          <div class="text-right">

            <?php echo "$userdet[1]" ?><br><br>
            <?php echo "$plotdet[0]" ?><br><br>
            <?php echo "$plotdet[1]" ?> sq.yds.<br><br>
            <strong>Rs. <?php echo "$userdet[11]" ?></strong>
          </div> 






        </div>
      </div>
      <br><br><br>

      <div class="text-center" style="text-decoration-line: overline; ">

        Applicant Signature

      </div>
      <div class="text-center" style="text-decoration-line: overline; ">

        Receiver Signature

      </div>


    </div>


        <div class="container borders">
      <div class="invoice-title">
        <div class="text-left">
          <h2>Invoice</h2>
        </div>
        <div class="text-right">
          <h3>Order# <?php echo "$_GET[id]" ?></h3>
        </div>
        Office Copy
      </div>
      <hr/>
      <div class="payment-details">
        <div class="text-left">
          
          <strong>Applicant:</strong><br>
          <?php echo "$userdet[3]" ?><br>
          <?php echo "$userdet[4]" ?><br>
          <?php echo "$userdet[5]" ?><br>
          <?php echo "$userdet[6]" ?>
          
          
        </div>
        <div class="text-right">
          
          <strong>Nominee:</strong><br>
          <?php echo "$userdet[8]" ?><br>
          <?php echo "$userdet[9]" ?><br>
          <?php echo "$userdet[10]" ?>
        </div>  
      </div>
      <div class="payment-details">
        <div class="text-left">
          
          
          <strong>Payment Method:</strong><br>
          Bank Deposit<br>
          <?php echo "$userdet[7]" ?><br>
          
          
        </div>
        <div class="text-right">
          
          
          <strong>Order Date:</strong><br>
          <?php echo "$userdet[2]" ?><br><br><br>
          
        </div>  
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Booking summary</strong></h3>
        </div>
        <div class="panel-body">
          <div class="text-left">
            
            <strong>Plot#:</strong><br><br>
            <strong>Plot Type:</strong><br><br>
            <strong>Plot Area:</strong><br><br>
            <strong>Registeration Fee:</strong><br><br>
          </div>
          <div class="text-right">
            
            <?php echo "$userdet[1]" ?><br><br>
            <?php echo "$plotdet[0]" ?><br><br>
            <?php echo "$plotdet[1]" ?> sq.yds.<br><br>
            <strong>Rs. <?php echo "$userdet[11]" ?></strong>
          </div> 



          
          
          
        </div>
      </div>
      <br><br><br>

      <div class="text-center" style="text-decoration-line: overline; ">
        
        Applicant Signature

      </div>
      <div class="text-center" style="text-decoration-line: overline; ">
        
        Receiver Signature

      </div>


    </div>


        <div class="container">
      <div class="invoice-title">
        <div class="text-left">
          <h2>Invoice</h2>
        </div>
        <div class="text-right">
          <h3>Order# <?php echo "$_GET[id]" ?></h3>
        </div>
        Bank Copy
      </div>
      <hr/>
      <div class="payment-details">
        <div class="text-left">
          
          <strong>Applicant:</strong><br>
          <?php echo "$userdet[3]" ?><br>
          <?php echo "$userdet[4]" ?><br>
          <?php echo "$userdet[5]" ?><br>
          <?php echo "$userdet[6]" ?>
          
          
        </div>
        <div class="text-right">
          
          <strong>Nominee:</strong><br>
          <?php echo "$userdet[8]" ?><br>
          <?php echo "$userdet[9]" ?><br>
          <?php echo "$userdet[10]" ?>
        </div>  
      </div>
      <div class="payment-details">
        <div class="text-left">
          
          
          <strong>Payment Method:</strong><br>
          Bank Deposit<br>
          <?php echo "$userdet[7]" ?><br>
          
          
        </div>
        <div class="text-right">
          
          
          <strong>Order Date:</strong><br>
          <?php echo "$userdet[2]" ?><br><br><br>
          
        </div>  
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Booking summary</strong></h3>
        </div>
        <div class="panel-body">
          <div class="text-left">
            
            <strong>Plot#:</strong><br><br>
            <strong>Plot Type:</strong><br><br>
            <strong>Plot Area:</strong><br><br>
            <strong>Registeration Fee:</strong><br><br>
          </div>
          <div class="text-right">
            
            <?php echo "$userdet[1]" ?><br><br>
            <?php echo "$plotdet[0]" ?><br><br>
            <?php echo "$plotdet[1]" ?> sq.yds.<br><br>
            <strong>Rs. <?php echo "$userdet[11]" ?></strong>
          </div> 



          
          
          
        </div>
      </div>
      <br><br><br>

      <div class="text-center" style="text-decoration-line: overline; ">
        
        Applicant Signature

      </div>
      <div class="text-center" style="text-decoration-line: overline; ">
        
        Receiver Signature

      </div>


    </div>

    
  </div>
  <script type="text/javascript">
   window.onload = function() { window.print(); }
 </script>
</body>
</html>