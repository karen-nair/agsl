  </div>
        </div>
    </div>
    <!-- END: Content-->
</div>

   
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <div class="content_wrapper">
    <footer class="footer footer-static footer-light">
        <div class="row">
            <div class="col-12 footer-inner">
          
        <div class="row">
         <div class="col-3 text-center">
            <a href="index.php">
                <img src="app-assets/images/home/<?php echo (isset($active)&& $active == 'home'? 'home-active':'home');?>.PNG" class="<?php echo (isset($active)&& $active == 'home'? 'active':'');?>">
                <p class="<?php echo (isset($active)&& $active == 'home'? 'white-font':'grey-font');?>">Home</p>
            </a>
          </div>
          <div class="col-3 text-center">
             <a href="mynews.php">
            <img src="app-assets/images/home/<?php echo (isset($active)&& $active == 'news'? 'news-active':'news');?>.PNG"  class="<?php echo (isset($active)&& $active == 'news'? 'active':'');?>">

            <p class="<?php echo (isset($active)&& $active == 'news'? 'white-font':'grey-font');?>">News</p>
            </a>
          </div>
          <div class="col-3 text-center">
            <a href="assets.php">
            <img src="app-assets/images/home/<?php echo (isset($active)&& $active == 'asset'? 'asset-2':'asset');?>.PNG" class="<?php echo (isset($active)&& $active == 'asset'? 'active':'');?>">

            <p class="<?php echo (isset($active)&& $active == 'asset'? 'white-font':'grey-font');?>">Assets</p>
            </a>
          </div>
          <div class="col-3 text-center">
            <a href="account.php">
                
            <img src="app-assets/images/home/<?php echo (isset($active)&& $active == 'account'? 'account-active':'account');?>.PNG" class="<?php echo (isset($active)&& $active == 'account'? 'active':'');?>">

            <p class="<?php echo (isset($active)&& $active == 'account'? 'white-font':'grey-font');?>">Account</p>
            </a>
          </div>
      </div>
        </div>
        </div>
    </footer>
</div>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/dragula.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/horizontal-menu.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>