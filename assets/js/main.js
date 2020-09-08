$('.popular__slider').slick({
  arrows: false,
  dots: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        dots: false
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        dots: false
      }
    }
  ]
});

$('.newItems__slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 2,
  arrows: false,
  dots: true,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        dots: false
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        dots: false
      }
    }
  ]
});

$('.instagram__items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 2,
  arrows: false,
  dots: false,

  responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

$('.stock__sliders').slick({
  arrows: false,
  autoplay: true,

  responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});

// $('.sponsor__items').slick({
//   infinite: true,
//   slidesToShow: 4,
//   slidesToScroll: 2,
//   arrows: false,
//   dots: true,

//   responsive: [
//     {
//       breakpoint: 700,
//       settings: {
//         slidesToShow: 1,
//       }
//     }
//   ]
// });



$('.articles__slider').slick({
  arrows: false,
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  // autoplay: true,

  responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        dots: false,
        autoplay: true
      }
    }
  ]
});


$('.reviews__items').slick({
  arrows: false,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 2,
  dots: true,

  responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

var btn = $('#scrollTop-button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 3000) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});