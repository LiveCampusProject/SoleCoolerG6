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
  currentPage();
  ourTechnoPage();
  productGallery();
  productCover();
  openMenu();
  scrollMenu();
  comments();
  animateHero();
});


/**
 * Product Page
 */
const productGallery = () => {
  if (document.querySelector('#product')) {
    const cover = document.querySelector('#product .cover img');
    let imgs = document.querySelectorAll('#product .gallery img');

    imgs.forEach((img) => {
      img.addEventListener('click', () => {
        console.log('OK');
        cover.src = img.src;
      });
    });
  }
}

const productCover = () => {
  if (document.querySelector('body#product')) {
    let i = 1;
    const cover = document.querySelector('#product .cover img');
    let imgs = document.querySelectorAll('#product .gallery img');

    cover.addEventListener('click', () => {
      if (imgs.length > i + 1) {
        cover.src = imgs[i].src;
        i++;
      } else {
        cover.src = imgs[1].src;
        i = 0;
      }
    });
  }
}



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

  if (window.scrollY <= 50) {
    nav.classList.remove('menu-bg');
  }

  window.addEventListener('scroll', () => {

    if (window.scrollY > 50) {
      nav.classList.add('menu-bg');
      nav.style.top = '0';
    } else if (window.scrollY < 50) {
      nav.classList.remove('menu-bg');
      nav.style.top = top + 'px';
    }
  });
}

/**
 * Brand Slider
 */
$(document).ready(function () {
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


const comments = () => {
  const swiper = new Swiper('.swiper-container.swiper-testimonial', {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next-test',
      prevEl: '.swiper-button-prev-test',
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 20
      }
    },
  });
}

const animateHero = () => {
  const header = document.querySelector('#header');
  const hero = document.querySelector('#hero');
  const ct = document.querySelector('.corner-top');
  const cb = document.querySelector('.corner-bottom');
  const bgt = document.querySelector('#bg-text');

  const tl = new TimelineMax();

  tl.fromTo(hero, 1, { height: "0vh" }, { height: '100vh', minHeight: '750px', ease: Power2.easeInOut })
    .fromTo(header, 1, { opacity: "0" }, { opacity: '1', ease: Power2.easeInOut })
    .fromTo(ct, 2, { top: "-100%" }, { top: '0%', ease: Power2.easeInOut }, "-=1")
    .fromTo(cb, 2, { bottom: "-100%" }, { bottom: '0%', ease: Power2.easeInOut }, "-=2")
    .fromTo(bgt, 1.2, { opacity: "0" }, { opacity: '0.1', ease: Power2.easeInOut });
}




const ourTechnoPage = () => {
  if (document.querySelector('#techno')) {
    const techno = document.querySelectorAll('#techno .body > div');
    const active = document.querySelector('#techno #active');
    const move = 65;

    window.addEventListener('scroll', () => {
      techno.forEach((section, index) => {

        if (section.getBoundingClientRect().top <= 150 || section.getBoundingClientRect().bottom <= window.innerHeight) {
          console.log('Element is partially visible in screen');
          let moved = 'translateY(' + (index) * move + 'px)';
          active.style.transform = moved;
        }

      });
    });
  }
}



const currentPage = () => {
  document.querySelectorAll('#main-nav ul li a').forEach(link => {
    if (link.href === window.location.href) {
      link.setAttribute('aria-current', 'page');
    }
  });
}