  window.onscroll = function() {scrollFunction()};
function scrollFunction() { 
  const contactDiv=document.getElementById('contact');
    const navbar=document.getElementById('navbar');
    const contact=document.getElementById('contact');
  if (document.body.scrollTop >1 || document.documentElement.scrollTop > 80) {

    navbar.style.backgroundColor='white';
    contact.style.backgroundImage = "linear-gradient(269.79deg, #F26822 11.39%, #F26822 43.55%, #FFC722 98.5%)"
    contact.style.borderRadius = "10px"
  } else {
    navbar.style.backgroundColor='transparent';
    contact.style.backgroundImage = ""
    contact.style.borderRadius = ""
  }
}

function checkMobileView() {
  if (window.innerWidth <= 767) {
    navbar.style.backgroundColor='white';
  } else {
    navbar.style.backgroundColor='transparent';   
  }
}

checkMobileView();

window.addEventListener('resize', checkMobileView);


AOS.init();


$('.slider-nav').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  focusOnSelect: true
  
});

document.addEventListener('DOMContentLoaded', function () {
  new Splide('.splide', {
    type   : 'loop',
    drag   : 'free',
    focus  : 'center',
    perPage: 1,
    autoScroll: {
      speed: 0,
    },
  }).mount( window.splide.Extensions );
});


