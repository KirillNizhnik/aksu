
const newsSwiper = new Swiper('.news-page__swiper', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    loop: true,

    breakpoints: {
        320: {
            pagination: {
                el: '.news-sidebar__swiper-pagination',
                clickable: true,
            },
        },
        768: {
            pagination: {
                el: '.news-sidebar__swiper-pagination',
                clickable: true,
            },
        },
        1440: {
            pagination: false,
            navigation: {
                nextEl: '.news-page__button-prev',
                prevEl: '.news-page__button-next',
            },
        },
    },
});










