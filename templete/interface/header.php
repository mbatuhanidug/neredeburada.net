<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $ayar['title']; ?></title>
    <meta name="description" content="<?= $ayar['desc_ription']; ?>">
    <meta name="keywords" content="<?= $ayar['keywords']; ?>">
    <link rel="icon" href="../admin_panel/production/<?= $ayar['favicon']; ?>" type="image/x-icon" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css\normalize.css">
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\animate.min.css">
    <link rel="stylesheet" href="css\font-awesome.min.css">
    <link rel="stylesheet" href="vendor\OwlCarousel\owl.carousel.min.css">
    <link rel="stylesheet" href="vendor\OwlCarousel\owl.theme.default.min.css">
    <link rel="stylesheet" href="css\meanmenu.min.css">
    <link rel="stylesheet" href="css\jquery.datetimepicker.css">
    <link rel="stylesheet" href="css\hover-min.css">
    <link rel="stylesheet" href="css\select2.min.css">
    <link rel="stylesheet" href="vendor\noUiSlider\nouislider.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js\modernizr-2.8.3.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>
    <div id="preloader"></div>
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header2" class="header2-area right-nav-mobile">
                <div class="header-top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                                <div class="logo-area">
                                    <a href="index.php"><img class="img-responsive" src="../admin_panel/production/<?= $ayar['logo']; ?>" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <ul class="profile-notification">
                                    <?php if (!isset($_SESSION['kullanici']) && !isset($_SESSION['firma'])) { ?>
                                        <li>
                                            <div class="apply-btn-area">
                                                <a class="apply-now-btn" href="#" id="login-button">Giriş Yap</a>
                                                <div class="login-form" id="login-form" style="display: none;">
                                                    <h2>Giriş Yap</h2>
                                                    <label class="control-label" for="first-name" style="margin-left:100px;">Kurumsal giriş için tıklayınız</label>
                                                    <input type="checkbox" id="first-name" class="form-control" style="cursor: pointer;height: 10;padding: 0;" onchange="$('#firma-giris-form').toggle('slow');$('#kullanici-giris-form').toggle('slow');">
                                                    <form id="kullanici-giris-form">
                                                        <input class="form-control" type="text" name="mail" id="mail" placeholder="Kullanıcı Mail Adresinizi Giriniz...">
                                                        <input class="form-control" type="password" name="sifre" id="sifre" placeholder="Şifrenizi Giriniz...">
                                                        <button class="btn-login" type="button" onclick="kullaniciGiris('kullanici-giris-form','kullanici-giris');return false;" value="">Giriş Yap</button>
                                                    </form>
                                                    <form id="firma-giris-form" style="display: none;">
                                                        <input class="form-control" type="text" name="firma_email" placeholder="Firma E-posta Adresini Giriniz...">
                                                        <input class="form-control" type="password" name="firma_sifre" placeholder="Şifrenizi Giriniz...">
                                                        <input class="form-control" type="text" name="firma_telefon" placeholder="Yetkili Telefon Numarası Giriniz...">
                                                        <button class="btn-login" type="button" onclick="firmaGiris('firma-giris-form','firma-giris');return false;" value="">Giriş Yap</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a class="apply-now-btn-color hidden-on-mobile" href="register">Kayıt Ol</a></li>
                                    <?php } else if (isset($_SESSION['kullanici']) && $_SESSION['kullanici']['id'] > 0) { ?>
                                        <li>
                                            <div class="user-account-info">
                                                <div class="user-account-info-controler" style="cursor:pointer">
                                                    <div class="user-account-title">
                                                        <div class="user-account-name"><?= $_SESSION['kullanici']['ad_soyad'] ?> <i class="fa fa-angle-down" aria-hidden="true" style="margin-top: 3px;"></i></div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><a href="profil">Profilim</a></li>
                                                    <li><a href="sifre-islemleri">Şifre İşlemleri</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a class="apply-now-btn" href="logout" id="logout-button">Çıkış Yap</a></li>

                                    <?php } else { ?>
                                        <li>
                                            <div class="user-account-info">
                                                <div class="user-account-info-controler" style="cursor:pointer">
                                                    <div class="user-account-title">
                                                        <div class="user-account-name"><?= $_SESSION['firma']['firma_adi'] ?> <i class="fa fa-angle-down" aria-hidden="true" style="margin-top: 3px;"></i></div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><a href="firma-profil">Firma Bilgileri</a></li>
                                                    <li><a href="firma-sifre-islemleri">Şifre İşlemleri</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a class="apply-now-btn" href="logout" id="logout-button">Çıkış Yap</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-primaryText" id="sticker">
                    <div class="container">
                        <nav id="desktop-nav">
                            <ul>
                                <li class="active"><a href="index.php">Anasayfa</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->