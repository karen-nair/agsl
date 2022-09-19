<?php 
$title = "Edit Profile";
include('header.php');
?>
<div class="card">
   <div class="card-body">
     <div class="row">
         <div class="col-12 py-1">
            
            <input class="trans-input" type="text" name="" placeholder="Username">
          </div>
      </div>

      <div class="row">
         <div class="col-12 py-1">
            
            <input class="trans-input" type="text" name="" placeholder="Name">
          </div>
      </div>

      <div class="row">
         <div class="col-12 py-1">
            <i style="color:rgba(194, 215, 232, 0.302);">Wallet Address</i>
        
            <input class="trans-input" type="text" name="" placeholder="Security Password" style="top: 5px;position: relative;">
          </div>
      </div>

      <div class="row">
         <div class="col-6 text-center tab-submit-green" style="margin: 0 auto;">
                <span class="unskewed" style="position: relative;top: -2px;">Update</span>
          </div>
      </div>
</div>
</div>


<?php include('footer.php');?>
