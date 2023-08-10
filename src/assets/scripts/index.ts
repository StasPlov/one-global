import MainMenu from "./MainMenu";
import UserBoard from "./UserBoard";
import Send from "./Send";
import CareersFilter from "./CareersFilter";
import BlogSearch from "./BlogSearch";
import LoadMore from "./LoadMore";
import gasp from 'gsap';

addEventListener("DOMContentLoaded", () => {

	const mainMenu = new MainMenu();
	const userBoard = new UserBoard();
	const send = new Send();
	const careersFilter = new CareersFilter();
	const blogSearch = new BlogSearch();
	const loadMore = new LoadMore();

	/* window.addEventListener('scroll', () => {
		let { scrollY } = window;
		document.body.style.setProperty('--scroll', (scrollY / (document.body.offsetHeight - window.innerHeight)).toString());
	}, false); */


	// Получите ссылку на контейнер
	const textContainer = document.getElementById("text-container");
	const text = textContainer.firstElementChild;

	// Используйте функцию ScrollTrigger
	gsap.registerPlugin(ScrollTrigger);

	// Создайте анимацию с помощью ScrollTrigger
	gsap.to(text, {
		scrollTrigger: {
			trigger: textContainer,
			start: "top center", // Начало анимации при достижении верхней границы контейнера
			end: "bottom center", // Конец анимации при достижении нижней границы контейнера
			scrub: true, // Плавный скроллинг
		},
		y: 100, // Сдвиг текста вниз на 100px
		x: -100, // Сдвиг текста влево на 100px
		scale: 1.5, // Увеличение текста в 1.5 раза
	});
});