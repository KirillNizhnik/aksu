const newsSidebarSwiper = new Swiper('.news-sidebar__swiper', {
    loop: true,
    spaceBetween: 16,
    slidesPerView: "auto",
    pagination: {
        el: '.news-sidebar__swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            pagination: {
                el: '.news-sidebar__swiper-pagination',
                clickable: true,
            },
        },
        768: {
            slidesPerView: 2,
            pagination: {
                el: '.news-sidebar__swiper-pagination',
                clickable: true,
            },
        },
        1440: {
            slidesPerView: 'auto',
            pagination: false,
        },
    },
});








