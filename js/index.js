// $('#data').on('submit', function(){
//     console.log($('#data').serialize());
// });

$('#save').on('click', function(){
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