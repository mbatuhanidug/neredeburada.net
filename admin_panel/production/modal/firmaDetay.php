<?php
require_once '../../inc/function.php';
$id = (int)$_GET['firma_id'];

$sorgu = $db->prepare('SELECT * FROM firmalar WHERE id = :id LIMIT 1');
$sorgu->execute(['id' => $id]);
$firma = $sorgu->fetch(PDO::FETCH_ASSOC);

$resim = $db->prepare('SELECT * FROM firma_site_resim WHERE firma_id = :firma_id');
$resim->execute(['firma_id' => $id]);
$firma_resim = $resim->fetch(PDO::FETCH_ASSOC);
?>
<style>
    .c {
        padding: 0 3px 6px;
        position: relative;
        width: 100%;
        /* float: left; */
        /* clear: both; */
        margin-top: 5px;
    }

    body {
        background: lightblue;
    }

    article {
        /*padding: 4em;*/
    }

    img {
        width: 500px;
    }

    .monitor {
        width: 340px;
        height: 194px;
        overflow-y: scroll;
        border: solid 1em #333;
        border-radius: .5em;
    }

    .monitor::-webkit-scrollbar {
        width: 15px;
    }

    .monitor::-webkit-scrollbar-thumb {
        background: #666;
    }

    ::-webkit-scrollbar-track {
        background-color: #888;
    }

    .stand:before {
        content: "";
        display: block;
        position: relative;
        background: #222;
        width: 150px;
        height: 50px;
        top: 244px;
        left: 82px;
    }

    .stand:after {
        content: "";
        display: block;
        position: relative;
        background: #333;
        border-top-left-radius: .5em;
        border-top-right-radius: .5em;
        width: 300px;
        height: 15px;
        top: 50px;
        left: 17px;
    }

    blockquote {
        color: red;
        font-weight: 700;
    }
</style>

<div role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                    <div>
                        <h2>Firma Adı Detay Sayfası <button type="button" class="close" data-dismiss="modal" title="Detay Sekmesini Kapat">&times;</button></h2>

                    </div>
                    <div class="c">
                        <form>
                            <hr>
                            <blockquote>Firma Yetkili Bilgileri</blockquote>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Yetkili Kişi</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['firma_yetkilisi'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telefon Numarası</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['yetkili_tel'] ?>">
                                </div>
                            </div>
                            <hr>
                            <blockquote>Firma Genel Bilgileri</blockquote>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Firma Adı</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['firma_adi'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Şirket Tanımı</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['sirket_tanimi'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hizmet Tanımı</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['hizmet_tanimi'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ekstra Bilgiler</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['diger_bilgiler'] ?>">
                                </div>
                            </div>
                            <hr>
                            <blockquote>Firma İletişim Bilgileri</blockquote>
                            <hr>
                            <?php if (strlen($firma['web_sitesi']) > 0) : ?>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" style="margin-top: 132px;">Web Sitesi : <a href="https://<?= $firma['web_sitesi'] ?>" target="_blank" rel="nofollow" title="<?= $firma['firma_adi'] ?>" style="color:black;font-weight: 700;"><?= $firma['web_sitesi'] ?></a></label>
                                    <div class="col-sm-6">
                                        <article style="padding-bottom: 25px;" class="pull-right">
                                            <div class="stand">
                                                <div class="monitor">
                                                    <img src="<?= $firma_resim['resim'] ?>">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            <?php endif;  ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">E-Mail Adresi</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['e_posta'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">İrtibat Numarası</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['irtibat_tel'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">İrtibat Numarası</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['irtibat_tel'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">İrtibat Numarası 2</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['irtibat_tel_iki'] ?>">
                                </div>
                            </div>
                            <hr>
                            <blockquote>Firma Adres Bilgileri</blockquote>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">İl</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['il'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">İlce</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $firma['ilce'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Adres</label>
                                <div class="col-sm-10">
                                    <textarea cols="30" rows="10" class="form-control"><?= $firma['adres'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>