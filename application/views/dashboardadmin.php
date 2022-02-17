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
    <div class="container-fluid" style="background:gray;">
            
            <nav class="navbar navbar-expand-sm">
    <div class="input-group">
        <div class="col-sm-4 offset-sm-8">
        <strong>last login:- <?php echo $flash['lastlogin'];?></strong>
      <a href="<?php echo base_url()."logout"?>" style="background:white;padding:10px;border-radius:5px;text-decoration:none;">Logout</a>
</div>
</div>    

</nav>
<br>

<div class="row">
            <div class="col-sm-8 offset-sm-2">
            <table class="table table-dark">
    <thead>

      <tr>
        <th>UserName</th>
        <th>Email</th>
        <th>Contact number</th>
        <th>Last Login</th>
        <th>IP Address</th>
        <th>Operating System</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($all as $al) {?>
      <tr>
        <td><?php echo $al['name'];?></td>
        <td><?php echo $al['email'];?></td>
        <td><?php echo $al['phone'];?></td>
        <td><?php echo $al['lastlogin'];?></td>
        <td><?php echo $al['ip'];?></td>
        <td><?php echo $al['os'];?></td>
      
    </tr>
    <?php }?>
</tbody>
  </table>
    

</div>

</div>
</div>

</body>
</html>