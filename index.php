<?php 
$active = 'home';
include('header.php');
?>
<ul class="nav justify-content-center home py-2">
   <li class="nav-item">
    <a class="nav-link8" href="#">
    <div class="tab-submit-green">
        
          <span class="unskewed">Inspiration</span><br/>
          <img src="app-assets/images/home/next.png" class="tagline">
      
    </div>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link8" href="#">
    <div class="tab-submit-blue">
        
          <span class="unskewed">Excellent</span><br/>
          <img src="app-assets/images/home/next.png"  class="tagline">
      
    </div>
    </a>
  </li>
     <li class="nav-item">
    <a class="nav-link8" href="#">
    <div class="tab-submit-yellow">
        
          <span class="unskewed">FAQ</span><br/>
          <img src="app-assets/images/home/next.png" class="tagline">
      
    </div>
    </a>
  </li>
</ul>


<div class="row">
  <div class="col-12 text-center">
       <img src="app-assets/images/home/game-menu.png" style="width:50%">
    
  </div>
</div>
<div class="card">
  <div class="card-body">

    <!--content-->
<div class="row home-play-card">
    <div class="col-6 text-center home-green-active-bg">
       <a href="game.php">
        <span class="eos">EOS</span>
       </a>
      
    </div>

     <div class="col-6 text-center home-yellow-active-bg">
        <a href="game.php">
           <span class="tron">TRON</span>
        </a>
        
    </div>
   
</div>

  <div class="row">
    <div class="col-6 play-wrapper">
      <div id="outer-div">
        <div id="inner-div">
          
              <a href="hashies.php">
                <img src="app-assets/images/home/play-btn.png" class="play3-btn">
                <h1 class="play3-btn-text">PLAY <br/>NOW</h1>
              </a>

       </div>
      </div>
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
