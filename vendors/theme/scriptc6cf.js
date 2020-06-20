function submitForm(formid) {
    $(formid).submit(function () {
        event.preventDefault();
        $(this).find("button[type=submit]").each(function () {
            $(this).html($("#loadingElem"))
        });
        $(formid).unbind('submit').submit()
    })
}

function kaydet(formid, callback) {
    $('body').on('submit', formid, function () {
        var btn = $(this).find("button[type='submit']").last();
        var btnyazisi = btn.text();
        event.preventDefault();
        $(formid).ajaxSubmit({
            beforeSubmit: function () {
                btn.html($("#loadingElem").clone());
                btn.attr('disabled', !0)
            }, success: function (response) {
                btn.html(btnyazisi);
                btn.attr('disabled', !1);
                console.log(response)
                response = JSON.parse(response);
                swal({
                    title: response.title == null ? '' : response.title,
                    text: response.message,
                    icon: response.type,
                });
                callback(response)
            }, error: function (response) {
                btn.html(btnyazisi);
                btn.attr('disabled', !1);
                console.log(response);
                callback(response)
            }
        })
    })
}

forEach = function (collection, callback, scope) {
    if (Object.prototype.toString.call(collection) === '[object Object]') {
        for (var prop in collection) {
            if (Object.prototype.hasOwnProperty.call(collection, prop)) {
                callback.call(scope, collection[prop], prop, collection);
            }
        }
    } else {
        for (var i = 0, len = collection.length; i < len; i++) {
            callback.call(scope, collection[i], i, collection);
        }
    }
};


// $('input[name=tel], input[name=gsmNumber]').inputmask({
//     mask: "0 (999) 999 99 99",
//     jitMasking: !0,
//     removeMaskOnSubmit: !0
// });

$(document).ready(function () {
    var telInputs = $('input[name=tel], input[name=gsmNumber]');

    var telInputsVal = telInputs.val();
    var newString = new libphonenumber.AsYouType(countryCode).input(telInputsVal);
    telInputs.val('').val(newString);

    telInputs.keyup(function () {
        var val_old = $(this).val();
        var newString = new libphonenumber.AsYouType(countryCode).input(val_old);
        $(this).focus().val('').val(newString);
    });
});

$('input[name=iban]').inputmask({mask: "TR99 9999 9999 9999 9999 9999 99", jitMasking: !0, removeMaskOnSubmit: !1});
$('input[name=identityNumber]').inputmask({mask: "99999999999", jitMasking: !0,});
$('textarea').autogrow({vertical: !0, horizontal: !1, flickering: !1});
var lastScrollTop = 0;
userHeaderHeight = $(".userHeader").height();
$(window).scroll(function (event) {
    var st = $(this).scrollTop();
    if (st >= userHeaderHeight) {
        $('#logo-desc').slideUp();
        $('.default-header').addClass('pb-1')
    } else {
        $('.default-header').removeClass('pb-1');
        $('#logo-desc').slideDown()
    }
});
var btn = $('#toTopButton');
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show')
    } else {
        btn.removeClass('show')
    }
});
btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: 0}, '300')
});
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 10) {
        $('.sor').fadeIn()
    } else {
        $('.sor').fadeOut()
    }
});
$('body').on('click', ".menu-bar", function () {
    event.preventDefault();
    $('.main-nav').removeClass('hide');
    $(".dup-body-wrap").toggleClass("toRightForMenu");
    $(".bg-overlay").toggleClass("bg-overlay-on");
});


$('body').on('click', "#sor, #destekAlin, #soruSorHesabim, #fazlasiIcinUlasin, .bizeYazinA", function () {
    event.preventDefault();
    var message = $(this).attr('data-message-text');
    var callback = $(this).attr('data-message-callback-functions');
    $("#mesajForMessage").val(message);
    $(".dup-body-wrap").toggleClass("toRight");
    $(".bg-overlay").toggleClass("bg-overlay-on");
    $(".right-side-sor-area").toggleClass('sor-on')
});

function hideSorArea() {
    var body = $(".dup-body-wrap");
    body.removeClass("toRight");
    body.removeClass("toRightForMenu");
    $(".right-side-sor-area").removeClass('sor-on');
    var mobileMenu = $('.main-nav');
    if (!mobileMenu.hasClass('hide')) {
        mobileMenu.addClass('hide');
    }
    $(".bg-overlay").removeClass('bg-overlay-on')
}

$(".bg-overlay").on('click', function () {
    event.preventDefault();
    hideSorArea();
});


$('body').on('submit', '#sorForm', function () {
    event.preventDefault();
});
var RC2KEY = '6LcLNLAUAAAAAKwsIy6pVR1OilLJeMHp75n0S7Uj', doSubmit = !1;

function reCaptchaVerify(response) {
    if (response === document.querySelector('.g-recaptcha-response').value) {
        doSubmit = !0
    }
}

function reCaptchaExpired() {
    console.log('expired recaptcha')
}

function reCaptchaCallback() {
    grecaptcha.render('recaptchadiv', {
        'sitekey': RC2KEY,
        'callback': reCaptchaVerify,
        'expired-callback': reCaptchaExpired
    })
}

document.forms.sorForm.addEventListener('submit', function (e) {
    if (doSubmit) {
        console.log('success');
        var telNumber = $('input[name=tel], input[name=gsmNumber]').val();

        if (telNumber.length < 5) {
            $('input[name=tel], input[name=gsmNumber]').focus();
        } else {
            logger.enableLogger();

            kaydet('#sorForm', function () {
                $('#sorForm')[0].reset();
                hideSorArea();
            });
        }
    }
});
var oturumAcBtn = $('.oturumAcBtn');
oturumAcBtn.on('click', function () {
    event.preventDefault();
    $("#loginModal").modal('show')
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
$(function () {
    $('[data-toggle="popover"]').popover()
});

function filterPrices(value, ths) {
    var outEff = 'rotateOutDownLeft';
    var inEff = 'rotateInUpRight';
    if (value === "all") {
        $('.filter').fadeIn('500')
    } else {
        $(".filter").not('.' + value).addClass(outEff);
        $(".filter").not('.' + value).removeClass(inEff);
        $(".filter").not('.' + value).fadeOut(500);
        setTimeout(function () {
            $('.filter').filter('.' + value).removeClass(outEff);
            $('.filter').filter('.' + value).addClass(inEff);
            $('.filter').filter('.' + value).fadeIn(250)
        }, 500)
    }
    $(".filter-button").each(function (index, value) {
        $(this).removeClass("active-simpli")
    });
    ths.addClass("active-simpli")
}

$(document).ready(function () {
    queryString = window.location.href;
    queryString = queryString.split('#')[1];
    if (queryString !== null) {
        var value = queryString;
        urlParamExists = !1;
        $('.filter-button').each(function () {
            if ($(this).attr('data-filter') === queryString) {
                ths = $(this);
                urlParamExists = !0
            }
        });
        if (urlParamExists) {
            filterPrices(value, ths)
        }
    }
    $(".filter-button").click(function () {
        var value = $(this).attr('data-filter');
        var ths = $(this);
        filterPrices(value, ths)
    })
});
$('.achievement-carousel').owlCarousel({
    loop: !0,
    responsiveClass: !0,
    responsive: {0: {margin: 10, items: 4,}, 600: {margin: 20, items: 5,}, 1000: {margin: 50, items: 6,}}
})
