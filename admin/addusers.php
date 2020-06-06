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
                    <h3 class="page-title"> General Setting
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->

                    <hr>

                    
                    
                    
                    
                    
            <div class="row">
            <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" action="" method="post" role="form" enctype="multipart/form-data">
                                        <div class="form-body">

           
<?php
if($_POST)
{

$firstname = mysql_real_escape_string($_POST["firstname"]);
$lastname = mysql_real_escape_string($_POST["lastname"]);
$email = mysql_real_escape_string($_POST["email"]);
$mobile = mysql_real_escape_string($_POST["mobile"]);

$username = mysql_real_escape_string($_POST["username"]);
$password = mysql_real_escape_string($_POST["password"]);
$password2 = mysql_real_escape_string($_POST["passwordConfirm"]);


$err1=0;
$err2=0;
$err3=0;
$err4=0;
$err5=0;
$err6=0;
$err7=0;
$err8=0;
$err9=0;
$err10=0;
$err11=0;
$err12=0;
$err13=0;
$err14=0;
$err15=0;
$err16=0;
$err17=0;
$err18=0;
$err19=0;
$err20=0;
$err21=0;


if(trim($firstname)==""){
$err1=1;
}

if(trim($lastname)==""){
$err2=1;
}

if(trim($email)==""){
$err6=1;
}

if(trim($mobile)==""){
$err8=1;
}
if(trim($username)==""){
$err14=1;
}
$uuu = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE username='".$username."'"));
if($uuu[0]!=0){
$err15=1;
}

if($password!=$password2)
      {
$err16=1;
}

if(strlen($password)<="5"){
$err17=1;
}


$error = $err1+$err2+$err3+$err4+$err5+$err6+$err7+$err8+$err9+$err10+$err11+$err12+$err13+$err14+$err15+$err16+$err17+$err18+$err19+$err20+$err21;


if ($error == 0){

$passmd = md5($password);
//$passmd = $password;
$vercode = rand(100000,999999);


$res = mysql_query("INSERT INTO users SET username='".$username."', password='".$passmd."', joindate='".time()."', fname='".$firstname."', lname='".$lastname."', mobile='".$mobile."', email='".$email."', status='1', verstat='1'");

if($res){
  echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  

Registretion Completed Successfully!

</div>";






}else{
  echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  

Some Problem Occurs, Please Try Again. 

</div>";
}
} else {
  
if ($err1 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
First Name Can Not be Empty!!!
</div>";
}   
  
if ($err2 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Last Name Can Not be Empty!!!
</div>";
}   
  
if ($err3 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Please Provide a valid Date of Birth!!!
</div>";
}   

if ($err4 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
You are not 18 Years old! you have to be 18+ to join...
</div>";
}   

  




  
if ($err6 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Email Can Not be Empty!!!
</div>";
}   


  
if ($err7 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Email Already Exist in our database... Please Use another Email!!
</div>";
}   


  
if ($err8 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Mobile Can Not be Empty!!!
</div>";
}   


  
if ($err9 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Mobile Number Already Exist in our database... Please Use another Mobile Number!!
</div>";
}   
  


 
if ($err10 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Street Address Can Not be Empty!!!
</div>";
}   
   

  
if ($err11 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
City/State Can Not be Empty!!!
</div>";
}   
  
 

 
if ($err12 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Post Code Can Not be Empty!!!
</div>";
}   
  
if ($err13 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Country Can Not be Empty!!!
</div>";
}   






if ($err14 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Username Can Not be Empty!!!
</div>";
}   
 
if ($err15 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Username Already Exist in our database... Please Use another Username!!
</div>";
}   
  

 
if ($err16 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Password and Confirm Password not match!!!
</div>";
}   
   

  
if ($err17 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Password must be minimum 6 Char!!!
</div>";
}   
  
 

 
if ($err18 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Referrer ID Can not be Empty !!!
</div>";
}   
  
 
if ($err19 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Referrer ID not Found in Our Database!!!
</div>";
}   
  




 
if ($err20 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Please Select Poition!!!
</div>";
}   
  
 
if ($err21 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
Position already taken!!
</div>";
}   
  





}







}



?>                                      
                                        
                                        
                                        
                                        
                                        
                                        
                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>First Name</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="firstname"  type="text" required="">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Last Name</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="lastname" type="text" required="">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Mobile</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="mobile" type="text" required="">
                    </div>
                    </div>
                                                            
                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Email</strong></label>
                    <div class="col-md-6">

                    <input class="form-control input-lg" name="email" type="text" required="">
         
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Username</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="username" type="text">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Password</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="password" type="text">
                    </div>
                    </div>

                            <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Confirm Password</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="passwordConfirm" type="text">
                    </div>
                    </div>
                   

                     
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-6">
                                                    <button type="submit" class="btn blue btn-block">CREATE</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>      
                        </div><!---ROW-->       
                    
                    
                    
                    
                    
                    
            
                    
                    
                    
                    
                    
                    
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
            


<?php
 include ('include/footer.php');
 ?>
<script type='text/javascript'>

jQuery(document).ready(function(){







$('#refname').on('input', function() {







$('#username').on('input', function() {

var username = $("#username").val();

        $.post( 
           "<?php echo $baseurl; ?>/jsapi-username.php",
                  { 
                     username : username
          },


                            function(data) {
                            $("#usernaameerr").html(data);
                            }
               );
});











$('#email').on('input', function() {

var email = $("#email").val();

        $.post( 
           "<?php echo $baseurl; ?>/jsapi-email.php",
                  { 
                     email : email
          },


                            function(data) {
                            $("#emailerr").html(data);
                            }
               );
});









  
});
</script>

</body>
</html>