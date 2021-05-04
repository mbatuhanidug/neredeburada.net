<?php
require_once("../admin_panel/inc/function.php");


isset($_POST['islem_turu']) ? $action = filter($_POST['islem_turu']) : exit();


if ($action == 'kullanici-register-form') :
    $kullanici_isim    = filter($_POST['kullanici_isim']);
    $kullanici_soyisim = filter($_POST['kullanici_soyisim']);
    $ad_soyad          = $kullanici_isim . ' ' . $kullanici_soyisim;
    $d_tarih           = filter($_POST['d_tarih']);
    $mail              = filter($_POST['mail']);
    $sifre             = filter($_POST['sifre']);
    $gsm               = filter($_POST['gsm']);
    $adres             = filter($_POST['adres']);
    $il                = filter($_POST['il']);
    $ilce              = filter($_POST['ilce']);
    $uyelik_turu       = 'kisi';
    $kaydet = $db->prepare("INSERT INTO kullanici SET
        ad_soyad  = :ad_soyad,
        d_tarih   = :d_tarih,
        mail      = :mail,
        sifre     = :sifre,
        gsm       = :gsm,
        adres     = :adres,
        il        = :il,
        ilce      = :ilce,
        uyelik_turu =: uyelik_turu
     ");
    $insert = $kaydet->execute(array(
        'ad_soyad' => $ad_soyad,
        'd_tarih'  => $d_tarih,
        'mail'     => $mail,
        'sifre'    => $sifre,
        'gsm'      => $gsm,
        'adres'    => $adres,
        'il'       => $il,
        'ilce'     => $ilce,
        'uyelik_turu' => $uyelik_turu
    ));
    if ($insert) {
        $FNC->sendResult(true);
    } else {
        $FNC->sendResult(False, 'Üye eklerken bir hata oluştu');
    }
endif;


if ($action == 'firma-register-form') :
    $firma_adi = filter($_POST['firma_adi']);
    $faaliyet_alani = filter($_POST['faaliyet_alani']);
    $sirket_tanimi = filter($_POST['sirket_tanimi']);
    $hizmet_tanimi = filter($_POST['hizmet_tanimi']);
    $firma_logo = $_FILES['firma_logo'];
    $firma_yetkilisi = filter($_POST['firma_yetkilisi']);
    $yetkili_tel = filter($_POST['yetkili_tel']);
    $firma_il = filter($_POST['firma_il']);
    $firma_ilce = filter($_POST['firma_ilce']);
    $firma_adres = filter($_POST['firma_adres']);
    $e_posta = filter($_POST['e_posta']);
    $web_sitesi = filter($_POST['web_sitesi']);
    $irtibat_tel = filter($_POST['irtibat_tel']);
    $irtibat_tel_iki = filter($_POST['irtibat_tel_iki']);
    $diger_bilgiler = filter($_POST['diger_bilgiler']);
    $uploads_dir     = '../admin_panel/production/images';
    @$tmp_name       = $_FILES['firma_logo']["tmp_name"];
    @$name           = $_FILES['firma_logo']["name"];
    $refimgyolF       = substr($uploads_dir, 3) . '/' . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$name");
    $kaydet = $db->prepare("INSERT INTO firmalar SET
        firma_adi  = :firma_adi,
        faaliyet_alani  = :faaliyet_alani,
        sirket_tanimi  = :sirket_tanimi,
        hizmet_tanimi  = :hizmet_tanimi,
        firma_logo  = :firma_logo,
        firma_yetkilisi  = :firma_yetkilisi,
        yetkili_tel  = :yetkili_tel,
        il  = :il,
        ilce  = :ilce,
        adres  = :adres,
        e_posta  = :e_posta,
        web_sitesi  = :web_sitesi,
        irtibat_tel  = :irtibat_tel,
        irtibat_tel_iki  = :irtibat_tel_iki,
        diger_bilgiler  = :diger_bilgiler
     ");
    $insert = $kaydet->execute(array(
        'firma_adi' => $firma_adi,
        'faaliyet_alani' => $faaliyet_alani,
        'sirket_tanimi' => $sirket_tanimi,
        'hizmet_tanimi' => $hizmet_tanimi,
        'firma_logo' => $refimgyolF,
        'firma_yetkilisi' => $firma_yetkilisi,
        'yetkili_tel' => $yetkili_tel,
        'il' => $firma_il,
        'ilce' => $firma_ilce,
        'adres' => $firma_adres,
        'e_posta' => $e_posta,
        'web_sitesi' => $web_sitesi,
        'irtibat_tel' => $irtibat_tel,
        'irtibat_tel_iki' => $irtibat_tel_iki,
        'diger_bilgiler' => $diger_bilgiler
    ));
    if ($insert) {
        $FNC->sendResult(true);
    } else {
        $FNC->sendResult(False, 'Firma eklerken bir hata oluştu');
    }
endif;
