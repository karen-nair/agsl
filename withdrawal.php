<?php 
$title = "Withdrawal";
include('header.php');
?>
<div class="card">
   <div class="card-body">
      

     <div class="row">
         <div class="col-12 py-1">
            
            <input class="trans-input" type="text" name="" placeholder="USDT Amount">

          </div>
      </div>

      <div class="row">
         <div class="col-12 py-1">
            
            <input class="trans-input" type="text" name="" placeholder="USDT Wallet Address (TRC-20)">

          </div>
      </div>

      <div class="row">
         <div class="col-12 py-1">

            <input class="trans-input" type="text" name="" placeholder="Security Password">

          </div>
      </div>

      <div class="row">
         <div class="col-6 text-center tab-submit-green" style="margin: 0 auto;">
                <span class="unskewed" style="position: relative;top: -2px;">Submit</span>
          </div>
      </div>

      <div class="row  py-4">
         <div class="col-12 text-center py-1 important">
            <p class="white-font">IMPORTANT</p>
            <p class="grey-font">Please note that withdrawals will be processed within 24 hours</p>

          </div>
      </div>

      

  
   </div>
</div>

<?php include('footer.php');?>
