import MainMenu from "./MainMenu";
import UserBoard from "./UserBoard";
import Send from "./Send";
import CareersFilter from "./CareersFilter";
import BlogSearch from "./BlogSearch";
import LoadMore from "./LoadMore";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

addEventListener("DOMContentLoaded", () => {
	const mainMenu = new MainMenu();
	const userBoard = new UserBoard();
	const send = new Send();
	const careersFilter = new CareersFilter();
	const blogSearch = new BlogSearch();
	const loadMore = new LoadMore();

	const animTarget = document.getElementById("anim-element");

	if(animTarget === null || animTarget === undefined) {
		return;
	}

	const triggerElement = document.getElementById("anim-trigger");

	gsap.registerPlugin(ScrollTrigger);

	gsap.to(animTarget, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "top 50%", // Анимация начнется, когда верхняя граница элемента будет на верху окна
			end: "center center", // Анимация закончится, когда центр элемента будет на центре окна
			scrub: true, // Плавный скроллинг
			markers: true
		},
		x: "-24vw", // Сдвиг блока на 50% высоты окна
		y: "-50%", // Сдвиг блока на 50% высоты окна
		scale: 2, // Увеличение блока в 2 раза
		color: 'black'
	});

	/* gsap.to(animTarget, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "end 50%", // Начало анимации, когда triggerElement находится в центре окна
			scrub: true,
		},
		y: "50%", // Сдвиг элемента на 50% ширины окна
	}); */
});