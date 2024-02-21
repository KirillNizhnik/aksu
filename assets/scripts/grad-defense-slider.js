const gradDefenseSwiper = new Swiper('.grad-defense__swiper', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    loop: true,

    breakpoints: {
        320: {
            pagination: {
                el: '.grad-defense__swiper-pagination',
                clickable: true,
            },
        },
        768: {
            pagination: false,
            navigation: {
                prevEl: '.grad-defense__swiper-button-prev',
                nextEl: '.grad-defense__swiper-button-next',
            },
        },
        1440: {

            navigation: {
                prevEl: '.grad-defense__swiper-button-prev',
                nextEl: '.grad-defense__swiper-button-next',
            },
        },
    },
});
