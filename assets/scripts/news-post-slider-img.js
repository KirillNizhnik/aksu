
const newsSwiper = new Swiper('.news-page__swiper', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    loop: true,

    breakpoints: {
        320: {
            pagination: {
                el: '.news-page__swiper-pagination',
                clickable: true,
            },
        },
        768: {
            pagination: false,
            navigation: {
                nextEl: '.news-page__button-next',
                prevEl: '.news-page__button-prev',
            },
        },
        1440: {
            pagination: false,
            navigation: {
                nextEl: '.news-page__button-next',
                prevEl: '.news-page__button-prev',
            },
        },
    },
});










