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
	const animTargetTwo = document.getElementById("anim-element-two");
	const animTargetMob = document.getElementById("anim-elemen-mob");

	const html = document.querySelector('html');

	if(html === null) {
		return;
	}

	const htmlDir = html.getAttribute('dir');
	const isHtmlDirRtl = htmlDir ? htmlDir == 'rtl' : false;
	let textDir = (isHtmlDirRtl) ? "24vw" : "-24vw";
	let bloomDir = (isHtmlDirRtl) ? "50%" : "-50%";


	if(animTarget === null || animTarget === undefined || animTargetMob === null) {
		return;
	}

	const triggerElement = document.getElementById("anim-trigger");

	gsap.registerPlugin(ScrollTrigger);

	// text
	gsap.to(animTarget, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "top 50%", // Анимация начнется, когда верхняя граница элемента будет на верху окна
			end: "bottom bottom", // Анимация закончится, когда центр элемента будет на центре 1окна
			scrub: 1, // Плавный скроллинг
		},
		ease: "power2",
		x: textDir, // Сдвиг блока на 50% высоты окна
		y: "-50%", // Сдвиг блока на 50% высоты окна
		scale: 2, // Увеличение блока в 2 раза
	});
	gsap.to(animTarget, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "bottom bottom", // Анимация начнется, когда верхняя граница элемента будет на верху окна
			end: "bottom bottom", // Анимация закончится, когда центр элемента будет на центре окна
			scrub: true, // Плавный скроллинг
		},
		top: '240vh',
		position: 'absolute',
	});

	// text-mixed
	gsap.to(animTarget, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "top 90%", // Анимация начнется, когда верхняя граница элемента будет на верху окна
			end: "bottom bottom", // Анимация закончится, когда центр элемента будет на центре окна
			scrub: 1, // Плавный скроллинг
		},
		'mix-blend-mode': 'difference'
	});

	// text mobile
	gsap.to(animTargetMob, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "top 50%", // Анимация начнется, когда верхняя граница элемента будет на верху окна
			end: "bottom bottom", // Анимация закончится, когда центр элемента будет на центре 1окна
			scrub: 1, // Плавный скроллинг
		},
		ease: "power2",
		y: "-50%", // Сдвиг блока на 50% высоты окна
		scale: 2, // Увеличение блока в 2 раза
	}); 
	gsap.to(animTargetMob, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "bottom bottom", // Анимация начнется, когда верхняя граница элемента будет на верху окна
			end: "bottom bottom", // Анимация закончится, когда центр элемента будет на центре окна
			scrub: true, // Плавный скроллинг
		},
		top: '240vh',
		position: 'absolute',
	});


	// bloom
	gsap.to(animTargetTwo, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "100vh", // Анимация начнется, когда верхняя граница элемента будет на верху окна
			end: "bottom bottom", // Анимация закончится, когда центр элемента будет на центре 1окна
			scrub: 1, // Плавный скроллинг
		},
		ease: "power2",
		y: bloomDir, // Сдвиг блока на 50% высоты окна
		scale: 3, // Увеличение блока в 3 раза
		position: 'fixed'
	});
	gsap.to(animTargetTwo, {
		scrollTrigger: {
			trigger: triggerElement,
			start: "bottom bottom", // Анимация начнется, когда верхняя граница элемента будет на верху окна
			end: "bottom bottom", // Анимация закончится, когда центр элемента будет на центре окна
			scrub: true, // Плавный скроллинг
		},
		top: '240vh',
		position: 'absolute',
	});
});