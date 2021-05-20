<!-- Footer Area Start Here -->
<footer>
    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Our Address</h3>
                        <ul class="corporate-address">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="Phone(01)800433633">PO Box 16122 Collins Street West Victoria 8007 Australia</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>+61 3 8376 6284</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i>+61 3 8376 6284</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@foxtar.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Need Help?</h3>
                        <ul class="featured-links">
                            <li>
                                <ul>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Foxtar Market Terms</a></li>
                                    <li><a href="#">Author Terms</a></li>
                                    <li><a href="#">Foxtar Licenses</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-md-3 col-sm-6 col-xs-12">




                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Follow Us On</h3>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook" style="margin-top: 9px;" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" style="margin-top: 9px;" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" style="margin-top: 9px;" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" style="margin-top: 9px;" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" style="margin-top: 9px;" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="newsletter-area">
                            <h3>Newsletter Sign Up!</h3>
                            <div class="input-group stylish-input-group">
                                <input type="text" placeholder="Enter your e-mail here" class="form-control">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <p>@ 2021 MASSCAPE YAZILIM DANIŞMANLIK PROJESİDİR</p>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->

</div>
<!-- Main Body Area End Here -->
<!-- jquery-->
<script src="js\jquery-2.2.4.min.js" type="text/javascript"></script>

<!-- Plugins js -->
<script src="js\plugins.js" type="text/javascript"></script>

<!-- Bootstrap js -->
<script src="js\bootstrap.min.js" type="text/javascript"></script>

<!-- WOW JS -->
<script src="js\wow.min.js"></script>

<!-- Owl Cauosel JS -->
<script src="vendor\OwlCarousel\owl.carousel.min.js" type="text/javascript"></script>

<!-- Meanmenu Js -->
<script src="js\jquery.meanmenu.min.js" type="text/javascript"></script>

<!-- Srollup js -->
<script src="js\jquery.scrollUp.min.js" type="text/javascript"></script>

<!-- jquery.counterup js -->
<script src="js\jquery.counterup.min.js"></script>
<script src="js\waypoints.min.js"></script>

<!-- Isotope js -->
<script src="js\isotope.pkgd.min.js" type="text/javascript"></script>

<!-- Gridrotator js -->
<script src="js\jquery.gridrotator.js" type="text/javascript"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<!-- Custom Js -->
<script src="js\main.js" type="text/javascript"></script>
<script src="ajax.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

<script type="text/javascript">
    $.getJSON("inc/il-bolge.json", function(sonuc) {
        $("#il").append("<option value='0'>İl Seçin</option>");
        $.each(sonuc, function(index, value) {
            var row = "";
            row += '<option value="' + value.il + '">' + value.il + '</option>';
            $("#il").append(row);
        })
    });
    $("#il").on("change", function() {
        var il = $(this).val();
        $("#ilce").attr("disabled", false).html("<option value='0'>İlçe Seçin</option>");
        $.getJSON("inc/il-ilce.json", function(sonuc) {
            $.each(sonuc, function(index, value) {
                var row = "";
                if (value.il == il) {
                    row += '<option value="' + value.ilce + '">' + value.ilce + '</option>';
                    $("#ilce").append(row);
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $.getJSON("inc/il-bolge.json", function(sonuc) {
        $("#firma_il").append("<option value='0'>İl Seçin</option>");
        $.each(sonuc, function(index, value) {
            var row = "";
            row += '<option value="' + value.il + '">' + value.il + '</option>';
            $("#firma_il").append(row);
        })
    });
    $("#firma_il").on("change", function() {
        var il = $(this).val();
        $("#firma_ilce").attr("disabled", false).html("<option value='0'>İlçe Seçin</option>");
        $.getJSON("inc/il-ilce.json", function(sonuc) {
            $.each(sonuc, function(index, value) {
                var row = "";
                if (value.il == il) {
                    row += '<option value="' + value.ilce + '">' + value.ilce + '</option>';
                    $("#firma_ilce").append(row);
                }
            });
        });
    });
</script>

<script>
    $.getJSON("inc/il-bolge.json", function(sonuc) {
        $("#profil_il").append("<option value='0'>Seçiniz..</option>");
        var il = '<?= $kullanicicek['il'] ?>';
        $.each(sonuc, function(index, value) {
            var row = "";
            row += '<option value="' + value.il + '"' + (il == value.il ? 'selected' : '') + ' >' + value.il + '</option>';
            $("#profil_il").append(row);
        })
    });

    $.getJSON("inc/il-ilce.json", function(sonuc) {
        var il = '<?= $kullanicicek['il'] ?>';
        var ilcee = '<?= $kullanicicek['ilce'] ?>';
        $("#profil_ilce").attr("disabled", false).html("<option value='0'>Seçiniz..</option>");
        $.each(sonuc, function(index, value) {
            var row = "";
            if (value.il == il) {
                row += '<option value="' + value.ilce + '"' + (ilcee == value.ilce ? 'selected' : '') + ' >' + value.ilce + '</option>';
                $("#profil_ilce").append(row);
            }
        });
    });

    $("#profil_il").on("change", function() {
        var il = $(this).val();
        $("#profil_ilce").attr("disabled", false).html("<option value='0'>Seçiniz..</option>");
        $.getJSON("inc/il-ilce.json", function(sonuc) {
            $.each(sonuc, function(index, value) {
                var row = "";
                if (value.il == il) {
                    row += '<option value="' + value.ilce + '">' + value.ilce + '</option>';
                    $("#profil_ilce").append(row);
                }
            });
        });
    });
</script>