<?php 
$title = "Deposit";
include('header.php');
?>
<div class="card form-wrapper">
   <div class="card-body">
   <div class="row">
        <div class="col-12 text-center">
              <p>Pay To</p>
           <img class="img-fluid qr" src="app-assets/images/home/qr.png">

        </div>
      </div>
   
    <div class="row  py-2">
        <div class="col-md-7 col-sm-12 text-center">

           <div class="wrapper"> 
                 <input class="trans-input" type="text" name="" value="94dd78149a2f3f5ca501f86a7788a36d">
              </div>

        </div>
         <div class="col-md-5 col-sm-12 text-center green-yellow-btn-wrapper">
              <div class="tab-submit-yellow btn-center-align hash-copy">
                  <span class="unskewed">Copy</span>
                 
              </div>
            </div>
     </div>

     <div class="row">
         <div class="col-12 py-1">

            <div class="wrapper"> 
               <input class="trans-input" type="text" name="" placeholder="USDT Amount">
            </div>

          </div>
      </div>


      <div class="row">
         <div class="col-12 py-1">

            <div class="wrapper"> 
               <input class="trans-input" type="text" name="" placeholder="Security Password">
            </div>


          </div>
      </div>

      <div class="row py-1">
         <div class="col-md-12 text-center green-yellow-btn-wrapper">
            <div class="tab-submit-green btn-center-align">
                <span class="unskewed">Submit</span>
               
            </div>
          </div>
      </div>


      <div class="row  py-4">
         <div class="col-12 text-center py-1 important">
            <p class="white-font">IMPORTANT</p>
            <p class="grey-font">Please note that withdrawals will be processed within 24 hours</p>
            <ul class="text-center important-notice">
               <li class="grey-font">-Please only deposit Trc20 USDT</li>
               <li class="grey-font">-Operation hour from 10am-10pm</li>
               <li class="grey-font">-Please note that transaction will be verified & completeed within an hour upon receiving proof of transfer</li>


            </ul>
          </div>
      </div>

</div>
</div>  


<?php include('footer.php');?>
