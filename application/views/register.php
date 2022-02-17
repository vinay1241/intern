<?php
echo @$one;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid" style="background:gray;">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
               <form method="post" action="<?php echo base_url()."reg"?>" style="margin:180px 0 ">
                <h2>Regitration Form</h2>
                <input type="text" name="name" required class="form-control mt-2" placeholder="username" autocomplete="off">
                <input type="text" name="phone" id="phone"   required class="form-control mt-2" placeholder="phone" autocomplete="off" minlength="10" maxlength="10">
                <span id="phone_err"></span>
                <input type="email" name="email" id="email" required class="form-control mt-2" placeholder="email" autocomplete="off">
                <div>
                <span id="email_err"></span>
</div>
<input type="password" name="password" id="password" required class="form-control mt-2" placeholder="password" autocomplete="off">
<div>
                <span id="pwd_err"></span>
</div>      
<div>
                <input type="submit" class="form-control mt-2 mb-5 bg-primary" id="isub">
</div>
            </form>
</div>
<div class="col-sm-4">
<a href="<?php echo base_url()."index"?>" style="background:white;padding:10px;border-radius:5px;text-decoration:none;">back</a>
             
</div>
</div>
</div>
<script>
$(document).ready(function(){

var chi=true;
var chi1=true;

  
$('#phone').keyup(function(){
  var first=$('#phone').val();
  if(isNaN(first)){
    $('#phone_err').html("No. must be numeric");
    $('#phone_err').css("color","red");
     }else if(first.length<10){
      $('#phone_err').html("no. must be 10 digit");
      $('#phone_err').css("color","white");
      chi=false;
      return false;
     }
     else{
      $('#phone_err').html("");
    
     }
});


$('#email').keyup(function(){
  var first=$('#email').val();
  var trt=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if(!trt.test(first)){
      $('#email_err').html("email. format wrong ");
      $('#email_err').css("color","white");
      chi1=false;
      return false;
     }
     else{
      $('#email_err').html("");
    
     }
});


    $('#password').keyup(function(){
  var first=$('#password').val();
  var trt=/^[a-zA-Z0-9]+$/;
   if(!trt.test(first)){
      $('#pwd_err').html("only alpha numeric allowed");
      $('#pwd_err').css("color","white");
      chi2=false;
      return false;
     }
     else{
      $('#pwd_err').html("");
   
     
     }
});
$('#isub').click(function(){
    chi=true;
    chi1=true;
    chi2=true;
    var first=$('#email').val();
  var trt=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if(!trt.test(first)){
      $('#email_err').html("email. format wrong ");
      $('#email_err').css("color","white");
      chi1=false;
    return false;
     }
     else{
      $('#email_err').html("");
    
     }
     var first=$('#phone').val();
  if(isNaN(first)){
    $('#phone_err').html("No. must be numeric");
    $('#phone_err').css("color","red");
    chi=false;
      return false;
     }else if(first.length<10){
      $('#phone_err').html("no. must be 10 digit");
      $('#phone_err').css("color","white");
      chi=false;
      return false;
     }
     else{
      $('#phone_err').html("");
    
     }
     var first=$('#password').val();
  var trt=/^[a-zA-Z0-9]+$/;
   if(!trt.test(first)){
      $('#pwd_err').html("only alpha numeric allowed");
      $('#pwd_err').css("color","white");
      chi2=false;
      return false;
     }
     else{
      $('#pwd_err').html("");
   
     
     }
    });
});
  </script>
</body>
</html>