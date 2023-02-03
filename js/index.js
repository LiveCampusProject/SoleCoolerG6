import Translator from "./translator.js";

var translator = new Translator({
  persist: false,
  languages: ["de", "en", "es", "fr"],
  defaultLanguage: "en",
  detectLanguage: true,
  filesLocation: "./i18n"
});

translator.load();

// document.querySelector("form").addEventListener("click", function(evt) {
//   if (evt.target.tagName === "INPUT") {
//     translator.load(evt.target.value);
//   }
// });

document.querySelector("#languages").addEventListener("change", (evt) => {
  translator.load(evt.target.value);
});









document.addEventListener('DOMContentLoaded', () => {
  openMenu();

  scrollMenu();

  animateHero();


});



/**
 * Toggle Menu
 */
const openMenu = () => {
  const nav = document.querySelector('#main-nav');

  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
      nav.classList.remove('toggle-menu');
    }
  });

  document.querySelector('#mobile-menu-toggle-open').addEventListener('click', () => {
    nav.classList.toggle('toggle-menu');
  });
  document.querySelector('#mobile-menu-toggle-close').addEventListener('click', () => {
    nav.classList.toggle('toggle-menu');
  });
}


/**
 * Scrolling Menu
 */
const scrollMenu = () => {
  const nav = document.querySelector('#header');
  const top = nav.offsetTop;

  if (window.scrollY <= 100) {
    nav.classList.remove('menu-bg');
  }

  window.addEventListener('scroll', () => {

    if (window.scrollY > 100) {
      nav.classList.add('menu-bg');
      nav.style.top = '0';
    } else if (window.scrollY < 100) {
      nav.classList.remove('menu-bg');
      nav.style.top = top + 'px';
    }
  });
}

/**
 * Brand Slider
 */
$(document).ready(function(){
  $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 4
          }
      }, {
          breakpoint: 520,
          settings: {
              slidesToShow: 3
          }
      }]
  });
});


const animateHero = () => {
  const header = document.querySelector('#header');
  const hero = document.querySelector('#hero');
  const ct = document.querySelector('.corner-top');
  const cb = document.querySelector('.corner-bottom');
  const bgt = document.querySelector('#bg-text');

  const tl = new TimelineMax();

  tl.fromTo(hero, 1, {height: "0vh"}, {height: '100vh', minHeight: '750px', ease: Power2.easeInOut})
  .fromTo(header, 1, {opacity: "0"}, {opacity: '1', ease: Power2.easeInOut})
  .fromTo(ct, 4, {top: "-100%"}, {top: '0%', ease: Power2.easeInOut}, "-=1")
  .fromTo(cb, 4, {bottom: "-100%"}, {bottom: '0%', ease: Power2.easeInOut}, "-=4")
  .fromTo(bgt, 1.2, {opacity: "0"}, {opacity: '0.1', ease: Power2.easeInOut});
}