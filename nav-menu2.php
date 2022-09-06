<div class="app-container"> 
    <div class="row">
        <div class="col-8 text-left" style="border:1px solid yellow;">

            <a  href="javascript:void(0);" onclick="history.back()"><img width="20" src="app-assets/images/home/line.PNG">&nbsp;<span class="header-title"><?php echo (isset($title)? $title:'');?></span></a>
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
         
         <div class="col-4 text-right" style="border:1px solid yellow;">
            one
        </div>

    </div>
</div>
