<?php
$seo = $_GET['sef'];


$sorgu = $db->prepare('SELECT * FROM reklamlar WHERE seo = :seo');
$sorgu->execute(['seo' => $seo]);
$reklam = $sorgu->fetch(PDO::FETCH_ASSOC);

$resimsor = $db->prepare('SELECT * FROM resimler WHERE reklam_id = :reklam_id');
$resimsor->execute(['reklam_id' => $reklam['id']]);
$resimler = $resimsor->fetch(PDO::FETCH_ASSOC);



$katsor = $db->prepare('SELECT * FROM kategoriler WHERE id = :id');
$katsor->execute(['id' => $reklam['kategori_id']]);
$kat = $katsor->fetch(PDO::FETCH_ASSOC);

$firmasor = $db->prepare('SELECT * FROM firmalar WHERE id = :id');
$firmasor->execute(['id' => $reklam['firma_id']]);
$firma = $firmasor->fetch(PDO::FETCH_ASSOC);
?>

<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index">Anasayfa</a><span> -</span></li>
                <li><a>Detay</a><span> -</span></li>
                <li><?= $reklam['baslik'] ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Product Details Page Start Here -->
<div class="product-details-page bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="inner-page-main-body">
                    <div class="single-banner">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php for ($i = 0; $i < count($resimler); $i++) : ?>
                                    <li data-target="#myCarousel" data-slide-to="<?= $i ?>" <?php if ($i == 0) { ?> class="active" <?php } ?>> </li>
                                <?php endfor; ?>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php
                                $s = 0;
                                foreach ($resimler as $resim) :
                                ?>
                                    <div class="item <?php if ($s == 0) { ?> active  <?php } ?>">
                                        <img src="../<?= $resim['resim']; ?>">
                                    </div>
                                <?php $s++;
                                endforeach; ?>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <h2 class="title-inner-default"><?= $reklam['baslik'] ?></h2>
                    <p class="para-inner-default"><?= $reklam['icerik'] ?></p>
                    <div class="product-tag-line">
                        <ul class="product-tag-item">
                            <li><a href="#"><?= $kat['kategori_adi'] ?></a></li>
                            <li><a href="#"><?= $firma['firma_adi'] ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Firma Bilgileri</h3>
                            <ul class="sidebar-product-info">
                                <li>Yetkili Kişi :<span> <?= $firma['firma_yetkilisi'] ?></span></li>
                                <li>Firma Adı :<span> <?= $firma['firma_adi'] ?></span></li>
                                <li>E-mail :<span> <?= $firma['e_posta'] ?></span></li>
                                <li>Telefon :<span> <?= $firma['irtibat_tel'] ?></span></li>
                                <li>Web Sitesi:<span> <?= $firma['web_sitesi'] ?></span></li>
                                <li>Adres :<span> <?= $firma['adres'] ?></span></li>
                                <li>Şirket :<span> <?= $firma['sirket_tanimi'] ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Page End Here -->