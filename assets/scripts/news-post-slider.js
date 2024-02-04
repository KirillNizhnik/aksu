const checkQuantitySlides = document.querySelectorAll('.news-page__swiper-slide').length;

if (checkQuantitySlides > 1) {
    const newsPageSwiper = new Swiper('.news-page__swiper', {
        loop: true,
        spaceBetween: 16,
        pagination: {
            el: '.news-page__swiper-pagination',
        },
        navigation: {
            nextEl: '.news-page__button-next',
            prevEl: '.news-page__button-prev',
        },
    });
} else {
    const newsPageSwiper = new Swiper('.news-page__swiper', {
        loop: true,
        pagination: false,
        navigation: false,
    });
}


const newsSidebarSwiper = new Swiper('.news-sidebar__swiper', {
    loop: true,
    spaceBetween: 16,
    slidesPerView: 1,
    pagination: {
        el: '.news-sidebar__swiper-pagination',
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1440: {
            slidesPerView: 'auto',
            pagination: false,
        },
    },
});

window.addEventListener('resize', () => {
    newsSidebarSwiper.update();
});









