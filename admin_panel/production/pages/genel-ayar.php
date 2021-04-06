<?php
$sorgu = select('ayar');
$rowcount = rowCount('ayar');
?>
<style>
    .formCenter {
        text-align: center;
        align: center;
    }

    .genel-baslik {
        color: black;
        font-weight: 700;
        font-size: 20px;
    }

    .logo-class {
        font-size: 15px;
        font-weight: 700;
    }
</style>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Genel Ayarlar <small>
                            </small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- SİTE LOGO FORM -->
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <form id="site-logo-form">
                                <?php if ($rowcount > 0) { ?>
                                    <input type="hidden" name="logo-eski-yol" value="<?= $sorgu['logo'] ?>">
                                <?php } ?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="fileUserImage">
                                            <blockquote class="logo-class">Site Logo </blockquote>
                                        </label>
                                        <input id="fileUserImage" type="file" name="file" class="form-control-file" />
                                    </div>
                                    <div class="form-group">
                                        <input type="button" id="clearFile" class="btn btn-info btn-sm" value="Temizle" style="margin-left: 5px;" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div id="imgArea">
                                            <span id="imgInfo" style="display: none;"> Seçilmiş resim bulunamamaktadır!</span>
                                            <?php if (isset($sorgu['logo']) && strlen($sorgu['logo']) > 0) { ?>
                                                <img id="imgPreview" src="<?= $sorgu['logo'] ?>" width="300" height="200" />
                                            <?php } else { ?>
                                                <img id="imgPreview" src="images/resim_yok.png" width="300" height="200" />
                                            <?php  } ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm" onclick="siteLogo('site-logo-form','site-logo');return false">Logo Kaydet</button>
                            </form>
                            <div class="row mt-2  pb-1 text-center">
                                <div class="col-md-12" id="logosonuc"></div>
                            </div>
                        </div>

                        <!-- SİTE FAVİCON FORM -->
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <form id="site-favicon-form">
                                <?php if ($rowcount > 0) { ?>
                                    <input type="hidden" name="favicon-eski-yol" value="<?= $sorgu['favicon'] ?>">
                                <?php } ?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="fileUserImageF">
                                            <blockquote class="logo-class">Site Favicon</blockquote>
                                        </label>
                                        <input id="fileUserImageF" type="file" name="file" class="form-control-file" />
                                    </div>
                                    <div class="form-group">
                                        <input type="button" id="clearFileF" class="btn btn-info btn-sm" value="Temizle" style="margin-left: 5px;" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div id="imgArea">
                                            <span id="imgInfoF" style="display: none;"> Seçilmiş resim bulunamamaktadır!</span>
                                            <?php if (isset($sorgu['favicon']) && strlen($sorgu['favicon']) > 0) { ?>
                                                <img id="imgPreviewF" src="<?= $sorgu['favicon'] ?>" width="300" height="200" />
                                            <?php } else { ?>
                                                <img id="imgPreviewF" src="images/resim_yok.png" width="300" height="200" />
                                            <?php  } ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm" onclick="siteFavicon('site-favicon-form','site-favicon');return false">Favicon Kaydet</button>
                            </form>
                            <div class="row mt-2  pb-1 text-center">
                                <div class="col-md-12" id="faviconsonuc"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="clearfix"></div>
                        <blockquote class="genel-baslik">GENEL AYARLAR FORM</blockquote>
                        <form id="genel-ayar-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Site Başlık</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Site Başlık" value="<?= @$sorgu['title'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="desc_ription">Site Açıklama </label>
                                    <input type="text" class="form-control" id="desc_ription" name="desc_ription" placeholder="Site description" value="<?= @$sorgu['desc_ription'] ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="keywords">Site Anahtar Kelimeler</label>
                                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords" value="<?= @$sorgu['keywords'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="author">Site Yazar</label>
                                    <input type="text" class="form-control" id="author" name="author" placeholder="Site Author" value="<?= @$sorgu['author'] ?>">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="genelAyar('genel-ayar-form','genel-ayar');return false">Kaydet</button>
                        </form>
                        <div class="row mt-2  pb-1 text-center">
                            <div class="col-md-12" id="sonuc"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>