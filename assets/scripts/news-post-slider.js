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








