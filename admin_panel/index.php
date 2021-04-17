<?php
if (isset($_SESSION['admin'])) {
    header("Location : production/");
    die();
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <meta name="title" content="Türkiye Yerel Reklam Arama Ve Firma Rehberi">
    <meta name="description" content="Türkiyenin yerel reklam,firma ve nöbetçi eczaneleri arayabileceğiniz yerel arama web sitesi">
    <meta name="keywords" content="firma,reklam,eczane">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <meta name="language" content="Turkish">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Nerede Burada">
    <title>Nerede Burada CMD PANEL </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    html {
        height: 100%
    }

    ::-moz-selection {
        background: #fe57a1;
        color: #fff;
        text-shadow: none;
    }

    ::selection {
        background: #fe57a1;
        color: #fff;
        text-shadow: none;
    }

    body {
        background-image: radial-gradient(cover, rgba(92, 100, 111, 1) 0%, rgba(31, 35, 40, 1) 100%), url('http://i.minus.com/io97fW9I0NqJq.png')
    }

    .login {
        background: #eceeee;
        border: 1px solid #42464b;
        border-radius: 6px;
        height: 257px;
        margin: 20px auto 0;
        width: 298px;
    }

    .login h1 {
        background-image: linear-gradient(top, #f1f3f3, #d4dae0);
        border-bottom: 1px solid #a6abaf;
        border-radius: 6px 6px 0 0;
        box-sizing: border-box;
        color: #727678;
        display: block;
        height: 43px;
        font: 600 14px/1 'Open Sans', sans-serif;
        padding-top: 14px;
        margin: 0;
        text-align: center;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2), 0 1px 0 #fff;
    }

    input[type="password"],
    input[type="text"] {
        background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(top, #d6d7d7, #dee0e0);
        border: 1px solid #a1a3a3;
        border-radius: 4px;
        box-shadow: 0 1px #fff;
        box-sizing: border-box;
        color: #696969;
        height: 39px;
        margin: 31px 0 0 29px;
        padding-left: 37px;
        transition: box-shadow 0.3s;
        width: 240px;
    }

    input[type="password"]:focus,
    input[type="text"]:focus {
        box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
        outline: 0;
    }

    .show-password {
        display: block;
        height: 16px;
        margin: 26px 0 0 28px;
        width: 87px;
    }

    input[type="checkbox"] {
        cursor: pointer;
        height: 16px;
        opacity: 0;
        position: relative;
        width: 64px;
    }

    input[type="checkbox"]:checked {
        left: 29px;
        width: 58px;
    }

    .toggle {
        background: url(http://i.minus.com/ibitS19pe8PVX6.png) no-repeat;
        display: block;
        height: 16px;
        margin-top: -20px;
        width: 87px;
        z-index: -1;
    }

    input[type="checkbox"]:checked+.toggle {
        background-position: 0 -16px
    }

    .forgot {
        color: #7f7f7f;
        display: inline-block;
        float: right;
        font: 12px/1 sans-serif;
        left: -19px;
        position: relative;
        text-decoration: none;
        top: 5px;
        transition: color .4s;
    }

    .forgot:hover {
        color: #3b3b3b
    }

    input[type="button"] {
        width: 240px;
        height: 35px;
        display: block;
        font-family: Arial, "Helvetica", sans-serif;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        text-shadow: 1px 1px 0px #37a69b;
        padding-top: 6px;
        margin: 29px 0 0 29px;
        position: relative;
        cursor: pointer;
        border: none;
        background-color: #37a69b;
        background-image: linear-gradient(top, #3db0a6, #3111);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
    }

    .shadow {
        background: #000;
        border-radius: 12px 12px 4px 4px;
        box-shadow: 0 0 20px 10px #000;
        height: 12px;
        margin: 30px auto;
        opacity: 0.2;
        width: 270px;
    }


    input[type="button"]:active {
        top: 3px;
        box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
    }

    #alert {
        margin: 20px auto 0;
        width: 450px;
    }
</style>

<body>
    <form id="admin-login-form">
        <div class="login">
            <input type="text" placeholder="Admin E-mail" id="username" name="username">
            <input type="password" placeholder="Admin Şifre" id="password" name="password">
            <input type="button" onclick="adminLogin('admin-login-form','admin-login');return false;" value="Giriş Yap">
        </div>
        <div class="shadow"></div>

        <div id="alert">
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>


<script>
    function adminLogin(form_name, islem_turu) {
        var emailPattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        var serialized = $("#" + form_name).serialize() + "&islem_turu=" + islem_turu;
        var username = $('input[id=username]').val();
        var password = $('input[id=password]').val();
        if (username == 0) {
            $('#alert').html('<div class="alert alert-danger" role="alert"> Lütfen e-mail adresi giriniz! </div>');
            $('input[id=username]').focus();
            $('input[id=username]').css("border", "1px solid red");
        } else if (!emailPattern.test(username)) {
            $('#alert').html('<div class="alert alert-danger" role="alert"> E-mail adresi geçerli formatta değil! </div>');
            $('input[id=username]').focus();
            $('input[id=username]').css("border", "1px solid red");
        } else if (password == 0) {
            $('input[id=username]').css("border", "1px solid green");
            $('#alert').html('<div class="alert alert-danger" role="alert"> Lütfen şifre giriniz! </div>');
            $('input[id=password]').focus();
            $('input[id=username]').css("border", "1px solid green");
            $('input[id=password]').css("border", "1px solid red");
        } else if (password.length < 6) {
            $('input[id=username]').css("border", "1px solid green");
            $('#alert').html('<div class="alert alert-danger" role="alert"> Lütfen şifre en az 6 haneli giriniz! </div>');
            $('input[id=password]').focus();
            $('input[id=username]').css("border", "1px solid green");
            $('input[id=password]').css("border", "1px solid red");
        } else {
            $('#alert').html('');
            $('input[id=username]').css("border", "1px solid green");
            $('input[id=password]').css("border", "1px solid green");
            $.ajax({
                beforeSend: function() {
                    $("#alert").html('<div class="alert alert-success" role="alert"> <div class="spinner-border"></div> Giriş yapılıyor. Lütfen bekleyiniz</div>');
                },
                type: 'POST',
                url: 'dao/ajax.php',
                data: serialized,
                success: function(data) {
                    var response = jQuery.parseJSON(data);
                    if (response.success) {
                        $(location).attr('href', 'production/index.php');
                    } else {
                        $('input[id=' + response.id + ']').focus();
                        $('input[id=' + response.id + ']').css("border", "1px solid red");
                        $('#alert').html('<div class="alert alert-danger" role="alert">' + response.message + '</div>');
                    }
                },
            });
        }
    }
</script>