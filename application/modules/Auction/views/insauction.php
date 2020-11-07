<body style=" background:darkgray">
<div style="text-align:center; margin-left:36%; margin-top:5%;">
  <div class="container">
         
  <div class="row" >
            <div class="col-md-5">

            <?php// echo base_url('index.php/auction/newauc') ?>
  <form action="#" method="post" enctype="multipart/form-data">
  <fieldset  >
    <legend> New Auction</legend>
    <div class="form-group">
      <input type="text" class="form-control" name="auctiontype" placeholder="Auction Type">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="auctiondetail" placeholder="Auction Detail">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="auctionaddress" placeholder="Auction Address">
    </div>
    <div class="form-group">
      <input type="file" class="form-control" name="picture" placeholder="Image">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="status" placeholder="Status">
    </div>
    <div class="form-group">
      <input type="date" class="form-control" name="closingdate" placeholder="Closing Date">
    </div>
   
    <button type="submit" name="save" value="save" class="btn btn-primary btn-block" >Add Auction</button>
<?php echo anchor("auction",' Cancel ',['class'=>'btn btn-danger btn-block']);?>
  </fieldset>
</form>  

</div>  </div></div></div>
<br><br><br><br><br><br><br><br>


