/* 
	@author Stas Plov email: SaviouR.S@mail.ru
*/
export default class UserBoard {
	board: HTMLElement|null = null;
	boardTabList: Array<HTMLElement> = [];
	boardMenuList: Array<HTMLElement> = [];
	boardId: string = 'user-board';
	boardTabAttr: string = 'data-board-tab-id';
	boardMenuAttr: string = 'data-board-menu-id';
	curentActiveBoard: string|null = null;

    constructor() {
        this.initBoard();
    }

    initBoard() {
		this.board = document.querySelector(`#${this.boardId}`) as HTMLElement;

		if(this.board === null) {
			return;
		}

		this.boardTabList = Array.from(this.board.querySelectorAll(`[${this.boardTabAttr}]`));

		if(!this.boardTabList.length) {
			throw new Error("user board tab not found");
		}

		this.boardMenuList = Array.from(this.board.querySelectorAll(`[${this.boardMenuAttr}]`));

		if(!this.boardMenuList) {
			throw new Error("user board menus tab not found");
		}

		this.changeBoard();
		this.initBoardSee();
    }

	initBoardSee() {
		const firstBoardActiveId = this.board?.getAttribute('data-first-board-active') ?? null;
		
		if(firstBoardActiveId === null) {
			throw new Error("Incorrect first board active id");
		}

		this.boardTabList.forEach((board) => {
			const boardId = board.getAttribute(this.boardTabAttr) ?? null;
			
			if(boardId === null) {
				throw new Error("Empty board tab id");
			}

			if(boardId === firstBoardActiveId) {
				this.curentActiveBoard = firstBoardActiveId;
				return;
			}

			board.classList.add('hidde');
		});
	}

	changeBoard() {
		this.boardMenuList.forEach((boardMenuItem) => {
			boardMenuItem.addEventListener("click", () => this.clickCallback(boardMenuItem));
			boardMenuItem.addEventListener("touchend", () => this.clickCallback(boardMenuItem));
		});
	}

	clickCallback(boardMenuItem: HTMLElement) {
		const selectBoardNum = boardMenuItem.getAttribute(this.boardMenuAttr);
		
		if(selectBoardNum === null) {
			throw new Error("Incorrect menu item board id");
		}

		const selectBoard = this.boardTabList.find(i => i.getAttribute(this.boardTabAttr) === selectBoardNum) ?? null;

		if(selectBoard === null) {
			throw new Error("Not found board for this board id");
		}

		if(selectBoard.getAttribute(this.boardTabAttr) == this.curentActiveBoard) {
			return;
		}
		

		this.boardTabList.forEach((board) => {
			board.classList.toggle('hidde');
		});
		this.curentActiveBoard = selectBoardNum;
	}
}