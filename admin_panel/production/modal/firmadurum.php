<?php
require_once '../../inc/function.php';
$id = (int)$_GET['firma_id'];

$sorgu = $db->prepare('SELECT * FROM firmalar WHERE id = :id LIMIT 1');
$sorgu->execute(['id' => $id]);
$firma = $sorgu->fetch(PDO::FETCH_ASSOC);

?>
<style>
    .c {
        padding: 0 3px 6px;
        position: relative;
        width: 100%;
        /* float: left; */
        /* clear: both; */
        margin-top: 5px;
    }

    body {
        background: lightblue;
    }

    article {
        /*padding: 4em;*/
    }

    img {
        width: 500px;
    }

    .monitor {
        width: 340px;
        height: 194px;
        overflow-y: scroll;
        border: solid 1em #333;
        border-radius: .5em;
    }

    .monitor::-webkit-scrollbar {
        width: 15px;
    }

    .monitor::-webkit-scrollbar-thumb {
        background: #666;
    }

    ::-webkit-scrollbar-track {
        background-color: #888;
    }

    .stand:before {
        content: "";
        display: block;
        position: relative;
        background: #222;
        width: 150px;
        height: 50px;
        top: 244px;
        left: 82px;
    }

    .stand:after {
        content: "";
        display: block;
        position: relative;
        background: #333;
        border-top-left-radius: .5em;
        border-top-right-radius: .5em;
        width: 300px;
        height: 15px;
        top: 50px;
        left: 17px;
    }

    blockquote {
        color: red;
        font-weight: 700;
    }
</style>

<div role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                    <div>
                        <h2><?= $firma['firma_adi'] . ' durum güncelle' ?> <button type="button" class="close" data-dismiss="modal" title="Detay Sekmesini Kapat">&times;</button></h2>

                    </div>
                    <div class="c">
                        <form id="firma-durum-guncelle">
                            <input type="hidden" name="id" value="<?= $firma['id']; ?>">
                            <input type="hidden" name="e_posta" value="<?= $firma['e_posta']; ?>">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Durum</label>
                                    <select id="inputState" class="form-control" name="durum">
                                        <option <?php if ($firma['durum'] == 2) : ?> selected <?php endif; ?> value="2">Onay Bekliyor</option>
                                        <option <?php if ($firma['durum'] == 0) : ?> selected <?php endif; ?> value="2">Pasif</option>
                                        <option <?php if ($firma['durum'] == 1) : ?> selected <?php endif; ?> value="2">Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="aciklama">Açıklama</label>
                                <input type="text" class="form-control" id="aciklama" name="aciklama">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="durum_mail_gonder" style="cursor:pointer" name="durum_mail_gonder">
                                    <label class="form-check-label" for="gridCheck">
                                        E-mail gönder
                                    </label>
                                </div>
                            </div>
                            <button type="button" onclick="firmaDurumOnay('firma-durum-guncelle','firma-durum-guncelle');return false;" class="btn btn-primary">Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function firmaDurumOnay(form_name, islem_turu) {
        var formData = new FormData($('#' + form_name)[0]);
        formData.append('islem_turu', islem_turu);
        $.ajax({
            type: "POST",
            url: '../dao/ajax.php',
            data: formData,
            processData: false,
            contentType: false,
        }).done(function(data) {
            var response = jQuery.parseJSON(data);
           /* if (response.success) {
                window.location.reload();
            } else {
                $("#faviconsonuc").show();
                $("#faviconsonuc").html('<div class="alert alert-danger mt-5">' + response.message + '</div>');
                $("#faviconsonuc").fadeOut(5000);
            }*/
        });
    }
</script>