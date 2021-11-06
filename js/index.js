$('#data').on('submit', function (e) {
    form_data = {
        '_token': $('input[name="_token"]').val(),
        'mode': $('#mode').val(),
        'host': $('#host').val(),
        'port': $('#port').val(),
        'encyption': $('#encyption').val(),
        'email': $('#email').val(),
        'password': $('#password').val(),
    }

    saveData(form_data);
    $isEmpty = true;
    $(this).find('input').each(function () {
        if (!$(this).val()) {
            $isEmpty = true;
        } else {
            $isEmpty = false;
        }
    });
    if ($isEmpty) {
        $('#content').css('display', 'none');
        $('#empty').css('display', 'unset')
    } else {
        $('#empty').css('display', 'none');
        $('#content').css('display', 'unset')
    }
});

$('#save').on('click', function () {
    if ($('#save').html() == 'Save') {
        $('#save').html("Edit");
        $('#data input').attr('disabled', '');
        $('#data select').attr('disabled', '');
        $('#save').removeClass('btn-primary');
        $('#save').addClass('btn-info')


    } else {
        $('#save').html("Save");
        $('#data input').removeAttr('disabled');
        $('#data select').removeAttr('disabled');
        $('#save').addClass('btn-primary');
        $('#save').removeClass('btn-info')
    }
});

function saveData(form_data) {
    $.ajax({
        type: 'POST',
        url: 'imap/get.php',
        // datatype: 'json',
        data: form_data,
        success: function(data){
            console.log(data);
        }
    });
}