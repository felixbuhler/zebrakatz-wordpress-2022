jQuery(document).ready(function ($) {
    var deviceAgent = navigator.userAgent.toLowerCase();
    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
        $("html").addClass("ios");
        $("html").addClass("mobile");
    }
    if (deviceAgent.match(/(Android)/)) {
        $("html").addClass("android");
        $("html").addClass("mobile");
    }
    if (navigator.userAgent.search("MSIE") >= 0) {
        $("html").addClass("ie");
    }
    else if (navigator.userAgent.search("Chrome") >= 0) {
        $("html").addClass("chrome");
    }
    else if (navigator.userAgent.search("Firefox") >= 0) {
        $("html").addClass("firefox");
    }
    else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
        $("html").addClass("safari");
    }
    else if (navigator.userAgent.search("Opera") >= 0) {
        $("html").addClass("opera");
    }

    /* Menu */

    $(".navigation-item").click(function () {
        var title = $(this).attr("title")

        if ($("#" + title).hasClass('open')) {
            $(".content-box").removeClass("open");
            $("#" + title).removeClass("open");
            $("#navigation").removeClass("open");
            $("header").removeClass("open");
            $("footer").removeClass("open");
            $(".socials").removeClass("open");
            $("h1#logo").removeClass("open");

        } else {
            $(".content-box").removeClass("open");
            $("#" + title).addClass("open");
            $("#navigation").addClass("open");
            $("header").addClass("open");
            $("footer").addClass("open");
            $(".socials").addClass("open");
            $("h1#logo").addClass("open");
        }

    });

    $("h1").click(function () {


        if ($(".content-box").hasClass('open')) {
            $(".content-box").removeClass("open");
            $("#navigation").removeClass("open");
            $("header").removeClass("open");
            $("footer").removeClass("open");
            $("h1#logo").removeClass("open");
        } else {
        }

    })

    /* Color Change */

    $(document).on("mousemove", function (event) {



        $(document).mousemove(function (e) {
            var $width = ($(document).width()) / 100;
            var $widthFilter = ($(document).width()) / 10;
            var $height = ($(document).height()) / 255;
            var $brightness = parseInt(e.pageX / $width / 4 + 50);
            var $brightnessFilter = parseInt(e.pageX / $widthFilter / 10 / 4 + 50);
            var $hue = parseInt(e.pageY / $height);
            $(":root").css({ "--color-red": "hsl(" + $hue + ", 100%," + $brightness + "%)" });
        });
    });

});

