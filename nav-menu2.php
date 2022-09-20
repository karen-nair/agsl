
     <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar navbar-with-menu fixed-top nav-2">
        <div class="app-container">

            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                      
                            
                      <div class="row">
                        <div class="col-11 text-left">
                           <ul class="nav">
                              <li class="">
                                <a class="" onclick="history.back()">
                                    <img class="line" src="app-assets/images/home/line.png">&nbsp;<span class="header-title"><?php echo (isset($title)? $title:'');?></span>
                                </a>
                              </li>
                              <?php
                                if (isset($dropdown)) {
                                    ?>
                                        <li class="">
                                            <a class="">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn dropdown-toggle dropdown-toggle-split hashies-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent"><i style="color: #c2d7e8;">TRX&nbsp;&nbsp;</i></button>
                                            
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                            </div>
                                        </div>
                                    </a></li>
                                  
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        
                        
                        <div class="col-1">
                          <ul class="nav justify-content-end">
                            <li class="">
                              <a class="dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> </a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> </a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> </a><a class="dropdown-item" href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> </a></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->