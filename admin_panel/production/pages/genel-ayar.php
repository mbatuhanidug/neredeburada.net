<?php
$sorgu = select('ayar');
$rowcount = rowCount('ayar');
?>
<style>
    .formCenter {
        text-align: center;
        align: center;
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
                        <form id="site-logo-form">
                            <?php if ($rowcount > 0) { ?>
                                <input type="hidden" name="logo-eski-yol" value="<?= $sorgu['logo'] ?>">
                            <?php } ?>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Logo</label>
                                    <input id="fileUserImage" type="file" name="file" id="logo-file" class="form-control-file" />
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
                            <button type="button" class="btn btn-primary" onclick="siteLogo('site-logo-form','site-logo');return false">Logo Kaydet</button>
                        </form>
                        <div class="row mt-2  pb-1 text-center">
                            <div class="col-md-12" id="logosonuc"></div>
                        </div>
                        <hr>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
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