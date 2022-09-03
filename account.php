<?php 
$active = 'account';
include('header.php');
?>

<div class="row">
    <div class="col-12">

        <div class="col-xl-12 col-md-6 col-12 user-profile-card">
           
                <div class="text-center mx-auto pt-3">
                    <div class="avatar bg-rgba-primary p-50">
                        <img class="img-fluid" src="app-assets/images/home/account/parrot.PNG" alt="img placeholder" height="134" width="134">


                    </div>
                    <img class="img-fluid" style="cursor: pointer;" src="app-assets/images/home/account/info.PNG" height="24" width="24" id="confirm-text">
                </div>
                <div class="text-center">
                    <h4 style="color:#fff;">test9</h4>
                   
                    <div class="d-flex justify-content-around mb-1">
                        <div class="card-icons d-flex flex-column">
                            <div class="row">
                              <div class="col-6">
                                <img class="img-fluid" src="app-assets/images/home/gp.PNG" height="24" width="24">
                              </div>
                              <div class="col-6" style="left: -30px;">
                                <span style="color:#e8c661;">7533.00</span>
                              </div>
                            </div>

                             <div class="row">
                              <div class="col-12 text-center">
                                <p class="wallet-text">Wallet Balance</p>
                              </div>
                            </div>
                        </div>
                       
                        <div class="card-icons d-flex flex-column">
                           <div class="row">
                              <div class="col-6">
                                <img class="img-fluid" src="app-assets/images/home/gp.PNG" height="24" width="24">
                              </div>
                              <div class="col-6" style="left: -30px;">
                                <span style="color:#fff;">1285.00</span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 text-center">
                                <p class="wallet-text">Total Play</p>
                              </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
           
        </div>

    </div>
</div>


    <div class="row">
     <div class="col-12">
        <div class="row">
          <div class="col-3 outer-line text-center">
            <a href="mydownline.php">
              <img class="acc-ico" src="app-assets/images/home/account/people.PNG">
              <div class="inner-line">My Downline</div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="myplay.php">
              <img class="acc-ico" src="app-assets/images/home/account/dollar.PNG">
              <div class="inner-line text-center">My Play</div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="edit.php">
              <img class="acc-ico" src="app-assets/images/home/account/pencil.PNG">
              <div class="inner-line text-center">Edit Profile</div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="security.php">
              <img class="acc-ico" src="app-assets/images/home/account/envelope.PNG">
              <div class="inner-line text-center">Resend Verification</div>
            </a>
          </div>

        </div>

        <div class="row">
          <div class="col-3 outer-line text-center">
            <a href="change.php">
              <img class="acc-ico" src="app-assets/images/home/account/padlock.PNG">
              <div class="inner-line">Change Password</div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="myplay.php">
              <img class="acc-ico" src="app-assets/images/home/account/dollar.PNG">
              <div class="inner-line text-center">My Play</div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="edit.php">
              <img class="acc-ico" src="app-assets/images/home/account/pencil.PNG">
              <div class="inner-line text-center">Edit Profile</div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="security.php">
              <img class="acc-ico" src="app-assets/images/home/account/envelope.PNG">
              <div class="inner-line">Resend Verification</div>
            </a>
          </div>

        </div>
     </div>
   </div>

<?php include('footer.php');?>
