import { exitApp, showHome, toggleDropdown } from './functions.js';

feather.replace();

window.addEventListener('load', () => {
	setTimeout(() => showHome(), 0);
});

document.querySelectorAll('.header__icon, .header__title-row').forEach(selector => selector.addEventListener('click', () => toggleDropdown()));

document.querySelector('.header__dropdown__exit-link').addEventListener('click', event => {
	event.preventDefault();
	exitApp();
});
