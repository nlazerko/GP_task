document.addEventListener('DOMContentLoaded', function () {
  console.log('Swiper init...');
  const swiper = new Swiper('.swiper', {
    slidesPerView: 2,

    loop: true,
    speed: 400,
    centeredSlides: false,
    slideToClickedSlide: false,
    allowTouchMove: true,
    initialSlide: 0,
    direction: 'horizontal',

    pagination: {
      el: '.review-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.review-button-prev',
      prevEl: '.review-button-next',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },

      769: {
        slidesPerView: 2,
      },
    },
  });
});
