function onlyLetter(input_id) {
    $("#" + input_id).on("keyup", function() {
        var ohmis = $(this).val().replace(/[^a-zA-Z-32]/g, '');
        $(this).val(ohmis);
    });
}

function onlyNumber(input_id) {
    $("#" + input_id).on("keyup", function() {
        var ohmis = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(ohmis);
    });
}




function kullaniciKayit(form_name, islem_turu) {
    var emailPattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    var kullanici_isim = $('input[id=kullanici_isim]').val();
    var kullanici_soyisim = $('input[id=kullanici_soyisim]').val();
    var d_tarih = $('input[id=d_tarih]').val();
    var mail = $('input[id=mail]').val();
    var sifre = $('input[id=sifre]').val();
    var gsm = $('input[id=gsm]').val();
    var adres = $('input[id=adres]').val();
    var il = $('select[id=il]').val();
    var ilce = $('select[id=ilce]').val();
    if (kullanici_isim == 0) {
        swal("Hata!", "Lütfen isminizi giriniz", "warning");
        console.log(d_tarih);
    } else if (kullanici_soyisim == 0) {
        swal("Hata!", "Lütfen soyisminizi giriniz", "warning");
    } else if (d_tarih == "") {
        swal("Hata!", "Lütfen doğum tarihinizi giriniz", "warning");
    } else if (mail == 0) {
        swal("Hata!", "Lütfen e-mail adresinizi giriniz", "warning");
    } else if (!emailPattern.test(mail)) {
        swal("Hata!", "E-mail adresiniz geçerli formatta değil", "warning");
    } else if (sifre == 0) {
        swal("Hata!", "Lütfen şifrenizi giriniz", "warning");
    } else if (sifre.length < 6) {
        swal("Hata!", "Lütfen şifrenizi en az 6 karakter giriniz", "warning");
    } else if (gsm == 0) {
        swal("Hata!", "Lütfen telefon numaranızı giriniz", "warning");
    } else if (gsm.length < 11) {
        swal("Hata!", "Lütfen telefon numaranızı 11 haneli giriniz", "warning");
    } else if (adres == 0) {
        swal("Hata!", "Lütfen adresinizi giriniz", "warning");
    } else if (il == 0) {
        swal("Hata!", "Lütfen ilinizi seçiniz", "warning");
    } else if (ilce == 0) {
        swal("Hata!", "Lütfen ilçenizi seçiniz", "warning");
    } else {
        var serialized = $("#" + form_name).serialize() + "&islem_turu=" + islem_turu;
        $.ajax({
            beforeSend: function() {
                $('#k-alert').show('slow');
                $('#k-alert-text').html('<div class="spinner-border"></div> Kayıt olunuyor. Lütfen bekleyin.');
            },
            type: 'POST',
            url: 'dao/user.php',
            data: serialized,
            success: function(data) {
                var response = jQuery.parseJSON(data);
                if (response.success) {
                    $('#parola-sıfırla-form').hide();
                    $('#onay-kontrol-form').show();
                } else {
                    $("#captcha-resim").attr("src", "inc/captcha.php?d=" + Math.random());
                    $('#parola-alert').show();
                    $('#parola-alert').html(response.message);
                    $('#parola-email-kontrol').removeClass();
                    $('#parola-email-kontrol').addClass('btn btn-danger btn-sm');
                    $('#parola-email-kontrol').html("Devam");
                }
            },
        });
    }
}