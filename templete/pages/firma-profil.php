  <?php
    $sorgu = $db->prepare('SELECT * FROM reklamlar WHERE firma_id = :firma_id');
    $sorgu->execute(['firma_id' => $firmacek['id']]);
    $reklamlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    
    ?>
  <!-- Inner Page Banner Area Start Here -->
  <div class="pagination-area bg-secondary">
      <div class="container">
          <div class="pagination-wrapper">
              <ul>
                  <li><a href="index">Anasayfa</a><span> -</span></li>
                  <li>Profil</li>
              </ul>
          </div>
      </div>
  </div>
  <!-- Inner Page Banner Area End Here -->
  <!-- Profile Page Start Here -->
  <div class="profile-page-area bg-secondary section-space-bottom">
      <div class="container">
          <div class="row">
              <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
                  <div class="inner-page-main-body">
                      <div class="single-banner">
                          <img src="../<?= $firmacek['firma_logo'] ?>" alt="product" class="img-responsive">
                      </div>
                      <div class="author-summery">
                          <div class="single-item">
                              <div class="item-title">İl / İlçe :</div>
                              <div class="item-details"><?= $firmacek['il'] . '/' . $firmacek['ilce'] ?></div>
                          </div>
                          <div class="single-item">
                              <div class="item-title">Kayıt Tarihi :</div>
                              <div class="item-details"><?= $firmacek['tarih']; ?></div>
                          </div>
                          <div class="single-item">
                              <div class="item-title">Yetkili :</div>
                              <div class="item-details">
                                  <?= $firmacek['firma_yetkilisi'] ?>
                              </div>
                          </div>
                          <div class="single-item">
                              <div class="item-title">Firma Adı :</div>
                              <div class="item-name"><?= $firmacek['firma_adi'] ?></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">
                  <div class="fox-sidebar">
                      <div class="sidebar-item">
                          <div class="sidebar-item-inner">
                              <h3 class="sidebar-item-title"><?= $firmacek['firma_adi'] ?></h3>
                              <div class="sidebar-author-info">
                                  <div class="sidebar-author-img">
                                      <img src="img\profile\avatar.jpg" alt="product" class="img-responsive">
                                  </div>
                                  <div class="sidebar-author-content">
                                      <h3><?= $firmacek['firma_yetkilisi'] ?></h3>
                                      <a href="#" class="view-profile"><i class="fa fa-circle" aria-hidden="true"></i>Online</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row profile-wrapper">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <ul class="profile-title">
                      <li class="active"><a href="#Profile" data-toggle="tab" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Şirket Hakkında</a></li>
                      <li><a href="#Products" data-toggle="tab" aria-expanded="false"><i class="fa fa-briefcase" aria-hidden="true"></i> Reklamlar ( <?= $sorgu->rowCount(); ?> )</a></li>
                      <li><a href="#Message" data-toggle="tab" aria-expanded="false"><i class="fa fa-plus" aria-hidden="true"></i> Reklam Ekle</a></li>
                  </ul>
              </div>
              <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                  <div class="tab-content">
                      <div class="tab-pane fade active in" id="Profile">
                          <div class="inner-page-details inner-page-content-box">
                              <h3>Faaliyet :</h3>
                              <p><?= $firmacek['faaliyet_alani'] ?></p><br>
                              <h3>Hizmet :</h3>
                              <p><?= $firmacek['hizmet_tanimi'] ?></p>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="Products">
                          <h3 class="title-inner-section">Reklamlar</h3>
                          <div class="inner-page-main-body">
                              <div class="row more-product-item-wrapper">
                                  <?php foreach ($reklamlar as $reklam) :
                                        $resimsor = $db->prepare('SELECT * FROM resimler WHERE reklam_id = :reklam_id LIMIT 1');
                                        $resimsor->execute(['reklam_id' => $reklam['id']]);
                                        $resim = $resimsor->fetch(PDO::FETCH_ASSOC);

                                        $katsor = $db->prepare('SELECT * FROM kategoriler WHERE id = :id');
                                        $katsor->execute(['id' => $reklam['kategori_id']]);
                                        $kat = $katsor->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                      <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                          <div class="more-product-item">
                                              <div class="more-product-item-img">
                                                  <img src="../<?= $resim['resim'] ?>" alt="product" class="img-responsive">
                                              </div>
                                              <div class="more-product-item-details">
                                                  <h4><a href="<?= $reklam['seo'] ?>"><?= $reklam['baslik'] ?></a></h4>
                                                  <div class="p-title"><?= $kat['kategori_adi'] ?></div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endforeach; ?>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="Message">
                          <h3 class="title-inner-section">Reklam Ekle</h3>
                          <div class="message-wrapper">
                              <div class="single-item-message">
                                  <div class="single-item-inner">
                                      <div class="item-content">
                                          <form id="reklam-form" novalidate="true">
                                              <fieldset>
                                                  <div class="row">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <input type="text" placeholder="Reklam Başlığı *" class="form-control" name="baslik" id="fbaslik" data-error="Başlık Giriniz" required="">
                                                              <div class="help-block with-errors"></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <textarea name="icerik" placeholder="İçerik Giriniz *" class="form-control textarea" id="icerik" cols="30" rows="10" data-error="İçerik Giriniz " required=""></textarea>
                                                              <div class="help-block with-errors"></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <select name="kategori_id" id="kategori_id" class="form-control">
                                                                  <?php $katcek = $db->prepare('SELECT * FROM kategoriler');
                                                                    $katcek->execute();
                                                                    $kategoriler = $katcek->fetchAll(PDO::FETCH_ASSOC);
                                                                    ?>
                                                                  <option value="0">Kategori Seçiniz</option>
                                                                  <?php
                                                                    foreach ($kategoriler as $kategori) :
                                                                    ?>
                                                                      <option value="<?= $kategori['id'] ?>"><?= $kategori['kategori_adi']; ?></option>
                                                                  <?php
                                                                    endforeach;
                                                                    ?>
                                                              </select>
                                                              <div class="help-block with-errors"></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <input type="file" class="form-control" name="resimler[]" id="resimler" multiple>
                                                              <div class="help-block with-errors"></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                                          <div class="form-group margin-bottom-none">
                                                              <button type="button" onclick="reklamVer('reklam-form', 'reklam-ver');return false;" class="update-btn disabled">Reklamı Yayınla</button>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                                          <div class="form-response"></div>
                                                      </div>
                                                  </div>
                                              </fieldset>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Profile Page End Here -->