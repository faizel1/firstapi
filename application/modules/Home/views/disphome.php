<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: auto;
  padding: 12px 20px;
  margin: 8px 2;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 4px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  width:20%;
}


.container {
  padding: 10px;
  width:auto;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #ddd;
  margin:auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 20%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: blue;
  cursor: pointer;
}

.btnsize{

    width:10px;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 30px) {
  span.psw {
     display: auto;
     float: none;
  }
  .cancelbtn {
     width: 10%;
  }
}
</style>
<body style=" background:darkgray">

  <div class="container">
         
<?php

$cnt=1;
foreach($data as $row):

$a=$row->id;
$b=$row->auction_detail;
$c=$row->auction_type;
$d=$row->auction_address;
$e=$row->picture;
$f=$row->closing_date;

       ?>
       
 
       <div>
       <div class="col-sm-12 col-md-12 col-xs-12" style="border: 1px solid #eee; 
    background:lightgray;margin:-10px 4px 20px 5px; padding-top:0px;padding-bottom:1px;height:90%; width:100%">
    
    <input type="submit" name="modal" onclick="document.getElementById('id01').style.display='block'" class="btn btn-success"
        style="float:right;width:auto;" value="Submit Bid">

        <form method="POST">
        
    <div>
        <div><h4>Auction <?php echo $a; ?></h4>
       
        <img alt="<?php echo $e." The Auction Is Expired";?>" src="<?php echo base_url("upload/images/$e");?> 
        " style="height: 51%; width: 100%;" />
        </div><br><br><br><br>
            <div >
            <div container>
                <p> <b style="font-style:oblique">Description of the Product :</b>  <?php echo $b;?></p>
                <p> <b style="font-style:oblique">The Auction type is :</b> <?php echo $c;?></p>
                <p> <b style="font-style:oblique">It is found in: </b>  <?php echo $d;?> city</p>
                <p> <b style="font-style:oblique">It's Status is: </b><?php echo $row->status;?></p>
                <p> <b style="font-style:oblique">The Closing Date is: </b><?php echo $f;?></p>
            
                                     
            
                <input type="hidden" value="<?php echo $a;?> " name="aucid">
                <input type="hidden" value="<?php echo $e;?> " name="pic">
                <input type="hidden" value="<?php echo $a;?> " name="aacid">
          

<button type="submit" name="prosubmit"  class="btn btn-info" style="float:right"> Bid Detail</button>

</div> </div> </div></div>
</form>

		
    <?php
  
endforeach;
    
   ?>


 <!-- modal begin here-->

 <div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" method="post">
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="<?php echo base_url("upload/images/{$e}")?>" alt="Auction Image" style="width:267px">
    </div>

    <div class="container">
      <label for="uname"><b>Amount</b></label>
      <input type="number" placeholder="Enter Your Bid" name="uname" style="width:100%" required>      
   
    </div>

    <div class="cancelbtn" style="background:gray">
      <button type="button" onclick="document.getElementById('id01').style.display='none'"  
      class="btn btn-danger"  style="width:49%">Cancel</button>
      <button type="submit" name="submit" class="btn btn-primary" style="width:49%">Submit Bid</button>

    </div>
  </form>
</div>

       <!-- modal ends here-->
 

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    
    if (event.target == modal) {

        modal.style.display = "none";

    }
    
}
</script>

