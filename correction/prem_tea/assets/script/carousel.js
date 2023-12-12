const carrousel = new Swiper('.carrousel', {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: true
    },
    pagination: {
        el: '.swiper-pagination'
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
})