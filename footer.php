            </div>
            <div class="row">
                <div class="col-12 footer  py-2" >
                    
                    <div class="app-container footer-inner">
                        <div class="row">
                            <div class="col-3 text-center" >
                                <a href="index.php">
                                    <img src="app-assets/images/home/footer/<?php echo (isset($active)&& $active == 'home'? 'home-active':'home');?>.png" class="<?php echo (isset($active)&& $active == 'home'? 'active':'');?>">
                                    <p class="<?php echo (isset($active)&& $active == 'home'? 'white-font':'grey-font');?>">Home</p>
                                </a>
                            </div>
                             <div class="col-3 text-center" >
                               <a href="news.php">
                                <img src="app-assets/images/home/footer/<?php echo (isset($active)&& $active == 'news'? 'news-active':'news');?>.png"  class="<?php echo (isset($active)&& $active == 'news'? 'active':'');?>">

                                <p class="<?php echo (isset($active)&& $active == 'news'? 'white-font':'grey-font');?>">News</p>
                                </a>
                            </div>
                            <div class="col-3 text-center" >
                                <a href="assets.php">
                                <img src="app-assets/images/home/footer/<?php echo (isset($active)&& $active == 'asset'? 'asset-2':'asset');?>.png" class="<?php echo (isset($active)&& $active == 'asset'? 'active':'');?>">

                                <p class="<?php echo (isset($active)&& $active == 'asset'? 'white-font':'grey-font');?>">Assets</p>
                                </a>
                            </div>

                            <div class="col-3 text-center" >
                                <a href="account.php">
                                <img src="app-assets/images/home/footer/<?php echo (isset($active)&& $active == 'account'? 'account-active':'account');?>.png" class="<?php echo (isset($active)&& $active == 'account'? 'active':'');?>">

                                <p class="<?php echo (isset($active)&& $active == 'account'? 'white-font':'grey-font');?>">Account</p>
                                </a>
                            </div>

                        </div>
                    </div>
                
                </div>

            </div>

            </div>
       </div>
   </div>

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

    <script src="app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="app-assets/vendors/js/extensions/polyfill.min.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->

    <script src="app-assets/js/scripts/extensions/sweet-alerts.js"></script>


    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>

    <script src="app-assets/js/scripts/datatables/datatable.js"></script>


</body>
<!-- END: Body-->

</html>