const swiperCategory = new Swiper('.swiper-home-news', {
    // loop: true,
    pagination: {
        el: '.swiper-pagination-home-news',
        clickable: true,
    },
    slidesPerView: 'auto',
    spaceBetween: 10,
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1440: {
            slidesPerView: false,
            pagination: false,
            spaceBetween: false,
        },
    },
});
