
// Hambureger 

const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.navigation');
const mainNav = document.querySelector('.main-nav');
let scrollpos = window.scrollY;


const handleClick = () => {
  hamburger.classList.toggle('hamburger--active');
  hamburger.setAttribute('aria-expanded', hamburger.classList.contains('hamburger--active'));
  nav.classList.toggle('navigation--active');
  
  if(scrollpos < 10){
    mainNav.classList.add("main-nav-bg");
  }
}

hamburger.addEventListener('click', handleClick);

//Add background-color to menu



function addClassOnScroll() {
  mainNav.classList.add("main-nav-bg");
}

function removeClassOnScroll() {
  mainNav.classList.remove("main-nav-bg");
}

window.addEventListener('scroll', function(){ 
    scrollpos = window.scrollY;

    if(scrollpos > 10){
        addClassOnScroll();
    }
    else if (scrollpos < 10) {
        removeClassOnScroll();
    }
});

//Smooth scrolling

$('.main-nav a').on('click', function(e) {
  // e.preventDefault()
  
    $('html, body').animate(
      {
        scrollTop: $($(this).attr('href')).offset().top -50,
      },
      500,
      'linear'
    )
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) $('.scrollup').fadeIn();
    else $('.scrollup').fadeOut();
}

);