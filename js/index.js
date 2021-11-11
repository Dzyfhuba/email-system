$('#data').on('submit', function(e) {
    $isEmpty = true;
    $(this).find('input').each(function() {
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

$('#save').on('click', function() {
    if ($('#save').html() == 'Save') {
        $('#save').html("Edit");
        $('#save').attr('type', 'button');
        $('#data input').attr('disabled', '');
        $('#data select').attr('disabled', '');
        $('#save').addClass('btn-info')
        $('#save').removeClass('btn-primary');

        form_data = {
            '_token': $('input[name="_token"]').val(),
            'mode': $('#mode').val(),
            'host': $('#host').val(),
            'port': $('#port').val(),
            'encryption': $('#encyption').val(),
            'email': $('#email').val(),
            'password': $('#password').val(),
        }
        saveData(form_data);
    } else {
        $('#save').html("Save");
        $('#save').attr('type', 'submit');
        $('#data input').removeAttr('disabled');
        $('#data select').removeAttr('disabled');
        $('#save').addClass('btn-primary');
        $('#save').removeClass('btn-info')
    }
});

function saveData(form_data) {
    console.log(form_data);
    $.ajax({
        type: 'POST',
        url: 'connect.php',
        datatype: 'json',
        data: form_data,
        beforeSend: function() {
            $('#loading').show();
        },
        success: function(data) {
            console.log(data);
            getData(data, form_data['mode']);
        },
        error: function(data) {
            console.log(data);
        },
        complete: function() {
            $('#loading').hide();
            $('#notification').fadeIn('slow');
            setTimeout("$('#notification').fadeOut('slow');", 5000);

        }
    });
}

function getData(data, mode) {
    url_php = '';
    switch (mode) {
        case 'imap':
            url_php = 'imap/get.php';
            break;
        case 'pop3':
            url_php = 'pop3/get.php';
            break;
        default:
            break;
    }
    $.ajax({
        type: 'post',
        url: url_php,
        datatype: 'json',
        data: data,
        success: function(data) {
            console.log(data);
        }
    });
}