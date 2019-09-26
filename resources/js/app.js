require('./jquery.min');
require('./popper.min');
require('./bootstrap');
require('./jquery.easing.1.3');
require('./slick.min');
require('./theme');
require('./sb-admin.min');

(function ($) {
  "use strict";
  // Auto-scroll
  $('#myCarousel').carousel({
    interval: false
  });

  // Control buttons
  $('.next').click(function () {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function () {
    $('.carousel').carousel('prev');
    return false;
  });

  // On carousel scroll
  $("#myCarousel").on("slide.bs.carousel", function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carouselthree").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide -
          (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(
            ".carouselthree").eq(i).appendTo(".carousel-inner");
        } else {
          $(".carouselthree").eq(0).appendTo(".carousel-inner");
        }
      }
    }
  });
})
(jQuery);

$.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

$(document).ready(function() {
  $("#savecom").click(function() {
      console.log("dsdsds");
      $.post("/admin/savecomment", {
          id: $('#clientid').val(),
          comment: $('textarea#exampleFormControlTextarea12').val(),
        });
});
});


$(document).ready(function() {
  $("#createorder").click(function() {
    if (document.getElementById("clientname").value == "" || document.getElementById("clientsurname").value == "" || document.getElementById("clientnumber").value == "" || document.getElementById("orderamount").value == "" || document.getElementById("selectedcar").value == "Выберите автомобиль") {
        alert("Не все данные введены");
        return false;
    };
});
});

$(document).ready(function() {
  $("#createservice").click(function() {
    if (document.getElementById("servicedesc").value == "" || document.getElementById("servicesum").value == "" || document.getElementById("servicemileage").value == "" || document.getElementById("servicecar").value == "Выберите автомобиль") {
        alert("Не все данные введены");
        return false;
    };
});
});

$(document).ready(function() {
  $("#createrequest").click(function() {
    if (document.getElementById("userreqname").value == "" || document.getElementById("userreqnumber").value == "" || document.getElementById("userreqcar").value == "Выберите автомобиль...") {
        alert("Не все поля заполнены!");
        return false;
    };
});
});
