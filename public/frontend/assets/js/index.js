$(function () {

    $(".need-slider").slick({
        autoplay: true,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow: '<i class="fa-solid fa-arrow-left left-arrow"></i>',
        nextArrow: '<i class="fa-solid fa-arrow-right right-arrow"></i>',
        pauseOnHover: false,
        responsive: [{
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
        ],
    });

    new VenoBox({
        selector: ".my-video-links",
    });

    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > 5) {
            $(".navbar").addClass("nav-bg");
        } else {
            $(".navbar").removeClass("nav-bg");
        }

        if (scrolling > 5) {
            $(".extra-btn-top").fadeIn(200);
        } else {
            $(".extra-btn-top").fadeOut(200);
        }
    });

    $(".extra-btn-top").click(function () {
        $("html,body").animate({
            scrollTop: 0,
        });
    });

    Livewire.hook('element.init', ({ component, cleanup }) => {
        initOfferSlider();
        new VenoBox({
            selector: ".my-video-links",
        });
    })

    function initOfferSlider(){
        $(".offer-slider").not('.slick-initialized').slick({
            autoplay: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<i class="fa-solid fa-arrow-left left-arrow"></i>',
            nextArrow: '<i class="fa-solid fa-arrow-right right-arrow"></i>',
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
            ],
        });
    }

    // Show alert
    function showAlert(type, message) {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-right",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });

        Toast.fire({
            icon: type,
            title: message,
        });
    }
    // Show alert from component
    Livewire.on('alert', (e) => {
        showAlert(e[0].type,e[0].message);
    });
});
