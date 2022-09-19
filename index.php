<?php 
$active = 'home';
include('header.php');
?>

<div class="card">
  <div class="card-body">
    <div class="row py-2">
      <div class="col-4">
        <div class="tab-success">
          <span class="unskewed">Inspiration</span><br/><br/>
         <img src="app-assets/images/home/next.png" width="12" style="position: relative;top: -10px;">
       </div>
      </div>
      <div class="col-4">
        <div class="tab-info">
          <span class="unskewed">Excellent</span><br/><br/>
         <img src="app-assets/images/home/next.png" width="12" style="position: relative;top: -10px;">
       </div>
      </div>

      <div class="col-4">
      
        <div class="tab-warning">
          <span class="unskewed">FAQ</span><br/><br/>
         <img src="app-assets/images/home/next.png" width="12" style="position: relative;top: -10px;">
       </div>
      </div>

  </div>
  </div>
</div>


<div class="row">
  <div class="col-12 text-center">
       <img src="app-assets/images/home/game-menu.png" style="width:50%">
    
  </div>
</div>
<div class="card">
  <div class="card-body">
  <div class="row" style="position:relative;top: -30px;">
    <div class="col-12 play-wrapper">
      <div id="outer-div">
        <div id="inner-div">
          

           <div class="row">
            
             <div class="col-3 text-right">
              <a href="game.php">
              <span class="eos">EOS</span> 
               </a>        
             </div>
          
             <div class="col-6">
              <a href="hashies.php">
                <img src="app-assets/images/home/play-btn.png" class="play3-btn">
                <h1 class="play3-btn-text">PLAY <br/>NOW</h1>
              </a>
             </div>
            

             <div class="col-3 text-left">
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
       <a href="game.php">
     <img src="app-assets/images/home/green-game-zone.png" style="object-fit:contain;
      left: -8%;
      top: -50px;
      width: 140%;
      height: auto;position: relative;">
    </a>
    </div>

    <div class="col-6 text-center">
       <a href="game.php">
     <img src="app-assets/images/home/yellow-game-zone.png" style="object-fit:contain;position: relative;
      left: -30%;
      top: -40px;
      width: 140%;
      height: auto;">
    </a>
    </div>
</div>

</div>
</div>


  <div class="row">
      <div class="col-12 last-wrapper" data-aos="fade-left" data-aos-delay="100">
        <img src="app-assets/images/home/strategic.png">
      </div>
  </div>

<?php include('footer.php');?>
