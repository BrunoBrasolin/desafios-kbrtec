feather.replace();

import { SHOW_INDEX_DELAY, SHOW_INDEX_TRANSITION, USERNAME } from './constants.js';

window.addEventListener('load', () => {
	setTimeout(() => showHome(), 0);
});

function showHome() {
	const splashScreen = document.querySelector('.splash-screen');
	const homeScreen = document.querySelector('.home-screen');
	document.querySelector('.app_username').innerHTML = USERNAME;

	splashScreen.style.opacity = '0';
	homeScreen.style.transition = `transform ${SHOW_INDEX_TRANSITION}ms`;
	homeScreen.style.transform = 'translateX(0)';

	setTimeout(() => splashScreen.remove(), SHOW_INDEX_DELAY);
}

document.querySelector('.header__icon, .header__title-row').addEventListener('click', function () {
	const dropdownIcon = document.querySelector('.header__icon');
	const dropdown = document.querySelector('.header__dropdown');

	if (dropdownIcon.classList.contains('header__icon--active')) {
		dropdownIcon.classList.remove('header__icon--active');
		dropdown.style.opacity = 0;
		dropdown.style.maxHeight = `0`;
	} else {
		dropdownIcon.classList.add('header__icon--active');
		dropdown.style.opacity = 1;
		dropdown.style.maxHeight = `${dropdown.scrollHeight}px`;
	}
});
