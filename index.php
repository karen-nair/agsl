<?php 
$active = 'home';
include('header.php');
?>

<div class="row py-2">
    <div class="col-4">
      <div class="tab-success" style="width:100%">
        <span class="unskewed">Look out for2 !</span><br/><br/>
       <img src="app-assets/images/home/next.PNG" width="12" style="position: relative;top: -10px;">
     </div>
    </div>
    <div class="col-4">
      <div class="tab-info" style="width:100%">
        <span class="unskewed">Look out for !</span><br/><br/>
       <img src="app-assets/images/home/next.PNG" width="12" style="position: relative;top: -10px;">
     </div>
    </div>

    <div class="col-4">
    
      <div class="tab-warning" style="width:100%">
        <span class="unskewed">Look out for !</span><br/><br/>
       <img src="app-assets/images/home/next.PNG" width="12" style="position: relative;top: -10px;">
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
              <span class="eos">EOS</span>         
             </div>

             <div class="col-6">
              <img src="app-assets/images/home/play-btn.PNG" class="play3-btn">
             </div>
             <div class="col-2 text-left">
               <span class="tron">TRON</span>
             </div>
           </div>

       </div>
      </div>
    </div>
  </div>
<!--content-->
<div class="row py-2">
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


<div class="row py-2">
    <div class="col-12 last-wrapper" data-aos="fade-left" data-aos-delay="100">
      <img src="app-assets/images/home/strategic.PNG">
    </div>
</div>

<?php include('footer.php');?>
