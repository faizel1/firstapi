<body style=" background:lightgray">
<div style="text-align:center; margin-left:36%; margin-top:5%;">
  <div class="container">
         
  <div class="row" >
            <div class="col-md-5">
  <form action="#" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Update</legend>
    <div class="form-group">
    <?php foreach($dat as $postt):?>

      <input type="text" class="form-control" value="<?php echo $postt->auction_type; ?>"  name="auctiontype" placeholder="Auction Type">
      </div>

    <div class="form-group">
      <input type="text" class="form-control" value="<?php echo $postt->auction_detail; ?>"name="auctiondetail" placeholder="Auction Detail">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" value="<?php echo $postt->auction_address; ?>"name="auctionaddress" placeholder="Auction Address">
    </div>
    <div class="form-group">
      <input type="file" class="form-control" value="<?php echo $postt->picture; ?>"name="picture" placeholder="Image">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" value="<?php echo $postt->status; ?>"name="status" placeholder="Status">
    </div>
    <div class="form-group">
      <input type="date" class="form-control" value="<?php echo $postt->closing_date; ?>"name="closingdate" placeholder="Closing Date">
    </div>
   
   
  
    <?php endforeach;?>

    <button type="submit" name="update" value="Update" class="btn btn-info btn-block" >Update</button>
    <?php echo anchor("auction",' Cancel ',['class'=>'btn btn-danger btn-block']);?>

  </fieldset>
</form>  

</div></div></div></div>
<br><br><br><br><br><br><br><br>


