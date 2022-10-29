const swiperCompany = new Swiper('.slide-company-swiper', {
      slidesPerView: 5,
      loop: true,
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
      pagination: {
            el: '.swiper-pagination',
            clickable: true,
      },
});
