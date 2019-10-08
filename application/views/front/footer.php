<!-- Footer section start -->

    <footer class="l-bingkai-footer ">
        <div class="l-space-footer">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            Pembayaran
                        </div>
                        <div class="col-md-12">
                            <img src="assets/images/payment/pembayaran.png">
                        </div>
                        <div class="col-md-12">
                            Keamanan
                        </div>
                        <div class="col-md-12">
                            <img src="assets/images/payment/keamanan.png">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12 l-footer">
                            <h2>Markaz</h2>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                                Mendaftar
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                                Membuat Transaksi
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                                Info Metode Pembayaran
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                                FAQ
                            </a>
                        </div>
                    </div>
                </div>
                <span class="m-foot-hidden-batas">
                    <div class="col-md-12 col-xs-12 col-sm-12">&nbsp;</div>
                </span>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12 l-footer">
                            <h2>Info Markaz</h2>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                                Official Blog
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                               Perjanjian Pengguna
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                                Kebijakan Privasi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12 l-footer c-footer">
                            <h2>Layanan Pelanggan</h2>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                                <i class="fa fa-phone" aria-hidden="true"></i> (021) 5895558
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                              <i class="far fa-envelope"></i>  Markaz@gmail.com
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="c-footer">
                               <i class="far fa-comment-dots"></i> Markaz@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section end -->

</body>

	
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>jquery-migrate-3.0.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>uikit.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>sticky.min.js"></script>

	<script src="<?php echo base_url('assets/'); ?>Scripts/public.js" type="text/javascript"></script>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>bootstrap-tabcollapse.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>jquery.mmenu.min.all.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>slick.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>jquery.elevateZoom-3.0.8.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>modernizr.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>sweetalert-dev.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>lightbox.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>jquery.sticky-kit.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/m/'); ?>scripts.min.js"></script>

	<script  src="<?php echo base_url(); ?>assets/js/login.js"></script>

    

    <script src="<?php echo base_url().'/assets/owl-carousel/js/highlight.js'?>"></script>
    <script src="<?php echo base_url().'/assets/owl-carousel/js/app.js'?>"></script>


<script>
    $(document).ready(function () {
        $('.sliderBanner').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 500,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3000,
            cssEase: 'linear',
        });
        $('.sliderMobileCategory').slick({
            slidesToShow: 4,
            dots: false,
            infinite: true,
            speed: 500,
            autoplay: true,
            arrows: false,
            autoplaySpeed: 5000,
            cssEase: 'linear'
        });
        $('.sliderProd').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
            ]
        });
       
    });
    </script>

    <script>
    $(document).ready(function () {
        // Slick Slide
        $('.slickslide').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        arrows: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
        </script>
        <script>
    $(document).ready(function () {
        // Slick Slide
        $('.slickslideSecond').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: false,
            lazyLoad: 'ondemand',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        arrows: true,
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
<script type="text/javascript">
    function cart(){
        location='<?php echo base_url('shopping-cart') ?>';
    }
    function pengguna(){
        <?php
            if($this->session->userdata('login') == 'oke'){
                echo"location='".base_url('users')."';";
            }else{
                echo"location='".base_url('login')."';";
            }
        ?>
    }
    function beranda(){
        location='<?php echo base_url('') ?>';
    }
</script>

</html>