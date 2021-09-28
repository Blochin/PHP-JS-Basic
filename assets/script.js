
var offset = 3

function loadMore(){
    $.ajax({
        type: "POST",
        url: "api/loadProducts.php?offset="+offset.toString(),
        data: "getrow",
    }).done(function( msg ) {
        if(msg !== '0'){
            $('table').append(msg);
            offset +=3
        }
    }).fail(function(jqXHR, textStatus) {
        alert("not work");
    });
}