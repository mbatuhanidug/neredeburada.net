function onlyNumber(input_id) {
    $("#" + input_id).on("keyup", function() {
        var ohmis = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(ohmis);
    });
}

/* LOGO ÖN İZLEME FORM */
$("#fileUserImage").change(function(e) {
    $("#imgInfo").hide();
    $("#imgPreview").show();
    $("#imgPreview").attr('src', URL.createObjectURL(e.target.files[0]));
});

$("#clearFile").click(function(e) {
    e.preventDefault();
    $("#imgInfo").show();
    $("#imgPreview").hide();
    document.getElementById('fileUserImage').value = null;
});

/* FAVİCON ÖN İZLEME FORM */
$("#fileUserImageF").change(function(e) {
    $("#imgInfoF").hide();
    $("#imgPreviewF").show();
    $("#imgPreviewF").attr('src', URL.createObjectURL(e.target.files[0]));
});
$("#clearFileF").click(function(e) {
    e.preventDefault();
    $("#imgInfoF").show();
    $("#imgPreviewF").hide();
    document.getElementById('fileUserImageF').value = null;
});

/* LOGO YÜKLEME */
function siteLogo(form_name, islem_turu) {
    var formData = new FormData($('#' + form_name)[0]);
    formData.append('islem_turu', islem_turu);
    $.ajax({
        type: "POST",
        url: '../dao/ajax.php',
        data: formData,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
    }).done(function(data) {
        var response = jQuery.parseJSON(data);
        if (response.success) {
            window.location.reload();
        } else {
            $("#logosonuc").show();
            $("#logosonuc").html('<div class="alert alert-danger mt-5">' + response.message + '</div>');
            $("#logosonuc").fadeOut(5000);
        }
    });
}

/* FAVİCON YÜKLEME */
function siteFavicon(form_name, islem_turu) {
    var formData = new FormData($('#' + form_name)[0]);
    formData.append('islem_turu', islem_turu);
    $.ajax({
        type: "POST",
        url: '../dao/ajax.php',
        data: formData,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
    }).done(function(data) {
        var response = jQuery.parseJSON(data);
        if (response.success) {
            window.location.reload();
        } else {
            $("#faviconsonuc").show();
            $("#faviconsonuc").html('<div class="alert alert-danger mt-5">' + response.message + '</div>');
            $("#faviconsonuc").fadeOut(5000);
        }
    });
}

/* GENEL AYAR FORM */
function genelAyar(form_name, islem_turu) {
    var title = $('input[id=title]').val();
    var description = $('input[id=desc_ription]').val();
    var keywords = $('input[id=keywords]').val();
    var author = $('input[id=author]').val();
    if (title == 0) {
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen site başlığı giriniz</div>');
        $('input[id=title]').focus();
        $('input[id=title]').css("border", "1px solid red");
    } else if (description == 0) {
        $('input[id=title]').css("border", "1px solid green");
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen site açıklaması giriniz</div>');
        $('input[id=desc_ription]').focus();
        $('input[id=desc_ription]').css("border", "1px solid red");
    } else if (keywords == 0) {
        $('input[id=desc_ription]').css("border", "1px solid green");
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen site anahtarı giriniz</div>');
        $('input[id=keywords]').focus();
        $('input[id=keywords]').css("border", "1px solid red");
    } else if (author == 0) {
        $('input[id=keywords]').css("border", "1px solid green");
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen site yazarı giriniz</div>');
        $('input[id=author]').focus();
        $('input[id=author]').css("border", "1px solid red");
    } else {
        $('input[id=author]').css("border", "1px solid green");
        $('#sonuc').hide();
        var formData = new FormData($('#' + form_name)[0]);
        formData.append('islem_turu', islem_turu);
        $.ajax({
            beforeSend: function() {
                $("#sonuc").html('<div class="alert alert-success" role="alert"> <div class="spinner-border"></div> Ayarlarınız kaydediliyor. Lütfen bekleyiniz</div>');
            },
            type: "POST",
            url: '../dao/ajax.php',
            data: formData,
            processData: false,
            contentType: false,
        }).done(function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {
                window.location.reload();
            } else {
                $("#sonuc").show();
                $("#sonuc").html('<div class="alert alert-danger mt-5">' + response.message + '</div>');
                $("#sonuc").fadeOut(5000);
            }
        });
    }

}


