// $('#data').on('submit', function(){
//     console.log($('#data').serialize());
// });

$('#data button').on('click', function(){
    $('#save').toggle();
    $('#edit').toggle();
    if ($('#save').css('display') == 'none') {
        console.log($('#data').serialize());
        $('#data input').attr('disabled', '');
        $('#data select').attr('disabled', '');
    } else {
        $('#data input').removeAttr('disabled');
        $('#data select').removeAttr('disabled');
    }
});