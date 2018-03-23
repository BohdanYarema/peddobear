var classname = $( "main" ).attr('class');
var param = $('meta[name=csrf-param]').attr("content");
var token = $('meta[name=csrf-token]').attr("content");
$('*[data-menu='+classname+']').addClass("active");

$(document).on("click", ".add", function () {
    addToCart($(this).data('id'), $(this).data('count'));
    $.pjax.reload({container: '#list-pjax'});
});

$(document).on("click", ".delete", function() {
    deleteFromCart($(this).data('id'));
    $.pjax.reload({container: '#list-pjax'});
});

function addToCart(id, count) {
    var data = {};
    data[param]     = token;
    data['id']      = id;
    data['count']   = count;
    $.post(
        "site/add",
         data
    ).done(function( response ) {
        console.log(response);
    });
}

function deleteFromCart(id) {
    var data = {};
    data[param]     = token;
    data['id']      = id;
    $.post(
        "site/delete",
        data
    ).done(function( response ) {
        console.log(response);
    });
}

function getCart() {
    var data = {};
    data[param]     = token;
    $.post(
        "site/get",
        data
    ).done(function( response ) {
        $(".price").append( response );
    });
}