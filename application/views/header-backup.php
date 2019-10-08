<nav class="navbar fixed-top navbar-expand-sm navbar-custom">
  <div class="row">

    <a href="<?php echo base_url().''?>"><img src="<?php echo base_url().'assets/images/logo/logo22.png'?>" width="130" height="75" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom">
        <i class="fa fa-bars fa-lg py-1 text-white"></i>
    </button>

    <div class="navbar-collapse collapse" id="navbarCustom">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i> Kategori
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            
        </ul>
    </div>


      <!-- Search -->
      <form method="post">
        <input type="text" id="fname" class="form-search" name="firstname" placeholder="Search">
        <button class="button-search" type="submit">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>
        <!-- Start Here
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar fixed-top navbar-expand-sm navbar-custom">
        <div class="container">-->
           Collect the nav links, forms, and other content for toggling 
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav navbar-nav mr-auto">
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                 aria-expanded="false">All Categories</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="">Electronic</a></li>
                  <li class="nav-item"><a class="nav-link" href="">Phone&Tablet</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>



    <!--Sign In & Sign Up -->
    <div class="row row-default">
      
       
        
      
      
      <div class="col-md-5 col-xs-6">
          <a href="<?php echo base_url().'welcome/login'?>"><button class="button-login">LOGIN</button></a>
      </div>
      <div class="col-md-5 col-xs-6">
          <a href="<?php echo base_url().'welcome/daftar'?>"><button class="button-daftar">DAFTAR</button></a>
      </div>
      <div class="">
        <a href="<?php echo base_url().'#'?>"><img src="<?php echo base_url().'assets/images/icon/cart.png'?>" class="cart" alt="cart"></a>
        <a href="<?php echo base_url().'#'?>"><img src="<?php echo base_url().'assets/images/icon/account.png'?>" class="account" alt="account"></a>
        <a href="<?php echo base_url().'#'?>"><img src="<?php echo base_url().'assets/images/icon/notification.png'?>" class="notification" alt="notification"> </a>

      </div>
    </div>
  </div>
</nav>