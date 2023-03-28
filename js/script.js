// Swiper
new Swiper('.main-block__slider',{
    // Arrows
    navigation: {
        nextEl: '.swiper-next-button',
        prevEl: '.swiper-prev-button'
    },
    loop:true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
    },
    speed: 1000,
});