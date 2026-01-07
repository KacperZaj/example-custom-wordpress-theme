const section7Swiper = new Swiper(".section-7-swiper", {
    slidesPerView: 1,
    spaceBetween: 24,
    navigation: {
        nextEl: ".section_7 .custom-swiper-button-next",
        prevEl: ".section_7 .custom-swiper-button-prev",
    },
    breakpoints: {
        578: {
            slidesPerView: 2,
        },

        992: {
            slidesPerView: 3,
        }
    }
});
const section8Swiper = new Swiper(".section-8-swiper", {
    slidesPerView: 2,
    spaceBetween: 24,
    autoplay: {
        delay: 3000,
        pauseOnMouseEnter: true,
    },
    breakpoints: {
        578: {
            slidesPerView: 2,
        },

        768: {
            slidesPerView: 3,
        },

        992: {
            slidesPerView: 4,
        },

        1400: {
            slidesPerView: 5,
        }
    }
});