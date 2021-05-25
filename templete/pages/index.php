<?php
$sorgu = $db->prepare('SELECT * FROM reklamlar');
$sorgu->execute();
$reklamlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Newest Products Area Start Here -->
<div class="newest-products-area bg-secondary section-space-default">
    <div class="container">
        <h2 class="title-default">Reklamlar</h2>
    </div>
    <div class="container-fluid" id="isotope-container">
        <div class="isotope-classes-tab isotop-box-btn-white">
            <?php $katcek = $db->prepare('SELECT * FROM kategoriler');
            $katcek->execute();
            $kategoriler = $katcek->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <a href="#" data-filter="*" class="current">Hepsi</a>
            <?php foreach ($kategoriler as $kat) : ?>
                <a href="#" data-filter=".<?= $kat['kategori_adi'] ?>"><?= $kat['kategori_adi'] ?></a>
            <?php endforeach; ?>
        </div>
        <div class="row featuredContainer">
            <?php foreach ($reklamlar as $reklam) :
                $resimsor = $db->prepare('SELECT * FROM resimler WHERE reklam_id = :reklam_id LIMIT 1');
                $resimsor->execute(['reklam_id' => $reklam['id']]);
                $resim = $resimsor->fetch(PDO::FETCH_ASSOC);

                $katsor = $db->prepare('SELECT * FROM kategoriler WHERE id = :id');
                $katsor->execute(['id' => $reklam['kategori_id']]);
                $kat = $katsor->fetch(PDO::FETCH_ASSOC);

                $firmasor = $db->prepare('SELECT * FROM firmalar WHERE id = :id');
                $firmasor->execute(['id' => $reklam['firma_id']]);
                $firma = $firmasor->fetch(PDO::FETCH_ASSOC);
            ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 <?= $kat['kategori_adi'] ?>">
                    <div class="single-item-grid">
                        <div class="item-img">
                            <img src="../<?= $resim['resim']; ?>" alt="product" class="img-responsive">
                        </div>
                        <div class="item-content">
                            <div class="item-info">
                                <h3><a href="<?= $reklam['seo'] ?>"><?= $reklam['baslik'] ?></a></h3>
                                <span><?= $firma['faaliyet_alani'] ?></span>
                            </div>
                            <div class="item-profile">
                                <div class="profile-title">
                                    <span><?= $firma['firma_yetkilisi'] ?></span>
                                </div>
                                <div class="profile-rating">
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li>(<span> 05</span> )</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Newest Products Area End Here -->