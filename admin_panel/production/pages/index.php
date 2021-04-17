<?php

$sorgu = $db->prepare('SELECT * FROM alogin WHERE admin_id = :admin_id ORDER BY id DESC');
$sorgu->execute(['admin_id' => $_SESSION['admin']['username']]);
$alogin = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
    .tile_count .tile_stats_count {
        padding: 0 34px 0 20px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    }
</style>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="display: inline-block;">
        <div class="tile_count">
            <div class="col-md-4 col-sm-12  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Toplam Kullanıcı</span>
                <div class="count">2500</div>
            </div>
            <div class="col-md-4 col-sm-12  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Toplam Firma</span>
                <div class="count">123.50</div>
            </div>
            <div class="col-md-4 col-sm-12  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Toplam Reklam</span>
                <div class="count green">2,500</div>
            </div>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
    </div>
    <br />
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2> <i class="fa fa-info-circle" style="color:red;"></i> Hatalı Giriş </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="dashboard-widget-content">
                        <ul class="list-unstyled timeline widget">
                            <?php foreach ($alogin as $hata) : ?>
                                <li>
                                    <div class="block">
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a> İp Adres : <?= $hata['ip_adress'] ?> <br><br> Ülke : <?= $hata['ulke'] ?> <br><br> İl / İlçe : <?= $hata['il'] . '/' . $hata['ilce']   ?> </a>
                                            </h2><br>
                                            <div class="byline">
                                                <span style="font-weight: 700;"><?= $hata['tarih'] ?></span>
                                            </div><br>
                                            <p class="excerpt"> <?= $hata['user_argent'] ?> <br><br> <?php if ($hata['durum'] == 0) { ?> <button type="button" class="btn btn-success btn-sm" onclick="hataliGiris('<?= $hata['id'] ?>');return false;">Okudum </button> <?php } ?> </p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2  pb-1 text-center">
                <div class="col-md-12" id="sonuc"></div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->