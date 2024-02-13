
const labsSwiper = new Swiper('.labs-single-inner__swiper', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    loop: true,

    breakpoints: {
        320: {
            pagination: {
                el: '.labs-single-inner__swiper-pagination',
                clickable: true,
            },
        },
        768: {
            pagination: false,
            navigation: {
                nextEl: '.labs-single-swiper-button-next',
                prevEl: '.labs-single-swiper-button-prev',
            },
        },
        1440: {

            navigation: {
                nextEl: '.labs-single-swiper-button-next',
                prevEl: '.labs-single-swiper-button-prev',
            },
        },
    },
});










