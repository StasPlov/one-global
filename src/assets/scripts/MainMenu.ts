export default class MainMenu {
    constructor() {
       this.initClick();
    }

    initClick() {
        document.addEventListener("click", (event) => {
            const element = event.target as HTMLElement;

            if(element.id === 'main-menu-button') {
                this.changeSelectMenu('main-menu');
            }

            if(element.id === 'main-menu-button-close') {
                this.closeMenu('main-menu');
            }

            if(element.id !== 'main-menu' && element.id !== 'main-menu-button') {
                this.closeMenu('main-menu');
            }
        });
    }

    openMenu(id: string): void {
        const menu = document.getElementById(id);
    
        if(menu === null) {
            return;
        }
    
        if(menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            return;
        }
    }
    
    closeMenu(id: string): void {
        const menu = document.getElementById(id);
    
        if(menu === null) {
            throw new Error(`menu not found for id: ${id}`);
        }
    
        if(!menu.classList.contains('hidden')) {
            menu.classList.add('hidden');
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
            return;
        }
    
        this.closeMenu(id);
    }
}