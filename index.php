<?php 
$active = 'home';
include('header.php');
?>

<div class="row">
    <div class="col-4">
      <div class="tab-success" style="width:100%">
        <span class="unskewed">Inspiration</span><br/><br/>
       <img src="app-assets/images/home/next.png" width="12" style="position: relative;top: -10px;">
     </div>
    </div>
    <div class="col-4">
      <div class="tab-info" style="width:100%">
        <span class="unskewed">Excellent</span><br/><br/>
       <img src="app-assets/images/home/next.png" width="12" style="position: relative;top: -10px;">
     </div>
    </div>

    <div class="col-4">
    
      <div class="tab-warning" style="width:100%">
        <span class="unskewed">FAQ</span><br/><br/>
       <img src="app-assets/images/home/next.png" width="12" style="position: relative;top: -10px;">
     </div>
    </div>

</div>

  <div class="row">
    <div class="col-12" style="position: absolute;
    top: 28%;
    left: -0.5%;z-index: 99;">
      <div id="outer-div">
        <div id="inner-div">
          

           <div class="row">
            
             <div class="col-2 text-right">
              <a href="game.php">
              <span class="eos">EOS</span> 
               </a>        
             </div>
          
             <div class="col-6">
              <a href="hashies.php">
                <img src="app-assets/images/home/play-btn.png" class="play3-btn">
              </a>
             </div>
            

             <div class="col-2 text-left">
              <a href="game.php">
               <span class="tron">TRON</span>
               </a>
             </div>
           </div>
         

       </div>
      </div>
    </div>
  </div>
<!--content-->
<div class="row">
    <div class="col-6 text-center">
     <img src="app-assets/images/home/green-game-zone.png" style="object-fit:contain;
    left: -8%;
    top: 0;
    width: 140%;
    height: auto;position: relative;">

    </div>
    
     
  

    <div class="col-6 text-center">
     <img src="app-assets/images/home/yellow-game-zone.png" style="object-fit:contain;position: relative;
    left: -30%;
    top: 0;
    width: 140%;
    height: auto;">
    </div>
</div>


<div class="row">
    <div class="col-12 last-wrapper" data-aos="fade-left" data-aos-delay="100">
      <img src="app-assets/images/home/strategic.png">
    </div>
</div>

<?php include('footer.php');?>
