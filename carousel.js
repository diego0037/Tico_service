var index=document.getElementById('index');
if (index!=null) {
  var carousel = $("#carousel").featureCarousel({
    // include options like this:
    // (use quotes only for string values, and no trailing comma after last option)
    // option: value,
    // option: value
  });

  $("#but_prev").click(function () {
    carousel.prev();
  });

  $("#but_start").click(function () {
    carousel.start();
  });
  $("#but_next").click(function () {
    carousel.next();
  });
}
