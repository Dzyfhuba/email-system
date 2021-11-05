// $('#data').on('submit', function(){
//     console.log($('#data').serialize());
// });

$('#data button').on('click', function(){
    if ($('#save').html() == 'edit') {
        console.log($('#data').serialize());
        $('#save').html("edit");
        $('#data input').attr('disabled', '');
        $('#data select').attr('disabled', '');
    } else {
        $('#data input').removeAttr('disabled');
        $('#data select').removeAttr('disabled');
    }
});