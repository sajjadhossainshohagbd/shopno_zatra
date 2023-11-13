! function (e) {
    "use strict";
    e(".owl-carousel.mentoring-course").length > 0 && e(".owl-carousel.mentoring-course").owlCarousel({
        margin: 25,
        nav: !1,
        nav: !0,
        loop: !0,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1170: {
                items: 4
            }
        }
    });
}(jQuery);
