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
<body style="background:gray;">
    <div class="container-fluid" style="background:gray;height:100%">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">

            <nav class="navbar navbar-expand-sm">
    <div class="input-group">
        <div class="col-sm-4">
        <strong>total users:-<?php echo $totalrow;?>
</div>
<div class="col-sm-4">
            
        last login:- <?php echo $lastlogin;?></strong>
</div>
        <div class="col-sm-4">
        
        <a href="<?php echo base_url()."logout"?>" style="background:white;padding:10px;border-radius:5px;text-decoration:none;">Logout</a>
</div>
</div>    

</nav>
       
    

</div>

</div>
</div>

</body>
</html>