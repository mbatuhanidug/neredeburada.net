<?php
require_once '../inc/function.php';

isset($_POST['islem_turu']) ? $action = filter($_POST['islem_turu']) : exit();


if ($action == 'admin-login') {
    isset($_POST['username']) ? $username = filter($_POST['username']) : exit();
    isset($_POST['password']) ? $password = filter($_POST['password']) : exit();

    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $FNC->sendResult(false, 'E-mail adresi geçerli formatta değil!', '1', 'username');
    } elseif (strlen($password) < 6) {
        $FNC->sendResult(false, 'Lütfen şifre en az 6 haneli giriniz!', '1', 'password');
    } else {
        $password = md5(sha1(md5(sha1($password))));
        $username = md5(sha1(md5(sha1($username))));
        $adminKontrol = $db->prepare('SELECT * FROM admin_login WHERE username = :username AND passwordd = :passwordd AND durum = :durum AND yetki = :yetki LIMIT 1');
        $adminKontrol->execute([
            'username'  => $username,
            'passwordd' => $password,
            'yetki'     => 99,
            'durum'     => 1
        ]);
        $admin = $adminKontrol->fetch(PDO::FETCH_ASSOC);
        if ($adminKontrol->rowCount() > 0) {
            if ($admin['giris_hakki'] <= 0) {
                $FNC->sendResult(false, 'Hesabınız blokelenmiştir. Lütfen sistem yöneticisine başvurunuz!', '', 'username');
            } else {
                $ayarkaydet = $db->prepare('UPDATE admin_login SET giris_hakki = :sayi WHERE username = :username');
                $update = $ayarkaydet->execute([
                    'sayi'       => 3,
                    'username'   => $username,
                ]);
                $_SESSION['admin'] = $admin;
                $FNC->sendResult(true, 'Giriş başarılı yönlendiriliyorsunuz.');
            }
        } else {
            $username = md5(sha1(md5(sha1(filter($_POST['username'])))));
            $adminKontrol = $db->prepare('SELECT * FROM admin_login WHERE username = :username LIMIT 1');
            $adminKontrol->execute([
                'username'  => $username,
            ]);
            $admin = $adminKontrol->fetch(PDO::FETCH_ASSOC);
            if ($adminKontrol->rowCount() > 0) {
                if ($admin['giris_hakki'] > 0) {
                    $ayarkaydet = $db->prepare('UPDATE admin_login SET giris_hakki = giris_hakki - :sayi WHERE username = :username');
                    $update = $ayarkaydet->execute([
                        'sayi'       => 1,
                        'username'   => $username,
                    ]);
                    if ($update) {
                        $adminKontrol = $db->prepare('SELECT * FROM admin_login WHERE username = :username LIMIT 1 ');
                        $adminKontrol->execute([
                            'username'  => $username,
                        ]);
                        $admin = $adminKontrol->fetch(PDO::FETCH_ASSOC);
                        $message = 'Parola yanlış. Lütfen tekrar deneyiniz. Kalan hakkınız : ' . $admin['giris_hakki'];
                        $ip = '85.104.66.120';
                        $ch = curl_init('http://ip-api.com/json/' . $ip . '?lang=en');
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                            'Content-Type: application/json'
                        ));
                        $result = curl_exec($ch);
                        $curl_put = curl_getinfo($ch);
                        curl_close($ch);
                        if (@!curl_errno($ch) and $curl_put["http_code"] == 200) { // curl üzerinde hata yoksa ve sayfaya başarılı(200) şekilde ulaşılmışsa api çalışmık demektir.
                            $api_result = json_decode($result, true);
                            if ($api_result['status'] == 'success') {
                                $kaydet = $db->prepare("INSERT INTO alogin SET
                                    admin_id    = :admin_id,
                                    user_argent = :user_argent,
                                    ip_adress   = :ip_adress,
                                    ulke        = :ulke,
                                    il          = :il,
                                    ilce        = :ilce,
                                    zip         = :zip,
                                    enlem       = :enlem,
                                    boylam      = :boylam,
                                    durum       = :durum
                                    ");

                                $insert = $kaydet->execute(array(
                                    'admin_id'    => $username,
                                    'user_argent' => $_SERVER['HTTP_USER_AGENT'],
                                    'ip_adress'   => $api_result['query'],
                                    'ulke'        => $api_result['country'],
                                    'il'          => $api_result['regionName'],
                                    'ilce'        => $api_result['city'],
                                    'zip'         => $api_result['zip'],
                                    'enlem'       => $api_result['lat'],
                                    'boylam'      => $api_result['lon'],
                                    'durum'       => 0
                                ));
                            }
                        }
                        $FNC->sendResult(false, $message, '1', 'username');
                    } else {
                        $FNC->sendResult(false, 'Giris hakkı güncelleme hata! Sistem yöneticisine başvurunuz', '1', 'username');
                    }
                } else {
                    $FNC->sendResult(false, 'Hesabınız blokelenmiştir. Lütfen sistem yöneticisine başvurunuz!', '1', 'username');
                }
            } else {
                $ip = '85.104.66.120';
                $ch = curl_init('http://ip-api.com/json/' . $ip . '?lang=en');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json'
                ));
                $result = curl_exec($ch);
                $curl_put = curl_getinfo($ch);
                curl_close($ch);

                if (@!curl_errno($ch) and $curl_put["http_code"] == 200) { // curl üzerinde hata yoksa ve sayfaya başarılı(200) şekilde ulaşılmışsa api çalışmık demektir.
                    $api_result = json_decode($result, true);
                    if ($api_result['status'] == 'success') {
                        $kaydet = $db->prepare("INSERT INTO alogin SET
                            admin_id    = :admin_id,
                            user_argent = :user_argent,
                            ip_adress   = :ip_adress,
                            ulke        = :ulke,
                            il          = :il,
                            ilce        = :ilce,
                            zip         = :zip,
                            enlem       = :enlem,
                            boylam      = :boylam,
                            durum       = :durum
                            ");

                        $insert = $kaydet->execute(array(
                            'admin_id'    => $username,
                            'user_argent' => $_SERVER['HTTP_USER_AGENT'],
                            'ip_adress'   => $api_result['query'],
                            'ulke'        => $api_result['country'],
                            'il'          => $api_result['regionName'],
                            'ilce'        => $api_result['city'],
                            'zip'         => $api_result['zip'],
                            'enlem'       => $api_result['lat'],
                            'boylam'      => $api_result['lon'],
                            'durum'       => 0
                        ));
                        if ($insert) {
                            $FNC->sendResult(false, 'Bu e-mail adresine ait üyelik bulunmamaktadır', '1', 'username');
                        } else {
                            $FNC->sendResult(false, 'alogin kaydetma hata! Sistem yöneticisine başvurun', '1', 'username');
                        }
                    } else {
                        $FNC->sendResult(false, 'İp istek hata!Sistem yöneticisine başvurun', '1', 'username');
                    }
                }
            }
        }
    }
}

