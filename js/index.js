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
});


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