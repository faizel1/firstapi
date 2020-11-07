<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatiable" content="IE=edge">
<meta name="viewport" content="device-width, initial-scale=1">  
 <title> Auction</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></head>
<style>

body{
  background:pink;
  text-align:center
}
.principal label{float:left;
padding:3px;
}
</style>
</head>
<body style="background:pink">  

<?php echo form_open('Validation/register'); ?>
<div class="container">
<div class="row">
<div style="  display:inline-block; margin-top:8%;margin-left:35%; ">
<h4>Register</h4><hr>

 <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
 <div class="principal">
    <div class="form-group">
        <label >Name</label><br>
        <input type="text"  class="form-control" name="username" placeholder="Enter your name" class="input-xlarge"  value="<?php echo set_value('username'); ?>" required>  
        <?php echo form_error('username','<p class="help-block">','</p>'); ?>
    
    </div>
 
    <div class="form-group">
      <label >E-mail</label><br>
      <input type="email" class="form-control" name="email" placeholder="Enter your E-mail Address"   value="<?php echo set_value('email'); ?>" required>
      <?php echo form_error('email','<p class="help-block">','</p>'); ?>

    </div>
 
    <div >
      <label >Password</label><br>
      <input type="password"  class="form-control" name="password" placeholder="Enter Your Password"  value="<?php echo set_value('password'); ?>" required>
      <?php echo form_error('password','<p class="help-block">','</p>'); ?>

    </div>
 
    <div class="form-group">
      <label class="d">Password (Confirm)</label><br>
      <input type="password"  class="form-control"  name="passconf" placeholder="Confirm your password"  value="<?php echo set_value('passconf'); ?>" required>
      <?php echo form_error('passconf','<p class="help-block">','</p>'); ?>

    </div>
 
   
      <button type="submit" class="btn btn-success" name="registerbtn">Register</button>&nbsp;&nbsp; have an account? 
    &nbsp;<a href="<?php echo base_url(); ?>validation/login">Sign in</a>
      

</form></div></div></div></div></div></div>



</body>
 </html>
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>