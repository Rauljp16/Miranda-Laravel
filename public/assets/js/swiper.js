const swiperRoomsHome = new Swiper(".swiperRoomsHome", {
    // Optional parameters
    slidesPerView: 1,
    centeredSlides: true,
    direction: "horizontal",
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

const swiperFacilitiesHome = new Swiper(".swiperFacilitiesHome", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1000: {
            enabled: false,
        },
    },
});

const swiperMenuFoodHome1 = new Swiper(".swiperMenuFoodHome1", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,
        },
    },
});

const swiperMenuFoodHome2 = new Swiper(".swiperMenuFoodHome2", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1000: {
            enabled: false,
            slidesPerView: 3,
        },
    },
});

const swiperAbout1 = new Swiper(".swiperAbout1", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
const swiperAbout2 = new Swiper(".swiperAbout2", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1000: {
            enabled: false,
            slidesPerView: 2,
        },
    },
});
const swiperRoomsRoom = new Swiper(".swiperRoomsRoom", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1000: {
            enabled: false,
            slidesPerView: 2,
        },
    },
});
const swiperOfferRoom = new Swiper(".swiperOfferRoom", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1000: {
            enabled: false,
            slidesPerView: 3,
        },
    },
});
