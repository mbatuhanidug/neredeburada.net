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
            url: 'ajax.php',
            data: serialized,
            success: function(data) {
                var response = jQuery.parseJSON(data);
                if (response.success) {
                    $('#k-alert').hide();
                    $('#' + form_name)[0].reset();
                    swal("Başarılı!", 'Başarıyla kayıt oldunuz.Giriş yapabilirsiniz.', "success");
                } else {
                    $('#k-alert').hide();
                    swal("Hata!", response.message, "warning");
                }
            },
        });
    }
}

function firmaKayit(form_name, islem_turu) {
    var emailPattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    var firma_adi = $('input[id=firma_adi]').val();
    var faaliyet_alani = $('input[id=faaliyet_alani]').val();
    var sirket_tanimi = $('textarea[id=sirket_tanimi]').val();
    var hizmet_tanimi = $('textarea[id=hizmet_tanimi]').val();
    var firma_logo = $('input[id=firma_logo]').val();
    var firma_yetkilisi = $('input[id=firma_yetkilisi]').val();
    var yetkili_tel = $('input[id=yetkili_tel]').val();
    var firma_il = $('input[id=firma_il]').val();
    var firma_ilce = $('input[id=firma_ilce]').val();
    var firma_adres = $('textarea[id=firma_adres]').val();
    var e_posta = $('input[id=e_posta]').val();
    var web_sitesi = $('input[id=web_sitesi]').val();
    var irtibat_tel = $('input[id=irtibat_tel]').val();
    var irtibat_tel_iki = $('input[id=irtibat_tel_iki]').val();
    var diger_bilgiler = $('textarea[id=diger_bilgiler]').val();
    if (firma_adi == 0) {
        swal("Hata!", "Lütfen firma adı giriniz", "warning");
    } else if (faaliyet_alani == 0) {
        swal("Hata!", "Lütfen faaliyet alanı giriniz", "warning");
    } else if (sirket_tanimi == 0) {
        swal("Hata!", "Lütfen şirket tanımı giriniz", "warning");
    } else if (hizmet_tanimi == 0) {
        swal("Hata!", "Lütfen hizmet tanımı giriniz", "warning");
    } else if ($('#firma_logo_value').val() == 0) {
        swal("Hata!", "Lütfen logo seçiniz", "warning");
    } else if (firma_yetkilisi == 0) {
        swal("Hata!", "Lütfen firma yetkilisi giriniz", "warning");
    } else if (yetkili_tel == 0) {
        swal("Hata!", "Lütfen firma yetkilisi telefon numarası giriniz", "warning");
    } else if (yetkili_tel.length < 11) {
        swal("Hata!", "Lütfen telefon numaranızı 11 haneli giriniz", "warning");
    } else if (firma_il == 0) {
        swal("Hata!", "Lütfen ilinizi seçiniz", "warning");
    } else if (firma_ilce == 0) {
        swal("Hata!", "Lütfen ilçenizi seçiniz", "warning");
    } else if (firma_adres == 0) {
        swal("Hata!", "Lütfen adresinizi giriniz", "warning");
    } else if (e_posta == 0) {
        swal("Hata!", "Lütfen e-mail adresinizi giriniz", "warning");
    } else if (!emailPattern.test(e_posta)) {
        swal("Hata!", "E-mail adresiniz geçerli formatta değil", "warning");
    } else if (web_sitesi == 0) {
        swal("Hata!", "Lütfen web sitesi giriniz", "warning");
    } else if (irtibat_tel == 0) {
        swal("Hata!", "Lütfen irtibat telefon numarası giriniz", "warning");
    } else if (irtibat_tel.length < 11) {
        swal("Hata!", "Lütfen irtibat telefon numaranızı 11 haneli giriniz", "warning");
    } else if (irtibat_tel_iki != 0 && irtibat_tel_iki.length < 11) {
        swal("Hata!", "Lütfen irtibat telefon(2) numaranızı 11 haneli giriniz", "warning");
    } else if (diger_bilgiler == 0) {
        swal("Hata!", "Lütfen ekstra bilgileri giriniz", "warning");
    } else {
        var formData = new FormData($('#' + form_name)[0]);
        formData.append('islem_turu', islem_turu);
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: formData,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            success: function(data) {
                var response = jQuery.parseJSON(data);
                if (response.success) {
                    $('#' + form_name)[0].reset();
                    swal("Başarılı!", "Firma kaydınız alınmıştır. Onaylanınca e-mail adresinize bilgilendirme mesajı gönderilecektir.", "success");
                } else {
                    swal("Hata!", response.message, "warning");
                }
            },
        });
    }
}


function kullaniciGiris(form_name, islem_turu) {
    var serialized = $("#" + form_name).serialize() + "&islem_turu=" + islem_turu;
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: serialized,
        success: function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {
                $(location).attr('href', 'index');
            } else {
                $('#login-button').trigger('click');
                swal("Hata!", response.message, "warning");
            }
        },
    });
}

function firmaGiris(form_name, islem_turu) {
    var serialized = $("#" + form_name).serialize() + "&islem_turu=" + islem_turu;
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: serialized,
        success: function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {
                $(location).attr('href', 'index');
            } else {
                $('#login-button').trigger('click');
                swal("Hata!", response.message, "warning");
            }
        },
    });
}

function profilGuncelle(form_name, islem_turu) {
    var serialized = $("#" + form_name).serialize() + "&islem_turu=" + islem_turu;
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: serialized,
        success: function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {
                window.location.reload();
            } else {
                swal("Hata!", response.message, "warning");
            }
        },
    });
}


function sifreGuncelle(form_name, islem_turu) {
    var serialized = $("#" + form_name).serialize() + "&islem_turu=" + islem_turu;
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: serialized,
        success: function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {
                let timerInterval;
                Swal.fire({
                    title: 'Şifre Güncelleme!',
                    html: 'Şifreniz güncellendi. <b></b> Çıkış yapılıyor....',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $(location).attr('href', 'logout');
                    }
                })

            } else {
                swal("Hata!", response.message, "warning");
            }
        },
    });
}


function firmasifreGuncelle(form_name, islem_turu) {
    var serialized = $("#" + form_name).serialize() + "&islem_turu=" + islem_turu;
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: serialized,
        success: function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {
                let timerInterval;
                Swal.fire({
                    title: 'Şifre Güncelleme!',
                    html: 'Şifreniz güncellendi. <b></b> Çıkış yapılıyor....',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $(location).attr('href', 'logout');
                    }
                })

            } else {
                swal("Hata!", response.message, "warning");
            }
        },
    });
}

function reklamVer(form_name, islem_turu) {
    var formData = new FormData($('#' + form_name)[0]);
    formData.append('islem_turu', islem_turu);
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: formData,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        success: function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success) {

            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2500
                });
            }
        },
    });
}