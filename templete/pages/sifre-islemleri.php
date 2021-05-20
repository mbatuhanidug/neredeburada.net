<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index">Anasayfa</a><span> -</span></li>
                <li>Şifre Güncelle</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Profile Page Start Here -->
<div class="profile-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row profile-wrapper">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="Message">
                        <h3 class="title-inner-section">Şifre Güncelleme</h3>
                        <form id="sifre-guncelle-form">
                            <div class="message-wrapper">
                                <div class="single-item-message">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Eski Şifre</label>
                                        <div class="col-sm-5">
                                            <input class="form-control details-area" id="kullanici_sifre_eski" name="kullanici_sifre_eski" type="password">
                                        </div>
                                    </div> <br>
                                </div>
                                <div class="single-item-message">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Yeni Şifre</label>
                                        <div class="col-sm-5">
                                            <input class="form-control details-area" id="sifre" name="sifre" type="password">
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <div class="single-item-message">
                                    <div class="leave-comments-message">
                                        <div class="leave-comments-box">
                                            <button onclick="sifreGuncelle('sifre-guncelle-form','sifre-guncelle');return false;" class="update-btn">Kaydet</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Page End Here -->