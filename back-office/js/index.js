// import Translator from "./translator.js";

// var translator = new Translator({
//   persist: false,
//   languages: ["de", "en", "es", "fr"],
//   defaultLanguage: "en",
//   detectLanguage: true,
//   filesLocation: "./i18n"
// });

// translator.load();

// window.onload = load;

/* Récupérer le lien actuel */
function getCurrentURL () {
	return window.location.href
}

let url = getCurrentURL();

const sidebar = document.querySelector('.sidebar');
const navItems = document.querySelectorAll('nav .nav-item');
const toggle = document.querySelector('.sidebar .toggle');


toggle.addEventListener('click', () => {

	if (sidebar.className === 'sidebar')
		sidebar.classList.add('open');
	else{
        sidebar.classList.remove('open');
    }
		
});

navItems.forEach(navItem => {
	if (url.includes('back-office')){
		if(url.includes(navItem.id)){
			navItem.classList.add('active');
		}
	}
	navItem.addEventListener('click', () => {

		navItems.forEach(navItem => {
			navItem.classList.remove('active');
		});

		navItem.classList.add('active');

	});


});
