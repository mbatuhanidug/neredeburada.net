$("#yenitalep").on('click', function() {
    $("[data-durum]").hide();
    $("[data-durum=2]").show();
    $("#yenitalep").hide();
    $("#tumfirma").show();
});

$("#tumfirma").on('click', function() {
    $("[data-durum]").hide();
    $("[data-durum]").show();
    $("#yenitalep").show();
    $("#tumfirma").hide();

});