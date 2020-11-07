<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<body style=" background:darkgray">

  <div style="text-align:center; " class="container">
         
  <div class="row" >
<div class="col-md-12">
<legend>List of Auctions...<?php echo anchor("Auction/newauc",' Add  <span class="glyphicon glyphicon-plus"></span> ',['class'=>'btn btn-primary']);?>
 </legend>

<div class="table-responsive">              
<table  class="table table-condensed table-hover" class="table-responsive"  style="background:lightgray">

<thead style="background:lightgray">
<th></th>
<form action="" method="post">

    <th style="width:30px">
    
    <select name="auction_type">
<option value="" selected="selected"></option>
<option value="open" >Open</option>
<option value="close">Close</option>

</select>


</th>
<th></th>
<th></th>
    

    <th style="width:30px; ">
    <select name="status">
<option value="" selected="selected"></option>
<option value="Active" >Active</option>
<option value="Not Active" >Not Active</option>
</select>


</th>
    <th style="width:30px" >
<input name="closing_date" type="date" value="<?php echo date('y-m-d');?>"/> <br></th>
<th></th>

<th>    <button type="submit" name="search" value="save" class="btn btn-primary" >Filter</button></form>

</th>
</th>
<form action="" method="post">
<th>
<input  class="btn btn-info"name="showall" type="submit" value="Clear"/> <br>
</form> </th>


 


</thead>
<thead >
<th>#</th>
<th><?php echo anchor("auction/index/auction_type ", "Type"); ?></th>
<th><?php echo anchor("auction/index/auction_detail ", "Detail"); ?></th>
<th><?php echo anchor("auction/index/auction_address ", "Address"); ?></th>
<th><?php echo anchor("auction/index/status ", "Status"); ?></th>
<th><?php echo anchor("auction/index/closing_date ", "Closing Date"); ?></th>
<th><?php echo anchor("auction/index/auction_winner", "Winner"); ?></th>

</form>
<th style="width:3px;  color:#007bff">Edit</th>
<th style="width:3px;  color:#007bff">Delete</th>

</thead>
<tbody>

  <?php

  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->auction_type."</td>";
  echo "<td>".$row->auction_detail."</td>";
  echo "<td>".$row->auction_address."</td>";
  echo "<td>".$row->status."</td>";
  echo "<td>".$row->closing_date."</td>";
  echo "<td>".$row->auction_winner."</td>";

 
  echo "<td>".anchor("auction/updateauc/{$row->id}",'<span class="glyphicon glyphicon-pencil"></span> ',['class'=>'btn btn-info btn-xs'])." </td>";
  echo "<td>".anchor("auction/deleteauc/{$row->id}",'<span class="glyphicon glyphicon-trash"></span> ',['class'=>'btn btn-danger btn-xs'])." </td>";
 
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
