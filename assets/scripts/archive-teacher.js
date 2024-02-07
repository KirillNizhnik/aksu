const teacherSwiper = new Swiper('.swiper-teacher', {
    loop: true,
    spaceBetween: 16,
    slidesPerView: "auto",

    breakpoints: {
        320: {
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination-teacher',
                clickable: true,
            },
        },
        768: {
            slidesPerView: 2,
        },
        1440: {
            // slidesPerView: 'auto',
            pagination: false,
        },
    },
});

if (teacherSwiper instanceof Swiper && window.innerWidth >= 1440) {
    teacherSwiper.destroy();
}
