var classname = $( "main" ).attr('class');
var param = $('meta[name=csrf-param]').attr("content");
var token = $('meta[name=csrf-token]').attr("content");
$('*[data-menu='+classname+']').addClass("active");

var data_name = $("input[name='dilivery']:checked").val();
if(data_name == 'world'){
    alert(15);
} else {
    alert(10)
}

$(document).on("change", ".qwe", function () {
    var val = $(this).val();
    if(val == 'world'){
        alert(15);
    } else {
        alert(10)
    }
});

$(document).on("click", ".add-to-cart", function () {
    var selector        = $(this).data('selector');
    var id              = $(this).data('id');
    var count           = $('#'+selector).val();

    addToCart(id, count);
});

$(document).on("click", ".minus-btn--db", function () {
    var selector        = $(this).data('selector');
    var id              = $(this).data('id');
    var count           = $('#'+selector).val();

    updateCart(id, count);
});


$(document).on("click", ".plus-btn--db", function () {
    var selector        = $(this).data('selector');
    var id              = $(this).data('id');
    var count           = $('#'+selector).val();

    updateCart(id, count);
});

$(document).on("click", ".remove-krest", function () {
    var id              = $(this).data('id');
    $('.item__'+id).remove();
    deleteFromCart(id);
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
        $(".db_price").empty();
        $(".db_price").text(response['summary']);
    });
}

function updateCart(id, count) {
    var data = {};
    data[param]     = token;
    data['id']      = id;
    data['count']   = count;
    $.post(
        "site/add",
        data
    ).done(function( response ) {
        $(".db_price").empty();
        $(".db_price").text(response['summary']);
        $(".db_price--single__"+id).empty();
        $(".db_price--single__"+id).text(response['single']);
        $(".common-quantity").empty();
        $(".common-quantity").text(response['count']);

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
        if(response == 0){
            window.location.reload()
        } else {
            $(".db_price").empty();
            $(".db_price").text(response['summary']);
            $(".common-quantity").empty();
            $(".common-quantity").text(response['count']);
        }
    });
}