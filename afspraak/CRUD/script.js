$('table').dataTable();
viewData();
$('#update').prop("disabled",true);

function viewData(){
    $.get('server.php', function(data){
        $('tbody').html(data)
    })
}

function saveData(){
    var title = $('#tl').val()
    var description = $('#dc').val()
    var image = $('#im').val()
    var price = $('#pr').val()
    $.post('server.php?p=add', {tl:title, dc:description, im:image, pr:price}, function(data){
        viewData()
        $('#tl').val('')
        $('#dc').val('')
        $('#im').val('')
        $('#pr').val('')
    })
}

function editData(id, tl, dc, im, pr) {
    $('#id').val(id)
    $('#tl').val(tl)
    $('#dc').val(dc)
    $('#im').val(im)
    $('#pr').val(pr)
    $('#id').prop("readonly",true);
    $('#save').prop("disabled",true);
    $('#update').prop("disabled",false);
}

function updateData(){
    var id = $('#id').val()
    var title = $('#tl').val()
    var description = $('#dc').val()
    var image = $('#im').val()
    var price = $('#pr').val()
    $.post('server.php?p=update', {id:id, tl:title, dc:description, im:image, pr:price}, function(data){
        viewData()
        $('#id').val('')
        $('#tl').val('')
        $('#dc').val('')
        $('#im').val('')
        $('#pr').val('')
        $('#id').prop("readonly",false);
        $('#save').prop("disabled",false);
        $('#update').prop("disabled",true);
    })
}

function deleteData(id){
    $.post('server.php?p=delete', {id:id}, function(data){
        viewData()
    })
}

function removeConfirm(id){
    var con = confirm('Are you sure, want to delete this data!');
    if(con=='1'){
        deleteData(id);
    }
}

$(function() {

    var $sidebar   = $("#sidebar"), 
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 15;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });
    
});