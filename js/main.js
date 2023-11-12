const swiper = new Swiper('.swiper',{
    navigation:{
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,
    watchOverflow:false,
    breakpoints:{
        0:{
            slidesPerView: 1,
        },
        992:{
            slidesPerView: 3,
        },
        1400:{
            slidesPerView: 5,
        }
    },
    autoplay: {
        delay: 2000,
    },
});