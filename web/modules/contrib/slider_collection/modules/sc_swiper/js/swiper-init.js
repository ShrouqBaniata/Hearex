/**
 * JS behavior for Swiper slider.
 */

(function (Drupal, Swiper) {
  Drupal.behaviors.sliderCollectionSwiper = {
    attach(context) {
      once('swiperInit', '.swiper', context).forEach((slider) => {
        var options = JSON.parse(slider.getAttribute('data-swiper'));

        new Swiper(slider, options);
      });
    },
  };
}(Drupal, Swiper));
