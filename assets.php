<?php 
$active = 'asset';
include('header.php');
?>
<div class="row py-2 asset">
    <div class="col-12">
        <div class="col-xl-12 col-md-6 col-12 user-profile-card">
           
               
                <div class="text-center">
                    <p class="asset-info"><i>GP -Game Point</i></p>

                    <h1 style="color:#fff;"><img class="img-fluid" src="app-assets/images/home/gp.png" height="24" width="24">7533.00&nbsp;<img class="img-fluid" src="app-assets/images/home/eye.png" height="24" width="24"></h1>
                   
                    <!-- <p class="px-1">Jelly beans halvah cake chocolate gummies.</p> -->
                    <div class="d-flex justify-content-around mb-1">
                        <div class="card-icons d-flex flex-column">
                            <div class="row">
                                 <div class="col-12 text-center tab-submit-green">
                                    
                                    <a href="deposit.php"><span class="unskewed" style="top:-2px;color: #fff;">Deposit</span></a>
                                 </div>


                            </div>
                            
                        </div>
                       
                        <div class="card-icons d-flex flex-column">
                           <div class="row">
                

                                  <div class="col-12 text-center tab-submit-yellow">
                                    
                                    <a href="withdrawal.php"><span class="unskewed" style="top:-2px;color: #fff;">Withdrawal</span></a>
                                 </div>

                            </div>
                           
                        </div>
                    </div>
                   
                </div>
           
        </div>


    </div>

</div>

 <section id="basic-tabs-components">
                           
    <div class="btn-group asset">
        <div class="dropdown nav nav-tabs">


            <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i>Deposit List</i>
                                            </button>
                                            
            <div class="dropdown-menu nav-item" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item nav-item" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true"><i>Deposit List</i></a>
                <a class="dropdown-item nav-item" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false"><i>Withdrawal List</i></a>
            </div>
        </div>
    </div>

   
    <div class="tab-content asset">
        <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
             <div class="row">
                <div class="col-12 asset-collapse">
                <div class="collapsible">
                <div class="collapse-header">
                <div id="headingCollapse1" class="card-header" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    <div class="row">
                        <div class="col-10">
                            <span class="asset-money">1000.00</span>
                        </div>
                        <div class="col-2 text-right">
                            <img class="img-fluid" src="app-assets/images/home/eye.png" height="24" width="24">
                        </div>
                    </div>
                </div>
                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-3">
                            <span class="asset-status">Rejected</span>
                          </div>
                           <div class="col-9 text-right">
         
                            <span class="time">17-08-2022 7:54pm</span>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--second-->
                <div class="collapse-header">
                <div id="headingCollapse2" class="card-header" data-toggle="collapse" role="button" data-target="#collapse2" aria-expanded="false" aria-controls="collapse1">
                    <div class="row">
                        <div class="col-10">
                            <span class="asset-money">1000.00</span>
                        </div>
                        <div class="col-2 text-right">
                            <img class="img-fluid" src="app-assets/images/home/eye.png" height="24" width="24">
                        </div>
                    </div>
                </div>
                <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="collapse">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-3">
                            <span class="asset-status">Rejected</span>
                          </div>
                           <div class="col-9 text-right">
                            <span class="time">17-08-2022 7:54pm</span>

                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--third-->
                <div class="collapse-header">
                <div id="headingCollapse3" class="card-header" data-toggle="collapse" role="button" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    <div class="row">
                        <div class="col-10">
                            <span class="asset-money">1000.00</span>
                        </div>
                        <div class="col-2 text-right">
                            <img class="img-fluid" src="app-assets/images/home/eye.png" height="24" width="24">
                        </div>
                    </div>
                </div>
                <div id="collapse3" role="tabpanel" aria-labelledby="headingCollapse3" class="collapse">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-3">
                            <span class="asset-status">Rejected</span>
                          </div>
                           <div class="col-9 text-right">
                             <span class="time">17-08-2022 7:54pm</span>

                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="collapse-header">
                <div id="headingCollapse4" class="card-header" data-toggle="collapse" role="button" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    <div class="row">
                        <div class="col-10">
                            <span class="asset-money">1000.00</span>
                        </div>
                        <div class="col-2 text-right">
                            <img class="img-fluid" src="app-assets/images/home/eye.png" height="24" width="24">
                        </div>
                    </div>
                </div>
                <div id="collapse4" role="tabpanel" aria-labelledby="headingCollapse4" class="collapse">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-3">
                            <span class="asset-status">Rejected</span>
                          </div>
                           <div class="col-9 text-right">
                             <span class="time">17-08-2022 7:54pm</span>

                          </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
              </div>

            </div>
        </div>
        <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
            <p>
                Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                liquorice icing cupcake.
            </p>
        </div>
                
        
   
    </div>
</section>


    



<?php include('footer.php');?>
