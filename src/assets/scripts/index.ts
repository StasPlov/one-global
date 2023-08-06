import MainMenu from "./MainMenu";
import UserBoard from "./UserBoard";
/* import Send from "./Send"; */

addEventListener("DOMContentLoaded", () => {

	const mainMenu = new MainMenu();
	const userBoard = new UserBoard();
	/* const send = new Send(); */

	window.addEventListener('scroll', () => {
		let { scrollY } = window;
		document.body.style.setProperty('--scroll', (scrollY / (document.body.offsetHeight - window.innerHeight)).toString());
	}, false);
});