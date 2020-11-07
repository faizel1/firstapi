<body style=" background:lightgray">
<div style="text-align:center; margin-left:36%; margin-top:5%;">
  <div class="container">
         
  <div class="row" >
  <div class="col-md-5">

 
  <form action="" method="post">
  <fieldset>
    <legend>Update</legend>
    <div class="form-group">
    <?php foreach($dat as $postt):?>

      <input type="text" class="form-control" value="<?php echo $postt->auctionid; ?>"  name="auctionid" placeholder="Auction Id" >
      </div>

    <div class="form-group">
      <input type="text" class="form-control" value="<?php echo $postt->userid; ?>" name="userid" placeholder="User Id" >
    </div>
    <div class="form-group">
      <input type="text" class="form-control" value="<?php echo $postt->bidamount; ?>"name="bidamount" placeholder="Bid Amount">
    </div>
   
   
  
    <?php endforeach;?>

    <button type="submit" name="update" value="Update" class="btn btn-info btn-block" >Update</button>
    <?php echo anchor("bid",' Cancel ',['class'=>'btn btn-danger btn-block']);?>

  </fieldset>
</form>  

</div></div></div></div>

<br><br><br><br><br><br><br><br><br><br><br><br>

