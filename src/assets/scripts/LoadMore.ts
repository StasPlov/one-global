/* 
	@author Stas Plov email: SaviouR.S@mail.ru
*/
import axios from "axios";

export default class LoadMore {
	url: string = '';
	loadMore: HTMLElement | null = null;
	loadMoreList: HTMLElement | null = null;
	isSendingForm: boolean = false;
	page: number = 1;

	constructor() {
		this.init();
	}

	init() {
		this.loadMore = document.getElementById('loadMore');
		this.loadMoreList = document.getElementById('loadMoreList');

		if (this.loadMore !== null) {
			const loadMoreType = this.loadMore?.dataset.loadType; // media
			const postId = this.loadMore?.dataset.postId ?? ''; // media

			this.loadMore.addEventListener('click', async (event) => {
				event.preventDefault();
				if (this.isSendingForm) {
					return;
				}

				const url = this.loadMore?.getAttribute('data-endpoint');

				if(url) {
					this.isSendingForm = true;
					this.page++;

					const result: Array<any> = await this.send(`${url}?action=load_more`, loadMoreType, postId, this.page);
					this.isSendingForm = false;
					
					console.log(result);

					/* 
						Load more доделать тут
					*/
				}
			});
		}
	}

	async send(url: string, data: any, post_id: any, page: any = 1) {
		return (await axios.post(url, {
			'post_type': data,
			'post_id': post_id,
			'page': page
		})).data;
	}
}