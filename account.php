<?php 
$active = 'account';
include('header.php');
?>

<div class="row">
    <div class="col-12">

        <div class="col-xl-12 col-md-6 col-12 user-profile-card">
           
                <div class="text-center mx-auto pt-3">
                    <div class="avatar bg-rgba-primary p-50">
                        <img class="img-fluid" src="app-assets/images/home/account/parrot.png" alt="img placeholder" height="134" width="134">


                    </div>
                    <img class="img-fluid" style="cursor: pointer;" src="app-assets/images/home/account/info.png" height="24" width="24" id="confirm-text">
                </div>
                <div class="text-center">
                    <h4 style="color:#fff;">test9</h4>
                   
                    <div class="d-flex justify-content-around mb-1">
                        <div class="card-icons d-flex flex-column">
                            <div class="row">
                              <div class="col-6">
                                <img class="img-fluid icon-gp" src="app-assets/images/home/gp.png">
                              </div>
                              <div class="col-6" style="left: -30px;">
                                <span class="dollar-text" style="color:#e8c661;">7533.00</span>
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
                                <img class="img-fluid icon-gp" src="app-assets/images/home/gp.png">
                              </div>
                              <div class="col-6" style="left: -30px;">
                                <span class="dollar-text" style="color:#fff;">1285.00</span>
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
     <div class="col-12 account-wrapper">
        <div class="row">
          <div class="col-3 outer-line text-center">
            <a href="mydownline.php">
            <div class="row">
              <div class="col-12 acc-ico-wrapper">
                <img class="acc-ico" src="app-assets/images/home/account/people.png">
              </div>
            </div>

            <div class="row py-1">
              <div class="col-12">
                
                  <p class="inner-line">My Downline</p>
                
              </div>
            </div>
          </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="myplay.php">
              <div class="row">
                <div class="col-12 acc-ico-wrapper">
                  <img class="acc-ico" src="app-assets/images/home/account/dollar.png">
                </div>
              </div>

              <div class="row py-1">
                <div class="col-12">

                    <p class="inner-line">My Play</p>
                  
                </div>
              </div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="edit.php">
              <div class="row">
                <div class="col-12 acc-ico-wrapper">
                  <img class="acc-ico" src="app-assets/images/home/account/pencil.png">
                </div>
              </div>

              <div class="row py-1">
                <div class="col-12">

                    <p class="inner-line">Edit Profile</p>

                </div>
              </div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="security.php">
             <div class="row">
                <div class="col-12 acc-ico-wrapper">
                  <img class="acc-ico" src="app-assets/images/home/account/envelope.png">
                </div>
              </div>

              <div class="row py-1">
                <div class="col-12">
                    <p class="inner-line">Resend Verification</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-3 outer-line text-center">
            <a href="change.php">
              <div class="row">
                <div class="col-12 acc-ico-wrapper">
                  <img class="acc-ico" src="app-assets/images/home/account/padlock.png">
                </div>
              </div>

              <div class="row py-1">
                <div class="col-12">
                  
                    <p class="inner-line">Change Password</p>
                
                </div>
              </div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="myplay.php">
              <div class="row">
                <div class="col-12 acc-ico-wrapper">
                  <img class="acc-ico" src="app-assets/images/home/account/dollar.png">
                </div>
              </div>

              <div class="row py-1">
                <div class="col-12">

                    <p class="inner-line">My Play</p>

                </div>
              </div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="edit.php">
              <div class="row">
                <div class="col-12 acc-ico-wrapper">
                  <img class="acc-ico" src="app-assets/images/home/account/pencil.png">
                </div>
              </div>

              <div class="row py-1">
                <div class="col-12">
                    <p class="inner-line">Edit Profile</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-3 outer-line text-center">
            <a href="security.php">
              <div class="row">
                <div class="col-12 acc-ico-wrapper">
                  <img class="acc-ico" src="app-assets/images/home/account/envelope.png">
                </div>
              </div>

              <div class="row py-1">
                <div class="col-12">
                    <p class="inner-line">Resend Verification</p>
                </div>
              </div>
            </a>
          </div>

        </div>

     </div>
   </div>

<?php include('footer.php');?>
