$(document).ready(function(){
    $('#project').tabs();
    $('ul').sortable({axis:"x", containment: '#project'});
    $('ol').sortable({axis:"y", containment: '#project'})
});