if ($action == 'site-logo') {
    if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
        $uploads_dir     = '../production/images';
        @$tmp_name       = $_FILES['file']["tmp_name"];
        @$name           = $_FILES['file']["name"];
        $refimgyol       = substr($uploads_dir, 14) . "/" . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$name");
        $rowcount = rowCount('ayar');
        $sorgu = select('ayar');
        if ($rowcount > 0) {
            $duzenle = $db->prepare("UPDATE ayar SET
            logo     = :logo 
            WHERE id = :id");
            $update = $duzenle->execute(array(
                'logo' => $refimgyol,
                'id'   => $sorgu['id']
            ));
            if ($update) {
                if (!empty($_POST['logo-eski-yol'])) {
                    $resimyol = '../production/' . $_POST['logo-eski-yol'];
                    unlink($resimyol);
                }
                $FNC->sendResult(true, 'Logonuz güncelleniyor');
            } else {
                $FNC->sendResult(False, 'Logonuz güncellenirken bir hata oluştu');
            }
        } else {
            $kaydet = $db->prepare("INSERT INTO ayar SET
            logo    = :logo
            ");

            $insert = $kaydet->execute(array(
                'logo' =>  $refimgyol
            ));
            if ($insert) {
                $FNC->sendResult(true, 'Logonuz kaydediliyor');
            } else {
                $FNC->sendResult(False, 'Logo kaydetilirken bir hata oluştu');
            }
        }
    } else {
        $FNC->sendResult(False, 'Lütfen logo seçin');
    }
}

if ($action == 'site-favicon') {
    if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
        $uploads_dir     = '../production/images';
        @$tmp_name       = $_FILES['file']["tmp_name"];
        @$name           = $_FILES['file']["name"];
        $refimgyol       = substr($uploads_dir, 14) . "/" . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$name");
        $rowcount       = rowCount('ayar');
        $sorgu          = select('ayar');
        if ($rowcount > 0) {
            $duzenle = $db->prepare("UPDATE ayar SET
            favicon     = :favicon 
            WHERE id = :id");
            $update = $duzenle->execute(array(
                'favicon' => $refimgyol,
                'id'      => $sorgu['id']
            ));
            if ($update) {
                if (!empty($_POST['favicon-eski-yol'])) {
                    $resimyol = '../production/' . $_POST['favicon-eski-yol'];
                    unlink($resimyol);
                }
                $FNC->sendResult(true, 'Faviconunuz güncelleniyor');
            } else {
                $FNC->sendResult(False, 'Faviconunuz güncellenirken bir hata oluştu');
            }
        } else {
            $kaydet = $db->prepare("INSERT INTO ayar SET
            favicon    = :favicon
            ");

            $insert = $kaydet->execute(array(
                'favicon' =>  $refimgyol
            ));
            if ($insert) {
                $FNC->sendResult(true, 'Faviconunuz kaydediliyor');
            } else {
                $FNC->sendResult(False, 'Faviconunuz kaydetilirken bir hata oluştu');
            }
        }
    } else {
        $FNC->sendResult(False, 'Lütfen favicon seçin');
    }
}

if ($action == 'genel-ayar') {
    $title        = filter($_POST['title']);
    $desc_ription = filter($_POST['desc_ription']);
    $keywords     = filter($_POST['keywords']);
    $author       = filter($_POST['author']);
    $rowcount     = rowCount('ayar');
    $sorgu        = select('ayar');
    if ($rowcount > 0) {
        $update = $db->prepare('UPDATE ayar SET title = :title , desc_ription = :desc_ription, keywords = :keywords , author = :author WHERE id = :id ');
        $update->execute(['title' => $title, 'desc_ription' => $desc_ription, 'keywords' => $keywords, 'author' => $author, 'id' => $sorgu['id']]);
        if ($update) {
            $FNC->sendResult(true, 'Ayarlarınız güncelleniyor...');
        } else {
            $FNC->sendResult(false, 'Ayar güncelleme hata!');
        }
    } else {
        $save = $db->prepare('INSERT INTO ayar SET title = :title , desc_ription = :desc_ription, keywords = :keywords , author = :author');
        $save->execute(['title' => $title, 'desc_ription' => $desc_ription, 'keywords' => $keywords, 'author' => $author]);
        if ($save) {
            $FNC->sendResult(true, 'Ayarlarınız kaydediliyor...');
        } else {
            $FNC->sendResult(false, 'Ayar kaydetme hata!');
        }
    }
}

if ($action == 'sosyal-ayar') {
    $facebook  = filter($_POST['facebook']);
    $twitter   = filter($_POST['twitter']);
    $instagram = filter($_POST['instagram']);
    $rowcount  = rowCount('ayar');
    $sorgu     = select('ayar');
    if ($rowcount > 0) {
        $update = $db->prepare('UPDATE ayar SET facebook = :facebook , twitter = :twitter, instagram = :instagram WHERE id = :id ');
        $update->execute(['facebook' => $facebook, 'twitter' => $twitter, 'instagram' => $instagram, 'id' => $sorgu['id']]);
        if ($update) {
            $FNC->sendResult(true, 'Ayarlarınız güncelleniyor...');
        } else {
            $FNC->sendResult(false, 'Ayar güncelleme hata!');
        }
    } else {
        $save = $db->prepare('INSERT INTO ayar SET facebook = :facebook , twitter = :twitter, instagram = :instagram ');
        $save->execute(['facebook' => $facebook, 'twitter' => $twitter, 'instagram' => $instagram]);
        if ($save) {
            $FNC->sendResult(true, 'Ayarlarınız kaydediliyor...');
        } else {
            $FNC->sendResult(false, 'Ayar kaydetme hata!');
        }
    }
}

if ($action == 'iletisim-ayar') {
    $tel   = filter($_POST['tel']);
    $il    = filter($_POST['il']);
    $ilce  = filter($_POST['ilce']);
    $adres = filter($_POST['adres']);
    $rowcount  = rowCount('ayar');
    $sorgu     = select('ayar');
    if ($rowcount > 0) {
        $update = $db->prepare('UPDATE ayar SET tel = :tel , il = :il, ilce = :ilce , adres = :adres WHERE id = :id ');
        $update->execute(['tel' => $tel, 'il' => $il, 'ilce' => $ilce, 'adres' => $adres, 'id' => $sorgu['id']]);
        if ($update) {
            $FNC->sendResult(true, 'Ayarlarınız güncelleniyor...');
        } else {
            $FNC->sendResult(false, 'Ayar güncelleme hata!');
        }
    } else {
        $save = $db->prepare('INSERT INTO ayar SET tel = :tel , il = :il, instagram = :instagram , adres = :adres');
        $save->execute(['tel' => $tel, 'il' => $il, 'ilce' => $ilce, 'adres' => $adres]);
        if ($save) {
            $FNC->sendResult(true, 'Ayarlarınız kaydediliyor...');
        } else {
            $FNC->sendResult(false, 'Ayar kaydetme hata!');
        }
    }
}

if ($action == 'hatali-giris') {
    $id = (int)filter($_POST['id']);
    $update = $db->prepare('UPDATE alogin SET durum = :durum WHERE id = :id ');
    $update->execute(['durum' => 1, 'id' => $id]);
    if ($update) {
        $FNC->sendResult(true, 'Ayarlarınız güncelleniyor...');
    } else {
        $FNC->sendResult(false, 'Ayar güncelleme hata!');
    }
}

if ($action == 'firma-durum-guncelle') {
    $id    = (int) filter($_POST['id']);
    $durum = (int) filter($_POST['durum']);
    $aciklama = filter($_POST['aciklama']);
    if (isset($_POST['durum_mail_gonder']) && $_POST['durum_mail_gonder'] == 'on') {
        $from = "dogannsebati@gmail.com";
        $to = filter($_POST['e_posta']);
        $subject = "Firma Durum";
        $message = $aciklama;
        $headers = "From:" . $from;
        mail($to, $subject, $message, $headers);
        echo "The email message was sent.";
    }
    $update = $db->prepare('UPDATE firmalar SET durum = :durum WHERE id = :id ');
    $update->execute(['durum' => $durum, 'id' => $id]);
    if ($update) {
        $FNC->sendResult(true, 'Ayarlarınız güncelleniyor...');
    } else {
        $FNC->sendResult(false, 'Firma durum güncelleme hata!');
    }
}
