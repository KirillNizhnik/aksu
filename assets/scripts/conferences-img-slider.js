const swiperConferences = new Swiper('.conferences-post-swiper', {
    pagination: {
        el: '.swiper-pagination-conferences',
    },
    slidesPerView: 'auto',
    spaceBetween: 10,
    loop: true,
    navigation: false,
    breakpoints: {
        1440: {
            pagination: false,
            navigation: {
                nextEl: '.conferences-post-swiper-next',
                prevEl: '.conferences-post-swiper-prev',
            },
        },

    },
});
