$('#data').on('submit', function () {
    // console.log($('#data').serialize());
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
        console.log($('#data').serialize());
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

function saveData() {
    if ($($('#data input').val() == '')) {
        console.log('there is empty field');
    }
    data = $('#data').serialize();
    console.log($('#data').serialize());
}