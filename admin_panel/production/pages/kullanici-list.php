<?php
$sorgu = $db->prepare('SELECT * FROM kullanici');
$sorgu->execute();
$kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kullanıcı Listesi</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">
                                            Tarih
                                        </th>
                                        <th class="column-title">İsim Soyisim </th>
                                        <th class="column-title">İl / İlçe </th>
                                        <th class="column-title">Adres </th>
                                        <th class="column-title">E-Mail </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $say = 0;
                                    foreach ($kullanicilar as $kullanici) :
                                        if ($say % 2 == 0) {
                                            $class = 'odd pointer';
                                        } else {
                                            $class = 'even pointer';
                                        }

                                    ?>
                                        <tr class="<?= $class ?>">
                                            <td class="a-center ">
                                                <?= $kullanici['tarih'] ?>
                                            </td>
                                            <td class=" "><?= $kullanici['ad_soyad'] ?></td>
                                            <td class=" "><?= $kullanici['il'] ?> <br> <?= $kullanici['ilce'] ?></td>
                                            <td class=" "><?= $kullanici['adres'] ?> </td>
                                            <td class=" "><?= $kullanici['mail'] ?></td>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>