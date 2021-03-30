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