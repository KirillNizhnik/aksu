const newsSidebarSwiper = new Swiper('.news-sidebar__swiper', {
    loop: true,
    spaceBetween: 16,
    slidesPerView: "auto",
    pagination: {
        el: '.news-sidebar__swiper-pagination',
    },
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


const newsSwiper = new Swiper('.news-page__swiper', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    pagination: {
        el: '.news-sidebar__swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.news-page__button-prev',
        prevEl: '.news-page__button-next',
    },
});










