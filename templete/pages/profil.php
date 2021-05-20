  <!-- Inner Page Banner Area Start Here -->
  <div class="pagination-area bg-secondary">
      <div class="container">
          <div class="pagination-wrapper">
              <ul>
                  <li><a href="index">Anasayfa</a><span> -</span></li>
                  <li>Profilim</li>
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
                      <div class="tab-pane fade active in" id="Profile">
                          <div class="inner-page-details inner-page-content-box">
                              <form id="profil-guncelle-from">
                                  <div class="skill-area">
                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">Ad Soyad</label>
                                          <div class="col-sm-8">
                                              <input class="form-control" id="ad_soyad" name="ad_soyad" type="text" value="<?= $kullanicicek['ad_soyad'] ?>">
                                          </div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">Doğum Tarihiniz</label>
                                          <div class="col-sm-8">
                                              <input class="form-control" readonly type="text" value="<?= $kullanicicek['d_tarih'] ?>">
                                          </div>
                                      </div> <br>
                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">Kayıt Tarihi</label>
                                          <div class="col-sm-8">
                                              <input class="form-control" readonly type="text" value="<?= $kullanicicek['tarih'] ?>">
                                          </div>
                                      </div> <br>
                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">Email Adresiniz</label>
                                          <div class="col-sm-8">
                                              <input class="form-control" readonly type="text" value="<?= $kullanicicek['mail'] ?>">
                                          </div>
                                      </div> <br>
                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">Telefon Numaranız</label>
                                          <div class="col-sm-8">
                                              <input class="form-control" id="gsm" name="gsm" minlength="10" maxlength="10" onkeyup="onlyNumber('gsm')" value="<?= $kullanicicek['gsm'] ?>" type="text">
                                          </div>
                                      </div> <br>
                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">İl</label>
                                          <div class="col-sm-8">
                                              <select class="form-control select2-selection__rendered" id="profil_il" name="profil_il"></select>
                                          </div>
                                      </div> <br>
                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">İlçe</label>
                                          <div class="col-sm-8">
                                              <select class="form-control select2-selection__rendered" id="profil_ilce" name="profil_ilce"></select>
                                          </div>
                                      </div> <br>
                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">Adres</label>
                                          <div class="col-sm-8">
                                              <textarea class="form-control" name="profil_adres" id="profil_adres" cols="30" rows="5"><?= $kullanicicek['adres'] ?></textarea><br>
                                          </div>
                                      </div> <br>
                                      <hr>
                                      <div class="form-group">
                                          <div class="col-sm-6">
                                              <a class="update-btn" style="cursor:pointer" onclick="profilGuncelle('profil-guncelle-from','profil-guncelle');return false;" id="login-update">Güncelle</a>
                                          </div>
                                      </div> <br>
                                  </div>
                              </form><br>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Profile Page End Here -->