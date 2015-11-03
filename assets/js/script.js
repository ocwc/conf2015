jQuery(document).ready(function($) {
  $('.slider').slick({
    dots: true,
    infinite: true,
    // speed: 5,
    slidesToShow: 1,
    appendArrows: false,
    // autoplay: true,
    autoplaySpeed: 3000
  });
});

jQuery(function() {

  var iframe = jQuery('#storyfeed');
  var w = jQuery(window), b = jQuery(document.body);
  // resize on message
  w.on('message', function (e) {
    var d = e.originalEvent.data;
    if (d && d.height && d.height > 0) {
      iframe.css('height', d.height);
    }
  });
  // send scroll data
  function s() {
      iframe[0].contentWindow.postMessage({pxtobottom: b.height()-(w.scrollTop()+w.height())}, '*');
  }
  w.on('scroll', s);
  iframe.on('load', s);

});
