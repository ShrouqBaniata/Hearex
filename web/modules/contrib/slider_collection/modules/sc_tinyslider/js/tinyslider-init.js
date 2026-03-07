/**
 * @file
 * Tiny Slider initialization.
 *
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.sliderCollectionTinyslider = {
    attach: function (context, settings) {
      var sliders = context.querySelectorAll('.tiny-slider:not(.slider-processed)');
      sliders.forEach(function (sliderContainer) {
        var sliderId = sliderContainer.getAttribute('id');
        var opt = JSON.parse(sliderContainer.getAttribute('data-tiny-slider'));
        opt.container = '#' + sliderId;
        var slider = tns(opt);
        sliderContainer.classList.add('slider-processed');
      });
    }
  };

})(Drupal);
