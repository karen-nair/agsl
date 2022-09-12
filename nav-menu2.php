<div class="app-container"> 
    <div class="row">
        <div class="col-6 text-left" style="position: relative;top: 10px;">

            <a  href="javascript:void(0);" onclick="history.back()"><img width="20" src="app-assets/images/home/line.png">&nbsp;<span class="header-title"><?php echo (isset($title)? $title:'');?></span></a>
            
        </div>

        <div class="col-2">
            <?php
                if (isset($dropdown)) {
                    ?>
                        
                        <div class="dropdown">
                            <button type="button" class="btn btn dropdown-toggle dropdown-toggle-split hashies-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent"><i style="color: #c2d7e8;">TRX&nbsp;&nbsp;</i></button>
                            
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                            </div>
                        </div>
                    
                  
                    <?php
                }
                ?>
        </div>
         
         <div class="col-4 text-right">
             <ul class="nav navbar-nav float-right d-flex align-items-center">
                <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language d-lg-inline d-none"></span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="flag-icon flag-icon-us mr-50"></i>
                        </a>
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="flag-icon flag-icon-fr mr-50"></i>
                        </a>
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="flag-icon flag-icon-de mr-50"></i>
                        </a>
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="flag-icon flag-icon-pt mr-50"></i>
                        </a>
                    </div>
                </li>     
            </ul>
        </div>

    </div>
</div>
