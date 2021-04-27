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
                        <input type="checkbox" id="first-name" class="form-control" onchange="$('#kullanici-form-bas').toggle('slow');$('#firma-form-bas').toggle('slow');">
                    </div>
                </div>
            </div>
        </div>
        <div class="registration-details-area inner-page-padding" id="firma-form-bas" style="display: none;">
            <form id="firma-register-form">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="first-name">First Name *</label>
                            <input type="text" id="first-name" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="last-name">Last Name *</label>
                            <input type="text" id="last-name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="company-name">Company Name</label>
                            <input type="text" id="company-name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="email">E-mail Address *</label>
                            <input type="text" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="phone">Phone *</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="country">Country</label>
                            <div class="custom-select">
                                <select id="country" class='select2'>
                                    <option value="0">Select your country
                                    <option value="1">Bangladesh
                                    <option value="2">Spain
                                    <option value="3">Belgium
                                    <option value="3">Ecuador
                                    <option value="3">Ghana
                                    <option value="3">South Africa
                                    <option value="3">India
                                    <option value="3">Pakistan
                                    <option value="3">Thailand
                                    <option value="3">Malaysia
                                    <option value="3">Italy
                                    <option value="3">Japan
                                    <option value="4">Germany
                                    <option value="5">USA
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="town-city">Town / City</label>
                            <input type="text" id="town-city" class="form-control">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Address line 1</label>
                            <input type="text" id="address-line1" class="form-control">
                            <label class="control-label">Address line 2</label>
                            <input type="text" id="address-line2" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="district">District *</label>
                            <div class="custom-select">
                                <select id="district" class='select2'>
                                    <option value="0">Select Your District
                                    <option value="1">Dhaka
                                    <option value="2">Rajshahi
                                    <option value="4">Chittagong
                                    <option value="5">GAZIPUR
                                    <option value="6">GOPALGANJ
                                    <option value="7">JAMALPUR
                                    <option value="8">KISHOREGONJ
                                    <option value="9">MADARIPUR
                                    <option value="10">MANIKGANJ
                                    <option value="11">MUNSHIGANJ
                                    <option value="12">MYMENSINGH
                                    <option value="13">NARAYANGANJ
                                    <option value="14">NARSINGDI
                                    <option value="15">NETRAKONA
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="postcode">Postcode / ZIP</label>
                            <input type="text" id="postcode" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order">
                            <button class="update-btn disabled" type="submit" value="Login">Submit</button>
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