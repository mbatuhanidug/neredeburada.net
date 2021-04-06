<?php

$sorgu = $db->prepare('SELECT * FROM firmalar');
$sorgu->execute();
$firmaList = $sorgu->fetchAll();


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
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <button class="btn btn-round btn-success" type="button">Yeni Firma Talep (RowCount)</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#firma-filter">Filtre </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="collapse coklu_eleman" id="firma-filter">
                    <div class="card-body">
                        Burası 1. eleman ilk button ile gösterilip gizlenir.
                    </div>
                </div>
            </div>
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
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;height: 250px;border:<?= $border ?>" src="images/firma2.jpg" alt="<?= $firma['firma_adi'] ?>" />
                                            <div class="mask">
                                                <p>İşlemler</p>
                                                <div class="tools tools-bottom">
                                                    <a onclick="firmaDetay('<?= $firma['id'] ?>')" style="cursor:pointer"><i class="fa fa-list" title="<?= $firma['firma_adi'] ?> Detay"></i></a>
                                                    <a onclick="firmaDetay('<?= $firma['id'] ?>')" style="cursor:pointer"><i class="fa fa-pencil" title="<?= $firma['firma_adi'] ?> Düzenle"></i></a>
                                                    <a onclick="firmaDetay('<?= $firma['id'] ?>')" style="cursor:pointer"><i class="fa fa-times" title="<?= $firma['firma_adi'] ?> Sil"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p class="pCnter">Firma Adı</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->