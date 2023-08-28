export default class MainMenu {
	menuIsOpen: boolean = false;

    constructor() {
        this.initClick();
    }

    initClick() {
        this.closeMenu('main-menu');
        document.addEventListener("click", (event) => {
            const element = event.target as HTMLElement;

            if(element.id === 'main-menu-button') {
				this.changeSelectMenu('main-menu');
            }

            if(element.id === 'main-menu-button-close') {
                this.closeMenu('main-menu');
            }

			if(element.id === 'main-menu-button-close-mobile') {
				this.closeMenu('main-menu');
			}

            if(element.id !== 'main-menu' && element.id !== 'main-menu-button') {
                this.closeMenu('main-menu');
            }
        });
	}

    openMenu(id: string): void {
        const menu = document.getElementById(id);
		
		const closeMobButton = document.getElementById("main-menu-button-close-mobile");
		const mainMenuButton = document.getElementById('main-menu-button');
    
        if(menu === null) {
            return;
        }
		
    
        if(menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
			
			if(closeMobButton !== null && mainMenuButton !== null) {
				if (window.innerWidth < 770) {
					mainMenuButton.classList.add('hidden');
					closeMobButton.classList.remove('hidden'); // Скрываем элемент на маленьких экранах
				}
			}
            return;
        }
    }
    
    closeMenu(id: string): void {
        const menu = document.getElementById(id);

		const closeMobButton = document.getElementById("main-menu-button-close-mobile");
		const mainMenuButton = document.getElementById('main-menu-button');
    
        if(menu === null) {
            throw new Error(`menu not found for id: ${id}`);
        }
    
        if(!menu.classList.contains('hidden')) {
            menu.classList.add('hidden');

			if(closeMobButton !== null && mainMenuButton !== null) {
				if (window.innerWidth < 770) {

					mainMenuButton.classList.remove('hidden');
					closeMobButton.classList.add('hidden'); // Скрываем элемент на маленьких экранах
				}
			}
            return;
        }
    }
    
    changeSelectMenu(id: string): void {
        const menu = document.getElementById(id);
    
        if(menu === null) {
            throw new Error(`menu not found for id: ${id}`);
        }
    
        if(menu.classList.contains('hidden')) {
            this.openMenu(id);
			this.menuIsOpen = true;
            return;
        }
		
		this.menuIsOpen = false;
        this.closeMenu(id);
    }
}