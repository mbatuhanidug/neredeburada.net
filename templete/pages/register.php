<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index">Anasayfa</a><span> -</span></li>
                <li>Kayıt Ol</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="registration-details-area inner-page-padding">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="control-label" for="first-name" style="margin-left:424px;">Kurumsal Üyelik İçin Tıklayın</label>
                        <input type="checkbox" id="first-name" class="form-control" style="cursor: pointer;" onchange="$('#kullanici-form-bas').toggle('slow');$('#firma-form-bas').toggle('slow');">
                    </div>
                </div>
            </div>
        </div>
        <div class="registration-details-area inner-page-padding" id="firma-form-bas" style="display: none;">
            <form id="firma-register-form">
                <div class="row">
                    <blockquote>Genel Bilgiler</blockquote>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="firma_adi">Firma Adı *</label>
                            <input type="text" id="firma_adi" name="firma_adi" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="faaliyet_alani">Faaliyet Alanı *</label>
                            <input type="text" id="faaliyet_alani" name="faaliyet_alani" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="sirket_tanimi">Şirket Tanımı *</label>
                            <textarea name="sirket_tanimi" id="sirket_tanimi" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="hizmet_tanimi">Hizmet Tanımı *</label>
                            <textarea name="hizmet_tanimi" id="hizmet_tanimi" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="firma_logo">Firma Logo *</label>
                            <input type="file" id="firma_logo" name="firma_logo" onchange="$('#firma_logo_value').val('1');return false;" class="form-control">
                            <input type="hidden" id="firma_logo_value" value="0">
                        </div>
                    </div>
                </div>
                <blockquote>Firma İletişim</blockquote>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="firma_yetkilisi">Firma Yetkilisi *</label>
                            <input type="text" id="firma_yetkilisi" name="firma_yetkilisi" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="yetkili_tel">Yetkili Telefon *</label>
                            <input type="text" id="yetkili_tel" name="yetkili_tel" maxlength="11" onkeyup="onlyNumber('yetkili_tel')" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="firma_il">Firma İl</label>
                            <div class="custom-select">
                                <select id="firma_il" name="firma_il" class='select2'> </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="firma_ilce">Firma İlçe</label>
                            <div class="custom-select">
                                <select id="firma_ilce" name="firma_ilce" class='select2'> </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="firma_adres">Firma Adres *</label>
                            <textarea name="firma_adres" id="firma_adres" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="e_posta">E-Mail Adresi *</label>
                            <input type="email" id="e_posta" name="e_posta" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="firma_sifre">Şifre *</label>
                            <input type="password" id="firma_sifre" name="firma_sifre" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="web_sitesi">Web Sitesi *</label>
                            <input type="text" id="web_sitesi" name="web_sitesi" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="irtibat_tel">Şirket Telefon *</label>
                            <input type="text" id="irtibat_tel" name="irtibat_tel" maxlength="11" onkeyup="onlyNumber('irtibat_tel')" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="irtibat_tel_iki">Şirket Telefon 2 *</label>
                            <input type="text" id="irtibat_tel_iki" name="irtibat_tel_iki" maxlength="11" onkeyup="onlyNumber('irtibat_tel_iki')" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="diger_bilgiler">Diğer Bilgiler *</label>
                            <textarea name="diger_bilgiler" id="diger_bilgiler" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order">
                            <button class="update-btn disabled" type="button" value="Login" onclick="firmaKayit('firma-register-form','firma-register-form');return false;">Kayıt Ol</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="registration-details-area inner-page-padding" id="kullanici-form-bas">
            <form id="kullanici-register-form">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="kullanici_isim">İsim *</label>
                            <input type="text" id="kullanici_isim" name="kullanici_isim" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="kullanici_soyisim">Soyisim *</label>
                            <input type="text" id="kullanici_soyisim" name="kullanici_soyisim" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="d_tarih">Doğum Tarihi *</label>
                            <input type="date" id="d_tarih" name="d_tarih" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="mail">E-mail *</label>
                            <input type="email" id="mail" name="mail" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="sifre">Şifre *</label>
                            <input type="password" id="sifre" name="sifre" minlength="6" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="gsm">Telefon Numarası *</label>
                            <input type="text" id="gsm" name="gsm" maxlength="11" onkeyup="onlyNumber('gsm')" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Adres</label>
                            <input type="text" id="adres" name="adres" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="il">İl *</label>
                            <div class="custom-select">
                                <select id="il" class='select2 form-control' name="il">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="district">İlçe *</label>
                            <div class="custom-select">
                                <select id="ilce" class='select2 form-control' name="ilce">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
                        <div class="alert alert-success" id="k-alert" role="alert" style="display: none;">
                            <b id="k-alert-text"></b>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order">
                            <button class="update-btn disabled" type="button" value="Login" onclick="kullaniciKayit('kullanici-register-form','kullanici-register-form');return false;">Kayıt Ol</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Registration Page Area End Here -->