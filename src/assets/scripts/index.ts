import MainMenu from "./MainMenu";
import UserBoard from "./UserBoard";
import Send from "./Send";
import CareersFilter from "./CareersFilter";
import BlogSearch from "./BlogSearch";
import LoadMore from "./LoadMore";

addEventListener("DOMContentLoaded", () => {

	const mainMenu = new MainMenu();
	const userBoard = new UserBoard();
	const send = new Send();
	const careersFilter = new CareersFilter();
	const blogSearch = new BlogSearch();
	const loadMore = new LoadMore();

	window.addEventListener('scroll', () => {
		let { scrollY } = window;
		document.body.style.setProperty('--scroll', (scrollY / (document.body.offsetHeight - window.innerHeight)).toString());
	}, false);
});