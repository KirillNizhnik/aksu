const swiperCategory = new Swiper('.swiper-home-news', {
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
            slidesPerView: 'auto',
            pagination: false,
        },
    },
});
