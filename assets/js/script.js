jQuery(document).ready(function($) {
    console.log('foo');

    $(".rslides").responsiveSlides({
      auto: true,
      speed: 2000,
      timeout: 8000
    });

    var iframe = $('#storyfeed');
    var w = $(window), b = $(document.body);
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