/* SOSYAL AYAR FORM */
function sosyalAyar(form_name, islem_turu) {
    var facebook = $('input[id=facebook]').val();
    var twitter = $('input[id=twitter]').val();
    var instagram = $('input[id=instagram]').val();
    if (facebook == 0) {
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen facebook linkinizi giriniz</div>');
        $('input[id=facebook]').focus();
        $('input[id=facebook]').css("border", "1px solid red");
    } else if (twitter == 0) {
        $('input[id=facebook]').css("border", "1px solid green");
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen twitter linkinizi giriniz</div>');
        $('input[id=twitter]').focus();
        $('input[id=twitter]').css("border", "1px solid red");
    } else if (instagram == 0) {
        $('input[id=twitter]').css("border", "1px solid green");
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen instagram linkinizi giriniz</div>');
        $('input[id=instagram]').focus();
        $('input[id=instagram]').css("border", "1px solid red");
    } else {
        $('input[id=instagram]').css("border", "1px solid green");
        $('#sonuc').hide();
        var formData = new FormData($('#' + form_name)[0]);
        formData.append('islem_turu', islem_turu);
        $.ajax({
            beforeSend: function() {
                $("#sonuc").html('<div class="alert alert-success" role="alert"> <div class="spinner-border"></div> Ayarlarınız kaydediliyor. Lütfen bekleyiniz</div>');
            },
            type: "POST",
            url: '../dao/ajax.php',
            data: formData,
            processData: false,
            contentType: false,
        }).done(function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {
                window.location.reload();
            } else {
                $("#sonuc").show();
                $("#sonuc").html('<div class="alert alert-danger mt-5">' + response.message + '</div>');
                $("#sonuc").fadeOut(5000);
            }
        });
    }

}


/* İLETİŞİM AYAR FORM */
function iletisimAyar(form_name, islem_turu) {
    var tel = $('input[id=tel]').val();
    var il = $('select[id=il]').val();
    var ilce = $('select[id=ilce]').val();
    var adres = $('textarea[id=adres]').val();
    if (tel == 0) {
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen telefon numarası giriniz</div>');
        $('input[id=tel]').focus();
        $('input[id=tel]').css("border", "1px solid red");
    } else if (tel.length < 10 || tel.length > 11) {
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen telefon numarasını 11 haneli giriniz</div>');
        $('input[id=tel]').focus();
        $('input[id=tel]').css("border", "1px solid red");
    } else if (il == 0) {
        $('input[id=tel]').css("border", "1px solid green");
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen il seçiniz</div>');
        $('select[id=il]').focus();
        $('select[id=il]').css("border", "1px solid red");
    } else if (ilce == 0) {
        $('select[id=il]').css("border", "1px solid green");
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen ilçe seçiniz</div>');
        $('select[id=ilce]').focus();
        $('select[id=ilce]').css("border", "1px solid red");
    } else if (adres == 0) {
        $('select[id=ilce]').css("border", "1px solid green");
        $("#sonuc").show();
        $("#sonuc").html('<div class="alert alert-danger mt-5">Lütfen adresinizi giriniz</div>');
        $('textarea[id=adres]').focus();
        $('textarea[id=adres]').css("border", "1px solid red");
    } else {
        $('textarea[id=adres]').css("border", "1px solid green");
        $('#sonuc').hide();
        var formData = new FormData($('#' + form_name)[0]);
        formData.append('islem_turu', islem_turu);
        $.ajax({
            beforeSend: function() {
                $("#sonuc").html('<div class="alert alert-success" role="alert"> <div class="spinner-border"></div> Ayarlarınız kaydediliyor. Lütfen bekleyiniz</div>');
            },
            type: "POST",
            url: '../dao/ajax.php',
            data: formData,
            processData: false,
            contentType: false,
        }).done(function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {
                window.location.reload();
            } else {
                $("#sonuc").show();
                $("#sonuc").html('<div class="alert alert-danger mt-5">' + response.message + '</div>');
                $("#sonuc").fadeOut(5000);
            }
        });
    }

}


function firmaDetay(ID) {
    $('#firma_modal_form').modal('show');
    $.get("modal/firmaDetay.php?firma_id=" + ID, function(data) {
        $('#firma_modal_form_content').html(data);
    });
}

function firmaDurum(ID) {
    $('#firma_modal_form').modal('show');
    $.get("modal/firmadurum.php?firma_id=" + ID, function(data) {
        $('#firma_modal_form_content').html(data);
    });
}

/* hatalı giriş okudum */

function hataliGiris(id) {
    $.ajax({
        type: "POST",
        url: '../dao/ajax.php',
        data: { id: id, islem_turu: 'hatali-giris' },
    }).done(function(data) {
        var response = jQuery.parseJSON(data);
        if (response.success) {
            window.location.reload();
        } else {
            $("#sonuc").show();
            $("#sonuc").html('<div class="alert alert-danger mt-5">' + response.message + '</div>');
            $("#sonuc").fadeOut(5000);
        }
    });
}