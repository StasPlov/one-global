import MainMenu from "./MainMenu";
import UserBoard from "./UserBoard";
import Send from "./Send";

addEventListener("DOMContentLoaded", () => {

	/* window.addEventListener('scroll', () => {
        let { scrollY } = window;
        const elList = document.querySelectorAll('#paralax') as NodeListOf<HTMLElement>;
        
        elList.forEach(element => {
            if(element.style.backgroundPositionY === '') {
                element.style.backgroundPositionY = '0px';
            }
    
            let posY = parseFloat(element.style.backgroundPositionY.replace('px', ''));
    
            element.style.backgroundPositionY = ((posY + scrollY) * -0.2) + 'px';
        });
    });
    
    window.addEventListener('scroll', () => {
        const elements = document.querySelectorAll('#view-anim');
        elements.forEach(element => {
            observer.observe(element);
        });
    });
    
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(!entry.target.hasAttribute('data-animation')) {
                return;
            }
    
            if(entry.target.hasAttribute('data-delay')) {
                (entry.target as HTMLElement).style.animationDelay = entry.target.getAttribute('data-delay') as never;
            }
    
            if(entry.target.hasAttribute('data-duration')) {
                (entry.target as HTMLElement).style.animationDuration = entry.target.getAttribute('data-duration') as never;
            }
    
            if (entry.isIntersecting) { // if element in to view
                entry.target.classList.add(entry.target.getAttribute('data-animation') as never);
                return;
            }
        
            entry.target.classList.remove(entry.target.getAttribute('data-animation') as never);
        });
    }); */
	
    const mainMenu = new MainMenu();
	const userBoard = new UserBoard();
	const send = new Send();

    window.addEventListener('scroll', () => {
        let { scrollY } = window;
        document.body.style.setProperty('--scroll', (scrollY / (document.body.offsetHeight - window.innerHeight)).toString());
    }, false);
});
