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
                        <h2>Sosyal Ayarlar <small>
                            </small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="clearfix"></div>
                        <form id="sosyal-ayar-form">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="<?= @$sorgu['facebook'] ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="twitter">Twitter </label>
                                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" value="<?= @$sorgu['twitter'] ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="instagram">İnstagram </label>
                                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="İnstagram" value="<?= @$sorgu['instagram'] ?>">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="sosyalAyar('sosyal-ayar-form','sosyal-ayar');return false">Kaydet</button>
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