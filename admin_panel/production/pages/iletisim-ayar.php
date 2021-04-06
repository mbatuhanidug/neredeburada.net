<?php
$sorgu = select('ayar');
$rowcount = rowCount('ayar');
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>İletişim Ayarlar <small>
                            </small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="clearfix"></div>
                        <form id="iletisim-ayar-form">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="tel">Telefon Numarası</label>
                                    <input type="text" class="form-control" id="tel" name="tel" min="10" max="11" onchange="onlyNumber('tel')" placeholder="Telefon Numarası" value="<?= @$sorgu['tel'] ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="control-label" for="il">İl</label>
                                    <select id="il" name="il" class='form-control'>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="control-label" for="ilce">İlçe</label>
                                    <select id="ilce" name="ilce" class='form-control'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="tel">Adres</label>
                                    <textarea class="form-control" name="adres" id="adres" cols="30" rows="10"><?= @$sorgu['adres'] ?></textarea>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="iletisimAyar('iletisim-ayar-form','iletisim-ayar');return false">Kaydet</button>
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