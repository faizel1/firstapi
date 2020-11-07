<body style=" background:darkgray">

<div style="text-align:center; " class="container">
       
<div class="row" >
<div class="col-md-12">
    <legend>List of Bidders...<?php echo anchor("bid/newbid
",' Add  <span class="glyphicon glyphicon-plus"></span> ',['class'=>'btn btn-primary']);?>
 </legend>
         
 <table  class="table table-condensed table-hover" class="table-responsive"  style="background:lightgray">


<thead >

   <th></th>
   <form action="" method="post">

    <th><input name="auctionid" type="number" placeholder="Auction Id"/></th>
    
    <th><input name="userid" type="number" placeholder="User Id"/></th>
    
   <th></th>
   <th ><input class="btn btn-primary" name="search" type="submit" value="Filter"/> </th>
    
    <th ><input class="btn btn-info" name="showall" type="submit" value="Clear"/> </th>
</form>
</thead><thead style="background:lightgray">
<th>#</th>
<th  ><?php  echo anchor("bid/index/auctionid ", "Auciton Id"); ?></th>
<th><?php  echo anchor("bid/index/userid ", "User Id"); ?></th>
<th><?php  echo anchor("bid/index/bidamount ", "Bid Amount"); ?></th>

<th style="color:#007bff">Edit</th>
<th style="color:#007bff">Delete</th>

</thead>
<tbody>

  <?php
  
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->bidid."</td>";
  echo "<td>".$row->auctionid."</td>";
  echo "<td>".$row->userid."</td>";
  echo "<td>".$row->bidamount."</td>";
  


  echo "<td>".anchor("bid/updatebid/{$row->bidid}",'<span class="glyphicon glyphicon-pencil"></span> ',['class'=>'btn btn-info btn-xs'])." </td>";
  echo "<td>".anchor("bid/deletebid/{$row->bidid}",'<span class="glyphicon glyphicon-trash"></span>',['class'=>'btn btn-danger btn-xs'])." </td>";
 
  echo "</tr>";
  }
   ?>
   </tbody>
</table>
<div><?php echo $this->pagination->create_links();?></div>

</div>
</div>
</div>
</div>

<?php if(isset($_SESSION['alert'])):
?>
<script type="text/javascript">
     alert("<?php  echo $_SESSION['alert'];?>");
</script>

<?php unset($_SESSION['alert']);
 endif;?>
 <br><br><br><br><br><br><br><br><br><br><br><br>
