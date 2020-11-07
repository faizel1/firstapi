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



<body style=" background:pink;text-align:center">  




<?php echo form_open('Validation'); ?>

<div >
<div class="container"  >
<div class="row">
<div style="display:inline-block; margin-top:10%;margin-left:30%;">
  <h4>Log In</h4><hr>

  <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>



    <div class="form-group " >
      <label style="float:left">Email:</label>
      <input type="email" class="form-control" placeholder="Enter your email address" name="email"  value="<?php echo set_value('email'); ?>"required>
      <?php echo form_error('email','<p class="help-block">','</p>'); ?>

    </div>
    
    <div class="form-group">
      <label style="float:left">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password"  value="<?php echo set_value('password'); ?>" required>
      <?php echo form_error('password','<p class="help-block">','</p>'); ?>

    </div>

       
<button type="submit" class="btn btn-primary" name="loginbtn">Sign In</button>&nbsp;&nbsp;you don't have an account? 
    &nbsp;<a href="<?php echo base_url(); ?>validation/register">Register</a>
    </div>
                 </form></div></div></div></div></div></div></div>

<!-- registraiton begin here-->


</body>
 </html>
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>