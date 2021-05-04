<?php

$sorgu = $db->prepare('SELECT * FROM firmalar');
$sorgu->execute();
$firmaList = $sorgu->fetchAll();

$firmaOnay = $db->prepare('SELECT * FROM firmalar WHERE durum = :durum');
$firmaOnay->execute(['durum' => 2]);

?>
<style>
    .pCnter {
        text-align: center;
    }
</style>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="firma_modal_form" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="firma_modal_form_content">
        </div>
    </div>
</div>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Firma Listesi</h3>
            </div>
            <?php if ($firmaOnay->rowCount() > 0) : ?>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <button class="btn btn-round btn-success" id="yenitalep" type="button">Yeni Firma Talep (<?= $firmaOnay->rowCount(); ?>)</button>
                            <button class="btn btn-round btn-info" id="tumfirma" type="button" style="display: none;">Tüm Firmalar</button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <?php foreach ($firmaList as $firma) :
                                if ($firma['durum'] == 2) {
                                    $border = '';
                                } else if ($firma['durum'] == 1) {
                                    $border = '5px solid green';
                                } else {
                                    $border = '3px solid red';
                                }
                            ?>
                                <div class="col-md-55" data-durum='<?= $firma['durum']; ?>'>
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;height: 250px;border:<?= $border ?>" src="images/firma2.jpg" alt="<?= $firma['firma_adi'] ?>" />
                                            <div class="mask">
                                                <p>İşlemler</p>
                                                <div class="tools tools-bottom">
                                                    <?php
                                                    if ($firma['durum'] == 0) {
                                                        $class = 'fa fa-check';
                                                        $title = 'Aktif Yap';
                                                        $durum = 1;
                                                    } else if ($firma['durum'] == 1) {
                                                        $class = 'fa fa-times';
                                                        $title = 'Pasif Yap';
                                                        $durum = 2;
                                                    } else {
                                                        $class = 'fa fa-check-circle';
                                                        $title = 'Onayla';
                                                        $durum = 1;
                                                    }
                                                    ?>
                                                    <a onclick="firmaDetay('<?= $firma['id'] ?>')" style="cursor:pointer"><i class="fa fa-list" title="<?= $firma['firma_adi'] ?> Firması Detay"></i></a>
                                                    <a onclick="firmaDurum('<?= $firma['id'] ?>')" style="cursor:pointer"><i class="fa fa-refresh" title="<?= $firma['firma_adi'] ?> durum güncelle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p class="pCnter"><?= $firma['firma_adi'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;  ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-2  pb-1 text-center">
                    <div class="col-md-12" id="sonuc"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->