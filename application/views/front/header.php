
<html>
<head id="_ctl0__ctl0_Head1">
<title>
  Markaz Marketplace
</title>


    <style type="text/css">
        @font-face {
          font-family: 'Helvetica Neue Bold';
          src: url('<?php echo base_url('assets/font/HELVETICANEUE-BOLD.OTF') ?>');
        }
        @font-face {
          font-family: 'Helvetica Neue';
          src: url('<?php echo base_url('assets/font/HELVETICANEUE.TTF') ?>');
        }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!--bootstrap slider-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/l-pulsa.css'?>">


    <link rel="shortcut icon" href="/favicon.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/l/'); ?>asset-l.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/m/'); ?>asset-m.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/m/'); ?>main.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/m/'); ?>mobile.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/m/'); ?>additional.css" />



    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/login.css'?>">


    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/owl-carousel/css/banner1.css'?>">

    <script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>jquery-3.1.1.min.js"></script>

    <script src="<?php echo base_url().'/assets/owl-carousel/js/owl.carousel.js'?>"></script>

</head>
<body class="homepage">
    <div class="dim"></div>

    <div class="display-mobile">
        <nav class="uk-navbar uk-card uk-card-body" uk-sticky="bottom: #offset" data-uk-sticky style="height: 143px;margin: 0px;">
            <div class="header-mobile">
                <div class="header-mobile-left">
                    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                </div>

                <div class="header-mobile-center">
                    <div id="search-wrap" class="search">
                        <div class="form-horizontal">
                            <form method="post" enctype="multipart/form-data">
                            <div class="ui-widget input-group">
                                
                                    <input name="_ctl0:_ctl0:txtSearch" type="text" id="m-txtSearch-mobile" class="form-control" placeholder="Search" />
                                    <span class="input-group-btn">
                                    <button  id="m-btnSearch-mobile" class="btn default" type="submit"><i class="fa fa-search"></i></button>
                                    <button id="m-btnSearch-mobile" class="btn default" type="button"
                                    onclick="beranda();">
                                        <i class="fa fa-home"></i>
                                    </button>
                                    <button id="m-btnSearch-mobile" class="btn default" type="button"
                                    onclick="cart();">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>

                                    <button id="m-btnSearch-mobile" class="btn default" type="button"
                                    onclick="pengguna();">
                                        <i class="fa fa-user-circle"></i>
                                    </button>
                                    </span>
                                
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="header-mobile-right hidden">
                    <a href="/shoppingcart.aspx"><img src="/images/icon/new/icon-shopping-cart.png" class="img-responsive img-shop-cart" /></a>
                </div>
            </div>
        </nav>

        <!-- Content Of Menu Mobile -->
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li><img src='<?php echo base_url().'assets/images/mobile-menu/1.jpg'?>' 
                        class='img-responsive m-img-responsive'></li>
                    <li class="m-uk-parent">
                        <a href="" class="m-mobile-menu m-hover-mobile-menu">Registrasi</a>
                    </li>
                    <li class="m-uk-parent">
                        <a href="<?php echo base_url('login') ?>" class="m-mobile-menu m-hover-mobile-menu">Login</a>
                    </li>
                    <li class='uk-parent m-uk-parent'id='1'>
                        <a href='' class="m-mobile-menu m-hover-mobile-menu">E-Voucher & Tiket</a><i class='visible-xs nav-sub-toggle fa fa-chevron-right'></i>
                        <ul class='uk-nav-sub m-uk-nav-sub'>
                            <li>
                                <a href=''>
                                    <span>
                                        &nbsp; E-Voucher & Tiket
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <ul class='uk-nav-sub m-uk-nav-sub'>
                            <li>
                                <a href='' class="m-hover-mobile-menu"><span>&nbsp; Paket Data</span></a>
                            </li>
                        </ul>
                        <ul class='uk-nav-sub m-uk-nav-sub'>
                            <li>
                                <a href='' class="m-hover-mobile-menu"><span>&nbsp; PLN / Listrik</span></a>
                            </li>
                        </ul>
                        <ul class='uk-nav-sub m-uk-nav-sub'>
                            <li>
                                <a href='' class="m-hover-mobile-menu"><span>&nbsp; E-Money</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class='uk-parent m-uk-parent'id='2'>

                        <a href='' class="m-mobile-menu m-hover-mobile-menu">Perawatan & Kecantikan</a>

                        <i class='visible-xs nav-sub-toggle fa fa-chevron-right'></i>

                        <ul class='uk-nav-sub m-uk-nav-sub'>
                            <li>
                                <a href='' class="m-hover-mobile-menu">
                                    <span>
                                        &nbsp; Perawatan & Kecantikan
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>






            <div class="hidden-mobile">
                <nav class="navbar-default m-navbar-default navbar-fixed-top" role="navigation">
                    <div class="header-nav m-header-nav">
                        <div class="col-lg-2 col-md-2 col-sm-3">
                            <div class="logo-head">
                                <a href="<?php echo base_url() ?>">
                                <img src="<?php echo base_url() ?>assets/images/logo/logo22.png" class="main-logo img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-5 col-xs-12">
                            <div class="search-menu">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-2 hidden-xs">
                                        <div class="menu m-menu">
                                            <div class="dropdown m-dropdown" id="drop">
                                                <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown">
                                                    <div class="cat-bars m-cat-bars">
                                                        <span id="text" style="color: #fff;"> <i class="fa fa-bars"></i> Kategori</span>
                                                    </div>
                                                </a>
                                                <ul class="all-category btn-bar-menu dropdown-menu m-dropdown-menu">
                                                    <li class='uk-parent'id='1'>
                                                        <a href='#'>E-Voucher & Tiket <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>E-Voucher & Tiket</span></a>
                                                            </li>
                                                            <li>
                                                                <a href=''><span>Pulsa</span></a>
                                                            </li>
                                                            <li>
                                                                <a href=''><span>Paket Data</span></a>
                                                            </li>
                                                            <li>
                                                                <a href=''><span>PLN / Listrik</span></a>
                                                            </li>
                                                            <li>
                                                                <a href=''><span>E-Money</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='2'>
                                                        <a href=''>Perawatan & Kecantikan <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Perawatan & Kecantikan</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='3'>
                                                        <a href=''>
                                                            Kesehatan 
                                                            <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Kesehatan</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='4'>
                                                        <a href=''>Perlangkapan Bayi 
                                                            <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Perlangkapan Bayi </span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='5'>
                                                        <a href=''>Fashion Wanita <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Fashion Wanita</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='6'>
                                                        <a href=''>Fashion Pria <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Fashion Pria</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='7'>
                                                        <a href=''>Fashion Anak <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Fashion Anak</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='8'>
                                                        <a href=''>Pernak Pernik <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Pernak Pernik</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='9'>
                                                        <a href=''>Komputer <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Komputer</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='10'>
                                                        <a href=''>Handphone <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Handphone</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='11'>
                                                        <a href=''>Kamera <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Kamera</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='12'>
                                                        <a href=''>Olahraga<i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Olahraga</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='13'>
                                                        <a href=''>Food <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Food</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='14'>
                                                        <a href=''>Industrial <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Industrial</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class='uk-parent'id='15'>
                                                        <a href=''>Perlengkapan Kantor <i class='fa fa-chevron-right m-fa-chevron-right'></i></a>
                                                        <ul class='uk-nav-sub'>
                                                            <li>
                                                                <a href=''><span>Perlengkapan Kantor</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12" style="margin-left: -81px;">

                                        <div id="search-wrap" class="search">
                                            <div class="form-horizontal">
                                                <div class="ui-widget input-group">
                                                    <input name="search" type="text" id="txtSearch" class="form-control" placeholder="Search" />
                                                    <span class="input-group-btn">
                                                    <button  id="btnSearch" class="btn default"><i class="fa fa-search"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="right-nav">
                                <div class="row">
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6 m-col-new">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="text-right m-text-right" style="margin-top: 8px;">
                                                    <a href="<?php echo base_url('welcome/daftar') ?>" class="login-btn m-login-btn" style="margin-left: -20px;">REGISTER</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-right login-mobile-re" style="margin-top: 8px;">
                                                    <a href="<?php echo base_url('login') ?>" class="login-btn m-login-btn">LOGIN</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6  m-col-new1">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="text-right ">
                                                    <a href="" class="login-btn m-icon-btn" style="margin-left: -9px;">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-right ">
                                                    <a href="" class="login-btn m-icon-btn">
                                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-right ">
                                                    <a href="" class="login-btn m-icon-btn">
                                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--Telepon kantor-->
                                    <!-- <div class="col-md-2 col-sm-3">
                                        <div id="popover-call">
                                        
                                            <div class="content-popover">
                                                <i class="fa fa-phone"></i> Hotline <br /><span class="text-lg">(021) 80627030</span><br /><br />
                                                <i class="fa fa-whatsapp"></i> <a href="">Whatsapp <br /><span class="text-lg">0821-1249-9395</span></a>
                                            </div>
                                            <a class="phone-icon" href="#" title="Butuh Bantuan?" data-placement="bottom" data-toggle="popover">
                                                <div class="call-icon"></div>
                                            </a>
                                        
                                        </div>
                                    </div> -->

                                    <!--shopping cart-->
                                    <!-- <div class="col-md-2 col-sm-3 hidden">
                                        
                                        <div class="header-fa">
                                            <a href="/shoppingcart.aspx">
                                                <div class="shop-cart"></div>
                                            </a>
                                        </div>
                                    
                                    </div> -->
                                    <!--do nothing-->
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

