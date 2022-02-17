<?php
echo @$one;
?>
<?php
echo @$two;
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
                <form method="post" action="<?php echo base_url()."loginuser"?>" style="margin:240px 0 ">
                <h2>Login Form</h2>
                <input type="email" name="email" id="email" required class="form-control mt-2" placeholder="email" autocomplete="off">
                <div>
                <span id="email_err"></span>
</div>
<input type="password" name="password" id="password" required class="form-control mt-2" placeholder="password" autocomplete="off">
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

$('#email').keyup(function(){
  email_check();
});
function email_check(){


  var first=$('#email').val();
  var trt=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if(!trt.test(first)){
      $('#email_err').html("email. format wrong ");
      $('#email_err').css("color","white");
      chi=false;
    return false;
     }
     else{
      $('#email_err').html("");
    
     }
    }
    $('#isub').click(function(){
    chi=true;
    var first=$('#email').val();
  var trt=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if(!trt.test(first)){
      $('#email_err').html("email. format wrong ");
      $('#email_err').css("color","white");
      chi=false;
    return false;
     }
     else{
      $('#email_err').html("");
    
     }

    });

});
  </script>
</body>
</html>