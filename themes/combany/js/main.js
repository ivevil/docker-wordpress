$('.variable-width').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  centerMode: true,
  variableWidth: true,
  arrows: false,
});

var a = 0;

$(window).scroll(function() {

  var oTop = $('#combany__counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
        countNum: countTo
      }, {
        duration: 2000,
        easing: 'swing',
        step: function() {
          $this.text(Math.floor(this.countNum) + "%");
        },
        complete: function() {
          $this.text(this.countNum + "%");
        }

      });
    });
    a = 1;
  }

});

window.onscroll = function() {
  myFunction()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

$('#back-to-top').on('click', function(e) {
  $("html, body").animate({
    scrollTop: $("#top").offset().top
  }, 500);
});
