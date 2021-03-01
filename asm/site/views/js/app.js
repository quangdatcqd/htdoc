$(document).ready(function() {

    function onLoad(loading, loaded) {
        if (document.readyState === 'complete') {
            return loaded();
        }
        loading();
        if (window.addEventListener) {
            window.addEventListener('load', loaded, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', loaded);
        }
    };
    onLoad(function() {
            $(".div-loading").show();

        },
        function() {
            $(".div-loading").hide();

        });

    $(".bi-suit-heart-fill").hide();
    $(".div-img-box").on('click', '.heart-icon-span', function() {
        var button = $(this).children()[0];
        var button1 = $(this).children()[1];

        if ($(button).is(":hidden")) {
            $(button).show();
            $(button1).hide();
        } else {
            $(button).hide();
            $(button1).show();

        }
    });


    // $(".bi-cart-check-fill").hide();
    $(".bi-suit-heart-fill").hide();
    // $(".div-img-box").on('click', '.cart-icon-span', function() {
    //     var button = $(this).children()[0];
    //     var button1 = $(this).children()[1];

    //     if ($(button).is(":hidden")) {

    //         $(button).show();
    //         $(button1).hide();
    //     } else {
    //         $(button).hide();
    //         $(button1).show();

    //     }
    // });



    $('#favcolor').change(function() {

        var color = $(this).val();
        $("body").css({
            'background-color': color,

        });
    });
    $('#favcolor-a').change(function() {

        var color = $(this).val();
        $(".container p, header a, .container a").css({
            'color': color,

        });
    });



});

function deletetrue() {
    if (confirm("Xoá tất cả?")) return true
    else return false;
}