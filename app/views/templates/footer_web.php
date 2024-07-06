<!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6 ">
                        <div class="footer_widget">
                            <h3>Pihak Penyelengara
                                </h3>
                            <div class="footer_logo">
                                <div style = "margin : 30px;">
                                    <img src="<?= BASEURL; ?>/assets_web/img/fesyar.png" width="30%" alt="">
                                    <img src="<?= BASEURL; ?>/assets_web/img/alhazen.png" width="45%" alt="">
                                </div>
                                <div style = "margin : 30px;">
                                    <img src="<?= BASEURL; ?>/assets_web/img/bi.png" width="45%" alt="">
                                    <img src="<?= BASEURL; ?>/assets_web/img/isef.png" width="45%" alt="">
                                </div>
                                <div style = "margin : 30px;">
                                    <img src="<?= BASEURL; ?>/assets_web/img/ekonomi.png" width="45%" alt="">
                                </div>
                            </div>
                           
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Kontak
                            </h3>
                            <ul class="address_line">
                                <li>+555 0000 565</li>
                                <li><a href="#">Demomail@gmail.Com</a></li>
                                <li>700, Green Lane, New York, USA</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Quick Link
                            </h3>
                            <ul class="links">
                                <li><a href="<?=BASEURL;?>/Web/profil">Profil</a></li>
                                <li><a href="<?=BASEURL;?>/Web/donasi">Donasi</a></li>
                                <li><a href="<?=BASEURL;?>/Web/contact">Kontak</a></li>
                                <li><a href="<?= BASEURL; ?>/login/">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    



                </div>
            </div>
        </div>
      
    </footer>
    <!-- footer_end  -->


    <!-- JS here -->
    <script src="<?= BASEURL; ?>/assets_web/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/popper.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/bootstrap.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/owl.carousel.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/isotope.pkgd.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/ajax-form.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/waypoints.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.counterup.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/scrollIt.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.scrollUp.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/wow.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/nice-select.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.slicknav.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/plugins.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="<?= BASEURL; ?>/assets_web/js/contact.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.form.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.validate.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/mail-script.js"></script>

    <script src="<?= BASEURL; ?>/assets_web/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>
