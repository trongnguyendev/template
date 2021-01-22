$(document).ready(function () {
    var owl = $('.slide1');
    owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 2,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
    });

    $("#caret1").show();
    $(".dayright1").show();
    $("#tourp").click(function () {
        $(".jq").removeClass("activetour");
        $(this).addClass("activetour");
        $("#caret1").show();
        $("#caret2").hide();
        $("#caret3").hide();
        $(".as").hide();
        $(".dayright1").show();

    });
    $("#tourp1").click(function () {
        $(".jq").removeClass("activetour");
        $(this).addClass("activetour");
        $("#caret2").show();
        $("#caret1").hide();
        $("#caret3").hide();
        $(".as").hide();
        $(".dayright2").show();
    });
    $("#tourp2").click(function () {
        $(".jq").removeClass("activetour");
        $(this).addClass("activetour");
        $("#caret3").show();
        $("#caret2").hide();
        $("#caret1").hide();
        $(".as").hide();
        $(".dayright3").show();
    });


    $("#know").click(function () {
        $(".js").removeClass("activeTab");
        $(this).addClass("activeTab");
        $(".knowCont").hide();
        $(".knowA").show();
    });
    $("#know1").click(function () {
        $(".js").removeClass("activeTab");
        $(this).addClass("activeTab");
        $(".knowCont").hide();
        $(".knowB").show();
    });
    $("#know2").click(function () {
        $(".js").removeClass("activeTab");
        $(this).addClass("activeTab");
        $(".knowCont").hide();
        $(".knowC").show();
    });
    $(".showprob2").click(function () {
        $(this).next().slideToggle();
    });
    $(".icon-menu").click(function () {
        $(".responMenu").show();
        $(".sideMenu").addClass("activeTrans");
    });
    $(".closeMenu").click(function () {
        $(".sideMenu").removeClass("activeTrans");
    });
    $(".iconCate").click(function () {
        $(".cateList").slideToggle();
    });
//tab  
    $(".nt1").show();
    $(".tab1").children("i").show();
    $(".tab1").click(function () {
        $(".tb").removeClass("activetabs");
        $(this).addClass("activetabs");
        $(".ndt").hide();
        $(".nt1").show();
        $(this).children("i").show();
        $(".tab2").children("i").hide();
        $(".tab3").children("i").hide();
    });
    $(".tab2").click(function () {
        $(".tb").removeClass("activetabs");
        $(this).addClass("activetabs");
        $(".ndt").hide();
        $(".nt2").show();
        $(this).children("i").show();
        $(".tab1").children("i").hide();
        $(".tab3").children("i").hide();
    });
    $(".tab3").click(function () {
        $(".tb").removeClass("activetabs");
        $(this).addClass("activetabs");
        $(".ndt").hide();
        $(".nt3").show();
        $(this).children("i").show();
        $(".tab1").children("i").hide();
        $(".tab2").children("i").hide();
    });
    $(window).scrollPress();
});
jQuery(document).ready(function ($) {

    var menu = $("header");
    var logo = $(".headerLogo img");
    var search = $(".logoSearch");
    $(window).scroll(function () {

        if ($(this).scrollTop() > 10) {

           logo.addClass("activeLogo");
            menu.addClass("activemenu");
            search.css("padding","0");

        } else
        {
            logo.removeClass("activeLogo");
            menu.removeClass("activemenu");
            search.css("padding","10px 0");
        }
    }

    )
})

