<div class="row sticky-header-bar">
    <div class="col-12 header-nav nav-2">

    <div class="row">
        <div class="col-10">
            
            <div style="float: left;">
                    <a class="" onclick="history.back()">
                        <img class="line" src="app-assets/images/home/line.png">&nbsp;<span class="header-title"><?php echo (isset($title)? $title:'');?></span>
                    </a>
                </div>
                <div class="switch_box_wrapper">
                    <?php
                        if (isset($dropdown)) {
                            ?>
                          
                               
                                    <select id="switch_box">
                                        <option>TRX</option>
                                        <option>EOS</option>

                                    </select>
                                    
                              
                         
                          
                            <?php
                        }
                        ?>
               
            </div>
        </div>
        <div class="col-2">
            <ul class="nav justify-content-end">
            <li class="">
              <a class="dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu flag-dropdown" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> </a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> </a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> </a><a class="dropdown-item" href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> </a></div>
            </li>
          </ul>
        </div>
    </div>
        
    </div>
</div>