<?php 
$title = "Edit Profile";
include('header.php');
?>
<div class="card">
   <div class="card-body">
     <div class="row">
         <div class="col-12 py-1">

            <div class="wrapper"> 
               <input class="trans-input" type="text" name="" placeholder="Username">
            </div>
          </div>
      </div>

      <div class="row">
         <div class="col-12 py-1">
            
            <div class="wrapper"> 
               <input class="trans-input" type="text" name="" placeholder="Name">
            </div>
          </div>
      </div>

      <div class="row  py-2">
         <div class="col-12">
            <i style="color:rgba(194, 215, 232, 0.302);position: relative;bottom: 10px;">Wallet Address</i>
      
            <div class="wrapper"> 
               <input class="trans-input" type="text" name="" placeholder="Security Password">
            </div>
          </div>
      </div>

      

       <div class="row py-1">
         <div class="col-md-12 text-center green-yellow-btn-wrapper">
            <div class="tab-submit-green btn-center-align">
                <span class="unskewed">Update</span>
               
            </div>
          </div>
      </div>

</div>
</div>

<?php include('footer.php');?>
