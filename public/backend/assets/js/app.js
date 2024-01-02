!(function (o) {
    "use strict";
    function n() {
        for (
            var t = document
                    .getElementById("topnav-menu-content")
                    .getElementsByTagName("a"),
                e = 0,
                a = t.length;
            e < a;
            e++
        )
            "nav-item dropdown active" ===
                t[e].parentElement.getAttribute("class") &&
                (t[e].parentElement.classList.remove("active"),
                t[e].nextElementSibling.classList.remove("show"));
    }
    function t() {
        document.webkitIsFullScreen ||
            document.mozFullScreen ||
            document.msFullscreenElement ||
            (console.log("pressed"),
            o("body").removeClass("fullscreen-enable"));
    }
    var a, r, d;
    o("#side-menu").metisMenu(),
        (a = document.body.getAttribute("data-sidebar-size")),
        o(window).on("load", function () {
            o(".switch").on("switch-change", function () {
                toggleWeather();
            }),
                1024 <= window.innerWidth &&
                    window.innerWidth <= 1366 &&
                    document.body.setAttribute("data-sidebar-size", "lg");
        }),
        o(".vertical-menu-btn").on("click", function (t) {
            t.preventDefault(),
                o("body").toggleClass("sidebar-enable"),
                992 <= o(window).width() &&
                    (null == a
                        ? null ==
                              document.body.getAttribute("data-sidebar-size") ||
                          "lg" ==
                              document.body.getAttribute("data-sidebar-size")
                            ? document.body.setAttribute(
                                  "data-sidebar-size",
                                  "sm"
                              )
                            : document.body.setAttribute(
                                  "data-sidebar-size",
                                  "lg"
                              )
                        : "md" == a
                        ? "md" ==
                          document.body.getAttribute("data-sidebar-size")
                            ? document.body.setAttribute(
                                  "data-sidebar-size",
                                  "sm"
                              )
                            : document.body.setAttribute(
                                  "data-sidebar-size",
                                  "md"
                              )
                        : "sm" ==
                          document.body.getAttribute("data-sidebar-size")
                        ? document.body.setAttribute("data-sidebar-size", "lg")
                        : document.body.setAttribute(
                              "data-sidebar-size",
                              "sm"
                          ));
        }),
        o("#sidebar-menu a").each(function () {
            var t = window.location.href.split(/[?#]/)[0];
            this.href == t &&
                (o(this).addClass("active"),
                o(this).parent().addClass("mm-active"),
                o(this).parent().parent().addClass("mm-show"),
                o(this).parent().parent().prev().addClass("mm-active"),
                o(this).parent().parent().parent().addClass("mm-active"),
                o(this).parent().parent().parent().parent().addClass("mm-show"),
                o(this)
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("mm-active"));
        }),
        o(document).ready(function () {
            var t;
            0 < o("#sidebar-menu").length &&
                0 < o("#sidebar-menu .mm-active .active").length &&
                300 <
                    (t = o("#sidebar-menu .mm-active .active").offset().top) &&
                ((t -= 300),
                o(".vertical-menu .simplebar-content-wrapper").animate(
                    { scrollTop: t },
                    "slow"
                ));
        }),
        o('[data-bs-toggle="fullscreen"]').on("click", function (t) {
            t.preventDefault(),
                o("body").toggleClass("fullscreen-enable"),
                document.fullscreenElement ||
                document.mozFullScreenElement ||
                document.webkitFullscreenElement
                    ? document.cancelFullScreen
                        ? document.cancelFullScreen()
                        : document.mozCancelFullScreen
                        ? document.mozCancelFullScreen()
                        : document.webkitCancelFullScreen &&
                          document.webkitCancelFullScreen()
                    : document.documentElement.requestFullscreen
                    ? document.documentElement.requestFullscreen()
                    : document.documentElement.mozRequestFullScreen
                    ? document.documentElement.mozRequestFullScreen()
                    : document.documentElement.webkitRequestFullscreen &&
                      document.documentElement.webkitRequestFullscreen(
                          Element.ALLOW_KEYBOARD_INPUT
                      );
        }),
        document.addEventListener("fullscreenchange", t),
        document.addEventListener("webkitfullscreenchange", t),
        document.addEventListener("mozfullscreenchange", t),
        o(".navbar-nav a").each(function () {
            var t = window.location.href.split(/[?#]/)[0];
            this.href == t &&
                (o(this).addClass("active"),
                o(this).parent().addClass("active"),
                o(this).parent().parent().addClass("active"),
                o(this).parent().parent().parent().addClass("active"),
                o(this).parent().parent().parent().parent().addClass("active"),
                o(this)
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("active"));
        }),
        (function () {
            if (document.getElementById("topnav-menu-content")) {
                for (
                    var t = document
                            .getElementById("topnav-menu-content")
                            .getElementsByTagName("a"),
                        e = 0,
                        a = t.length;
                    e < a;
                    e++
                )
                    t[e].onclick = function (t) {
                        "#" === t.target.getAttribute("href") &&
                            (t.target.parentElement.classList.toggle("active"),
                            t.target.nextElementSibling.classList.toggle(
                                "show"
                            ));
                    };
                window.addEventListener("resize", n);
            }
        })(),
        (function () {
            [].slice
                .call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                .map(function (t) {
                    return new bootstrap.Tooltip(t);
                }),
                [].slice
                    .call(
                        document.querySelectorAll('[data-bs-toggle="popover"]')
                    )
                    .map(function (t) {
                        return new bootstrap.Popover(t);
                    });
            var a = o(this).attr("data-delay")
                    ? o(this).attr("data-delay")
                    : 100,
                n = o(this).attr("data-time")
                    ? o(this).attr("data-time")
                    : 1200;
            o('[data-plugin="counterup"]').each(function (t, e) {
                o(this).counterUp({ delay: a, time: n });
            });
        })(),
        // o(window).on("load", function () {
        //     o("#status").fadeOut(), o("#preloader").delay(350).fadeOut("slow");
        // }),
        Waves.init();
})(jQuery);

function showAlert(type,message){
    if(type == 'success'){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Toast.fire({
            icon: 'success',
            title: message
        });

    }else{
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Toast.fire({
            icon: 'error',
            title: message
        });

    }
}
// Add More
$('[data-toggle="add-more"]').each(function () {
    var $this = $(this);
    var content = $this.data("content");
    var target = $this.data("target");

    $this.on("click", function (e) {
        e.preventDefault();
        $(target).append(content);
    });
});

$(document).on(
    "click",
    '[data-toggle="remove-parent"]',
    function () {
        var $this = $(this);
        var parent = $this.data("parent");
        $this.closest(parent).remove();
    }
);
