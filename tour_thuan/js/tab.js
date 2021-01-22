$(document).ready(function () {
    $(".owl-next").addClass("fa fa-angle-right");
    $(".owl-prev").addClass("fa fa-angle-left");
    $(".fa-bars").click(function () {
        $("header #menu >ul").slideToggle();
    });
    $(".fa-caret-down").click(function () {
        $(this).next().fadeToggle();
    });
   
    $(".jstab").click(function () {
        $(".jstab").removeClass("activecolor");
        $(this).addClass("activecolor");
    });
    $(".itemCT").click(function () {
        $(".itemtab").removeClass("activetab");
        $(".tabCT").addClass("activetab");
    });
    $(".itemBG").click(function () {
        $(".itemtab").removeClass("activetab");
        $(".tabBG").addClass("activetab");
    });
    $(".itemQD").click(function () {
        $(".itemtab").removeClass("activetab");
        $(".tabQD").addClass("activetab");
    });
    $(".itemDG").click(function () {
        $(".itemtab").removeClass("activetab");
        $(".tabDG").addClass("activetab");
    });
    $(".hidebooktour").click(function () {
        $(".booktour").hide();
    });
    $(".btnSettour button").click(function () {
        $(".booktour").show();
    });
    
    
     var a = document.getElementById("dt");
    var b = document.getElementById("tv");
    var aa = document.getElementById("ipdat");
    var bb = document.getElementById("iptv");
    a.onclick = function () {
        aa.checked = true;
        if (bb.checked == true) {
            bb.checked = false;
        }
    };
    b.onclick = function () {
        bb.checked = true;
        if (aa.checked == true) {
            aa.checked = false;
        }
    };
    aa.onclick = function() {
        aa.checked = true;
        if (bb.checked == true) {
            bb.checked = false;
        }
    };
    bb.onclick = function() {
        bb.checked = true;
        if (aa.checked == true) {
            aa.checked = false;
        }
    };
    $("#dt").click(function () {
        $(".yc").removeClass("activechoose");
        $(this).addClass("activechoose");

    });
   
    $("#tv").click(function () {
        $(".yc").removeClass("activechoose");
        $(this).addClass("activechoose");

    });
     $("#ipdat").click(function(){
        $(".yc").removeClass("activechoose");
        $(this).next().addClass("activechoose");
    });
     $("#iptv").click(function(){
        $(".yc").removeClass("activechoose");
        $(this).next().addClass("activechoose");
    });

});

jQuery(document).ready(function ($) {


    var menu = $("#menu");
    $(window).scroll(function () {

        if ($(this).scrollTop() > 150) {
            menu.addClass("activemenu");
        } else
        {
            menu.removeClass("activemenu");
        }
    }

    )
})
