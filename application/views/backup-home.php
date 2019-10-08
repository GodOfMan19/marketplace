
	<!-- Masthead -->
  <header class="masthead">

    <!-- Pulsa Group-->
    <div class="pulsa-grup">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pulsa-tab" data-toggle="tab" href="#pulsa" role="tab" aria-controls="pulsa" aria-selected="true">Pulsa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="paketdata-tab" data-toggle="tab" href="#paketdata" role="tab" aria-controls="paketdata" aria-selected="false">Paket Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="listrik-tab" data-toggle="tab" href="#listrik" role="tab" aria-controls="listrik" aria-selected="false">Listrik PLN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="emoney-tab" data-toggle="tab" href="#emoney" role="tab" aria-controls="emoney" aria-selected="false">E-Money</a>
        </li>
      </ul>
      


      <!-- Form Data -->
      <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="pulsa" role="tabpanel" aria-labelledby="pulsa-tab">
    
    <form id="pulsa">
      <input type="text" id="notel" class="input-number" placeholder="Nomor Telepon">
      <hr class="line-pulsa">
      <select class="nom-form">
        <option value="#">Nominal</option>
        <option value="10000">Rp. 10.000</option>
        <option value="20000">Rp. 20.000</option>
        <option value="100000">Rp. 100.000</option>
        <option value="150000">Rp. 150.000</option>
        <option value="200000">Rp. 200.000</option>
      </select>
      <hr class="line-nominal">
      
      <input type="text" id="rp1" class="input-rp" class="disable" placeholder="0,00">
      <h2 class="rp">Rp.</h2>
      <hr class="line-rp">
      <button type="button" class="bayar-form">BELI</button>
    </form>
  </div>

  <div class="tab-pane fade" id="paketdata" role="tabpanel" aria-labelledby="paketdata-tab">Lili </div>
  <div class="tab-pane fade" id="listrik" role="tabpanel" aria-labelledby="listrik-tab">Kurniawan</div>
  <div class="tab-pane fade" id="emoney" role="tabpanel" aria-labelledby="emoney-tab">Aja</div>
</div>

  </header>
		
     <!-- Slider banner -->
  <div class="banner">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url().'assets/images/banner/welcome.png'?>" class="d-block w-100" alt="first slide">
    </div>
      <div class="carousel-item">
        <img src="<?php echo base_url().'assets/images/banner/banner1.png'?>" class="d-block w-100" alt="second slide">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url().'assets/images/banner/banner2.png'?>" class="d-block w-100" alt="third slide">
      </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>  
  </div>
</div>

  <!--Promo Group-->
  <div class="promo-group">
   
    <!-- Photo Grid -->
    <div class="row"> 
      <!--Indicators-->
       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        </ol>

        <!--Next $ Prev-->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

      <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/1.png'?>" style="width:100%">
          </div>

      <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/2.png'?>" style="width:100%">
          </div>

       <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/3.png'?>" style="width:100%">
          </div>

       <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/4.png'?>" style="width:100%">
          </div>

       <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/5.png'?>" style="width:100%">
          </div>

       <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/6.png'?>" style="width:100%">
          </div>

      </div>

      <!-- photo grid 2 -->

        <div class="carousel-item">

          <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/6.png'?>" style="width:100%">
          </div>

          <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/5.png'?>" style="width:100%">
          </div>

          <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/4.png'?>" style="width:100%">
          </div>

          <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/3.png'?>" style="width:100%">
          </div>

          <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/2.png'?>" style="width:100%">
          </div>

          <div class="column">
        <img class="d-block w-100" src="<?php echo base_url().'assets/images/promo/1.png'?>" style="width:100%">
          </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

</div> <!-- ROW-->