<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-md-2"></div>
     <div class="col-md-8" style="margin-top:20px">
      <?php
       echo form_open('admin/login/index');
       echo validation_errors();
       if (isset($msg))
       echo '<p>'.$msg.'</p>';
      ?>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" />
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <?php 
    echo form_close(); 
    ?>
    </div>
   <div class="col-md-2"></div>
  </body>
</html>