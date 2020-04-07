var classname = $( "main" ).attr('class');
var param = $('meta[name=csrf-param]').attr("content");
var token = $('meta[name=csrf-token]').attr("content");
$('*[data-menu='+classname+']').addClass("active");

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

$(document).on("click", "#paypal", function () {
    $('.stripe_fields').css('display', 'none');
});

$(document).on("click", "#stripe", function () {
    $('.stripe_fields').css('display', 'block');
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
        var status = response['counter'] - response['count'];
        $(".db_price__header").empty();
        $(".db_price__header").text(response['summary']);

        if (status <= 3){
            $(".warning-block").html('<h4>WARNING! <br></h4><p>There are only 3 items left, <br> the delivery time can be <br> increased</p>');
        } else {
            $(".warning-block").empty();
        }
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
        $(".db_price__header").empty();
        $(".db_price__header").text(response['summary']);
        $(".db_price").empty();
        $(".db_price").text(response['summary__full']);
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
            $(".db_price__header").empty();
            $(".db_price__header").text(response['summary']);
            $(".db_price").empty();
            $(".db_price").text(response['summary__full']);
            $(".common-quantity").empty();
            $(".common-quantity").text(response['count']);
        }
    });
}

function updateRadio(value) {
    var data = {'name': value};
    data[param]     = token;
    $.post(
        "site/radio",
        data
    ).done(function( response ) {
        $(".db_price").empty();
        $(".db_price").text(response);
    });
}

$(document).on("change", ".qwe", function () {
    updateRadio($(this).val())
});

Stripe.setPublishableKey('pk_test_poWm1RwviFqzFWOA5Zz09R9U00817gkyjY');

$(function() {
    var $form = $('#payment-form');
    $form.submit(function(event) {
        // Отключим кнопку, чтобы предотвратить повторные клики
        $form.find('.submit').prop('disabled', true);
        // Запрашиваем token у Stripe
        Stripe.card.createToken($form, stripeResponseHandler);
        // Запретим форме submit
        return false;
    });
});

function stripeResponseHandler(status, response) {
    // Получим форму:
    var $form = $('#payment-form');
    if (response.error) { // Problem!
        // Показываем ошибки в форме:
        $form.find('.field-payment-payment_type .help-block').text(response.error.message);
        $form.find('.submit').prop('disabled', false); // Разрешим submit
    } else { // Token был создан
        // Получаем token id:
        var token = response.id;
        // Вставим token в форму, чтобы при submit он пришел на сервер:
        $('#payment-stripetoken').val(token);
        // Сабмитим форму:
        $form.get(0).submit();
    }
};