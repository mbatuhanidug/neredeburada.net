<?php

$ayar = select('ayar');

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= $ayar['favicon'] ?>" type="image/ico" />
    <meta name="title" content="Türkiye Yerel Reklam Arama Ve Firma Rehberi">
    <meta name="description" content="Türkiyenin yerel reklam,firma ve nöbetçi eczaneleri arayabileceğiniz yerel arama web sitesi">
    <meta name="keywords" content="firma,reklam,eczane">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <meta name="language" content="Turkish">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Nerede Burada">
    <title>Nerede Burada </title>
    <link href="../template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="../template/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="../template/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="../template/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <link href="../template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="../template/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index" class="site_title"><i class="fa fa-paw"></i> <span>neredeburada.net</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Hoşgeldin,</span>
                            <h2>Sayın <?= $_SESSION['admin']['isim_soyisim'] ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Menüler</h3>
                            <ul class="nav side-menu">
                                <li><a href="index"><i class="fa fa-home"></i> Anasayfa </a> </li>
                                <li><a><i class="fa fa-cogs"></i> Site Ayarları <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="genel-ayar">Genel Ayarlar</a></li>
                                        <li><a href="sosyal-ayar">Sosyal Ayarları</a></li>
                                        <li><a href="iletisim-ayar">İletişim Ayarlar</a></li>
                                    </ul>
                                </li>
                                <li><a href="firma-list"><i class="fa fa-list"></i> Firma Listesi </a> </li>
                                <li><a href="kullanici-list"><i class="fa fa-list-alt"></i> Kullanıcı Listesi </a> </li>
                                <li><a href="reklam-list"><i class="fa fa-list"></i> Reklam Listesi </a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>


            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <br>
            <br>