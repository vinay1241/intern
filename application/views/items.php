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
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form method="post" action="<?php echo base_url()."buyprop"?>">
            <input type="text" name="item1" value="2bhk" hidden>
               
                <img class="img-responsive img-thumbnail" src="http://localhost/startnew/assets/img/one.jpg" name="img1">
                <input type="submit" value="800" name="price">
</form>
</div>
<div class="col-sm-4">
<form method="post" action="<?php echo base_url()."buyprop"?>">
            
                 <input type="text" name="item1" value="1bhk" hidden>
                <img class="img-responsive img-thumbnail" src="<?php echo base_url()."assets/img/one.jpg";?>" name="img2">
                <input type="submit" value="900" name="price">
                </form>
                
</div>
</div>
</div>
</body>
</html>