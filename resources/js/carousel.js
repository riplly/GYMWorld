const swiper = new Swiper('.swiper', {

    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    speed: 300,
    spaceBetween: 30,

  

    navigation: {
      nextEl: '.s-button-next',
      prevEl: '.s-button-prev',
    },

    breakpoints: {
        480: {
          slidesPerView: 1,
          spaceBetween: 0
        },

        640: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
  });